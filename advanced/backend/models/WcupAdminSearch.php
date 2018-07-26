<?php
/**
*Team: XKAY
*coding by liuying 1613754, wangzhe 1611394
*/
namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\WcupAdmin;

/**
 * WcupAdminSearch represents the model behind the search form about `backend\models\WcupAdmin`.
 */
class WcupAdminSearch extends WcupAdmin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_id'], 'integer'],
            [['admin_password', 'admin_name', 'auth_key', 'admin_email'], 'safe'],
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
        $query = WcupAdmin::find();

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
            'admin_id' => $this->admin_id,
        ]);

        $query->andFilterWhere(['like', 'admin_password', $this->admin_password])
            ->andFilterWhere(['like', 'admin_name', $this->admin_name])
            //->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'admin_email', $this->admin_email]);

        return $dataProvider;
    }
}
