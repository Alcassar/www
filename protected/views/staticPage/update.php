<?php
/* @var $this StaticPageController */
/* @var $model StaticPage */

$this->breadcrumbs=array(
	'Static Pages'=>array('index'),
	$model->title=>array('view','id'=>$model->page_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StaticPage', 'url'=>array('index')),
	array('label'=>'Create StaticPage', 'url'=>array('create')),
	array('label'=>'View StaticPage', 'url'=>array('view', 'id'=>$model->page_id)),
	array('label'=>'Manage StaticPage', 'url'=>array('admin')),
);
?>

<h1>Update StaticPage <?php echo $model->page_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>