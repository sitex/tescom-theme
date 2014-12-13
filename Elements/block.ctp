<?php
$this->set(compact('block'));
$b = $block['Block'];

echo $this->Layout->filter($b['body'], array(
	'model' => 'Block', 'id' => $b['id']
));
?>