<?php
/* @var $this ParGeneralNoRecController */
/* @var $model ParGeneralNoRec */

$this->breadcrumbs=array(
	'Par General No Recs'=>array('index'),
	$model->param=>array('view','id'=>$model->param),
	'Update',
);

$this->menu=array(
	array('label'=>'List ParGeneralNoRec', 'url'=>array('index')),
	array('label'=>'Create ParGeneralNoRec', 'url'=>array('create')),
	array('label'=>'View ParGeneralNoRec', 'url'=>array('view', 'id'=>$model->param)),
	array('label'=>'Manage ParGeneralNoRec', 'url'=>array('admin')),
);
?>

<h1>Update ParGeneralNoRec <?php echo $model->param; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>