<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tb_dpemeriksaan}}".
 *
 * @property int $id
 * @property int $id_dlhp
 * @property int $id_rekomendasi
 * @property double $temuan
 * @property string $keterangan
 * @property string $create_date
 * @property string $update_date
 * @property int $create_by
 * @property int $update_by
 */
class Dpemeriksaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tb_dpemeriksaan}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_dlhp', 'id_rekomendasi', 'create_by', 'update_by'], 'integer'],
            [['temuan'], 'number'],
            [['create_date', 'update_date'], 'safe'],
            [['keterangan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_dlhp' => 'Id Dlhp',
            'id_rekomendasi' => 'Id Rekomendasi',
            'temuan' => 'Temuan',
            'keterangan' => 'Keterangan',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
            'create_by' => 'Create By',
            'update_by' => 'Update By',
        ];
    }
}
