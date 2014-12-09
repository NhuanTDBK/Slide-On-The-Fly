<?php
/* @var $this MonHocController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Môn học',
);

$this->menu=array(
	array('label'=>'Tạo môn học mới', 'url'=>array('create'),'visible'=>Yii::app()->user->getState('name')=='admin'),
	array('label'=>'Quản lí môn học', 'url'=>array('admin'),'visible'=>Yii::app()->user->getState('name')=='admin'),
);
?>

<h1>Các môn học</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
