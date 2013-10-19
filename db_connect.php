<?php
    $host="localhost"; // Host name
    $username="here-and-now"; // Mysql username
    $password="here-and-now"; // Mysql password
    $db_name="here_and_now"; // Database name

    $connection = @new mysqli($host, $username, $password, $db_name);
    if ($connection->connect_error) 
    {
    	die('Unable to connect to database ' . $connection->connect_error);
    }
?>