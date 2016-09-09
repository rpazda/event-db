<?php

	require ("config.php");
	
	public class DatabaseConnect
	{
		function _dbConnect()
		{
			$link = new mysqli(DB_HOST, DB_USER, DB_PASSWOR, DB_DATABASE) or die("Unable to connect!");
			return $link;
		}
	}
	
?>