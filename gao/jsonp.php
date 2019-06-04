<?php
//  $cb = $_GET['callback'];
  $cb = $_GET['cb'];
  $arr = array("username"=>"zhangsan","password"=>"123");
  echo $cb.'('.json_encode($arr).')';
?>