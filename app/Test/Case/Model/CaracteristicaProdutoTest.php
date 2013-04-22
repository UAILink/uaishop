<?php
App::uses('CaracteristicaProduto', 'Model');

/**
 * CaracteristicaProduto Test Case
 *
 */
class CaracteristicaProdutoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.caracteristica_produto', 'app.tipo_produto', 'app.categoria', 'app.classe', 'app.caracteristica', 'app.tipo_dado', 'app.valor', 'app.produto', 'app.marca');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CaracteristicaProduto = ClassRegistry::init('CaracteristicaProduto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CaracteristicaProduto);

		parent::tearDown();
	}

}