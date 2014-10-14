<?php
/* @var $this MonHocController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mon Hoc',
);

$this->menu=array(
	array('label'=>'Tạo môn học', 'url'=>array('create')),
	array('label'=>'Quản lí môn học', 'url'=>array('admin')),
);
?>

<h1>Môn học</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
