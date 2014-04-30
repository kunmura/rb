<?php
class RaresController extends AppController {

	var $name = 'Rares';

	function index() {
		$this->Rare->recursive = 0;
		$this->set('rares', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid rare', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('rare', $this->Rare->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Rare->create();
			if ($this->Rare->save($this->data)) {
				$this->Session->setFlash(__('The rare has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rare could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid rare', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Rare->save($this->data)) {
				$this->Session->setFlash(__('The rare has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rare could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Rare->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for rare', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Rare->delete($id)) {
			$this->Session->setFlash(__('Rare deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Rare was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>