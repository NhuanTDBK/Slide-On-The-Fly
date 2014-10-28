<?php
/* @var $this MonHocController */
/* @var $data MonHoc */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('mamonhoc')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->mamonhoc), array('view', 'id'=>$data->mamonhoc)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tenmonhoc')); ?>:</b>
	<?php echo CHtml::encode($data->tenmonhoc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mieuta')); ?>:</b>
	<?php echo CHtml::encode($data->mieuta); ?>
	<br />


</div>