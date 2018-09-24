<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tb_dsp}}".
 *
 * @property int $id
 * @property int $id_hsp
 * @property int $id_anggota
 * @property string $create_date
 * @property string $update_date
 * @property int $create_by
 * @property int $update_by
 */
class Dsp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tb_dsp}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_hsp', 'id_anggota', 'create_by', 'update_by'], 'integer'],
            [['create_date', 'update_date'], 'safe'],
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
            'id_anggota' => 'Id Anggota',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
            'create_by' => 'Create By',
            'update_by' => 'Update By',
        ];
    }
}
