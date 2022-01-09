<?php

    require_once '../connection.php';

    $query = "SELECT * FROM groups";
    $result = mysqli_query($conn, $query);
    $groups=[];

    while($row = mysqli_fetch_assoc($result)) 
    {
     
        array_push($groups, $row);
    }
    echo json_encode($groups);
