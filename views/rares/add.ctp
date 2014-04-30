<div class="rares form">
<?php echo $this->Form->create('Rare');?>
	<fieldset>
 		<legend><?php __('Add Rare'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('visible');
		echo $this->Form->input('creates');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Rares', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cards', true), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card', true), array('controller' => 'cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players Cards', true), array('controller' => 'players_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Players Card', true), array('controller' => 'players_cards', 'action' => 'add')); ?> </li>
	</ul>
</div>