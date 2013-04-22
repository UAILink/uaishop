<?php
App::uses('Categoria', 'Model');

/**
 * Categoria Test Case
 *
 */
class CategoriaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.categoria', 'app.classe', 'app.caracteristica', 'app.tipo_dado', 'app.valor', 'app.produto', 'app.marca');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Categoria = ClassRegistry::init('Categoria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Categoria);

		parent::tearDown();
	}

}