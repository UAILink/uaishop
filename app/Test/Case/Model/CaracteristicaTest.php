<?php
App::uses('Caracteristica', 'Model');

/**
 * Caracteristica Test Case
 *
 */
class CaracteristicaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.caracteristica', 'app.tipo_dado', 'app.classe', 'app.categoria', 'app.produto', 'app.marca', 'app.valor');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Caracteristica = ClassRegistry::init('Caracteristica');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Caracteristica);

		parent::tearDown();
	}

}