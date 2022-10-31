<?php
$hostname = 'localhost';
$username = 'miragem';
$password = '123';
$dbname = 'city';
$db_con = mysqli_connect($hostname, $username, $password, $dbname) or die("something wrong");
var_dump(mysqli_connect_error());
mysqli_set_charset($db_con, 'utf8');
$insert = mysqli_query($db_con, "INSERT INTO person (id_person, name, age) VALUES (NULL, 'Boris', 15)");
