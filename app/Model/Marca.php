<?php
App::uses('AppModel', 'Model');
/**
 * Marca Model
 *
 * @property Produto $Produto
 */
class Marca extends AppModel {

	// As associações abaixo foram criadas com todas as chaves possíveis, então é possível remover as que não são necessárias

/**
 * Associações hasMany
 *
 * @var array
 */
	public $hasMany = array(
		'Produto' => array(
			'className' => 'Produto',
			'foreignKey' => 'marca_id',
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