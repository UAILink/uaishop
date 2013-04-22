<?php
App::uses('TipoProduto', 'Model');

/**
 * TipoProduto Test Case
 *
 */
class TipoProdutoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.tipo_produto', 'app.categoria', 'app.classe', 'app.caracteristica', 'app.tipo_dado', 'app.valor', 'app.produto', 'app.marca', 'app.caracteristica_produto');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoProduto = ClassRegistry::init('TipoProduto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoProduto);

		parent::tearDown();
	}

}