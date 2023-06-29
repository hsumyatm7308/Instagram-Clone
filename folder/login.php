
<?php 

ini_set("display_errors",1);

require_once "./sessionconfig.php";
require_once "./dbconnect.php";







?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./tailwind.css">
</head>
<style>
    * {
        font-family: sans-serif;
    }
</style>

<body>

    <!-- download notibar  -->
    <div class="w-full h-16  bg-gradient-to-l from-red-500 via-red-400 to-pink-600 flex justify-between items-center">
        <div class="text-white ml-5">
            <p class="font-bold">Instagram</p>
            <span>Download it for free.</span>
        </div>
        <div class="mr-10">
            <button class="text-white border border-white px-3 py-1">GET</button>
        </div>
    </div>

    <div class="w-full h-[100px] flex justify-center mt-6">

        <div class="text-gray-500">
            <p>English</p>
        </div>

    </div>

    <div class="w-full h-full grid">

        <div class="w-full grid place-items-center mb-4">



            <div class="w-[350px] h-[400px] text-center border border-stone-300 rounded-lg mt-4 m-auto">
                
                <div class="w-full h-10 flex justify-center items-center mb-5">
                    <img src="./assets/img/instagramlogobgrm.png"
                        class="sm:w-0 md:w-0 lg:w-32 ml-5 mt-8 cursor-pointer dark:hidden" alt="">
                </div>

                <button type="button" id="submitbtn"
                    class="w-[85%] h-8  bg-blue-300 mt-3 text-black-400 text-sm rounded-md hover:opacity-80">Continue
                    with Facebook</button>


                <div class="flex justify-center items-center mt-2">
                    <div class="w-24 h-[1px] bg-slate-300"></div>
                    <div class="text-sm m-4">OR</div>
                    <div class="w-24 h-[1px] bg-slate-300"></div>

                </div>


                <form action="./authenticatein.php" method="post" class="text-center mt-5" enctype="multipart/form-data">
                    <div class="mb-3">

                        <input type="email" name="email" id="email"
                            class="w-[85%] h-8 border border-stone-400 rounded-sm focus:outline-none focus:ring-1"
                            placeholder=" email,username or phonenumber" required>

                    </div>
                    <p id="alert" class="text-[12px] text-red-600 mr-[56px] mt-1 mb-2 hidden">! Enter your email or
                        mobile phone
                        number</p>


                    <div class="">

                        <input type="password" name="password" 
                            class="w-[85%] h-8 border border-stone-400 rounded-sm focus:outline-none focus:ring-1"
                            placeholder=" Password" autofocus>

                    </div>


                    <button type="submit" 
                    class="w-[85%] h-8  bg-slate-400 mt-3 text-black-400 text-sm rounded-md hover:bg-slate-300">Login</button>
                </form>

        




                <div class="m-auto mt-4">
                    <a href="" class="text-[13px] text-indigo-400 hover:underline">Forget password</a>
                </div>


            </div>










        </div>

        <div class="w-full h-14 bg-slate-300 absolute bottom-0 mt-5">

            <div class="w-full h-full flex justify-center items-center">

                <span class="text-gray-500 text-sm">Don't you have an account? <a href="./signup.php"
                        class="text-black font-semibold">Sign Up</a></span>

            </div>

        </div>



    </div>
</body>

</html>