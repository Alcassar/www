<?php
/* @var $this StaticPageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Static Pages',
);

$this->menu=array(
	array('label'=>'Create StaticPage', 'url'=>array('create')),
	array('label'=>'Manage StaticPage', 'url'=>array('admin')),
);
?>

<h1>Список статей:</h1>

<?php 

 foreach ($model as $page)
 {
        echo $page['page_id'].'<br />';
        echo $page['title'].'<br />';
        echo $page['content'].'<br />';
        echo $page['author'].'<br />';
        echo '<hr>';
     
 } 

?>
