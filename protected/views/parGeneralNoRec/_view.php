<?php
/* @var $this ParGeneralNoRecController */
/* @var $data ParGeneralNoRec */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('param')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->param), array('view', 'id'=>$data->param)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('param_value')); ?>:</b>
	<?php echo CHtml::encode($data->param_value); ?>
	<br />


</div>