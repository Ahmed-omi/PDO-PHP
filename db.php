<?php
$dsn = 'mysql:host=localhost;dbname=company';
$username = 'root';
$password = '*france*12';
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {

}