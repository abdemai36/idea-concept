<?php
    include_once("../db_connect.php");
    $data=stripslashes(file_get_contents("php://input"));
    $myData=json_decode($data,true);
    $id_post=$myData['id_post'];

    if(!empty($id_post))
    {
        $query="DELETE FROM tb_postes WHERE ID_posts=$id_post";
        $result=mysqli_query($connexion,$query);
        if($result)
        {
            echo "La supprission avec success";
        }else{
            echo "échec la supprission";
        }
    }else
    {
        //header("location:Produits.php");
        //exit();
    }
?>