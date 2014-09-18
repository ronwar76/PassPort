<?php
/* @var $this ClearancesController */
/* @var $model Clearances */

$this->breadcrumbs=array(
	'Clearances'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Clearances', 'url'=>array('index')),
	array('label'=>'Create Clearances', 'url'=>array('create')),
	array('label'=>'Update Clearances', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Clearances', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Clearances', 'url'=>array('admin')),
);
?>

<h1>View Clearances #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
		'DateCreated',
		'LastUpdate',
	),
)); ?>
