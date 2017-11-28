<?php

namespace App;

class UniversalConnection implements IConnection
{
	private static $db_host;
	private static $db_name;
	private static $db_user;
	private static $db_pass;
	private static $db_charset;
	private static $power;

	public function activateDB()
	{
		self::$db_host = getenv('DB_HOST');
		self::$db_name = getenv('DB_NAME');
		self::$db_user = getenv('DB_USER');
		self::$db_pass = getenv('DB_PASS');
		self::$db_charset = getenv('DB_CHARSET');

		try {
			self::$power = new \PDO("mysql:host=".self::$db_host.";charset=".self::$db_charset.";dbname=".self::$db_name, self::$db_user, self::$db_pass);
			echo "The database power is ON!";
		} catch(PDOException $e) {
			echo "Connection Failed: ".$e->getMessage();
		}


	}
}
