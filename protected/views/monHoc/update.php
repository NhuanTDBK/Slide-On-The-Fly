<?php
/* @var $this MonHocController */
/* @var $model MonHoc */

$this->breadcrumbs=array(
	'Mon Hoc'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'Liệt kê môn học', 'url'=>array('index')),
	array('label'=>'Tạo môn học', 'url'=>array('create')),
	array('label'=>'Xem thông tin môn học', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Quản lí môn học', 'url'=>array('admin')),
);
?>

<h1>Cập nhật thông tin môn <?php echo $model->tenmonhoc; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>