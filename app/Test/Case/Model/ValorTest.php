<?php
App::uses('Valor', 'Model');

/**
 * Valor Test Case
 *
 */
class ValorTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.valor', 'app.caracteristica', 'app.tipo_dado', 'app.classe', 'app.categoria', 'app.produto', 'app.marca');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Valor = ClassRegistry::init('Valor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Valor);

		parent::tearDown();
	}

}