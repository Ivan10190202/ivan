<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Challenge;

/**
 * ChallengeSearch represents the model behind the search form of `app\models\Challenge`.
 */
class ChallengeSearch extends Challenge
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_challenge', 'id_tema', 'id_chat', 'id_vicrory'], 'integer'],
            [['title', 'description', 'data_create', 'data_close'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Challenge::find();

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
            'id_challenge' => $this->id_challenge,
            'id_tema' => $this->id_tema,
            'id_chat' => $this->id_chat,
            'id_vicrory' => $this->id_vicrory,
            'data_create' => $this->data_create,
            'data_close' => $this->data_close,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
