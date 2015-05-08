<?php
namespace AddressBook\Form;

use Zend\Form\Form;

class AddressBookForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('addressbook');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'usr_name',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Name',
            ),
        ));

        $this->add(array(
            'name' => 'usr_email',
            'attributes' => array(
                'type'  => 'email',
            ),
            'options' => array(
                'label' => 'E-mail',
            ),
        ));	

        $this->add(array(
            'name' => 'usr_adr',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Address',
            ),
        ));

	
        $this->add(array(
            'name' => 'usr_tel',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Telephone',
            ),
        ));
		
	
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Go',
                'id' => 'submitbutton',
            ),
        )); 
    }
}