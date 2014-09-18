<?php
/* @var $this ClearancesController */
/* @var $model Clearances */

$this->breadcrumbs=array(
	'Clearances'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Clearances', 'url'=>array('index')),
	array('label'=>'Create Clearances', 'url'=>array('create')),
	array('label'=>'View Clearances', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Clearances', 'url'=>array('admin')),
);
?>

<h1>Update Clearances <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>