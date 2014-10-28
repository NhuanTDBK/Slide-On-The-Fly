<?php
/* @var $this SlidesController */
/* @var $model Slides */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'slides-form',
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<br>
		<?php //echo $form->labelEx($model,'tieude'); ?>
		<?php //echo $form->textField($model,'tieude',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'tieude'); ?>
	</div>
	<div class="row">
		<b>Đường dẫn</b>
		<br>
		<?php //echo $form->labelEx($model,'noidung'); ?>
		<?php //echo $form->textArea($model,'noidung',array('rows'=>6, 'cols'=>50)); ?>
		<?php $this->widget('CMultiFileUpload', array(
                'model'=>$model,
				'name' => 'document',
                'accept' => 'doc|docx|pdf', // useful for verifying files
                'duplicate' => 'Duplicate file!', // useful, i think
                'denied' => 'Invalid file type', // useful, i think
				'htmlOptions'=>array('multiple'=>'multiple'),
			));?>
		<?php /*$this->widget('booster.widgets.TbFileUpload',array(
				'url'=>$this->createUrl('slides/upload'),
				'model'=>$model,
				'name'=>'document',
				'multiple'=>true,
				'options'=>array(
					'acceptFileTypes'=>'js:/(\.|\/)(pdf|docx|doc)$/i',
				),
		
		));
				*/
		?>
		<?php echo $form->error($model,'noidung'); ?>
	</div>

	<div class="row">
		<b>Mã môn học</b>
		<br>
		<?php //echo $form->labelEx($model,'tags'); ?>
		<?php echo $form->textField($model,'tags',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'tags'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->