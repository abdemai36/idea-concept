<?php 
    include('includes/navbar.php');
?>

<title>Contact</title>
<style>
    input:focus {
        border: #6FBD44 2px solid;
    }

    .sub {
        background-color: #6FBD44;
    }

    .division1 {
        background-color: #6ebd442c;
    }
</style>

<div class="container m-auto my-32  xl:space-x-44 border rounded-xl md:flex ">
    <div class="division1 p-10 rounded-l-xl">
        <h1 class="text-center md:text-left font-bold text-2xl md:text-4xl ">Contact us</h1>
        <div class="p-5">
            <ul class="space-y-2">
                <li class="flex text-center"><img src="images/call.png" alt="" class="h-full pr-2">Call directelly: +212 6 31 58 05 36</li>
                <li class="flex"><img src="images/whatsapp.png" alt="" class="h-full pr-2">Whatsapp number :+212 6 31 58 05 36</li>
                <li class="flex"> <img src="images/email.png" alt="" class="h-full pr-2">Email :ideaconcepte@gmail.com</li>
            </ul>
        </div>
        <img src="images/Contact us-rafiki.png" alt="">
    </div>
    <div class="lg:w-5/12 p-10">
        <h1 class="text-center md:text-left font-bold text-2xl md:text-4xl ">Get in touch</h1>
        <form class="p-5 space-y-5" method="POST" action="sendMessage">
            <?php
                $fullURL="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if(strpos($fullURL,"contact_=username")==true)
                {
                  echo "<div class='p-3 bg-red-100 rounded text-red-800'>
                          Nom d'utilisateur est invalide !
                   </div>";
                }
                if(strpos($fullURL,"contact_=empty")==true)
                {
                  echo "<div class='p-3 bg-red-100 rounded text-red-800'>
                          Saisir tous les informations !
                   </div>";
                }
                if(strpos($fullURL,"contact_=phone")==true)
                {
                  echo "<div class='p-3 bg-red-100 rounded text-red-800'>
                            Numéro de téléphone est invalide!
                   </div>";
                }
                if(strpos($fullURL,"contact_=email")==true)
                {
                  echo "<div class='p-3 bg-red-100 rounded text-red-800'>
                            Email adresse est invalide!
                   </div>";
                }
                if(strpos($fullURL,"contact_=message")==true)
                {
                  echo "<div class='p-3 bg-red-100 rounded text-red-800'>
                            Message est invalide!
                   </div>";
                }
                if(strpos($fullURL,"contact_=success")==true)
                {
                  echo "<div class='p-3 bg-green-100 rounded text-green-800'>
                            Votre message a été envoyé , merci.
                   </div>";
                }
            ?>
            <div class="flex flex-col">
                <label for="">Full name:</label>
                <input type="text" name="username" class="border-2 rounded p-1 w-full outline-none ">
            </div>
            <div class="flex flex-col">
                <label for="">Email:</label>
                <input type="text" name="email" class="border-2 rounded p-1 w-full outline-none ">
            </div>
            <div class="flex flex-col">
                <label for="">Phone number:</label>
                <input type="tel" name="phone" class="border-2 rounded p-1 w-full outline-none ">
            </div>
            <div class="flex flex-col">
                <label for="">Subject:</label>
                <input type="text" name="subject" class="border-2 rounded p-1 w-full outline-none ">
            </div>
            <div class="flex flex-col">
                <label for="">Message:</label>
                <textarea name="message" id="" cols="30" rows="5" class="border-2 rounded p-1 w-full outline-none focus:border-green-400"></textarea>
            </div>
            <button type="submit" class="sub p-1 text-white rounded w-full">Contact us</button>
        </form>
    </div>
</div>
<?php include('includes/footer.php'); ?>