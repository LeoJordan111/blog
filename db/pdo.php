<?php
$host = "127.0.0.1";
$dbname = "blog";
$dsn = "mysql:dbname=$dbname;host=$host;port=3306;charset=utf8";
$username = "root";
$password = "";
$pdo;

try {
$pdo = new PDO($dsn, $username, $password);

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print('Erreur : ' . $e->getMessage());

}