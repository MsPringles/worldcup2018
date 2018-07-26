<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
namespace backend\models;

use Yii;

/**
 * This is the model class for table "wcup_top".
 *
 * @property string $top_name
 * @property integer $top_number
 */
class WcupTop extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wcup_top';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['top_name', 'top_number'], 'required'],
            [['top_number'], 'integer'],
            [['top_name'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'top_name' => 'Top Name',
            'top_number' => 'Top Number',
        ];
    }
}
