<nav class="navbar-inverse sidebar">
	<div class="navbar-inner">
	<?php
		$items = CroogoNav::items();

		$menu = CroogoNav::items();
		unset($menu['content']['children']['comments']);
		unset($menu['content']['children']['taxonomy']);
		unset($menu['blocks']);
		unset($menu['menus']);
		unset($menu['media']);
		unset($menu['extensions']['children']);
		unset($menu['settings']['children']['acl']);
		unset($menu['settings']['children']['reading']);
		unset($menu['settings']['children']['writing']);
		unset($menu['settings']['children']['comment']);
		unset($menu['settings']['children']['service']);
		unset($menu['settings']['children']['languages']);


		echo $this->Croogo->adminMenus($menu, array(
			'htmlAttributes' => array(
				'id' => 'sidebar-menu',
			),
		));
	?>
	</div>
</nav>