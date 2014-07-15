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
	
}