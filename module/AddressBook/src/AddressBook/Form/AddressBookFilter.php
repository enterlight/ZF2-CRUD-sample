<?php
namespace AddressBook\Form;

use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;

class UserFilter extends InputFilter
{
	public function __construct()
	{
		// self::__construct(); // parnt::__construct(); - trows and error
		$this->add(array(
			'name'     => 'usr_name',
			'required' => false,
			'filters'  => array(
				array('name' => 'StripTags'),
				array('name' => 'StringTrim'),
			),
			'validators' => array(
				array(
					'name'    => 'StringLength',
					'options' => array(
						'encoding' => 'UTF-8',
						'min'      => 1,
						'max'      => 100,
					),
				),
			),
		));

/*        $this->add(array(
            'name'       => 'usr_tel',
            'required'   => false,
            'validators' => array(
				array('Digits', 
					false, 
					array(
						'messages' => array(
							'notDigits'     	=> "Phone Invalid Digits, ex. 1234567890",
							'digitsStringEmpty' => "",
						),
					),
       			),
            ),
		));*/
        
        $this->add(array(
        		'name'       => 'usr_email',
        		'required'   => false,
        		'validators' => array(
        				array(
        						'name' => 'EmailAddress'
        				),
        		),
        ));        
			
	}
}