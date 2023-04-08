<?php
/* @var $this DetailTransaksiController */
/* @var $model DetailTransaksi */

$this->breadcrumbs=array(
	'Detail Transaksis'=>array('index'),
	$model->id_detail_transaksi,
);

$this->menu=array(
	array('label'=>'List DetailTransaksi', 'url'=>array('index')),
	array('label'=>'Create DetailTransaksi', 'url'=>array('create')),
	array('label'=>'Update DetailTransaksi', 'url'=>array('update', 'id'=>$model->id_detail_transaksi)),
	array('label'=>'Delete DetailTransaksi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_detail_transaksi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DetailTransaksi', 'url'=>array('admin')),
);
?>

<h1>View DetailTransaksi #<?php echo $model->id_detail_transaksi; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_detail_transaksi',
		'id_transaksi',
		'id_tindakan',
		'id_obat',
		'jumlah',
	),
)); ?>
