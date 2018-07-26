<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
namespace backend\models;

use Yii;

/**
 * This is the model class for table "wcup_judge".
 *
 * @property string $judge_tag
 * @property string $judge_name
 * @property string $judge_nation
 */
class WcupJudge extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wcup_judge';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judge_tag', 'judge_name', 'judge_nation'], 'required'],
            [['judge_tag'], 'string', 'max' => 11],
            [['judge_name', 'judge_nation'], 'string', 'max' => 30],
            [['judge_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'judge_tag' => 'Judge Tag',
            'judge_name' => 'Judge Name',
            'judge_nation' => 'Judge Nation',
        ];
    }
}
