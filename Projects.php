<?php include('includes/navbar.php'); ?>

<title>Projects</title>
<style>
    .img__wrap {
        position: relative;
    }

    .img__description {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: #6fbd4470;
        visibility: hidden;
        opacity: 0;
        transition: opacity .2s, visibility .2s;
    }

    .img__wrap:hover .img__description {
        visibility: visible;
        opacity: 1;
    }
</style>



<div class="container m-auto">

<div class="grid lg:grid-cols-4 gap-4 mb-10 mt-20">
       
       <?php
           $query="SELECT Image,title FROM tb_postes ORDER BY ID_posts desc LIMIT 10";
           $result=mysqli_query($connexion,$query);
           if($result)
           {
               $data=array();
               while($row=mysqli_fetch_array($result))
               {
                   $data[]=$row;
               }
           }

       ?>
       <div class="img__wrap h-full w-full">
           <img src="Admin/avatar/<?php echo $data[0][0]?>" alt="" class="h-full w-full">
           <p class="img__description font-bold text-white text-4xl flex items-center justify-center"><?php echo $data[0][1]?></p>
       </div>
       
       <div class="img__wrap h-full w-full">
           <img src="Admin/avatar/<?php echo $data[1][0]?>" alt="">
           <p class="img__description font-bold text-white text-4xl flex items-center justify-center"><?php echo $data[1][1]?></p>
       </div>
       <div class="img__wrap h-full w-full col-span-2 row-span-2">
           <img src="Admin/avatar/<?php echo $data[2][0]?>" alt="" class="h-full">
           <p class="img__description font-bold text-white text-4xl flex items-center justify-center"><?php echo $data[2][1]?></p>
       </div>
       
       <div class="img__wrap h-full w-full">
           <img src="Admin/avatar/<?php echo $data[3][0]?>" alt="">
           <p class="img__description font-bold text-white text-4xl flex items-center justify-center"><?php echo $data[3][1]?></p>
       </div>

       
       <div class="img__wrap h-full w-full">
           <img src="Admin/avatar/<?php echo $data[4][0]?>" alt="">
           <p class="img__description font-bold text-white text-4xl flex items-center justify-center"><?php echo $data[4][1]?></p>
       </div>

       <div class="img__wrap h-full w-full col-span-2 row-span-2">
           <img src="Admin/avatar/<?php echo $data[5][0]?>" alt="" class="h-full">
           <p class="img__description font-bold text-white text-4xl flex items-center justify-center"><?php echo $data[5][1]?></p>
       </div>
       
       <div class="img__wrap h-full w-full">
           <img src="Admin/avatar/<?php echo $data[6][0]?>" alt="">
           <p class="img__description font-bold text-white text-4xl flex items-center justify-center"><?php echo $data[6][1]?></p>
       </div>

       
       <div class="img__wrap h-full w-full">
           <img src="Admin/avatar/<?php echo $data[7][0]?>" alt="">
           <p class="img__description font-bold text-white text-4xl flex items-center justify-center"><?php echo $data[7][1]?></p>
       </div>

       
       <div class="img__wrap h-full w-full">
           <img src="Admin/avatar/<?php echo $data[8][0]?>" alt="">
           <p class="img__description font-bold text-white text-4xl flex items-center justify-center"><?php echo $data[8][1]?></p>
       </div>

       
       <div class="img__wrap h-full w-full">
           <img src="Admin/avatar/<?php echo $data[9][0]?>" alt="">
           <p class="img__description font-bold text-white text-4xl flex items-center justify-center"><?php echo $data[9][1]?></p>
       </div>



   </div>
</div>



<?php include('includes/footer.php'); ?>