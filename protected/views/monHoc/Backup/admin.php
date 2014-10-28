<?php
/* @var $this MonHocController */
/* @var $model MonHoc */

$this->breadcrumbs=array(
	'Mon Hoc'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Liệt kệ môn học', 'url'=>array('index')),
	array('label'=>'Tạo môn học', 'url'=>array('create')),
);

?>

<h1>Quản lí Môn học</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mon-hoc-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'mamonhoc',
		'tenmonhoc',
		'hesomon',
		'thoigianhoc',
		'hocphanhoctruoc',
		/*
		'decuong',
		'mieuta',
		'tailieuthamkhao',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
