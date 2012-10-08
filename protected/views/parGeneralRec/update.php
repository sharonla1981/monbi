<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ParGeneralRecs'=>array('index'),
	'View'=>array('view', 'param'=>$model->param, 'sub_param'=>$model->sub_param),
	'Update',
);

$this->menu=array(
	array('label'=>'List ParGeneralRec', 'url'=>array('index')),
	array('label'=>'Create ParGeneralRec', 'url'=>array('create')),
	array('label'=>'View ParGeneralRec', 'url'=>array('view', 'param'=>$model->param, 'sub_param'=>$model->sub_param)),
	array('label'=>'Manage ParGeneralRec', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
