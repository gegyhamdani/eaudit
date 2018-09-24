<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tb_dlhp}}".
 *
 * @property int $id
 * @property int $id_hlhp
 * @property string $nama_item
 * @property double $total
 * @property string $create_date
 * @property string $update_date
 * @property int $create_by
 * @property int $update_by
 */
class Dlhp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tb_dlhp}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_hlhp', 'create_by', 'update_by'], 'integer'],
            [['total'], 'number'],
            [['create_date', 'update_date'], 'safe'],
            [['nama_item'], 'string', 'max' => 255],
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
            'nama_item' => 'Nama Item',
            'total' => 'Total',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
            'create_by' => 'Create By',
            'update_by' => 'Update By',
        ];
    }
}
