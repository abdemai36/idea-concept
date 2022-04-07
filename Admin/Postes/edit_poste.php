<?php
    include_once("../db_connect.php");
    $data=stripslashes(file_get_contents("php://input"));
    $myData=json_decode($data,true);
    $ID_post=$myData['ID_post'];

    $query="SELECT * FROM tb_postes WHERE ID_posts=$ID_post";
    $result=mysqli_query($connexion,$query);
    if($result)
    {
        $row=mysqli_fetch_array($result);
    }
    echo json_encode($row);

?>