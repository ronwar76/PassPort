<?php
/* @var $this PasswordsController */
/* @var $model Passwords */
$record = Users::model()->findByAttributes(array('username'=>Yii::app()->user->name));
$dataProvider=new CActiveDataProvider('Passwords',array(
		'criteria'=>array(
				'condition'=>'users_id='.$record->id,
		)
));


$this->breadcrumbs=array(
	'Passwords'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Passwords', 'url'=>array('index')),
	array('label'=>'Create Passwords', 'url'=>array('create')),
	array('label'=>'Update Passwords', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Passwords', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Passwords', 'url'=>array('admin')),
);
?>

<h1>View Passwords #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'association',
		'username',
		'password',
		'DateCreated',
		'LastUpdate',
		'users_id',
	),
)); ?>
