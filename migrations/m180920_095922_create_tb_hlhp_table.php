<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tb_hlhp`.
 */
class m180920_095922_create_tb_hlhp_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tb_hlhp', [
            'id' => $this->primaryKey(),
            'id_hsp' => $this->integer(),
            'skpd' => $this->string()->unique(),
            'no_lhp' => $this->integer()->unique(),
            'tahun' => $this->date(),
            'total_anggaran' => $this->double(),
            'total_relasi' => $this->double(),    
            'total_pemeriksaan' => $this->double(),    
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
        $this->dropTable('tb_hlhp');
    }
}
