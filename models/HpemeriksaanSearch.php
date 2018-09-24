<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Hpemeriksaan;

/**
 * HpemeriksaanSearch represents the model behind the search form of `app\models\Hpemeriksaan`.
 */
class HpemeriksaanSearch extends Hpemeriksaan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_hlhp', 'no_pemeriksaan', 'create_by', 'update_by'], 'integer'],
            [['create_date', 'update_date'], 'safe'],
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
        $query = Hpemeriksaan::find();

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
            'id_hlhp' => $this->id_hlhp,
            'no_pemeriksaan' => $this->no_pemeriksaan,
            'create_date' => $this->create_date,
            'update_date' => $this->update_date,
            'create_by' => $this->create_by,
            'update_by' => $this->update_by,
        ]);

        return $dataProvider;
    }
}
