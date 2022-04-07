<?php
    include_once("../db_connect.php");

    $query="SELECT * FROM tb_postes";
    $result=mysqli_query($connexion,$query);
    if($result)
    {
        $data=array();
        while($row=mysqli_fetch_array($result))
        {
            $data[]=$row;
        }
    }else{
        echo mysqli_error($connexion);
    }
    echo json_encode($data);

?>
