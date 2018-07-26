<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\WcupTop;

/**
 * WcupTopSearch represents the model behind the search form about `backend\models\WcupTop`.
 */
class WcupTopSearch extends WcupTop
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['top_name'], 'safe'],
            [['top_number'], 'integer'],
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
        $query = WcupTop::find();

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
            'top_number' => $this->top_number,
        ]);

        $query->andFilterWhere(['like', 'top_name', $this->top_name]);

        return $dataProvider;
    }
}
