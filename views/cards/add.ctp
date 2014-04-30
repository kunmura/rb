<div class="cards form">
<?php echo $this->Form->create('Card');?>
	<fieldset>
 		<legend><?php __('Add Card'); ?></legend>
	<?php
		echo $this->Form->input('id', array('type' => 'text'));
		echo $this->Form->input('name');
		echo $this->Form->input('rare_id');
		echo $this->Form->input('attribute_id');
		echo $this->Form->input('characteristic_id');
		echo $this->Form->input('cost', array('value' => '0'));
		echo $this->Form->input('hp', array('value' => '0'));
		echo $this->Form->input('atk', array('value' => '0'));
		echo $this->Form->input('def', array('value' => '0'));
		echo $this->Form->input('agi', array('value' => '0'));
		echo $this->Form->input('visible');
		echo $this->Form->input('creates');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cards', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Rares', true), array('controller' => 'rares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rare', true), array('controller' => 'rares', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players', true), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player', true), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>