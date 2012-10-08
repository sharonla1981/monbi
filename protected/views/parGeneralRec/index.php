<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ParGeneralRecs',
);

$this->menu=array(
	array('label'=>'Create ParGeneralRec', 'url'=>array('create')),
	array('label'=>'Manage ParGeneralRec', 'url'=>array('admin')),
);
?>

<h1>ParGeneralRecs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
