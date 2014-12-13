<?php
	if (!isset($nodesList)) $nodesList = array();
	foreach ($nodesList as $i => $n) {
		print '<div class="span2">';
		print $this->Html->link($n['Node']['title'], $n['Node']['url']);
		print '</div>';
	}
?>