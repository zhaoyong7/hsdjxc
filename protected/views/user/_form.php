<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fdUsername'); ?>
		<?php echo $form->textField($model,'fdUsername',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'fdUsername'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fdPassword'); ?>
		<?php echo $form->textField($model,'fdPassword',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'fdPassword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fdEmail'); ?>
		<?php echo $form->textField($model,'fdEmail',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'fdEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fdPhone'); ?>
		<?php echo $form->textField($model,'fdPhone',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'fdPhone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fdNick'); ?>
		<?php echo $form->textField($model,'fdNick',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'fdNick'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->