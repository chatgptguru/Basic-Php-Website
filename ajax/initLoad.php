<?php

    require_once '../connection.php';
    $query = "SELECT * FROM abouts  ORDER BY updated_date DESC";
    $result = mysqli_query($conn, $query);
    $inputs=[];
    $outputs=[];
    $actions=[];

    while($row = mysqli_fetch_assoc($result)) 
    {
        if($row['type'] == 'inputs'){
            array_push($inputs, $row);
        }elseif($row['type'] == 'outputs'){
            array_push($outputs, $row);
        }else{
            array_push($actions, $row);
        }
    }

    $data=[
        'inputs' => $inputs,
        'outputs' => $outputs,
        'actions' => $actions
    ];
    
    echo json_encode($data);
    