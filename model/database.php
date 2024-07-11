<?php

class Database
{

	public static function Conn()
		{
	define('DB_NAME','tecnoact_admpantallas');
    $conn = new PDO('mysql:host=201.217.241.4;dbname=fhpchile_base','fhpchile_fhpchil','v m n t x ',array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES \'UTF8\''));
			$conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return $conn;
		}
	}
	define('DB_HOST','201.217.241.4');
	define('DB_NAME','fhpchile_base');
	define('DB_USER','fhpchile_fhpchil');
	define('DB_PASS','v m n t x ');
/*
	public static function Conn()
	{
		$conn = new PDO('mysql:host=localhost;dbname=lapolar','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES \'UTF8\''));
		$conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		return $conn;
	}

}
define('DB_HOST','localhost');
define('DB_NAME','lapolar');
define('DB_USER','root');
define('DB_PASS','');
?>
*/
