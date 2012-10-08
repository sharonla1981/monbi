<?php
/* @var $this ParGeneralNoRecController */
/* @var $model ParGeneralNoRec */

$this->breadcrumbs=array(
	'Par General No Recs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ParGeneralNoRec', 'url'=>array('index')),
	array('label'=>'Manage ParGeneralNoRec', 'url'=>array('admin')),
);
?>

<h1>Create ParGeneralNoRec</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>