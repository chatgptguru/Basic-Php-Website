<?php

require_once '../connection.php';

$el_id=$_POST['el_id'];
$group=$_POST['group'];

$old_el = "SELECT group_id FROM abouts WHERE id = $el_id";
$old_groups = mysqli_query($conn, $old_el);
$old_group_row = mysqli_fetch_assoc($old_groups);
$old_group_id = $old_group_row['group_id'];

$sql = "UPDATE abouts SET group_id = $group WHERE id = '$el_id'";

if ($conn->query($sql) === TRUE) {
    $group_query = "SELECT COUNT(id) as group_count FROM abouts WHERE group_id = $old_group_id";
    $groups = mysqli_query($conn, $group_query);
    $groups_row = mysqli_fetch_assoc($groups);
    if($groups_row['group_count'] == 0){
        $del_group_query="DELETE FROM groups where id = $old_group_id";
        $conn->query($del_group_query);
    }

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
    
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    $conn->close();
}
