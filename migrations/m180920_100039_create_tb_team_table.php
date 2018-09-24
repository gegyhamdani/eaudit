<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tb_team`.
 */
class m180920_100039_create_tb_team_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tb_team', [
            'id' => $this->primaryKey(),
            'nama_team' => $this->string(),
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
        $this->dropTable('tb_team');
    }
}
