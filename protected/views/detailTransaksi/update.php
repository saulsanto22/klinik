<?php
/* @var $this DetailTransaksiController */
/* @var $model DetailTransaksi */

$this->breadcrumbs=array(
	'Detail Transaksis'=>array('index'),
	$model->id_detail_transaksi=>array('view','id'=>$model->id_detail_transaksi),
	'Update',
);

$this->menu=array(
	array('label'=>'List DetailTransaksi', 'url'=>array('index')),
	array('label'=>'Create DetailTransaksi', 'url'=>array('create')),
	array('label'=>'View DetailTransaksi', 'url'=>array('view', 'id'=>$model->id_detail_transaksi)),
	array('label'=>'Manage DetailTransaksi', 'url'=>array('admin')),
);
?>

<h1>Update DetailTransaksi <?php echo $model->id_detail_transaksi; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>