<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tb_team}}".
 *
 * @property int $id
 * @property string $nama_team
 * @property string $create_date
 * @property string $update_date
 * @property int $create_by
 * @property int $update_by
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tb_team}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['create_date', 'update_date'], 'safe'],
            [['create_by', 'update_by'], 'integer'],
            [['nama_team'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_team' => 'Nama Team',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
            'create_by' => 'Create By',
            'update_by' => 'Update By',
        ];
    }
}
