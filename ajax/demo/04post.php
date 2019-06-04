<?php
  $uname = $_POST['username'];
  $pw = $_POST['password'];
  if($uname == 'admin' && $pw == '123'){
    echo $uname;
  }else{
    echo '2';
  }
?>