<?php 

// db vars

define("host",'localhost');
define("username",'root');
define("password",'');
define("db",'pfweb');

$conn = new mysqli(host,username,password,db);

if($conn->connect_errno > 0) die('cannot connect to server !');


?>