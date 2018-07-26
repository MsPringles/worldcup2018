<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
namespace backend\models;

use Yii;

/**
 * This is the model class for table "wcup_statistics".
 *
 * @property string $statistics_nation
 * @property string $statistics_record
 *
 * @property WcupTeam $statisticsNation
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
            [['statistics_nation'], 'exist', 'skipOnError' => true, 'targetClass' => WcupTeam::className(), 'targetAttribute' => ['statistics_nation' => 'team_nation']],
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatisticsNation()
    {
        return $this->hasOne(WcupTeam::className(), ['team_nation' => 'statistics_nation']);
    }
}
