<?php
/* @var $this SlidesController */
/* @var $model Slides */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'slides-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tieude'); ?>
		<?php echo $form->textField($model,'tieude',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'tieude'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'noidung'); ?>
		<?php echo $form->textArea($model,'noidung',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'noidung'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tags'); ?>
		<?php echo $form->textField($model,'tags',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'tags'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->