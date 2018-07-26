<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180721
    
*/
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "wcup_comment".
 *
 * @property integer $comment_id
 * @property string $comment_content
 * @property integer $comment_userid
 *
 * @property User $commentUser
 */
class WcupComment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wcup_comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comment_content', 'comment_userid'], 'required'],
            [['comment_userid'], 'integer'],
            [['comment_content'], 'string', 'max' => 30],
            [['comment_userid'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['comment_userid' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'comment_id' => 'Comment ID',
            'comment_content' => 'Comment Content',
            'comment_userid' => 'Comment Userid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommentUser()
    {
        return $this->hasOne(User::className(), ['id' => 'comment_userid']);
    }
}
