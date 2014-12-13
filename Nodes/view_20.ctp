<?php // Contacts ?>

<?php $this->Nodes->set($node); ?>

<div class="spacer space2"><!-- vertical spacer --></div>

<div class="container">
	<div class="row">
		<div id="content" class="span8 offset2">
			<h1><?php echo $this->Nodes->field('title'); ?></h1>


			<?php if (isset($site_contact['phone']) && $site_contact['phone']!=''): ?>
			<span><?php echo __d('croogo', 'Information Phone'); ?>:</span>
			<?php echo str_replace(',', '<br>', $site_contact['phone']); ?>
			<?php endif; ?>

			<?php echo $this->Nodes->field('body'); ?>
		</div>
	</div>
</div>
