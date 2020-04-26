<?php

$connection = mysqli_connect(
  'localhost', 'root', 'password', 'gym'
);

if($connection) {
  echo 'database is connected';
}


?>