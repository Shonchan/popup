<?php

class m241223_120614_popup_views extends CDbMigration
{
	public function up()
	{
        $this->createTable('tbl_popup_views', array(
            'id' => 'pk',
            'popup_id' => 'int NOT NULL',
            'views' => 'int DEFAULT 0',
        ));
        $this->addForeignKey('FK_popup', 'tbl_popup_views', 'popup_id', 'tbl_popup', 'id', 'CASCADE', 'CASCADE');
	}

	public function down()
	{
        $this->dropForeignKey('FK_popup', 'tbl_popup_views');
        $this->dropTable('tbl_popup_views');
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