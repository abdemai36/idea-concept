<?php

    $db_host="localhost";
    $db_username="omarhaya_ideaconcept_user";
    $db_password="X#7xoCD#%a}*";
    $db_name="omarhaya_chrikeyc_devsoltech_communication";

    // Create connection
    $connexion = mysqli_connect($db_host,$db_username,$db_password,$db_name);
    
    // Check connection
    if (!$connexion) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }
