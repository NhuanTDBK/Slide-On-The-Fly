<?php
/* @var $this MonHocController */
/* @var $model MonHoc */

$this->breadcrumbs=array(
	'Môn học'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Liệt kê môn học', 'url'=>array('index'),'visible'=>!Yii::app()->user->isGuest),
);
?>

<h1>Tạo môn học mới</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>