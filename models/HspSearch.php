<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Hsp;

/**
 * HspSearch represents the model behind the search form of `app\models\Hsp`.
 */
class HspSearch extends Hsp
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_team', 'create_by', 'update_by'], 'integer'],
            [['no_sp', 'periode_awal', 'periode_akhir', 'pmkb', 'lhp', 'tindak_lanjut', 'create_date', 'update_date'], 'safe'],
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
        $query = Hsp::find();

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
            'id' => $this->id,
            'id_team' => $this->id_team,
            'periode_awal' => $this->periode_awal,
            'periode_akhir' => $this->periode_akhir,
            'create_date' => $this->create_date,
            'update_date' => $this->update_date,
            'create_by' => $this->create_by,
            'update_by' => $this->update_by,
        ]);

        $query->andFilterWhere(['like', 'no_sp', $this->no_sp])
            ->andFilterWhere(['like', 'pmkb', $this->pmkb])
            ->andFilterWhere(['like', 'lhp', $this->lhp])
            ->andFilterWhere(['like', 'tindak_lanjut', $this->tindak_lanjut]);

        return $dataProvider;
    }
}
