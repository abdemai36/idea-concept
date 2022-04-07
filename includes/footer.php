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