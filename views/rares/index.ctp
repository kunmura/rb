<div class="rares index">
	<h2><?php __('Rares');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('visible');?></th>
			<th><?php echo $this->Paginator->sort('creates');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($rares as $rare):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $rare['Rare']['id']; ?>&nbsp;</td>
		<td><?php echo $rare['Rare']['name']; ?>&nbsp;</td>
		<td><?php echo $rare['Rare']['visible']; ?>&nbsp;</td>
		<td><?php echo $rare['Rare']['creates']; ?>&nbsp;</td>
		<td><?php echo $rare['Rare']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $rare['Rare']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $rare['Rare']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $rare['Rare']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $rare['Rare']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Rare', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cards', true), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card', true), array('controller' => 'cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players Cards', true), array('controller' => 'players_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Players Card', true), array('controller' => 'players_cards', 'action' => 'add')); ?> </li>
	</ul>
</div>