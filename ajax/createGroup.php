<?php

require_once '../connection.php';

$group_name=$_POST['group_name'];

$sql = "INSERT INTO groups (`name`) VALUES ('$group_name')";
if ($conn->query($sql) === TRUE) {
    $conn->close();
    echo 'success';
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    $conn->close();
}