<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
namespace backend\models;

use Yii;

/**
 * This is the model class for table "wcup_country".
 *
 * @property string $国家
 * @property string $编号
 */
class WcupCountry extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wcup_country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['国家', '编号'], 'required'],
            [['国家', '编号'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '国家' => '国家',
            '编号' => '编号',
        ];
    }
}
