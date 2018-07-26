<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
namespace backend\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "wcup_admin".
 *
 * @property integer $admin_id
 * @property string $admin_password
 * @property string $admin_name
 * @property string $auth_key
 * @property string $admin_email
 */
class WcupAdmin extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wcup_admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_id', 'admin_password', 'admin_name', 'auth_key', 'admin_email'], 'required'],
            [['admin_id'], 'integer'],
            [['admin_password', 'auth_key'], 'string', 'max' => 255],
            [['admin_name'], 'string', 'max' => 5],
            [['admin_email'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'admin_id' => 'Admin ID',
            'admin_password' => 'Admin Password',
            'admin_name' => 'Admin Name',
            //'auth_key' => 'Auth Key',
            'admin_email' => 'Admin Email',
        ];
    }
   public function setPassword($password)
{
    $this->admin_password = Yii::$app->security->generatePasswordHash($password);
}


/**
 * 生成 "remember me" 认证key
 */
public function generateAuthKey()
{
    $this->auth_key = Yii::$app->security->generateRandomString();
}
public static function findByUsername($admin_name)
{
    return static::findOne(['admin_id' => $admin_name]);
}
/**
 * 验证密码的准确性
 *
 * @param string $password password to validate
 * @return boolean if password provided is valid for current user
 */
public function validatePassword($admin_password)
{
    return Yii::$app->security->validatePassword($admin_password, $this->admin_password);
}
 public static function findIdentity($admin_id)
    {
        return static::findOne(['admin_id' => $admin_id]);
    }

    /**
     * @inheritdoc
     * 根据access_token获取用户，我们暂时先不实现，我们在文章 http://www.manks.top/yii2-restful-api.html 有过实现，如果你感兴趣的话可以先看看
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * @inheritdoc
     * 用以标识 Yii::$app->user->id 的返回值
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     * 获取auth_key
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     * 验证auth_key
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
}
