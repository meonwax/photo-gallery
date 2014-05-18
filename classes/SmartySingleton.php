<?php

require_once ('../smarty/libs/Smarty.class.php');

class SmartySingleton {

	static private $instance;

	private function __construct() {}
	private function __clone() {}
	private function __wakeup() {}

	static public function instance() {

		if (!isset(self::$instance)) {

			$smarty = new Smarty;

			$smarty->setTemplateDir('../templates/');
			$smarty->setCompileDir('../smarty/templates_c/');
			$smarty->setConfigDir('../');
			$smarty->setCacheDir('../smarty/cache/');

			$smarty->configLoad('gallery.conf', 'smarty');

			$smarty->caching = $smarty->getConfigVars('caching');
			$smarty->debugging = $smarty->getConfigVars('debugging');

			self::$instance = $smarty;
		};

		return self::$instance;
	}

}
?>