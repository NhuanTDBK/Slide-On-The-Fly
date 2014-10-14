<?php
/*
 * Mon Hoc Controller
 * Model MonHoc
 * Form CActiveForm
 * Trang form tạo các text box, drop down nhập dữ liệu
 */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mon-hoc-form',
    //Chế độ kiểm tra tức thì, cài hàm performAjaxValidation() ở Controllter
	//'enableAjaxValidation'=>true,
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
		<?php echo $form->labelEx($model,'hesomon'); ?>
		<?php echo $form->textField($model,'hesomon'); ?>
		<?php echo $form->error($model,'hesomon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thoigianhoc'); ?>
		<?php echo $form->textField($model,'thoigianhoc',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'thoigianhoc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hocphanhoctruoc'); ?>
		<?php echo $form->textField($model,'hocphanhoctruoc',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'hocphanhoctruoc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'decuong'); ?>
		<?php echo $form->textField($model,'decuong',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'decuong'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mieuta'); ?>
		<?php echo $form->textField($model,'mieuta',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'mieuta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tailieuthamkhao'); ?>
		<?php echo $form->textField($model,'tailieuthamkhao',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tailieuthamkhao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->