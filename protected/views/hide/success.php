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
Your cloaked link is:
</p>

<div class="form">
    <a target="_blank" href="http://<?php echo $msg; ?>">http://<?php echo $msg; ?></a>

</div><!-- form -->

<?php endif; ?>