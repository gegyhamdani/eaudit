<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tb_rekomendasi`.
 */
class m180920_095754_create_tb_rekomendasi_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tb_rekomendasi', [
            'id' => $this->primaryKey(),
            'no_rekomendasi' => $this->integer(),
            'nama_rekomendasi' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tb_rekomendasi');
    }
}
