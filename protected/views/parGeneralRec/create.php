<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ParGeneralRecs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ParGeneralRecs', 'url'=>array('index')),
    array('label'=>'Manage ParGeneralRec', 'url'=>array('admin')),
);
?>

<h1>Create ParGeneralRec</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
