<?php
namespace AddressBook\Controller;

/**
 * 
 * Table data gateway:  Comes with zf2 right out of the box.  Zend\DB\TableGateway has the CRUD function alreasy made!!
 */

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Db\TableGateway\TableGateway;

use AddressBook\Form\AddressBookForm;
use AddressBook\Form\AddressBookFilter;

class AddressBookController extends AbstractActionController
{
	private $addressBookTable;
	
	public function indexAction() 
	{
		return new ViewModel(array('rowset' => $this->getAddressBookTable()->select()));
	}
	public function createAction()
	{
		$form = new AddressBookForm();
		$request = $this->getRequest();
        if ($request->isPost()) {
			$form->setInputFilter(new AddressBookFilter());
			$form->setData($request->getPost());
			 if ( $form->isValid() ) {
			 	// Get the data from the form that has been validated
				$data = $form->getData();
				unset($data['submit']);
				$this->getAddressBookTable()->insert($data);
				return $this->redirect()->toRoute('address_book/default', array('controller' => 'addressbook', 'action' => 'index'));										
			}
		}		
		
		return new ViewModel(array('form' => $form));
	}
	
	public function updateAction()
	{
		$id = $this->params()->fromRoute('id');
		if ( !$id ) {
			return $this->redirect()->toRoute('address_book/default', array('controller' => 'addressbook', 'action' => 'index'));
		}		
		$form = new AddressBookForm();
		$request = $this->getRequest();
		if ( $request->isPost() ) {
			$form->setInputFilter(new AddressBookFilter());
			$form->setData($request->getPost());
			if ( $form->isValid() ) {
				// Get the data from the form that has been validated				
				$data = $form->getData();
				unset($data['submit']);
				$this->getAddressBookTable()->update($data, array('usr_id' => $id));
				return $this->redirect()->toRoute('address_book/default', array('controller' => 'addressbook', 'action' => 'index'));
			}
		}
		else {
			$form->setData($this->getAddressBookTable()->select(array('usr_id' => $id))->current());
		}
		return new ViewModel(array('form' => $form, 'id' => $id));
	}
	
	public function deleteAction()
	{
		// We don't event nee a view model becaue we'lldelete and go back to our index page
		$id = $this->params()->fromRoute('id');
		if ($id) {
			$this->getAddressBookTable()->delete(array('usr_id' => $id));
		}
		
		return $this->redirect()->toRoute('address_book/default', array('controller' => 'addressbook', 'action' => 'index'));		
	}
	
	/* Create the tableGateway object to hold the data
	 * 
	 */
	public function getAddressBookTable()
	{
		if ( !$this->addressBookTable ) {
			$this->addressBookTable = new TableGateway(
				'address_book',   // name of the table
				$this->getServiceLocator()->get('Zend\Db\Adapter\Adapter')
			);
		}
		return $this->addressBookTable;
	}
}
