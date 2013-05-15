<?php /* @var $this Controller */ ?>
<?php include('openid.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/css.css" />
	<link rel="stylesheet/less" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/css.less" />

	

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">

		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
		<div><?= $action ?></div>
		<div><? if(isset($profile)) {print_r($profile['response']['players']);} ?></div>
	</div><!-- header -->

	<div class = "subnav" id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site'), 'active'=>$this->id=='site'?true:false),
				array('label'=>'Heroes', 'url'=>array('/heroes'), 'active'=>$this->id=='heroes'?true:false),
				array('label'=>'My Inventory', 'url'=>array('/inventory'), 'active'=>$this->id=='inventory'?true:false),
				array('label'=>'Users', 'url'=>array('/site/users')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
			),
			'htmlOptions'=>array(
				'class' => 'nav nav-pills',
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
	
	<div id="footer" class = "span12">
		<hr>
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->
<script src="<?=Yii::app()->request->baseUrl.'/js/less-1.3.3.min.js'?>"></script>
</body>
</html>
