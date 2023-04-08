<?php
/* @var $this DetailTransaksiController */
/* @var $model DetailTransaksi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detail-transaksi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_transaksi'); ?>
		<?php echo $form->textField($model,'id_transaksi'); ?>
		<?php echo $form->error($model,'id_transaksi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tindakan'); ?>
		<?php echo $form->textField($model,'id_tindakan'); ?>
		<?php echo $form->error($model,'id_tindakan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_obat'); ?>
		<?php echo $form->textField($model,'id_obat'); ?>
		<?php echo $form->error($model,'id_obat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah'); ?>
		<?php echo $form->textField($model,'jumlah'); ?>
		<?php echo $form->error($model,'jumlah'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->