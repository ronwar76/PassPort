<?php
/* @var $this PasswordsController */
/* @var $data Passwords */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('association')); ?>:</b>
	<?php echo CHtml::encode($data->association); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />


</div>