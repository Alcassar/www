<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->menu=array(
	array('label'=>'Список категорий', 'url'=>array('index')),
	array('label'=>'Создать категорию', 'url'=>array('create')),
);

?>

<h1>Управление категориями</h1>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'category-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'category_id',
		'title',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
