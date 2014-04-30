<div class="players form">
<?php echo $this->Form->create('Player');?>
	<fieldset>
 		<legend><?php __('Add Player'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('level');
		echo $this->Form->input('exp');
		echo $this->Form->input('stamina_p');
		echo $this->Form->input('battle_p');
		echo $this->Form->input('quest');
		echo $this->Form->input('visible');
		echo $this->Form->input('creates');
		echo $this->Form->input('Card');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Players', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cards', true), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card', true), array('controller' => 'cards', 'action' => 'add')); ?> </li>
	</ul>
</div>