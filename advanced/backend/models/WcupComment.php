<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
namespace backend\models;

use Yii;

/**
 * This is the model class for table "wcup_comment".
 *
 * @property integer $comment_id
 * @property string $comment_content
 * @property integer $comment_userid
 *
 * @property WcupUser $commentUser
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
            [['comment_userid'], 'exist', 'skipOnError' => true, 'targetClass' => WcupUser::className(), 'targetAttribute' => ['comment_userid' => 'user_id']],
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
        return $this->hasOne(WcupUser::className(), ['user_id' => 'comment_userid']);
    }
}
