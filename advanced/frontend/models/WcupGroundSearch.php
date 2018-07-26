<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180721
    
*/
namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\WcupGround;

/**
 * WcupGroundSearch represents the model behind the search form about `frontend\models\WcupGround`.
 */
class WcupGroundSearch extends WcupGround
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ground_address', 'ground_info', 'ground_picture'], 'safe'],
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
        $query = WcupGround::find();

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
        $query->andFilterWhere(['like', 'ground_address', $this->ground_address])
            ->andFilterWhere(['like', 'ground_info', $this->ground_info])
            ->andFilterWhere(['like', 'ground_picture', $this->ground_picture]);

        return $dataProvider;
    }
}
