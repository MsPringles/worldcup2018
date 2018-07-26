<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180721
    
*/
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property WcupComment[] $wcupComments
 */
class User extends \yii\db\ActiveRecord
{
    public $rememberMe = true;
    public $repass;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
            ['repass', 'required', 'message' => '确认密码不能为空', 'on' => ['changepass']],
            ['repass', 'compare', 'compareAttribute' => 'adminpass', 'message' => '两次密码输入不一致', 'on' => ['changepass']],
        ];
    }

    /**
     * @inheritdoc
     */


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWcupComments()
    {
        return $this->hasMany(WcupComment::className(), ['comment_userid' => 'id']);
    }


    //邮箱验证
    public function validateEmail()
    {   //如果验证没有错误
        if (!$this->hasErrors()) {
            $data = self::find()->where('adminuser = :user and adminemail = :email', [':user' => $this->adminuser, ':email' => $this->adminemail])->one();
            if (is_null($data)) {
                //定义错误信息
                $this->addError("adminemail", "管理员电子邮箱不匹配");        
            }
        }
    }


    //发送邮件找回密码
    public function seekPass($data)
    {   //场景属性
        $this->scenario = "seekpass";

        //验证
        if ($this->load($data) && $this->validate()) {
            //做点有意义的事

            //时间
            $time = time();
            //签名函数
            $token = $this->createToken($data['User']['user'], $time);

            //邮件内容
            //seekpass 邮箱模板 ，模板的位置是 mail/seekpass.php
            $mailer = Yii::$app->mailer->compose('seekpass', ['User' => $data['User']['user'], 'time' => $time, 'token' => $token]);
            $mailer->setFrom("1833016846@qq.com");      //发件人
            $mailer->setTo($data['User']['useremail']);       //收件人
            $mailer->setSubject("世界杯-找回密码");    //邮件标题
            if ($mailer->send()){
                return true;
            }
        }
        return false;

    }

    public function attributeLabels()
    {
        return [
                'id' => 'ID',
                'username' => '用户名',
                'auth_key' => 'Auth Key',
                'password_hash' => 'Password Hash',
                'password_reset_token' => 'Password Reset Token',
                'email' => 'Email',
                'status' => '状态',
                'created_at' => '创建时间',
                'updated_at' => '修改时间',
        ];
    }

        // 签名
    public function createToken($adminuser, $time)
    {
        return md5(md5($user).base64_encode(Yii::$app->request->userIP).md5($time));
    }

    //修改密码
    public function changePass($data) 
    {   //场景属性
        $this->scenario = "changepass";
        if ($this->load($data) && $this->validate()){
            return (bool)$this->updateAll(['userpass' => md5($this->userpass)], 'user = :user', [':user' => $this->user]);
        }
        return false;
    }
}
