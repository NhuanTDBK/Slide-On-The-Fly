<?php
/* @var $this MonHocController */
/* @var $model MonHoc */

$this->breadcrumbs=array(
	'Mon Hocs'=>array('index'),
	$model->mamonhoc=>array('view','id'=>$model->mamonhoc),
	'Update',
);

//$this->menu=array(
//	
//	array('label'=>'List MonHoc', 'url'=>array('index'),'visible'=>Yii::app()->user->getState('name')=='admin'),
//	array('label'=>'Create MonHoc', 'url'=>array('create'),'visible'=>Yii::app()->user->getState('name')=='admin'),
//	array('label'=>'View MonHoc', 'url'=>array('view', 'id'=>$model->mamonhoc),'visible'=>Yii::app()->user->getState('name')=='admin'),
//	array('label'=>'Manage MonHoc', 'url'=>array('admin'),'visible'=>Yii::app()->user->getState('name')=='admin'),
//	
//	);
//?>

<h1>Update MonHoc <?php echo $model->mamonhoc; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>