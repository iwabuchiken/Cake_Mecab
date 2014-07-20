<?php

class DatasController extends AppController {
	public $helpers = array('Html', 'Form', 'Mytest');
// 	public $helpers = array('Html', 'Form');

	public function index() {
		
		$this->set('datas', $this->Data->find('all'));
// 		$this->set('datas', $this->Data->find('all'));
		
// 		debug(Utils::get_dPath_Log());
		
		Utils::write_Log(
					Utils::get_dPath_Log(), 
					"Datas#index", 
					__FILE__, __LINE__);
		
	}

	public function add() {
		if ($this->request->is('post')) {
				
			$this->Data->create();
				
			$this->request->data['Data']['created_at'] =
					Utils::get_CurrentTime2(CONS::$timeLabelTypes["rails"]);
				
			$this->request->data['Data']['updated_at'] =
					Utils::get_CurrentTime2(CONS::$timeLabelTypes["rails"]);
				
			if ($this->Data->save($this->request->data)) {
	
				$this->Session->setFlash(__('Your data has been saved.'));
				return $this->redirect(array('action' => 'index'));
	
			}
			$this->Session->setFlash(__('Unable to add your data.'));
		}
		
	}//

	public function view($id = null) {
		
		if (!$id) {
			throw new NotFoundException(__('Invalid data'));
		}
	
		$data = $this->Data->findById($id);
		
		if (!$data) {
			throw new NotFoundException(__('Invalid data'));
		}
	
		$this->set('data', $data);
	
	}

	public function delete($id) {
		/******************************
	
		validate
	
		******************************/
		if (!$id) {
			
			throw new NotFoundException(__('Invalid data id'));
			
		}
	
		$data = $this->Data->findById($id);
	
		if (!$data) {
			throw new NotFoundException(__("Can't find the data. id = %d", $id));
		}
	
		/******************************
	
		delete
	
		******************************/
		if ($this->Data->delete($id)) {
			// 		if ($this->Data->save($this->request->data)) {
	
			$this->Session->setFlash(
						__("Data deleted => %s", $data['Data']['surface']
					));
	
			return $this->redirect(
					array(
							'controller' => 'datas',
							'action' => 'index'
				
					));
	
		} else {
	
			$this->Session->setFlash(
					__(
						"Data can't be deleted => %s", 
						$data['Data']['surface']
// 						substr($data['Data']['string'], 0, 20)
					));
	
			// 			$page_num = _get_Page_from_Id($id - 1);
	
			return $this->redirect(
					array(
							'controller' => 'datas',
							'action' => 'view',
							$id
					));
	
		}
	
	}//public function delete($id)
	
}