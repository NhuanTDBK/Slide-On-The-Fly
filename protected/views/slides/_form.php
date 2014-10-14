<?php
/* @var $this SlidesController */
/* @var $model Slides */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'slides-form',
    //Chế độ kiểm tra tức thì, cài hàm performAjaxValidation() ở Controllter
    //'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'link'); ?>
		<?php echo $form->textField($model,'link',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monhoc'); ?>
		<?php echo $form->textField($model,'monhoc'); ?>
		<?php echo $form->error($model,'monhoc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ten'); ?>
		<?php echo $form->textField($model,'ten',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'ten'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->