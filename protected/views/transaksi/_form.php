<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaksi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pasien'); ?>
		<?php echo $form->textField($model,'id_pasien'); ?>
		<?php echo $form->error($model,'id_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pegawai'); ?>
		<?php echo $form->textField($model,'id_pegawai'); ?>
		<?php echo $form->error($model,'id_pegawai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_transaksi'); ?>
		<?php echo $form->textField($model,'tgl_transaksi'); ?>
		<?php echo $form->error($model,'tgl_transaksi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_biaya'); ?>
		<?php echo $form->textField($model,'total_biaya',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'total_biaya'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->