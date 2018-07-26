<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180725
    
*/
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "wcup_statistics".
 *
 * @property string $statistics_nation
 * @property string $statistics_record
 */
class WcupStatistics extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wcup_statistics';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['statistics_nation', 'statistics_record'], 'required'],
            [['statistics_record'], 'string'],
            [['statistics_nation'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'statistics_nation' => 'Statistics Nation',
            'statistics_record' => 'Statistics Record',
        ];
    }
}
