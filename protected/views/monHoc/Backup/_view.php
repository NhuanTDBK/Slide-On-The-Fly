<?php
/* @var $this MonHocController */
/* @var $data MonHoc */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mamonhoc')); ?>:</b>
	<?php echo CHtml::encode($data->mamonhoc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tenmonhoc')); ?>:</b>
	<?php echo CHtml::encode($data->tenmonhoc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hesomon')); ?>:</b>
	<?php echo CHtml::encode($data->hesomon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thoigianhoc')); ?>:</b>
	<?php echo CHtml::encode($data->thoigianhoc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hocphanhoctruoc')); ?>:</b>
	<?php echo CHtml::encode($data->hocphanhoctruoc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('decuong')); ?>:</b>
	<?php echo CHtml::encode($data->decuong); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('mieuta')); ?>:</b>
	<?php echo CHtml::encode($data->mieuta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tailieuthamkhao')); ?>:</b>
	<?php echo CHtml::encode($data->tailieuthamkhao); ?>
	<br />

	*/ ?>

</div>