<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tb_hsp}}".
 *
 * @property int $id
 * @property int $id_team
 * @property string $no_sp
 * @property string $periode_awal
 * @property string $periode_akhir
 * @property string $pmkb
 * @property string $lhp
 * @property string $tindak_lanjut
 * @property string $create_date
 * @property string $update_date
 * @property int $create_by
 * @property int $update_by
 */
class Hsp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tb_hsp}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_team', 'create_by', 'update_by'], 'integer'],
            [['periode_awal', 'periode_akhir', 'create_date', 'update_date'], 'safe'],
            [['no_sp', 'pmkb', 'lhp', 'tindak_lanjut'], 'string', 'max' => 255],
            [['no_sp'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_team' => 'Id Team',
            'no_sp' => 'No Sp',
            'periode_awal' => 'Periode Awal',
            'periode_akhir' => 'Periode Akhir',
            'pmkb' => 'Pmkb',
            'lhp' => 'Lhp',
            'tindak_lanjut' => 'Tindak Lanjut',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
            'create_by' => 'Create By',
            'update_by' => 'Update By',
        ];
    }
}
