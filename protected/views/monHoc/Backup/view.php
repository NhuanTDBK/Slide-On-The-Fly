<?php
/* @var $this MonHocController */
/* @var $model MonHoc */

$this->breadcrumbs=array(
	'Mon Hoc'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'Liệt kê môn học', 'url'=>array('index')),
	array('label'=>'Tạo môn học', 'url'=>array('create')),
	array('label'=>'Cập nhật thông tin môn học', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Xóa môn học', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Quản lí môn học', 'url'=>array('admin')),
    array('label'=>'Thêm Slide','url'=>array('slides/create','sid'=>$model->ID)),//subject id:mon hoc
);
?>

<h1>Xem thông tin môn <?php echo $model->tenmonhoc; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'mamonhoc',
		'tenmonhoc',
		'hesomon',
		'thoigianhoc',
		'hocphanhoctruoc',
		'decuong',
		'mieuta',
		'tailieuthamkhao',
	),
)); ?>
