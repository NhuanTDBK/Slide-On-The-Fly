<?php
/* @var $this MonHocController */
/* @var $model MonHoc */

$this->breadcrumbs=array(
	'Mon Hoc'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Liệt kệ môn học', 'url'=>array('index')),
	array('label'=>'Quản lí môn học ', 'url'=>array('admin')),
);
?>

<h1>Tạo môn học</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>