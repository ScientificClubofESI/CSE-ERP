<div class="postes form">
<?php echo $this->Form->create('Poste'); ?>
	<fieldset>
		<legend><?php echo __('Add Poste'); ?></legend>
	<?php
		echo $this->Form->input('nom');
		echo $this->Form->input('role');
		echo $this->Form->input('Membre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Postes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Membres'), array('controller' => 'membres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membre'), array('controller' => 'membres', 'action' => 'add')); ?> </li>
	</ul>
</div>
