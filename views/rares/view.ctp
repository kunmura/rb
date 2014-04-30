<div class="rares view">
<h2><?php  __('Rare');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $rare['Rare']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $rare['Rare']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Visible'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $rare['Rare']['visible']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Creates'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $rare['Rare']['creates']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $rare['Rare']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rare', true), array('action' => 'edit', $rare['Rare']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Rare', true), array('action' => 'delete', $rare['Rare']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $rare['Rare']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rares', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rare', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cards', true), array('controller' => 'cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card', true), array('controller' => 'cards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players Cards', true), array('controller' => 'players_cards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Players Card', true), array('controller' => 'players_cards', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Cards');?></h3>
	<?php if (!empty($rare['Card'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Imageurl'); ?></th>
		<th><?php __('Max Level'); ?></th>
		<th><?php __('Rare Id'); ?></th>
		<th><?php __('Cost'); ?></th>
		<th><?php __('Atk'); ?></th>
		<th><?php __('Max Atk'); ?></th>
		<th><?php __('Def'); ?></th>
		<th><?php __('Max Def'); ?></th>
		<th><?php __('Agi'); ?></th>
		<th><?php __('Max Agi'); ?></th>
		<th><?php __('Skill1'); ?></th>
		<th><?php __('Skill1 Rate'); ?></th>
		<th><?php __('Skill1 Max Rate'); ?></th>
		<th><?php __('Skill2'); ?></th>
		<th><?php __('Skill2 Rate'); ?></th>
		<th><?php __('Skill2 Max Rate'); ?></th>
		<th><?php __('Skill3'); ?></th>
		<th><?php __('Skill3 Rate'); ?></th>
		<th><?php __('Skill3 Max Rate'); ?></th>
		<th><?php __('Max Awake'); ?></th>
		<th><?php __('Visible'); ?></th>
		<th><?php __('Creates'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($rare['Card'] as $card):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $card['id'];?></td>
			<td><?php echo $card['name'];?></td>
			<td><?php echo $card['imageurl'];?></td>
			<td><?php echo $card['max_level'];?></td>
			<td><?php echo $card['rare_id'];?></td>
			<td><?php echo $card['cost'];?></td>
			<td><?php echo $card['atk'];?></td>
			<td><?php echo $card['max_atk'];?></td>
			<td><?php echo $card['def'];?></td>
			<td><?php echo $card['max_def'];?></td>
			<td><?php echo $card['agi'];?></td>
			<td><?php echo $card['max_agi'];?></td>
			<td><?php echo $card['skill1'];?></td>
			<td><?php echo $card['skill1_rate'];?></td>
			<td><?php echo $card['skill1_max_rate'];?></td>
			<td><?php echo $card['skill2'];?></td>
			<td><?php echo $card['skill2_rate'];?></td>
			<td><?php echo $card['skill2_max_rate'];?></td>
			<td><?php echo $card['skill3'];?></td>
			<td><?php echo $card['skill3_rate'];?></td>
			<td><?php echo $card['skill3_max_rate'];?></td>
			<td><?php echo $card['max_awake'];?></td>
			<td><?php echo $card['visible'];?></td>
			<td><?php echo $card['creates'];?></td>
			<td><?php echo $card['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'cards', 'action' => 'view', $card['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'cards', 'action' => 'edit', $card['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'cards', 'action' => 'delete', $card['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $card['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Card', true), array('controller' => 'cards', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Players Cards');?></h3>
	<?php if (!empty($rare['PlayersCard'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Player Id'); ?></th>
		<th><?php __('Card Id'); ?></th>
		<th><?php __('Level'); ?></th>
		<th><?php __('Level Exp'); ?></th>
		<th><?php __('Rare Id'); ?></th>
		<th><?php __('Atk'); ?></th>
		<th><?php __('Def'); ?></th>
		<th><?php __('Agi'); ?></th>
		<th><?php __('Hp'); ?></th>
		<th><?php __('Skill1 Exp'); ?></th>
		<th><?php __('Skill2 Exp'); ?></th>
		<th><?php __('Skill3 Exp'); ?></th>
		<th><?php __('Visible'); ?></th>
		<th><?php __('Creates'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($rare['PlayersCard'] as $playersCard):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $playersCard['id'];?></td>
			<td><?php echo $playersCard['player_id'];?></td>
			<td><?php echo $playersCard['card_id'];?></td>
			<td><?php echo $playersCard['level'];?></td>
			<td><?php echo $playersCard['level_exp'];?></td>
			<td><?php echo $playersCard['rare_id'];?></td>
			<td><?php echo $playersCard['atk'];?></td>
			<td><?php echo $playersCard['def'];?></td>
			<td><?php echo $playersCard['agi'];?></td>
			<td><?php echo $playersCard['hp'];?></td>
			<td><?php echo $playersCard['skill1_exp'];?></td>
			<td><?php echo $playersCard['skill2_exp'];?></td>
			<td><?php echo $playersCard['skill3_exp'];?></td>
			<td><?php echo $playersCard['visible'];?></td>
			<td><?php echo $playersCard['creates'];?></td>
			<td><?php echo $playersCard['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'players_cards', 'action' => 'view', $playersCard['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'players_cards', 'action' => 'edit', $playersCard['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'players_cards', 'action' => 'delete', $playersCard['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $playersCard['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Players Card', true), array('controller' => 'players_cards', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
