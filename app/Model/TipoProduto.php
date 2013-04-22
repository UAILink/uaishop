<?php
App::uses('AppModel', 'Model');
/**
 * TipoProduto Model
 *
 * @property Categoria $Categoria
 * @property CaracteristicaProduto $CaracteristicaProduto
 * @property Produto $Produto
 */
class TipoProduto extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'categoria_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Sua mensagem de validação aqui',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Para a validação após esta regra
				//'on' => 'create', // Limitar a validação para as operações 'create' ou 'update'
			),
		),
	);

	// As associações abaixo foram criadas com todas as chaves possíveis, então é possível remover as que não são necessárias

/**
 * Associações belongsTo
 *
 * @var array
 */
	public $belongsTo = array(
		'Categoria' => array(
			'className' => 'Categoria',
			'foreignKey' => 'categoria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * Associações hasMany
 *
 * @var array
 */
	public $hasMany = array(
		'CaracteristicaProduto' => array(
			'className' => 'CaracteristicaProduto',
			'foreignKey' => 'tipo_produto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Produto' => array(
			'className' => 'Produto',
			'foreignKey' => 'tipo_produto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}