<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tb_hpemeriksaan}}".
 *
 * @property int $id
 * @property int $id_hlhp
 * @property int $no_pemeriksaan
 * @property string $create_date
 * @property string $update_date
 * @property int $create_by
 * @property int $update_by
 */
class Hpemeriksaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tb_hpemeriksaan}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_hlhp', 'no_pemeriksaan', 'create_by', 'update_by'], 'integer'],
            [['create_date', 'update_date'], 'safe'],
            [['no_pemeriksaan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_hlhp' => 'Id Hlhp',
            'no_pemeriksaan' => 'No Pemeriksaan',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
            'create_by' => 'Create By',
            'update_by' => 'Update By',
        ];
    }
}
