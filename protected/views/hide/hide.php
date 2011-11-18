<?php
$this->pageTitle=Yii::app()->name . ' - HideRefer';
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1>HideRefer</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
</p>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hide-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url'); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>
        
        <div class="row" id="url_direct">
		<?php echo $form->labelEx($model,'urlDirect'); ?>
		<?php echo $form->textArea($model,'urlDirect'); ?>
		<?php echo $form->error($model,'urlDirect'); ?>
	</div>
        <div class="row" id="url_html">
		<?php echo $form->labelEx($model,'urlHtml'); ?>
		<?php echo $form->textArea($model,'urlHtml'); ?>
		<?php echo $form->error($model,'urlHtml'); ?>
	</div>
        <div class="row" id="url_bbcode">
		<?php echo $form->labelEx($model,'urlBbcode'); ?>
		<?php echo $form->textArea($model,'urlBbcode'); ?>
		<?php echo $form->error($model,'urlBbcode'); ?>
	</div>
        

	

	<div class="row buttons" id="linkSubmit">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>