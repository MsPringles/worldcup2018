<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\WcupChampion;

/**
 * WcupChampionSearch represents the model behind the search form about `backend\models\WcupChampion`.
 */
class WcupChampionSearch extends WcupChampion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['champion_country', 'champion_times', 'champion_year'], 'safe'],
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
        $query = WcupChampion::find();

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
        $query->andFilterWhere(['like', 'champion_country', $this->champion_country])
            ->andFilterWhere(['like', 'champion_times', $this->champion_times])
            ->andFilterWhere(['like', 'champion_year', $this->champion_year]);

        return $dataProvider;
    }
}
