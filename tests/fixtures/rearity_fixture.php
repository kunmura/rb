<?php
/* Rearity Fixture generated on: 2013-05-11 15:07:09 : 1368252429 */
class RearityFixture extends CakeTestFixture {
	var $name = 'Rearity';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 500, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'visible' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 1),
		'creates' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'visible' => 1,
			'creates' => '2013-05-11 15:07:09',
			'modified' => '2013-05-11 15:07:09'
		),
	);
}
?>