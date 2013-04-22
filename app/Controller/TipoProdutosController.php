<?php
App::uses('AppController', 'Controller');
/**
 * TipoProdutos Controller
 *
 * @property TipoProduto $TipoProduto
 */
class TipoProdutosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TipoProduto->recursive = 0;
		$this->set('tipoProdutos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TipoProduto->id = $id;
		if (!$this->TipoProduto->exists()) {
			throw new NotFoundException(__('Tipo produto inválido'));
		}
		$this->set('tipoProduto', $this->TipoProduto->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TipoProduto->create();
			if ($this->TipoProduto->save($this->request->data)) {
				$this->Session->setFlash(__('O tipo produto foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O tipo produto não pode ser salvo. Por favor, tente novamente.'));
			}
		}
		$categorias = $this->TipoProduto->Categoria->find('list');
		$this->set(compact('categorias'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->TipoProduto->id = $id;
		if (!$this->TipoProduto->exists()) {
			throw new NotFoundException(__('Tipo produto inválido.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TipoProduto->save($this->request->data)) {
				$this->Session->setFlash(__('O tipo produto foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O tipo produto não pode ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->TipoProduto->read(null, $id);
		}
		$categorias = $this->TipoProduto->Categoria->find('list');
		$this->set(compact('categorias'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->TipoProduto->id = $id;
		if (!$this->TipoProduto->exists()) {
			throw new NotFoundException(__('tipo produto inválido.'));
		}
		if ($this->TipoProduto->delete()) {
			$this->Session->setFlash(__('Tipo produto excluído.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tipo produto não pode ser excluído.'));
		$this->redirect(array('action' => 'index'));
	}
}