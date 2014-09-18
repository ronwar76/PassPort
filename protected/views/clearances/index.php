<?php
/* @var $this ClearancesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clearances',
);

$this->menu=array(
	array('label'=>'Create Clearances', 'url'=>array('create')),
	array('label'=>'Manage Clearances', 'url'=>array('admin')),
);
?>

<h1>Clearances</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
