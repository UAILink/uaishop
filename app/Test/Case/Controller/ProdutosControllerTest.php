<?php
App::uses('ProdutosController', 'Controller');

/**
 * TestProdutosController *
 */
class TestProdutosController extends ProdutosController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * ProdutosController Test Case
 *
 */
class ProdutosControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.produto', 'app.marca', 'app.tipo_produto', 'app.categoria', 'app.caracteristica_produto', 'app.caracteristica', 'app.valor', 'app.tipo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Produtos = 	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Produtos);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}
/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}
/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}
/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}
/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}
}