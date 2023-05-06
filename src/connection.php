<?php

$con = mysqli_init(); 
mysqli_real_connect();
if (mysqli_connect_errno()) {
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

?>