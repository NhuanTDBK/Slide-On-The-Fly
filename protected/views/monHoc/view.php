<?php
/* @var $this MonHocController */
/* @var $model MonHoc */

$this->breadcrumbs=array(
	'Môn học'=>array('index'),
	$model->mamonhoc,
);

$this->menu=array(
	//array('label'=>'List MonHoc', 'url'=>array('index')),
	//array('label'=>'Create MonHoc', 'url'=>array('create')),
	array('label'=>'Sửa đổi thông tin', 'url'=>array('update', 'id'=>$model->mamonhoc),'visible'=>!Yii::app()->user->getState('tendangnhap')=='admin'),
	array('label'=>'Xóa môn học', 'url'=>'#','visible'=>!Yii::app()->user->getState('tendangnhap')=='admin', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->mamonhoc),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Thêm slide','url'=>array('/slides/create','id'=>$model->mamonhoc),'visible'=>!Yii::app()->user->getState('tendangnhap')=='admin'),
	//array('label'=>'Manage MonHoc', 'url'=>array('admin')),
);
?>

<h1>Thông tin môn: <?php echo $model->tenmonhoc; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'mamonhoc',
		'tenmonhoc',
		'mieuta',
	),
)); ?>

<div>
<b>Link download bài giảng</b>
</div>

<?php Yii::app()->user->isGuest
? print 'Bạn cần Đăng nhập để xem được Link Dowload'
: $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$slide,
	'itemView'=>'/slides/_viewMonHoc',
)); ?>




