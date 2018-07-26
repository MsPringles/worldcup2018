<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180721
    
*/
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "wcup_ground".
 *
 * @property string $ground_address
 * @property string $ground_info
 * @property string $ground_picture
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
}
