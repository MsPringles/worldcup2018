<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180724
    
*/
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "wcup_record".
 *
 * @property string $比赛日期
 * @property string $时间
 * @property string $组别
 * @property string $国家1
 * @property string $国家2
 * @property string $比分
 * @property string $比赛地
 * @property string $类型
 */
class WcupRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wcup_record';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['比赛日期', '时间', '组别', '国家1', '国家2', '比分', '比赛地', '类型'], 'required'],
            [['比赛日期', '时间', '组别', '国家1', '国家2', '比分', '比赛地', '类型'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '比赛日期' => '比赛日期',
            '时间' => '时间',
            '组别' => '组别',
            '国家1' => '国家1',
            '国家2' => '国家2',
            '比分' => '比分',
            '比赛地' => '比赛地',
            '类型' => '类型',
        ];
    }
}
