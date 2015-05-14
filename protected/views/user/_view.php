<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fdUsername')); ?>:</b>
	<?php echo CHtml::encode($data->fdUsername); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fdPassword')); ?>:</b>
	<?php echo CHtml::encode($data->fdPassword); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fdEmail')); ?>:</b>
	<?php echo CHtml::encode($data->fdEmail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fdPhone')); ?>:</b>
	<?php echo CHtml::encode($data->fdPhone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fdNick')); ?>:</b>
	<?php echo CHtml::encode($data->fdNick); ?>
	<br />


</div>