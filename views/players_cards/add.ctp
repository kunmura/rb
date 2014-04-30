<div class="playersCards form">
<?php echo $this->Form->create('PlayersCard');?>
	<fieldset>
 		<legend><?php __('Add Players Card'); ?></legend>
	<?php
		echo $this->Form->input('player_id');
		echo $this->Form->input('card_id');
		echo $this->Form->input('level');
		echo $this->Form->input('level_exp');
		echo $this->Form->input('rare_id');
		echo $this->Form->input('atk');
		echo $this->Form->input('def');
		echo $this->Form->input('agi');
		echo $this->Form->input('hp');
		echo $this->Form->input('skill1_exp');
		echo $this->Form->input('skill2_exp');
		echo $this->Form->input('skill3_exp');
		echo $this->Form->input('visible');
		echo $this->Form->input('creates');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Players Cards', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Players', true), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player', true), array('controller' => 'players', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards', true), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card', true), array('controller' => 'cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rares', true), array('controller' => 'rares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rare', true), array('controller' => 'rares', 'action' => 'add')); ?> </li>
	</ul>
</div>