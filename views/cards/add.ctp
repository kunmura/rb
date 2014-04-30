<div class="cards form">
<?php echo $this->Form->create('Card');?>
	<fieldset>
 		<legend><?php __('Add Card'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('imageurl');
		echo $this->Form->input('max_level');
		echo $this->Form->input('rare_id');
		echo $this->Form->input('cost');
		echo $this->Form->input('atk');
		echo $this->Form->input('max_atk');
		echo $this->Form->input('def');
		echo $this->Form->input('max_def');
		echo $this->Form->input('agi');
		echo $this->Form->input('max_agi');
		echo $this->Form->input('skill1');
		echo $this->Form->input('skill1_rate');
		echo $this->Form->input('skill1_max_rate');
		echo $this->Form->input('skill2');
		echo $this->Form->input('skill2_rate');
		echo $this->Form->input('skill2_max_rate');
		echo $this->Form->input('skill3');
		echo $this->Form->input('skill3_rate');
		echo $this->Form->input('skill3_max_rate');
		echo $this->Form->input('max_awake');
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