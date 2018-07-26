<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180724
    
*/
namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\WcupPlayer;

/**
 * WcupPlayerSearch represents the model behind the search form about `frontend\models\WcupPlayer`.
 */
class WcupPlayerSearch extends WcupPlayer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['国家', '球员'], 'safe'],
            [['场次', '出场时间', '进球', '助攻', '射门', '传球', '传准', '传威胁球', '犯规', '被侵犯', '抢断', '解围', '扑救', '红牌', '黄牌'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = WcupPlayer::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            '场次' => $this->场次,
            '出场时间' => $this->出场时间,
            '进球' => $this->进球,
            '助攻' => $this->助攻,
            '射门' => $this->射门,
            '传球' => $this->传球,
            '传准' => $this->传准,
            '传威胁球' => $this->传威胁球,
            '犯规' => $this->犯规,
            '被侵犯' => $this->被侵犯,
            '抢断' => $this->抢断,
            '解围' => $this->解围,
            '扑救' => $this->扑救,
            '红牌' => $this->红牌,
            '黄牌' => $this->黄牌,
        ]);

        $query->andFilterWhere(['like', '国家', $this->国家])
            ->andFilterWhere(['like', '球员', $this->球员]);

        return $dataProvider;
    }
}
