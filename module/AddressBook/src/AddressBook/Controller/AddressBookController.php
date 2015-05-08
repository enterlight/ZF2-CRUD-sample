<?php
namespace AddressBook\Controller;

/**
 * Dont put the database access code in the controller!!!
 * ORM Object relational mapping: A way of merging incompatible data. 4 different ways:
 * 
 * 1) Table data gateway:  Comes with zf2 right out of the box.  You can use PDO or you can use Zend\DB\TableGateway
 * ZTg has the CRUD function alreasy made!!
 * 2) Data mapper
 * 3) Row data gateway
 * 4) Active Record
 * 
 */
/**
 * AbstractActionController:
 */
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Db\TableGateway\TableGateway;

use CsnUser\Form\UserForm;
use CsnUser\Form\UserFilter;

class AddressBookController extends AbstractActionController
{
	public function indexAction() 
	{
		return new ViewModel();
	}

	public function createAction()
	{
		return new ViewModel();
	}
	
	public function updateAction()
	{
		return new ViewModel();
	}
	
	public function deleteAction()
	{

	}
}
