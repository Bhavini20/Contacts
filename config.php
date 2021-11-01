<?php

$conn = new mysqli('localhost','root','','contacts');

if(!$conn){
    die(mysqli_error($conn));
}

?>