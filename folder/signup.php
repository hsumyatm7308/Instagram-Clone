
<?php 

ini_set("display_errors",1);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./tailwind.css">
</head>
<style>
    *{
        font-family: sans-serif;
    }
</style>
<body>
    <div class="w-full h-full grid mt-10">

        <div class="w-full grid place-items-center mb-4">



            <div class="w-[350px] h-[500px] text-center border border-stone-300 rounded-lg mt-4 m-auto">
                <div class="w-full h-10 flex justify-center items-center mb-5">
                    <img src="./assets/img/instagramlogobgrm.png"
                        class="sm:w-0 md:w-0 lg:w-32 ml-5 mt-8 cursor-pointer dark:hidden" alt="">


                </div>

                <button type="button" id=""
                    class="w-[85%] h-8  bg-blue-400 mt-3 text-white text-sm rounded-md hover:opacity-80">Login with Facebook</button>


                <div class="flex justify-center items-center mt-2">
                    <div class="w-24 h-[1px] bg-slate-300"></div>
                    <div class="text-sm m-4">OR</div>
                    <div class="w-24 h-[1px] bg-slate-300"></div>

                </div>


                <form action="./authenticateup.php" method="post" class="text-center mt-5" enctype="multipart/form-data">
                    <div class="mb-3">

                        <input type="email" name="email" id="email"
                            class="w-[85%] h-8 border border-stone-400 rounded-sm focus:outline-none focus:ring-1"
                            placeholder=" Mobile number or email">

                    </div>
                    <p id="alert" class="text-[12px] text-red-600 mr-[56px] mt-1 mb-2 hidden">! Enter your email or
                        mobile phone
                        number</p>


                    <div class="mb-3">

                        <input type="fullname" name="fullname" id="fullname"
                            class="w-[85%] h-8 border border-stone-400 rounded-sm focus:outline-none focus:ring-1"
                            placeholder=" Fullname">

                    </div>

                    <div class="mb-3">

                        <input type="username" name="username" id="username"
                            class="w-[85%] h-8 border border-stone-400 rounded-sm focus:outline-none focus:ring-1"
                            placeholder=" Username">

                    </div>

                    <div class="mb-3">

                        <input type="password" name="password" id="password"
                            class="w-[85%] h-8 border border-stone-400 rounded-sm focus:outline-none focus:ring-1"
                            placeholder=" Password">

                    </div>




                    <button type="submit" 
                    class="w-[85%] h-8  bg-blue-400 mt-3 text-white text-sm rounded-md hover:opacity-80">Sign Up</button>

                    <div class="w-[85%] h-auto m-auto mt-4">
                        <span class="text-xs text-gray-500">By signing up, you agree to our Terms, Data Policy and Cookies Policy.</span>
                    </div>

                </form>

               




                <div class="m-auto mt-4">
                    <a href="" class="text-[13px] text-indigo-400 hover:underline"></a>
                </div>


            </div>



            <div class="w-[350px] h-14 border border-stone-300 rounded flex justify-center items-center mt-5">

                <div class="w-full h-full flex justify-center items-center">
    
                    <span class="text-gray-500 text-sm">Have an account? <a href="./login.php"
                            class="text-black font-semibold">Log in</a></span>
    
                </div>
    
            </div>

        </div>

        



    </div>
</body>

</html>