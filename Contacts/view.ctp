<div class="spacer space2"><!-- vertical spacer --></div>

<div class="container">
	<div class="row">
		<div id="content" class="span8 offset2">
			<h1><?php echo __d('croogo', 'Request a call'); ?></h1>

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
	</div>
</div>