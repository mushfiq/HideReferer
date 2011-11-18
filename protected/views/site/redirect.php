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
Your page will be refreshed after 3000 seconds
<div id="url">
     
<h3><?php echo $a; ?></h3>
</div>

<?php endif; ?>