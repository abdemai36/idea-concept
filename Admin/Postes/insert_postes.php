<?php
    include_once("../db_connect.php");
    $id_postes=$_POST['id_postes'];
    $titre =$_POST['titre_postes'];
    
    $Image_Name = $_FILES['img_postes']['name'];
    $Image_Size = $_FILES['img_postes']['size'];
    $Image_tmpN = $_FILES['img_postes']['tmp_name'];
    $image='';
    $dataImg='';
    $Image_type = $_FILES['img_postes']['type'];
    $Image_Allow_Extansion = array("jpeg","png","jpg","gif","PNG","JEPJ","JPG");

    if (is_array($_FILES['img_postes']['name']) || is_object($_FILES['img_postes']['name']))
    {
        foreach($_FILES['img_postes']['name'] as $key=>$val)
        {
            $image=$_FILES['img_postes']['name'][$key];
            $Image_tmpN=$_FILES['img_postes']['tmp_name'][$key];
            $Image_Extansion =pathinfo($image,PATHINFO_EXTENSION);
            $image=rand(0,1000) . '_' .$image;
            move_uploaded_file($Image_tmpN,'../avatar/'.$image);
            $dataImg .=$image." ";
        }
        if(!in_array($Image_Extansion,$Image_Allow_Extansion))
        {
            echo "S'il vous plait saisir seulement des image (png | jpg | jpeg | gif)";
        }
        else
        {
            $query="INSERT INTO tb_postes(`ID_posts`,`title`,`Image`) 
            VALUES('$id_postes','$titre','$dataImg') ON DUPLICATE KEY UPDATE 
            title='$titre',`Image`='$dataImg'";
            $result=mysqli_query($connexion,$query);
            if($result){
                echo "Ajouté avec success";
            }else{
                echo "L'ajoute de produit a échoué !";
                echo mysqli_error($connexion);
            }
        }
    }