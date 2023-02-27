<?php
    $conn = mysqli_connect("localhost", "root", "", "mycontacts");
    if(!$conn){
        die('Error getting to DB => ');
    }
?>