<?php
/* @var $this MonHocController */
/* @var $model MonHoc */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mon-hoc-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'mamonhoc'); ?>
		<?php echo $form->textField($model,'mamonhoc',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'mamonhoc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tenmonhoc'); ?>
		<?php echo $form->textField($model,'tenmonhoc',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'tenmonhoc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mieuta'); ?>
		<?php echo $form->textArea($model,'mieuta',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'mieuta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->