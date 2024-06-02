<?php

$host = "localhost";
$user = "root";
$pass = "";
$name = "denis";

$mysqli = new mysqli($host, $user, $pass, $name);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}