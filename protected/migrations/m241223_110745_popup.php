<?php

class m241223_110745_popup extends CDbMigration
{
	public function up()
	{
        $this->createTable('tbl_popup', array(
            'id' => 'pk',
            'title' => 'string NOT NULL',
            'content' => 'text',
            'enabled' => 'tinyint DEFAULT 1',
        ));
	}

	public function down()
	{
        $this->dropTable('tbl_popup');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}