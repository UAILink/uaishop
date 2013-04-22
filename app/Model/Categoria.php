<?php
App::uses('AppModel', 'Model');
/**
 * Categoria Model
 *
 * @property TipoProduto $TipoProduto
 */
class Categoria extends AppModel {

	// As associações abaixo foram criadas com todas as chaves possíveis, então é possível remover as que não são necessárias

/**
 * Associações hasMany
 *
 * @var array
 */
	public $hasMany = array(
		'TipoProduto' => array(
			'className' => 'TipoProduto',
			'foreignKey' => 'categoria_id',
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