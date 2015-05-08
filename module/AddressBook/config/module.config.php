<?php 
return array(
		
		
	/**
	 * How to instantiate a controller
	 */
	'controllers' => array(
		'invokables' => array(
				'AddressBook\Controller\User' => 'AddressBook\Controller\AddressBook\Controller',
		),
	),
		
    'router' => array(
        'routes' => array(
			'address_book' => array(
				'type'    => 'literal',
				'options' => array(
					'route'    => '/address-book',
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
		
	/**
	 * The keys of the template_path_stack array don't mean shit
	 */
	'view_manager' => array(
		'template_path_stack' 	=> array(
				'mykey' 				=> __DIR__ . '/../view',
		),
	),		
);