<?php
App::uses('AppModel', 'Model');
/**
 * Produto Model
 *
 * @property Marca $Marca
 * @property TipoProduto $TipoProduto
 */
class Produto extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'descricao';

	// As associações abaixo foram criadas com todas as chaves possíveis, então é possível remover as que não são necessárias

/**
 * Associações belongsTo
 *
 * @var array
 */
	public $belongsTo = array(
		'Marca' => array(
			'className' => 'Marca',
			'foreignKey' => 'marca_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TipoProduto' => array(
			'className' => 'TipoProduto',
			'foreignKey' => 'tipo_produto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}