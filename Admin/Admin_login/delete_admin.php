<?php
    include_once("../db_connect.php");
    $data=stripslashes(file_get_contents("php://input"));
    $myData=json_decode($data,true);
    $id_admin=$myData['id_admin'];

    if(!empty($id_admin))
    {
        $query="DELETE FROM tb_admin WHERE ID_contact=$id_admin";
        $result=mysqli_query($connexion,$query);
        if($result)
        {
            echo "La supprission avec success";
        }else{
            echo "échec la supprission";
        }
    }
?>