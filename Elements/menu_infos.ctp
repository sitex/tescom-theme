<ul class="menu first">
<?php
	if (!isset($nodesList)) $nodesList = array();
	foreach ($nodesList as $i => $n) {
		echo '<li>';
		echo $this->Html->link($n['Node']['title'], $n['Node']['url']);
		echo '</li>';
	}
?>
</ul>