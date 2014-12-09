<?php
/* @var $this SlidesController */
/* @var $model Slides */

$this->breadcrumbs=array(
	'Slides'=>array('index'),
	'Create',
);

//$this->menu=array(
//	array('label'=>'List Slides', 'url'=>array('index'),'visible'=>Yii::app()->user->getState('name')=='admin'),
//	array('label'=>'Manage Slides', 'url'=>array('admin'),'visible'=>Yii::app()->user->getState('name')=='admin'),
//);
?>

<h1>Thêm slide môn học</h1>

<?php $this->renderPartial('_formMonHoc', array('model'=>$model)); ?>