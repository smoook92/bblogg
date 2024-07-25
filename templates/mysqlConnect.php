<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$DBname = "bd_blog";

$mysqli = new mysqli($servername, $username, $password, $DBname);

if($mysqli -> connect_error) {
    printf("Соединение не удалось: %s\n", $mysqli -> connect_error);
    exit();
}