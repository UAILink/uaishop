<?php
App::uses('AppController', 'Controller');
/**
 * CaracteristicaProdutos Controller
 *
 * @property CaracteristicaProduto $CaracteristicaProduto
 */
class CaracteristicaProdutosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CaracteristicaProduto->recursive = 0;
		$this->set('caracteristicaProdutos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CaracteristicaProduto->id = $id;
		if (!$this->CaracteristicaProduto->exists()) {
			throw new NotFoundException(__('Caracteristica produto inválido'));
		}
		$this->set('caracteristicaProduto', $this->CaracteristicaProduto->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CaracteristicaProduto->create();
			if ($this->CaracteristicaProduto->save($this->request->data)) {
				$this->Session->setFlash(__('O caracteristica produto foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O caracteristica produto não pode ser salvo. Por favor, tente novamente.'));
			}
		}
		$tipoProdutos = $this->CaracteristicaProduto->TipoProduto->find('list');
		$caracteristicas = $this->CaracteristicaProduto->Caracteristica->find('list');
		$this->set(compact('tipoProdutos', 'caracteristicas'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->CaracteristicaProduto->id = $id;
		if (!$this->CaracteristicaProduto->exists()) {
			throw new NotFoundException(__('Caracteristica produto inválido.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CaracteristicaProduto->save($this->request->data)) {
				$this->Session->setFlash(__('O caracteristica produto foi salvo.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O caracteristica produto não pode ser salvo. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->CaracteristicaProduto->read(null, $id);
		}
		$tipoProdutos = $this->CaracteristicaProduto->TipoProduto->find('list');
		$caracteristicas = $this->CaracteristicaProduto->Caracteristica->find('list');
		$this->set(compact('tipoProdutos', 'caracteristicas'));
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
		$this->CaracteristicaProduto->id = $id;
		if (!$this->CaracteristicaProduto->exists()) {
			throw new NotFoundException(__('caracteristica produto inválido.'));
		}
		if ($this->CaracteristicaProduto->delete()) {
			$this->Session->setFlash(__('Caracteristica produto excluído.'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Caracteristica produto não pode ser excluído.'));
		$this->redirect(array('action' => 'index'));
	}
}