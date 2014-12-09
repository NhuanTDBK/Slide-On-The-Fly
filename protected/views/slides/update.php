<?php
/* @var $this SlidesController */
/* @var $model Slides */

$this->breadcrumbs=array(
	'Slides'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

//$this->menu=array(
//	
//	array('label'=>'List Slides', 'url'=>array('index'),'visible'=>Yii::app()->user->getState('name')=='admin'),
//	array('label'=>'Create Slides', 'url'=>array('create'),'visible'=>Yii::app()->user->getState('name')=='admin'),
//	array('label'=>'View Slides', 'url'=>array('view', 'id'=>$model->id),'visible'=>Yii::app()->user->getState('name')=='admin'),
//	array('label'=>'Manage Slides', 'url'=>array('admin'),'visible'=>Yii::app()->user->getState('name')=='admin'),
//    );
//?>

<h1>Cập nhật slide <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_formMonHoc', array('model'=>$model)); ?>
