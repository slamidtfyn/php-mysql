<?php
require_once('config.php');


try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
$sql = 'SELECT id,name
    FROM tbl1';

$sth = $dbh->prepare("select * from member");
$sth->execute();
$members = $sth->fetchAll();
print_r($members);