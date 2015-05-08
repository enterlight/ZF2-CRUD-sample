<?php 
return array(
		
		
	/**
	 * How to instantiate a controller
	 */
	'controllers' => array(
		'invokables' => array(
				'AddressBook\Controller\AddressBook' => 'AddressBook\Controller\AddressBookController',
		),
	),
		
    'router' => array(
        'routes' => array(
			'address_book' => array(
				'type'    => 'literal',
				'options' => array(
					'route'    => '/ab',
					'defaults' => array(
						'__NAMESPACE__' => 'AddressBook\Controller',
						'controller'    => 'AddressBook',
						'action'        => 'index',
					),
				),
				'may_terminate' => true,
				'child_routes' => array(
					'default' => array(
						'type'    => 'segment',
						'options' => array(
							'route'    => '/[:controller[/:action[/:id]]]',
							'constraints' => array(
								'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
								'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
								'id'     	 => '[0-9]*',
							),
							'defaults' => array(
							),
						),
					),
				),
			),
		),
	),
		
	'view_manager' => array(
		'template_path_stack' 	=> array(
				'mykey' 				=> __DIR__ . '/../view',
		),
	),		
);