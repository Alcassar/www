<?php
/* @var $this StaticPageController */
/* @var $data StaticPage */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->page_id), array('view', 'id'=>$data->page_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text')); ?>:</b>
	<?php echo CHtml::encode($data->text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('author')); ?>:</b>
	<?php echo CHtml::encode($data->author); ?>
	<br />


</div>