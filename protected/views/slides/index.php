<?php
/* @var $this SlidesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Slides',
);

$this->menu=array(
	array('label'=>'Tạo slide mới', 'url'=>array('create'),'visible'=>Yii::app()->user->getState('name')=='admin'),
	array('label'=>'Quản lí slides', 'url'=>array('admin'),'visible'=>Yii::app()->user->getState('name')=='admin'),
);
?>

<h1>Slides</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_viewSlide',
)); ?>
