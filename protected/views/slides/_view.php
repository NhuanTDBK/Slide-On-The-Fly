<?php
/* @var $this SlidesController */
/* @var $data Slides */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('noidung')); ?>:</b>
	<?php echo CHtml::encode($data->noidung); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tags')); ?>:</b>
	<?php echo CHtml::encode($data->tags); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tieude')); ?>:</b>
	<?php echo CHtml::encode($data->tieude); ?>
	<br />


</div>