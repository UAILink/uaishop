<?php
App::uses('Marca', 'Model');

/**
 * Marca Test Case
 *
 */
class MarcaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.marca', 'app.produto', 'app.classe', 'app.categoria', 'app.caracteristica', 'app.tipo_dado', 'app.valor');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Marca = ClassRegistry::init('Marca');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Marca);

		parent::tearDown();
	}

}