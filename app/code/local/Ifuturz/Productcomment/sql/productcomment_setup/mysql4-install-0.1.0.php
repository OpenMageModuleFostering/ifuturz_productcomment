<?php 
$installer = $this;

$installer->startSetup();


$installer->run("

-- DROP TABLE IF EXISTS {$this->getTable('productcomment')};
CREATE TABLE {$this->getTable('productcomment')} (
  `productcomment_id` int(11) unsigned NOT NULL auto_increment,
	`product_id` int(11)  NULL,
	`customer_id` int(11)  NULL,
	`created_at` datetime NULL,
	`product_comment` text,
  PRIMARY KEY (`productcomment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

");

$installer->endSetup(); 