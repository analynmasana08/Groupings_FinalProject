<?php
$servername= 'localhost';
$username= 'root';
$password= '';
$database= 'db_catering_reservation';

$db = new mysqli($servername,$username,$password,$database);

  if(!$db){
    die ("Error on the Connection" . $db->connect_error);
  }

?>