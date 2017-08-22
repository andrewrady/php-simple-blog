<?php
$user = 'root';
$password = 'root';

try {
	$db = new PDO('mysql:host=localhost;dbname=cari', $user, $password);
} catch (Exception $e) {
	echo 'Error connecting to the Database: ' . $e->getMessage();
    exit;
}
