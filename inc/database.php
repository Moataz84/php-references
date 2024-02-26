<?php
  $db_name = 'name';
  $host = 'localhost';
  $username = 'username';
  $password = 'password';

  $connection = new mysqli($host, $username, $password, $db_name);

  if ($connection->connect_error) die();
?>