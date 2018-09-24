<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tb_rekomendasi}}".
 *
 * @property int $id
 * @property int $no_rekomendasi
 * @property string $nama_rekomendasi
 */
class Rekomendasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tb_rekomendasi}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rekomendasi'], 'integer'],
            [['nama_rekomendasi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'no_rekomendasi' => 'No Rekomendasi',
            'nama_rekomendasi' => 'Nama Rekomendasi',
        ];
    }
}
