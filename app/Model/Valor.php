<?php
App::uses('AppModel', 'Model');
/**
 * Valor Model
 *
 * @property Caracteristica $Caracteristica
 */
class Valor extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'caracteristica_id' => array(
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
		'Caracteristica' => array(
			'className' => 'Caracteristica',
			'foreignKey' => 'caracteristica_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}