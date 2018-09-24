<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tb_anggota`.
 */
class m180920_095240_create_tb_anggota_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tb_anggota', [
            'id' => $this->primaryKey(),
            'nik' => $this->string()->unique(),
            'nama' => $this->string(),
            'jabatan' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tb_anggota');
    }
}
