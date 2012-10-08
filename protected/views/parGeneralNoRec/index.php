<?php
/* @var $this ParGeneralNoRecController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Par General No Recs',
);

$this->menu=array(
	array('label'=>'Create ParGeneralNoRec', 'url'=>array('create')),
	array('label'=>'Manage ParGeneralNoRec', 'url'=>array('admin')),
);
?>

<h1>Par General No Recs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
