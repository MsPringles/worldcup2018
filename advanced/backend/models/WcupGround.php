<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
namespace backend\models;

use Yii;

/**
 * This is the model class for table "wcup_ground".
 *
 * @property string $ground_address
 * @property string $ground_info
 * @property string $ground_picture
 *
 * @property WcupRecord[] $wcupRecords
 */
class WcupGround extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wcup_ground';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ground_address', 'ground_info'], 'required'],
            [['ground_info'], 'string'],
            [['ground_address'], 'string', 'max' => 100],
            [['ground_picture'], 'string', 'max' => 255],
            [['ground_address'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ground_address' => 'Ground Address',
            'ground_info' => 'Ground Info',
            'ground_picture' => 'Ground Picture',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWcupRecords()
    {
        return $this->hasMany(WcupRecord::className(), ['record_ground' => 'ground_address']);
    }
}
