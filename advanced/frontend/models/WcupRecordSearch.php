<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180724
    
*/
namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\WcupRecord;

/**
 * WcupRecordSearch represents the model behind the search form about `frontend\models\WcupRecord`.
 */
class WcupRecordSearch extends WcupRecord
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['比赛日期', '时间', '组别', '国家1', '国家2', '比分', '比赛地', '类型'], 'safe'],
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
        $query = WcupRecord::find();

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
        $query->andFilterWhere(['like', '比赛日期', $this->比赛日期])
            ->andFilterWhere(['like', '时间', $this->时间])
            ->andFilterWhere(['like', '组别', $this->组别])
            ->andFilterWhere(['like', '国家1', $this->国家1])
            ->andFilterWhere(['like', '国家2', $this->国家2])
            ->andFilterWhere(['like', '比分', $this->比分])
            ->andFilterWhere(['like', '比赛地', $this->比赛地])
            ->andFilterWhere(['like', '类型', $this->类型]);

        return $dataProvider;
    }
}
