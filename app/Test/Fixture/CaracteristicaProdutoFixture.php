?>
<?php
/**
 * CaracteristicaProdutoFixture
 *
 */
class CaracteristicaProdutoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'tipo_produto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'caracteristica_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_caracteristica_produtos_tipo_produtos1_idx' => array('column' => 'tipo_produto_id', 'unique' => 0),
			'fk_caracteristica_produtos_caracteristicas1_idx' => array('column' => 'caracteristica_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'tipo_produto_id' => 1,
			'caracteristica_id' => 1
		),
	);
}