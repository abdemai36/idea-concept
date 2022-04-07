<?php
    include_once("../db_connect.php");
    $data=stripslashes(file_get_contents("php://input"));
    $myData=json_decode($data,true);
    $ID_admin=$myData['ID_admin'];

    $query="SELECT * FROM tb_admin WHERE ID_contact =$ID_admin";
    $result=mysqli_query($connexion,$query);
    if($result)
    {
        $row=mysqli_fetch_array($result);
    }
    echo json_encode($row);

?>