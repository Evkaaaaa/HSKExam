<?php
$user="root";
$pasword="";
$host="localhost";
$db="HSK";
$dbh='mysql:host='.$host.';dbname='.$db.';charset=utf8';
$pdo=new PDO($dbh, $user, $pasword);
?>