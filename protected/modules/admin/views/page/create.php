<?php
/* @var $this PageController */
/* @var $model Page */

$this->menu=array(
	    array('label'=>'Список страниц', 'url'=>array('index')),
);
?>

<h1>Создать страницу</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>