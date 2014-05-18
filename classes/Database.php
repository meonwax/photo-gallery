<?php

class Database {

	static private $db;

	static public function query($sql) {

		if (!isset(self::$db)) {
			$db = new SQLite3('db.sqlite');
		}
		return $db->query($sql);
	}

}
?>
