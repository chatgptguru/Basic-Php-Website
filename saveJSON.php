<?php

require_once 'connection.php';

$data=$_POST['data'];
$type=$data['type'];
switch ($type) {
    case 'create':
        $title=$data['title'];
        $desc=$data['desc'];
        $created_date=$data['created_date'];
        $updated_date=$data['updated_date'];
        $category=$data['category'];
        $sql = "INSERT INTO abouts (`title`, `desc`, created_date, updated_date, `type`, `group_id`) VALUES ('$title', '$desc', '$created_date', '$updated_date','$category', '0')";
        if ($conn->query($sql) === TRUE) {
          $conn->close();
          echo 'success';
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
            $conn->close();
        }
        break;

    case 'update':
        $id=$data['id'];
        $columns = implode(", ", array_keys($data));
        $values = "'" . implode("', '", array_values($data)) . "'";
        $sql="";
        foreach($data as $key => $info){
            if($key != 'type'){
                $sql.="`$key` = '$info', ";
            }
        }
        $sql = rtrim($sql, ", ");
        $sql = "UPDATE abouts SET $sql WHERE id = '$id'";
        
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            echo 'success';
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
            $conn->close();
        }
        break;
        
    case 'delete':
        $del_id=$data['del_id'];
        $sql = "DELETE FROM abouts WHERE id=".$del_id;
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            echo 'success';
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
            $conn->close();
        }
        break;
    
    default:
        # code...
        break;
}
