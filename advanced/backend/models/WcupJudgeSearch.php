<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\WcupJudge;

/**
 * WcupJudgeSearch represents the model behind the search form about `backend\models\WcupJudge`.
 */
class WcupJudgeSearch extends WcupJudge
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judge_tag', 'judge_name', 'judge_nation'], 'safe'],
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
        $query = WcupJudge::find();

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
        $query->andFilterWhere(['like', 'judge_tag', $this->judge_tag])
            ->andFilterWhere(['like', 'judge_name', $this->judge_name])
            ->andFilterWhere(['like', 'judge_nation', $this->judge_nation]);

        return $dataProvider;
    }
}
