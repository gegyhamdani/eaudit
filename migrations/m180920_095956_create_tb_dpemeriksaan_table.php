<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tb_dpemeriksaan`.
 */
class m180920_095956_create_tb_dpemeriksaan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tb_dpemeriksaan', [
            'id' => $this->primaryKey(),
            'id_dlhp' => $this->integer(),
            'id_rekomendasi' => $this->integer(),
            'temuan' => $this->double(),
            'keterangan' => $this->string(),
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
        $this->dropTable('tb_dpemeriksaan');
    }
}
