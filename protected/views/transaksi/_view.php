<?php
/* @var $this TransaksiController */
/* @var $data Transaksi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_transaksi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_transaksi), array('view', 'id'=>$data->id_transaksi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pasien')); ?>:</b>
	<?php echo CHtml::encode($data->id_pasien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pegawai')); ?>:</b>
	<?php echo CHtml::encode($data->id_pegawai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_transaksi')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_transaksi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_biaya')); ?>:</b>
	<?php echo CHtml::encode($data->total_biaya); ?>
	<br />


</div>