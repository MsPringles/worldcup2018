<?php

/**
    * Team:xiaokeai
    * Coding by yuhuanhuan 1611398 huangyasi 1513029,20180721
    
*/

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\WcupComment;

/**
 * WcupCommentSearch represents the model behind the search form about `frontend\models\WcupComment`.
 */
class WcupCommentSearch extends WcupComment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comment_id', 'comment_userid'], 'integer'],
            [['comment_content'], 'safe'],
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
        $query = WcupComment::find();

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
            'comment_id' => $this->comment_id,
            'comment_userid' => $this->comment_userid,
        ]);

        $query->andFilterWhere(['like', 'comment_content', $this->comment_content]);

        return $dataProvider;
    }
}
