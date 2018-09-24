<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tb_hlhp}}".
 *
 * @property int $id
 * @property int $id_hsp
 * @property string $skpd
 * @property int $no_lhp
 * @property string $tahun
 * @property double $total_anggaran
 * @property double $total_relasi
 * @property double $total_pemeriksaan
 * @property string $create_date
 * @property string $update_date
 * @property int $create_by
 * @property int $update_by
 */
class Hlhp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tb_hlhp}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_hsp', 'no_lhp', 'create_by', 'update_by'], 'integer'],
            [['tahun', 'create_date', 'update_date'], 'safe'],
            [['total_anggaran', 'total_relasi', 'total_pemeriksaan'], 'number'],
            [['skpd'], 'string', 'max' => 255],
            [['skpd'], 'unique'],
            [['no_lhp'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_hsp' => 'Id Hsp',
            'skpd' => 'Skpd',
            'no_lhp' => 'No Lhp',
            'tahun' => 'Tahun',
            'total_anggaran' => 'Total Anggaran',
            'total_relasi' => 'Total Relasi',
            'total_pemeriksaan' => 'Total Pemeriksaan',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
            'create_by' => 'Create By',
            'update_by' => 'Update By',
        ];
    }
}
