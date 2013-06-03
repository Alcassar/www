<?php
/* @var $this StaticPageController */
/* @var $model StaticPage */

$this->breadcrumbs=array(
	'Статьи'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List StaticPage', 'url'=>array('index')),
	array('label'=>'Create StaticPage', 'url'=>array('create')),
	array('label'=>'Update StaticPage', 'url'=>array('update', 'id'=>$model->page_id)),
	array('label'=>'Delete StaticPage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->page_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StaticPage', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->title; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'title',
		'content',
		'author',
	),
)); ?>
