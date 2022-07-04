<?php

$server = "localhost";
$user   = "root";
$pass   = "";
$db_name = "tugas_data_covid";

$db = new mysqli($server, $user, $pass, $db_name);

if ($db->connect_error) {
    die("Connection filled: " . $db->connect_error);
}
