<?php
require_once('functions.inc.php');
$con = connect_db();

$sql = "insert into users(username,password,firstname,lastname) values('user1','aa','bb','cc')";
$res = mysqli_query($con, $sql);
var_dump($res);
