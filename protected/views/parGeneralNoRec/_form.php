<?php
/* @var $this ParGeneralNoRecController */
/* @var $model ParGeneralNoRec */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'par-general-no-rec-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'param'); ?>
		<?php echo $form->textField($model,'param',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'param'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'param_value'); ?>
		<?php echo $form->textField($model,'param_value',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'param_value'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->