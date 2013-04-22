<?php
App::uses('Produto', 'Model');

/**
 * Produto Test Case
 *
 */
class ProdutoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.produto', 'app.classe', 'app.categoria', 'app.caracteristica', 'app.tipo_dado', 'app.valor', 'app.marca');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Produto = ClassRegistry::init('Produto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Produto);

		parent::tearDown();
	}

}