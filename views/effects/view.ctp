<div class="effects view">
<h2><?php  __('Effect');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $effect['Effect']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $effect['Effect']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Atk'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $effect['Effect']['atk']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Def'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $effect['Effect']['def']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Agi'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $effect['Effect']['agi']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Creates'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $effect['Effect']['creates']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $effect['Effect']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Effect', true), array('action' => 'edit', $effect['Effect']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Effect', true), array('action' => 'delete', $effect['Effect']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $effect['Effect']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Effects', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Effect', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Skills', true), array('controller' => 'skills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill', true), array('controller' => 'skills', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Skills');?></h3>
	<?php if (!empty($effect['Skill'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Desc'); ?></th>
		<th><?php __('Effect Id'); ?></th>
		<th><?php __('Creates'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($effect['Skill'] as $skill):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $skill['id'];?></td>
			<td><?php echo $skill['name'];?></td>
			<td><?php echo $skill['desc'];?></td>
			<td><?php echo $skill['effect_id'];?></td>
			<td><?php echo $skill['creates'];?></td>
			<td><?php echo $skill['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'skills', 'action' => 'view', $skill['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'skills', 'action' => 'edit', $skill['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'skills', 'action' => 'delete', $skill['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $skill['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Skill', true), array('controller' => 'skills', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
