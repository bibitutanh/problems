<?php echo $this->Form->create('Problem', array('url' => array($objectType, $foreignKey)));?>
	<fieldset>
 		<legend><?php __('Report a Problem');?></legend>
	<?php
		echo $this->Form->hidden('Data.referer', array('value' => @$referer));
		echo $this->Form->input('type', array('label' => __d('problems', 'Type of problem', true)));
		echo $this->Form->input('description');
		echo $this->Form->input('offensive', array(
			'label' => __('Report as offensive', true)));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true)); ?>