<div class="skills view">
<h2><?php  __('Skill');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $skill['Skill']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $skill['Skill']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Desc'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $skill['Skill']['desc']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Effect'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($skill['Effect']['name'], array('controller' => 'effects', 'action' => 'view', $skill['Effect']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Creates'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $skill['Skill']['creates']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $skill['Skill']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Skill', true), array('action' => 'edit', $skill['Skill']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Skill', true), array('action' => 'delete', $skill['Skill']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $skill['Skill']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Skills', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Effects', true), array('controller' => 'effects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Effect', true), array('controller' => 'effects', 'action' => 'add')); ?> </li>
	</ul>
</div>
