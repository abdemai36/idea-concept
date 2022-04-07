<?php 
    include('includes/navbar.php'); 
?>

<title>Communication devsoltech</title>
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

<!-- hero section  -->
<div class="flex h-screen  py-24 justify-center items-center bg-no-repeat bg-cover" style="background-image: url(images/56e4a8e265a1f7a3a246b85bcf88d672-essaouira.png);">
    <div class="p-12 text-center max-w-2xl">
        <div style="text-shadow: -4px 3px 0px #6FBD44;" class="text-center drop-shadow-lg text-3xl md:text-4xl lg:text-6xl font-bold">First Digital <br> Agency in
            Essaouira</div>
        <div class="mt-6 flex justify-center h-12 relative">
            <a class="flex shadow-md font-medium absolute py-2 px-4 text-white
          cursor-pointer  rounded text-lg tr-mt  animate-bounce" href="#services" style="background-color: #6FBD44;">Explore more</a>
        </div>
    </div>
</div>
<!-- Section 2 -->
<div class="container m-auto space-y-12" id="services">
    <h1 class="font-bold text-4xl text-center my-10">Our Services</h1>
    <div class="md:flex p-5 space-y-5 lg:space-x-10">

        <img data-aos="fade-right" src="images/Group 24.png" alt="" class="object-contain w-72 m-auto lg:w-96">
        <div data-aos="fade-left" class="space-y-5 lg:space-y-12  lg:pl-28">
            <h1 class="font-bold text-xl text-center lg:text-4xl lg:text-left ">Design & <br class="hidden lg:block">
                Photography</h1>
            <p class="text-center lg:text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore commodi
                dignissimos
                dolorum fuga error
                tempora reiciendis voluptatibus totam recusandae natus explicabo rem, officia a? Aut, porro accusantium?
                Dolores, recusandae exercitationem?</p>
            <div class="text-center lg:text-left">
                <a href="Agency" class=" font-bold">Discover more ></a>
            </div>
        </div>
    </div>
    <div class="md:flex md:flex-row-reverse p-5 space-y-5">
        <img data-aos="fade-left" src="images/Group 41.png" alt="" class="object-contain w-72 m-auto lg:w-96">
        <div data-aos="fade-right" class="space-y-5 lg:space-y-12 lg:pr-40">
            <h1 class="font-bold text-xl text-center lg:text-4xl lg:text-left">Web & Computer <br class="hidden lg:block">
                System and Networks</h1>
            <p class="text-center lg:text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore commodi
                dignissimos
                dolorum fuga error
                tempora reiciendis voluptatibus totam recusandae natus explicabo rem, officia a? Aut, porro accusantium?
                Dolores, recusandae exercitationem?</p>
            <div class="text-center lg:text-left">
                <a href="Agency" class="text-center font-bold">Discover more ></a>
            </div>
        </div>
    </div>
</div>

<!-- Recent projects -->

<div class="container m-auto">
    <h1 class="font-bold text-center text-4xl sm:text-6xl my-10 sm:my-20">Recent Projects</h1>
    <div class="grid lg:grid-cols-4 gap-4 mb-5">
       
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


<!-- Footer -->
<footer>
    <div style="background-color: #6FBD44;">
        <div class="container m-auto p-10 flex flex-col lg:flex-row justify-between items-center space-y-6 md:space-y-0">
            <div class="space-y-4">
                <h1 class="text-white text-4xl text-center md:text-left md:text-5xl">Let's get in touch !</h1>
                <p class="text-white text-center md:text-left">Vous avez un projet, une problématique à résoudre ou
                    an challenge à relever ?
                </p>
            </div>

            <a class="text-white bg-black  font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center h-10 animate-bounce" href="Contact.php">
                Contact us
            </a>
        </div>
    </div>
    <div class="bg-black">
        <div class="container m-auto space-y-10 p-10">
            <h1 class="text-green-600 text-center text-4xl sm:text-6xl">Our sponsors</h1>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                <div class="flex items-center justify-center"><img src="images/Group 77.png" alt="" class="w-28"> </div>
                <div class="flex items-center justify-center"><img src="images/Group 88.png" alt="" class="w-28"></div>
                <div class="flex items-center justify-center"><img src="images/Rectangle 330.png" alt="" class="w-28"></div>
                <div class="flex items-center justify-center"><img src="images/Group 90.png" alt="" class="w-28"></div>
                <div class="flex items-center justify-center"><img src="images/Group 78.png" alt="" class="w-28"></div>
                <div class="flex items-center justify-center"><img src="images/Group 81.png" alt="" class="w-28"></div>
                <div class="flex items-center justify-center"><img src="images/Group 72.png" alt="" class="w-28"></div>
                <div class="flex items-center justify-center"><img src="images/Group 89.png" alt="" class="w-28"></div>
                <div class="flex items-center justify-center"><img src="images/Group 85.png" alt="" class="w-28"></div>
                <div class="flex items-center justify-center"><img src="images/Group 82.png" alt="" class="w-28"></div>
            </div>
            <div class="bg-black">
            <div class="container m-auto space-y-10 p-10">
                <div class="grid sm:grid-cols-1  lg:grid-cols-4 gap-11 text-center md:text-left">
                    <div class="flex items-center justify-center"><img src="images/logo2.png" alt="" class="w-48">
                    </div>
                    <div>
                        <h1 class="text-green-600 font-bold ">CONTACTEZ NOUS</h1>
                        <ul class="text-white space-y-4 pl-4 mt-4">
                            <li>+212 6 31 58 05 36</li>
                            <li>ideaconcepte@gmail.com</li>
                            <li>Digital Agency, Essaouira - Morocco</li>
                        </ul>
                    </div>
                    <div>
                        <h1 class="text-green-600 font-bold">Get in Touch</h1>
                        <ul class="text-white space-y-4 pl-4 mt-4">
                            <li class="hover:text-green-400"><a href="index">Home</a></li>
                            <li class="hover:text-green-400"><a href="Agency">Agency</a></li>
                            <li class="hover:text-green-400"><a href="Projects">Projects</a></li>
                            <li class="hover:text-green-400"><a href="IG-Feed">IG feed</a></li>
                            <li class="hover:text-green-400"><a href="Contact">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h1 class="text-green-600 font-bold">NOTRE SERVICES</h1>
                        <ul class="text-white space-y-4 pl-4 mt-4">
                            <li>Visual Design</li>
                            <li>Brand Strategy</li>
                            <li>Print</li>
                            <li>Graphic Design</li>
                            <li>Photography</li>
                            <li></li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</footer>



<script>
    var mobileButton = document.getElementById("mobile-button")
    var mobileMenu = document.getElementById("mobile-menu");
    mobileButton.addEventListener("click", function() {
        mobileMenu.classList.toggle("hidden");
    })
    AOS.init();
</script>
</body>

</html>