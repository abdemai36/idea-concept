<?php
    include_once("../db_connect.php");

    $id_admin=$_POST['id_admin'];
    $username=$_POST['username'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    

    $query="INSERT INTO tb_admin(`ID_contact`,`username`,`Email`,`password`) 
    VALUES('$id_admin','$username','$email','$password') ON DUPLICATE KEY UPDATE 
    username='$username',`Email`='$email',`password`='$password'";
    $result=mysqli_query($connexion,$query);
    if($result){
        echo "Ajouté avec success";
    }else{
        echo "L'ajoute de produit a échoué !";
        echo mysqli_error($connexion);
    }