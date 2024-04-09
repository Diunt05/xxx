<?php

$servername = 'localhost';
$username='root';
$password='';
$dbname='xuong_php_basic';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối thành công";


} catch (PDOException $e) {
    echo "loi:".$e->getMessage();
}

?>