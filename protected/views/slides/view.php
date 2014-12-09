<?php
/* @var $this SlidesController */
/* @var $model Slides */

$this->breadcrumbs=array(
	'Slides'=>array('index'),
	$model->id,
);

$this->menu=array(
	//array('label'=>'List Slides', 'url'=>array('index')),
	//array('label'=>'Create Slides', 'url'=>array('create')),
	array('label'=>'Sửa thông tin slide', 'url'=>array('update', 'id'=>$model->id),'visible'=>Yii::app()->user->getState('name')=='admin'),
	array('label'=>'Xóa slide', 'url'=>'#','visible'=>Yii::app()->user->getState('name')=='admin', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Slides', 'url'=>array('admin')),
);
?>

<h1>Xem thông tin slide<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'noidung',
		'tags',
		'tieude',
	),
)); ?>
<?php /*$this->widget('booster.widgets.TbFileUpload', array(
    'url' => $this->createUrl("my/upload"),
    'model' => $model,
    'attribute' => 'picture', // see the attribute?
    'multiple' => true,
    'options' => array(
    'maxFileSize' => 2000000,
    'acceptFileTypes' => 'js:/(\.|\/)(gif|jpe?g|png)$/i',
))); */?>

