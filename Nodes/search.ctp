<div class="spacer space2"><!-- vertical spacer --></div>

<div class="container">
	<div class="row">
		<div id="content" class="span12">

		<h1><?php echo  __d('croogo', 'Search Results: %s', ''); ?></h1>

	<?php
		if (count($nodes) == 0) {
			echo __d('croogo', 'No items found.');
		}
	?>

	<?php
		foreach ($nodes as $node):
			$this->Nodes->set($node);
	?>
	<div>
		<h3><?php echo $this->Html->link($this->Nodes->field('title'), $this->Nodes->field('url')); ?></h3>
		<?php echo $this->Nodes->field('body'); ?>
	</div>
	<?php
		endforeach;
	?>


		</div>
	</div>
</div>
