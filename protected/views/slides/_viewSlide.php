<?php
/* @var $this SlidesController */
/* @var $data Slides */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b>Link Download</b>
	<a download ><?php echo CHtml::encode($data->tieude); ?></a>
	<br />

	<b>Mã môn học</b>
	<?php echo CHtml::encode($data->tags); ?>



</div>