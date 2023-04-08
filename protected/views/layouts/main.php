<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>


<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
</head>
<body>
        <div id="header">
            <div class="container">
                <h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>
            </div>
        </div>

        <div id="content">
/    <div class="container">
                <div id="menu">
                    <?php $this->widget('zii.widgets.CMenu',array(
                        'items'=>array(
                            array('label'=>'Home', 'url'=>array('/site/index')),
                            array('label'=>'Master', 'url'=>array('/master/index'), 'visible'=>Yii::app()->user->checkAccess('master')),
                            array('label'=>'Pendaftaran', 'url'=>array('/pendaftaran/create'), 'visible'=>Yii::app()->user->checkAccess('pendaftaran')),
                            array('label'=>'Tindakan', 'url'=>array('/tindakan/create'), 'visible'=>Yii::app()->user->checkAccess('tindakan')),
                            array('label'=>'Pembayaran', 'url'=>array('/pembayaran/index'), 'visible'=>Yii::app()->user->checkAccess('pembayaran')),
                            array('label'=>'Laporan', 'url'=>array('/laporan/index'), 'visible'=>Yii::app()->user->checkAccess('laporan')),
                            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout')),
                        ),
                    )); ?>
                </div>
                <?php echo $content; ?>
            </div>
        
            <?php echo $content; ?>
     

        <div id="footer">
            <div class="container">
                <p>&copy; <?php echo date('Y'); ?> <?php echo CHtml::encode(Yii::app()->name); ?></p>
            </div>
        </div>
    </body>
    </html>
