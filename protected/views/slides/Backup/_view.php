<?php
/* @var $this SlidesController */
/* @var $data Slides */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link')); ?>:</b>
	<?php echo CHtml::encode($data->link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monhoc')); ?>:</b>
	<?php echo CHtml::encode($data->monhoc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ten')); ?>:</b>
	<?php echo CHtml::encode($data->ten); ?>
	<br />


</div>