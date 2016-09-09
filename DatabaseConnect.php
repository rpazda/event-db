<?php

	require ("config.php");
	
	public class Db
	{
		function _dbConnect()
		{
			error_reporting(E_ALL);
			ini_set('display_errors', 'on');
			
			static $connection;	// Define connection as a static variable, to avoid connecting more than once 
			
			if(!isset($connection))	// Try and connect to the database, if a connection has not been established yet
			{
				$config = parse_ini_file('config.ini');	// Load configuration as an array.
				$connection = mysqli_connect($config['host'],$config['username'],$config['password'],$config['dbname']);
			}
			// If connection was not successful, handle the error
			if($connection == false){
				return mysql_error();
			}
			else{
				return $connection;
			}
		}
	}
	
?>