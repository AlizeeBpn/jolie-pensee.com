<?php

try{
  $access=new pdo("mysql:host=localhost;dbname=u741973141_jolieshop;charset=utf8","u741973141_localhost","Nekosky3314*");
  $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

} catch (Exception $e)
{
  $e->getMessage();
}

?>
