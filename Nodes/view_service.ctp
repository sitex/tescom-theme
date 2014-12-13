<?php $this->Nodes->set($node); ?>

<?php 

// check
if (!isset($children)) $children = array();

$service_side = '';
$sub_services = '';
foreach ($children as $child) {
	$c = $child['Node'];
	$service_side .= '<li>';
	$service_side .= $this->Html->link($c['title'], '#'.$c['slug']);
	$service_side .= '</li>';

	$sub_services .= '<h3 id="'.$c['slug'].'">';
	$sub_services .= $c['title'];
	$sub_services .= '</h3>';
	$sub_services .= $c['body'];
}


?>

<div class="spacer space2"><!-- vertical spacer --></div>

<div class="container">
	<div class="row">
		<div class="service-side span3">
			<?php if ($service_side != ''): ?>
			<ul class="nav nav-list service-sidenav affix-top">
	          <li><a href="#content"><?php echo __d('croogo', 'Move up'); ?></a></li>
	          <?php echo $service_side ?>
	        </ul>
		    <?php endif; ?>
		</div>
		<div id="content" class="span8 offset1">
			<h1><?php echo $this->Nodes->field('title'); ?></h1>
			<?php echo $this->Nodes->body(); ?>
			<?php echo $sub_services; ?>
		</div>
	</div>
</div>
