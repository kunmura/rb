<div class="playersCards index">
	<h2><?php __('Players Cards');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('player_id');?></th>
			<th><?php echo $this->Paginator->sort('card_id');?></th>
			<th><?php echo $this->Paginator->sort('level');?></th>
			<th><?php echo $this->Paginator->sort('level_exp');?></th>
			<th><?php echo $this->Paginator->sort('rare_id');?></th>
			<th><?php echo $this->Paginator->sort('atk');?></th>
			<th><?php echo $this->Paginator->sort('def');?></th>
			<th><?php echo $this->Paginator->sort('agi');?></th>
			<th><?php echo $this->Paginator->sort('hp');?></th>
			<th><?php echo $this->Paginator->sort('skill1_exp');?></th>
			<th><?php echo $this->Paginator->sort('skill2_exp');?></th>
			<th><?php echo $this->Paginator->sort('skill3_exp');?></th>
			<th><?php echo $this->Paginator->sort('visible');?></th>
			<th><?php echo $this->Paginator->sort('creates');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($playersCards as $playersCard):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $playersCard['PlayersCard']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($playersCard['Player']['name'], array('controller' => 'players', 'action' => 'view', $playersCard['Player']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($playersCard['Card']['name'], array('controller' => 'cards', 'action' => 'view', $playersCard['Card']['id'])); ?>
		</td>
		<td><?php echo $playersCard['PlayersCard']['level']; ?>&nbsp;</td>
		<td><?php echo $playersCard['PlayersCard']['level_exp']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($playersCard['Rare']['name'], array('controller' => 'rares', 'action' => 'view', $playersCard['Rare']['id'])); ?>
		</td>
		<td><?php echo $playersCard['PlayersCard']['atk']; ?>&nbsp;</td>
		<td><?php echo $playersCard['PlayersCard']['def']; ?>&nbsp;</td>
		<td><?php echo $playersCard['PlayersCard']['agi']; ?>&nbsp;</td>
		<td><?php echo $playersCard['PlayersCard']['hp']; ?>&nbsp;</td>
		<td><?php echo $playersCard['PlayersCard']['skill1_exp']; ?>&nbsp;</td>
		<td><?php echo $playersCard['PlayersCard']['skill2_exp']; ?>&nbsp;</td>
		<td><?php echo $playersCard['PlayersCard']['skill3_exp']; ?>&nbsp;</td>
		<td><?php echo $playersCard['PlayersCard']['visible']; ?>&nbsp;</td>
		<td><?php echo $playersCard['PlayersCard']['creates']; ?>&nbsp;</td>
		<td><?php echo $playersCard['PlayersCard']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $playersCard['PlayersCard']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $playersCard['PlayersCard']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $playersCard['PlayersCard']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $playersCard['PlayersCard']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Players Card', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Players', true), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player', true), array('controller' => 'players', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards', true), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card', true), array('controller' => 'cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rares', true), array('controller' => 'rares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rare', true), array('controller' => 'rares', 'action' => 'add')); ?> </li>
	</ul>
</div>