<?php
class EffectsController extends AppController {

	var $name = 'Effects';

	function index() {
		$this->Effect->recursive = 0;
		$this->set('effects', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid effect', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('effect', $this->Effect->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Effect->create();
			if ($this->Effect->save($this->data)) {
				$this->Session->setFlash(__('The effect has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The effect could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid effect', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Effect->save($this->data)) {
				$this->Session->setFlash(__('The effect has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The effect could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Effect->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for effect', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Effect->delete($id)) {
			$this->Session->setFlash(__('Effect deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Effect was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>