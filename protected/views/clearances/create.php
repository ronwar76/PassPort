<?php
/* @var $this ClearancesController */
/* @var $model Clearances */

$this->breadcrumbs=array(
	'Clearances'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Clearances', 'url'=>array('index')),
	array('label'=>'Manage Clearances', 'url'=>array('admin')),
);
?>

<h1>Create Clearances</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>