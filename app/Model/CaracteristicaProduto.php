<?php
App::uses('AppModel', 'Model');
/**
 * CaracteristicaProduto Model
 *
 * @property TipoProduto $TipoProduto
 * @property Caracteristica $Caracteristica
 */
class CaracteristicaProduto extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

	// As associações abaixo foram criadas com todas as chaves possíveis, então é possível remover as que não são necessárias

/**
 * Associações belongsTo
 *
 * @var array
 */
	public $belongsTo = array(
		'TipoProduto' => array(
			'className' => 'TipoProduto',
			'foreignKey' => 'tipo_produto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Caracteristica' => array(
			'className' => 'Caracteristica',
			'foreignKey' => 'caracteristica_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}