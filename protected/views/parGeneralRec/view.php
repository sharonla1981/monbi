<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ParGeneralRecs'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List ParGeneralRec', 'url'=>array('index')),
	array('label'=>'Create ParGeneralRec', 'url'=>array('create')),
	array('label'=>'Update ParGeneralRec', 'url'=>array('update', 'param'=>$model->param, 'sub_param'=>$model->sub_param)),
	array('label'=>'Delete ParGeneralRec', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'param'=>$model->param, 'sub_param'=>$model->sub_param),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ParGeneralRec', 'url'=>array('admin')),
);
?>

<h1>View ParGeneralRec</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'param',
		'sub_param',
		'param_value',
	),
)); ?>
