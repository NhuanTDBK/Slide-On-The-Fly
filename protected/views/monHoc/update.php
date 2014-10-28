<?php
/* @var $this MonHocController */
/* @var $model MonHoc */

$this->breadcrumbs=array(
	'Môn học'=>array('index'),
	$model->mamonhoc=>array('view','id'=>$model->mamonhoc),
	'Update',
);

$this->menu=array(
	/*
	array('label'=>'List MonHoc', 'url'=>array('index')),
	array('label'=>'Create MonHoc', 'url'=>array('create')),
	array('label'=>'View MonHoc', 'url'=>array('view', 'id'=>$model->mamonhoc)),
	array('label'=>'Manage MonHoc', 'url'=>array('admin')),
	*/
	);
?>

<h1>Sửa đổi thông tin môn học <?php echo $model->mamonhoc; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>