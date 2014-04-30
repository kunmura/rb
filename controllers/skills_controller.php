<?php
class SkillsController extends AppController {

	var $name = 'Skills';

	function index() {
		$this->Skill->recursive = 0;
		$this->set('skills', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid skill', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('skill', $this->Skill->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Skill->create();
			if ($this->Skill->save($this->data)) {
				$this->Session->setFlash(__('The skill has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The skill could not be saved. Please, try again.', true));
			}
		}
		$effects = $this->Skill->Effect->find('list');
		$this->set(compact('effects'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid skill', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Skill->save($this->data)) {
				$this->Session->setFlash(__('The skill has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The skill could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Skill->read(null, $id);
		}
		$effects = $this->Skill->Effect->find('list');
		$this->set(compact('effects'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for skill', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Skill->delete($id)) {
			$this->Session->setFlash(__('Skill deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Skill was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>