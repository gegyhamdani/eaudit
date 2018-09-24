<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tb_dlhp`.
 */
class m180920_095927_create_tb_dlhp_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tb_dlhp', [
            'id' => $this->primaryKey(),
            'id_hlhp' => $this->integer(),
            'nama_item' => $this->string(),
            'total' => $this->double(),
            'create_date' => $this->date(),
            'update_date' => $this->date(),
            'create_by' => $this->integer(),
            'update_by' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tb_dlhp');
    }
}
