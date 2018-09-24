<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dpemeriksaan;

/**
 * DpemeriksaanSearch represents the model behind the search form of `app\models\Dpemeriksaan`.
 */
class DpemeriksaanSearch extends Dpemeriksaan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_dlhp', 'id_rekomendasi', 'create_by', 'update_by'], 'integer'],
            [['temuan'], 'number'],
            [['keterangan', 'create_date', 'update_date'], 'safe'],
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
        $query = Dpemeriksaan::find();

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
            'id_dlhp' => $this->id_dlhp,
            'id_rekomendasi' => $this->id_rekomendasi,
            'temuan' => $this->temuan,
            'create_date' => $this->create_date,
            'update_date' => $this->update_date,
            'create_by' => $this->create_by,
            'update_by' => $this->update_by,
        ]);

        $query->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
