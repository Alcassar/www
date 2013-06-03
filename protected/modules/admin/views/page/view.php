<?php
/* @var $this PageController */
/* @var $model Page */

$this->menu=array(
	array('label'=>'Список страниц', 'url'=>array('index')),
	array('label'=>'Создать страницу', 'url'=>array('create')),
	array('label'=>'Редактировать страницу', 'url'=>array('update', 'id'=>$model->page_id)),
	array('label'=>'Удалить страницу', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->page_id),'confirm'=>'Вы уверены, что хотите удалить данную страницу?')),
	
);
?>

<h1>Посмотр страницы "<?php echo $model->title; ?>"</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'page_id',
		'title',
		'content',
		'author',
		'created',
		'category_id',
	),
)); ?>
