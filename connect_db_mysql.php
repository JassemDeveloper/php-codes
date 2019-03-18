<?php
$user='username';
$pwd='';
$host='hostname';
$db_name='databasename';

	try {

  # MySQL with PDO_MYSQL
      $con = new PDO("mysql:host=$host;dbname=$db_name", $user, $pwd);
	  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo $e->getMessage();
}


?>