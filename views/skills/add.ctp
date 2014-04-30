<div class="skills form">
<?php echo $this->Form->create('Skill');?>
	<fieldset>
 		<legend><?php __('Add Skill'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('desc');
		echo $this->Form->input('effect_id');
		echo $this->Form->input('creates');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Skills', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Effects', true), array('controller' => 'effects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Effect', true), array('controller' => 'effects', 'action' => 'add')); ?> </li>
	</ul>
</div>