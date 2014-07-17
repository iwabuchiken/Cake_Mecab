<?php

class TextsController extends AppController {
	public $helpers = array('Html', 'Form', 'Mytest');
// 	public $helpers = array('Html', 'Form');

	public function index() {
		
		$this->set('texts', $this->Text->find('all'));
// 		$this->set('texts', $this->Text->find('all'));
		
// 		debug(Utils::get_dPath_Log());
		
		Utils::write_Log(
					Utils::get_dPath_Log(), 
					"Texts#index", 
					__FILE__, __LINE__);
		
	}

	public function add() {
		if ($this->request->is('post')) {
				
			$this->Text->create();
				
			$this->request->data['Text']['created_at'] =
					Utils::get_CurrentTime2(CONS::$timeLabelTypes["rails"]);
				
			$this->request->data['Text']['updated_at'] =
					Utils::get_CurrentTime2(CONS::$timeLabelTypes["rails"]);
				
			if ($this->Text->save($this->request->data)) {
	
				$this->Session->setFlash(__('Your text has been saved.'));
				return $this->redirect(array('action' => 'index'));
	
			}
			$this->Session->setFlash(__('Unable to add your text.'));
		}
		
	}//

	public function view($id = null) {
		
		if (!$id) {
			throw new NotFoundException(__('Invalid text'));
		}
	
		$text = $this->Text->findById($id);
		
		if (!$text) {
			throw new NotFoundException(__('Invalid text'));
		}
	
		$this->set('text', $text);
	
	}
	
}