<?php
App::uses('AppModel', 'Model');
/**
 * Caracteristica Model
 *
 * @property CaracteristicaProduto $CaracteristicaProduto
 * @property Valor $Valor
 */
class Caracteristica extends AppModel {

	// As associações abaixo foram criadas com todas as chaves possíveis, então é possível remover as que não são necessárias

/**
 * Associações hasMany
 *
 * @var array
 */
	public $hasMany = array(
		'CaracteristicaProduto' => array(
			'className' => 'CaracteristicaProduto',
			'foreignKey' => 'caracteristica_id',
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
		'Valor' => array(
			'className' => 'Valor',
			'foreignKey' => 'caracteristica_id',
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