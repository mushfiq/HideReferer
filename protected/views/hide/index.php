<?php
$this->pageTitle=Yii::app()->name;
?>
 
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<p>Congratulations! You have successfully created your first hello World.</p>
<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'hiderefer-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    'focus'=>array($model,'name'),
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="row">
    <?php echo $form->labelEx($model,'name'); ?>
    <?php echo $form->textField($model,'name'); ?>
    <?php echo $form->error($model,'name'); ?>
</div>

<?php $this->endWidget(); ?>
<div ></div>