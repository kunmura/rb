<?php
class PlayersCardsController extends AppController {

	var $name = 'PlayersCards';

	function index() {
		$this->PlayersCard->recursive = 0;
		$this->set('playersCards', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid players card', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('playersCard', $this->PlayersCard->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->PlayersCard->create();
			if ($this->PlayersCard->save($this->data)) {
				$this->Session->setFlash(__('The players card has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The players card could not be saved. Please, try again.', true));
			}
		}
		$players = $this->PlayersCard->Player->find('list');
		$cards = $this->PlayersCard->Card->find('list');
		$rares = $this->PlayersCard->Rare->find('list');
		$this->set(compact('players', 'cards', 'rares'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid players card', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->PlayersCard->save($this->data)) {
				$this->Session->setFlash(__('The players card has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The players card could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->PlayersCard->read(null, $id);
		}
		$players = $this->PlayersCard->Player->find('list');
		$cards = $this->PlayersCard->Card->find('list');
		$rares = $this->PlayersCard->Rare->find('list');
		$this->set(compact('players', 'cards', 'rares'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for players card', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PlayersCard->delete($id)) {
			$this->Session->setFlash(__('Players card deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Players card was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>