<?php
	// Lang
	$lang = Configure::read('Config.language');
	// here
	$here = $this->request->here;

	// check
	if (!isset($nodes)) $nodes = array();

	// langBar
	$rus = '/rus';
	$eng = '/eng';
	if (in_array(substr($here, 0, 4), array('/rus','/kaz','/eng'))) {
		$rus = '/rus/'.substr($here, 5);
		$eng = '/eng/'.substr($here, 5);
	}



	$cakeDescription = __d('cake_dev', 'TES Consulting');

	$page = '';
	$type = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>: <?php echo $title_for_layout; ?>
	</title>

	<meta name="viewport" content="width=device-width">

	<!-- google font -->
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');

		echo $this->Html->css('bootstrap');
		echo $this->Html->css('screen');

		echo $this->fetch('css');

		echo $this->Layout->js();

		// jquery
		echo $this->Html->script('lib/jquery-1.10.1.min');
		// bootstrap js
		echo $this->Html->script('lib/bootstrap.min');
		// slider
		echo $this->Html->script('plugin/jquery.iosslider.min');
		// scrollTo
		echo $this->Html->script('plugin/jquery.scrollTo.min');
		echo $this->Html->script('plugin/jquery.localScroll.min');
		// main
		echo $this->Html->script('main');

		echo $this->fetch('script');
	?>

</head>

<body>
	<div class="container">
		<div class="row header">
			<div class="span2 logo"><a href="/"><?php print $this->Html->image('logo_tes.png', array('alt'=>"TES")) ?></a></div>
			<div class="span1">
				<?php echo $this->Regions->blocks('info'); ?>
			</div>
			<div class="span1 text-right"><?php print $this->Html->image('icon_call.png', array('alt'=>"call")) ?></div>
			<div class="span2 call">
				<div class="request_form" style="display: none">

<?php
	$alias = 'contact';
	echo $this->Form->create('Message', array(
		'url' => array(
			'plugin' => 'contacts',
			'controller' => 'contacts',
			'action' => 'view',
			$alias,
		),
		'inputDefaults' => array(
			'label' => false,
			// 'div' => false,
		)
	));

	echo $this->Form->input('Message.title', array('type'=>'hidden', 'value'=>'Сообщение с сайта'));
	echo $this->Form->input('Message.body', array('type'=>'hidden', 'value'=>'Заявка на звонок'));
	echo $this->Form->input('Message.email', array('type'=>'hidden', 'value'=>'noreply@tes.com.kz'));

	echo $this->Form->input('Message.name', array('placeholder'=>__d('croogo','Your Name')));
	echo $this->Form->input('Message.phone', array('placeholder'=>__d('croogo','Phone')));

	echo $this->Form->submit(__d('croogo', 'Send'), array('div'=>false));
	echo $this->Form->button(__d('croogo', 'Close'), array('class'=>'cancel'));

	echo $this->Form->end();
?>
				</div>
				<a class="request" href="#"><?php echo __d('croogo', 'Request a call'); ?></a><br>
				<span><?php echo __d('croogo', 'We will call you back'); ?></span>
			</div>
			<div class="span2 phones">
				<?php if (isset($site_contact['phone']) && $site_contact['phone']!=''): ?>
				<span><?php echo __d('croogo', 'Information Phone'); ?>:</span>
				<?php echo str_replace(',', '<br>', $site_contact['phone']); ?>
				<?php endif; ?>
			</div>
			<div class="span1">
				<div class="social">
				<a href="#"><?php print $this->Html->image('icon_fb.png', array('alt'=>"fb")) ?></a>
				<a href="#"><?php print $this->Html->image('icon_skype.png', array('alt'=>"skype")) ?></a>
				</div>
			</div>
			<div class="span3">
				<form id="searchform" method="post" action="javascript: document.location.href=''+Croogo.basePath+'search/q:'+encodeURI($('#searchform #q').val());">
				<input name="q" class="search" placeholder="<?php echo __d('croogo', 'Search...') ?>" type="text" id="q"/>
				<input class="submit" type="submit" value="ok" style="display: none;"/>
				</form>


				<ul class="menu langBar">
<?php
	$langBar = '';
	$langs 	 = array();
	$langs['rus'] = '<li><a href="'.$rus.'">Русский</a></li>';
	$langs['eng'] = '<li><a href="'.$eng.'">English</a></li>';
	switch ($lang) {
		case 'rus':
			$langs['rus'] = '<li class="active"><a href="'.$rus.'">Русский</a></li>';
			break;
		case 'eng':
			$langs['eng'] = '<li class="active"><a href="'.$eng.'">English</a></li>';
			break;
	}
	$langBar = implode('', $langs);
	print $langBar;
?>

				</ul>
			</div>
		</div>
	</div>
	<div class="topMenu_wrapper">
		<div class="container">
			<div class="row topMenu">
				<?php echo $this->Regions->blocks('top'); ?>
			</div>
		</div>
	</div>

	<?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>


	<div class="footer_wrapper">
		<div class="container">
		<div class="row footer">
			<div class="span1">© <?php echo date('Y', time()); ?> <br>TES Consulting</div>
			<div class="span2 offset1">
				<?php if (isset($site_contact['phone']) && $site_contact['phone']!=''): ?>
				<?php echo __d('croogo', 'Information Phone'); ?>:<br>
				<?php echo str_replace(',', '<br>', $site_contact['phone']); ?>
				<?php endif; ?>
			</div>
			<div class="span2">
				<?php if (isset($site_contact['email']) && $site_contact['email']!=''): ?>
				<?php echo __d('croogo', 'Email') ?>:
				<?php echo $this->Html->link($site_contact['email'], 'mailto:'.$site_contact['email']); ?>
				<?php endif; ?>
			</div>
		</div>
		</div>
	</div>


	<script>
	// var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	// (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	// g.src='//www.google-analytics.com/ga.js';
	// s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>
	<?php
		echo $this->Blocks->get('scriptBottom');
		echo $this->Js->writeBuffer();
	?>

</body>

</html>