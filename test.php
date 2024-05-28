<?php

    session_start();

$servername = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'newbdraduga';
$allgood = 'sucsessfuly';

$mysql = new mysqli($servername, $user, $pass, $dbname);
$mysql -> query("SET NAMES 'utf8'");

if ($mysql -> connect_error) {
    die('Connect failed :'.$mysql->connect_error);
}

echo 'Id: '.$_SESSION['id'].'<br>';
echo 'Name: '.$_SESSION['name'].'<br>';
echo 'About: '.$_SESSION['about'].'<br>';
echo 'Date: '.$_SESSION['data'].'<br>';

?>