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
		
		/******************************
		
			mecab
		
		******************************/
		$this->_view_Data($text);
	
	}

	public function 
	_view_Data($text) {
		
		$string = $text['Text']['string'];
		
// 		$size = 60;
		
// // 		$line = parse_str(mb_substr($string, 0, $size));
// 		$line = mb_substr($string, 0, $size);
		
// 		parse_str($line);
		$line = urlencode($string);
// 		$line = urlencode($line);
		
		$url = "http://chasen.org/~taku/software/mecapi/mecapi.cgi";
		
		$params = "sentence=$line";
// 		$params = "sentence=$string";
		
		$html = file_get_contents("$url?$params");
		
		$xml = simplexml_load_string($html);
		
		$child = $xml->word[0];
		
// 		debug($child);

		$children = $xml->children();
		
// 		debug($xml);
// 		debug(count($children));
// 		debug($children);
		
		$this->set('xml', $xml);
		
// 		debug($child->surface);
// 		debug($child->surface->__toString());
// 		debug($xml->word->surface);
// 		debug($xml->word);
// 		debug($xml);
		
// 		debug($line);
// 		debug($html);
	}
	
	public function delete($id) {
		/******************************
	
		validate
	
		******************************/
		if (!$id) {
			
			throw new NotFoundException(__('Invalid text id'));
			
		}
	
		$text = $this->Text->findById($id);
	
		if (!$text) {
			throw new NotFoundException(__("Can't find the text. id = %d", $id));
		}
	
		/******************************
	
		delete
	
		******************************/
		$size = 80;
		
		$str_len = mb_strlen($text['Text']['string']);
			
		if ($str_len > $size) {
			//         				if (strlen($text['Text']['text']) > $size) {
				
			$line = mb_substr($text['Text']['string'], 0, $size)
			."...";
			//         					$line = substr($text['Text']['text'], 0, $size);
				
		} else {
				
			$line = $text['Text']['string'];
				
		}
		
		if ($this->Text->delete($id)) {
			// 		if ($this->Text->save($this->request->data)) {
	
			$this->Session->setFlash(
						__("Text deleted => %s", $line
					));
	
			return $this->redirect(
					array(
							'controller' => 'texts',
							'action' => 'index'
				
					));
	
		} else {
	
			$this->Session->setFlash(
					__(
						"Text can't be deleted => %s", 
						$line
// 						substr($text['Text']['string'], 0, 20)
					));
	
			// 			$page_num = _get_Page_from_Id($id - 1);
	
			return $this->redirect(
					array(
							'controller' => 'texts',
							'action' => 'view',
							$id
					));
	
		}
	
	}//public function delete($id)
	
}