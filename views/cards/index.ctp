<div class="cards index">
	<h2><?php __('Cards');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('image');?></th>
			<th><?php echo $this->Paginator->sort('rare_id');?></th>
			<th><?php echo $this->Paginator->sort('attribute_id');?></th>
			<th><?php echo $this->Paginator->sort('characteristic_id');?></th>
			<th><?php echo $this->Paginator->sort('cost');?></th>
			<th><?php echo $this->Paginator->sort('hp');?></th>
			<th><?php echo $this->Paginator->sort('atk');?></th>
			<th><?php echo $this->Paginator->sort('def');?></th>
			<th><?php echo $this->Paginator->sort('agi');?></th>
			<th><?php echo $this->Paginator->sort('creates');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($cards as $card):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $card['Card']['id']; ?>&nbsp;</td>
		<td><?php echo $card['Card']['name']; ?>&nbsp;</td>
		<td><img src="http://googledrive.com/host/0B9JkfxOAK33NLVdZcHdITjBuQ1E/<?php echo $card['Card']['id']; ?>.jpg" width="120px">&nbsp;</td>
		<td>
			<?php echo $this->Html->link($card['Rare']['name'], array('controller' => 'rares', 'action' => 'view', $card['Rare']['id'])); ?>
		</td>
		<td><?php echo $card['Card']['attribute_id']; ?>&nbsp;</td>
		<td><?php echo $card['Card']['characteristic_id']; ?>&nbsp;</td>
		<td><?php echo $card['Card']['cost']; ?>&nbsp;</td>
		<td><?php echo $card['Card']['hp']; ?>&nbsp;</td>
		<td><?php echo $card['Card']['atk']; ?>&nbsp;</td>
		<td><?php echo $card['Card']['def']; ?>&nbsp;</td>
		<td><?php echo $card['Card']['agi']; ?>&nbsp;</td>
		<td><?php echo $card['Card']['creates']; ?>&nbsp;</td>
		<td><?php echo $card['Card']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $card['Card']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $card['Card']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $card['Card']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $card['Card']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Card', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Rares', true), array('controller' => 'rares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rare', true), array('controller' => 'rares', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players', true), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player', true), array('controller' => 'players', 'action' => 'add')); ?> </li>
	</ul>
</div>