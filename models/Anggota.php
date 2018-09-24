<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tb_anggota}}".
 *
 * @property int $id
 * @property string $nik
 * @property string $nama
 * @property string $jabatan
 */
class Anggota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tb_anggota}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nik', 'nama', 'jabatan'], 'required'],
            [['nik', 'nama', 'jabatan'], 'string', 'max' => 255],
            [['nik'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nik' => 'Nik',
            'nama' => 'Nama',
            'jabatan' => 'Jabatan',
        ];
    }
}
