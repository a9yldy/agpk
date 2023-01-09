<?php

$name = $_POST['name'];
$phone = $_POST['call'];
$mail = $_POST['pochta'];
$prof = $_POST['profession'];

$mysql = new mysqli('localhost', 'root', 'root', 'agpk');
$mysql->query("INSERT INTO `zaiavki` (`name`, `phone`, `mail`, `prof`)VALUES('$name', '$phone', '$mail', '$prof')");
  
  $mysql->close();

  echo "Sizdin otinishiniz qabyldandy";
?>