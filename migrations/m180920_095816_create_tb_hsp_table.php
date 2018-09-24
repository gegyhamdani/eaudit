<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tb_hsp`.
 */
class m180920_095816_create_tb_hsp_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tb_hsp', [
            'id' => $this->primaryKey(),
            'id_team' => $this->integer(),
            'no_sp' => $this->string()->unique(),
            'periode_awal' => $this->date(),
            'periode_akhir' => $this->date(),
            'pmkb' => $this->string(),
            'lhp' => $this->string(),
            'tindak_lanjut' => $this->string(),
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
        $this->dropTable('tb_hsp');
    }
}
