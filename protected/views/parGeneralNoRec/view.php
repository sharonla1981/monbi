<?php
/* @var $this ParGeneralNoRecController */
/* @var $model ParGeneralNoRec */

$this->breadcrumbs=array(
	'Par General No Recs'=>array('index'),
	$model->param,
);

$this->menu=array(
	array('label'=>'List ParGeneralNoRec', 'url'=>array('index')),
	array('label'=>'Create ParGeneralNoRec', 'url'=>array('create')),
	array('label'=>'Update ParGeneralNoRec', 'url'=>array('update', 'id'=>$model->param)),
	array('label'=>'Delete ParGeneralNoRec', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->param),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ParGeneralNoRec', 'url'=>array('admin')),
);
?>

<h1>View ParGeneralNoRec #<?php echo $model->param; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'param',
		'param_value',
	),
)); ?>
