<?php
$db=mysqli_connect('127.0.0.1','root','','ecommerce-tutorial');
if(mysqli_connect_errno()){
    echo 'Database Connection failed with following errors: '.mysqli_connect_error();
    die();
}
