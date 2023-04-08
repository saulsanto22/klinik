<h2>Login</h2>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'login-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
)); ?>

<div class="row">
    <?php echo $form->labelEx($model,'username');?>
    <div class="row">
    <?php echo $form->labelEx($model,'password'); ?>
    <?php echo $form->passwordField($model,'password'); ?>
    <?php echo $form->error($model,'password'); ?>
</div>

<?php if (CCaptcha::checkRequirements()): ?>
<div class="row">
    <?php echo $form->labelEx($model,'verifyCode'); ?>
    <?php $this->widget('CCaptcha'); ?>
    <?php echo $form->textField($model,'verifyCode'); ?>
    <?php echo $form->error($model,'verifyCode'); ?>
</div>
<?php endif; ?>

<div class="row buttons">
    <?php echo CHtml::submitButton('Login'); ?>
</div>

<?php $this->endWidget(); ?>