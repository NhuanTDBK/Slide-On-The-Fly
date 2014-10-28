<?php
/* controller SlidesController */
/* model Slides */
//Lấy thông tin slide được gửi tới 
$this->breadcrumbs=array(
	'Slides'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Slides', 'url'=>array('index')),
	array('label'=>'Create Slides', 'url'=>array('create')),
	array('label'=>'View Slides', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Slides', 'url'=>array('admin')),
);
?>

<h1>Cập nhật Slides <?php echo $model->id; ?></h1>
<!--Mở trang form nhập dữ liệu -->
<?php $this->renderPartial('_form', array('model'=>$model)); ?>-