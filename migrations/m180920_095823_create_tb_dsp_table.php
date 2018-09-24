<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tb_dsp`.
 */
class m180920_095823_create_tb_dsp_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tb_dsp', [
            'id' => $this->primaryKey(),
            'id_hsp' => $this->integer(),
            'id_anggota' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tb_dsp');
    }
}
