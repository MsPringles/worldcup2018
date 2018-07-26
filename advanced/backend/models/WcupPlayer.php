<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
namespace backend\models;

use Yii;

/**
 * This is the model class for table "wcup_player".
 *
 * @property string $国家
 * @property string $球员
 * @property integer $场次
 * @property integer $出场时间
 * @property integer $进球
 * @property integer $助攻
 * @property integer $射门
 * @property integer $传球
 * @property integer $传准
 * @property integer $传威胁球
 * @property integer $犯规
 * @property integer $被侵犯
 * @property integer $抢断
 * @property integer $解围
 * @property integer $扑救
 * @property integer $红牌
 * @property integer $黄牌
 */
class WcupPlayer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wcup_player';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['国家', '球员', '场次', '出场时间', '进球', '助攻', '射门', '传球', '传准', '传威胁球', '犯规', '被侵犯', '抢断', '解围', '扑救', '红牌', '黄牌'], 'required'],
            [['场次', '出场时间', '进球', '助攻', '射门', '传球', '传准', '传威胁球', '犯规', '被侵犯', '抢断', '解围', '扑救', '红牌', '黄牌'], 'integer'],
            [['国家', '球员'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '国家' => '国家',
            '球员' => '球员',
            '场次' => '场次',
            '出场时间' => '出场时间',
            '进球' => '进球',
            '助攻' => '助攻',
            '射门' => '射门',
            '传球' => '传球',
            '传准' => '传准',
            '传威胁球' => '传威胁球',
            '犯规' => '犯规',
            '被侵犯' => '被侵犯',
            '抢断' => '抢断',
            '解围' => '解围',
            '扑救' => '扑救',
            '红牌' => '红牌',
            '黄牌' => '黄牌',
        ];
    }
}
