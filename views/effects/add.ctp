<div class="effects form">
<?php echo $this->Form->create('Effect');?>
	<fieldset>
 		<legend><?php __('Add Effect'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('atk');
		echo $this->Form->input('def');
		echo $this->Form->input('agi');
		echo $this->Form->input('creates');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Effects', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Skills', true), array('controller' => 'skills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill', true), array('controller' => 'skills', 'action' => 'add')); ?> </li>
	</ul>
</div>