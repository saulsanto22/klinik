<?php
/* @var $this DetailTransaksiController */
/* @var $data DetailTransaksi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_detail_transaksi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_detail_transaksi), array('view', 'id'=>$data->id_detail_transaksi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_transaksi')); ?>:</b>
	<?php echo CHtml::encode($data->id_transaksi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tindakan')); ?>:</b>
	<?php echo CHtml::encode($data->id_tindakan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_obat')); ?>:</b>
	<?php echo CHtml::encode($data->id_obat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah); ?>
	<br />


</div>