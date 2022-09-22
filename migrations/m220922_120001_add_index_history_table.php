<?php

use yii\db\Migration;

/**
 * Class m191111_115918_init_sql
 */
class m220922_120001_add_index_history_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = <<<SQL
ALTER TABLE `history`
	ADD INDEX `ix_ts_id` (`ins_ts`, `id`)
SQL;

        $this->execute($sql);
    }

}

