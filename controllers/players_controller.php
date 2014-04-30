<?php
class PlayersController extends AppController {

	var $name = 'Players';

	function index() {
		$this->Player->recursive = 0;
		$this->set('players', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid player', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('player', $this->Player->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Player->create();
			if ($this->Player->save($this->data)) {
				$this->Session->setFlash(__('The player has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The player could not be saved. Please, try again.', true));
			}
		}
		$cards = $this->Player->Card->find('list');
		$this->set(compact('cards'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid player', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Player->save($this->data)) {
				$this->Session->setFlash(__('The player has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The player could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Player->read(null, $id);
		}
		$cards = $this->Player->Card->find('list');
		$this->set(compact('cards'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for player', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Player->delete($id)) {
			$this->Session->setFlash(__('Player deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Player was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>