<?php /* @var $this Controller */ ?>
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
	<div class = "row">
		<div id="header" class = "span3">
			<h2 id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></h2>
			<div><? if(isset($profile)) {print_r($profile['response']['players']);} ?></div>
		</div><!-- header -->
		<div class = "span9" id = "profileContainer">
			<div class = "span4">
				<? if(Yii::app()->user->isGuest): ?>
					<a href="?login">
						<img src="http://cdn.steamcommunity.com/public/images/signinthroughsteam/sits_large_border.png"/>
					</a>
				<? else: ?>
				<div class = "span">
					<?= CHtml::image(Yii::app()->user->getUser()->avatarmedium) ?>
				</div>
				<? endif ?>
			</div>
		</div>
		
	</div>
	<div class = "subnav dropdown" id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site'), 'active'=>$this->id=='site'?true:false),
				array('label'=>'Heroes', 'url'=>array('/heroes'), 'active'=>$this->id=='heroes'?true:false),
				array('label'=>'My Inventory', 'url'=>array('/inventory'), 'active'=>$this->id=='inventory'?true:false),
				array('label'=>'Users', 'url'=>array('/users')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Menu',
				 'url'=>'#',
				  'linkOptions'=> array('class'=>'dropdown-toggle', 'data-toggle'=>'dropdown','id'=>'profileMenu'),
				  'itemOptions'=>array(
					'class' => 'dropdown pull-right'
					),
				  'submenuOptions'=>array('class'=>'dropdown-menu', 'role'=>'menu', 'aria-labelledby'=>'profileMenu'),
				  'items'=>array(
				  	array('label'=>'Steam Profile', 'url'=>'http://steamcommunity.com/profiles/'.Yii::app()->user->id),
				  	array('label'=>'Logout', 'url'=>'?logout'),
				  	),
				  ),
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
	<div class = "row">
		<div id="footer" class = "span12 text-center">
			<hr>
			Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
			All Rights Reserved.<br/>
			
		</div>
	</div><!-- footer -->

</div><!-- page -->
<script src="<?=Yii::app()->request->baseUrl.'/js/jquery-1.9.1.js'?>"></script>
<script src="<?=Yii::app()->request->baseUrl.'/js/less-1.3.3.min.js'?>"></script>
<script src="<?=Yii::app()->request->baseUrl.'/js/bootstrap.js'?>"></script>
</body>
</html>
