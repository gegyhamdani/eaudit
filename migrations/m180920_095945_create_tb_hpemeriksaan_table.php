<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tb_hpemeriksaan`.
 */
class m180920_095945_create_tb_hpemeriksaan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tb_hpemeriksaan', [
            'id' => $this->primaryKey(),
            'id_hlhp' => $this->integer(),
            'no_pemeriksaan' => $this->integer()->unique(),
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
        $this->dropTable('tb_hpemeriksaan');
    }
}
