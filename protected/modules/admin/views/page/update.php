<?php
/* @var $this PageController */
/* @var $model Page */

$this->menu=array(
	array('label'=>'Список страниц', 'url'=>array('index')),
	array('label'=>'Создать страницу', 'url'=>array('create')),
	array('label'=>'Просмотреть страницу', 'url'=>array('view', 'id'=>$model->page_id)),
	array('label'=>'Управление страницами', 'url'=>array('admin')),
);
?>

<h1>Обновить страницу <?php echo $model->page_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>