<?php
  $arr = array("username" => "zhangsan","password" => "123456");
  //echo 'var data ='.json_encode($arr);

  $cb = $_GET["callback"];
  $name = $_GET["username"];
  $pw = $_GET["password"];
  echo $cb.'('.'{"username":"'.$name.'","password":"'.$pw.'"}'.')';
  //echo $cb.'('.json_encode($arr).')';
?>