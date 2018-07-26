<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
namespace backend\models;

use Yii;

/**
 * This is the model class for table "wcup_champion".
 *
 * @property string $champion_country
 * @property string $champion_times
 * @property string $champion_year
 */
class WcupChampion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wcup_champion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['champion_country', 'champion_times', 'champion_year'], 'required'],
            [['champion_year'], 'string'],
            [['champion_country'], 'string', 'max' => 20],
            [['champion_times'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'champion_country' => 'Champion Country',
            'champion_times' => 'Champion Times',
            'champion_year' => 'Champion Year',
        ];
    }
}
