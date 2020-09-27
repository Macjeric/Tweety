<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Student Field Request</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        <link rel="stylesheet" type="text/css" href="/css/custom.css">


        <!-- Styles -->
        <style>
            @font-face {
                    font-family: "Camphor W01 Regular";
                    src: url(/fonts/Camphor-W01-Regular.ttf) format("truetype");
                }
        </style>
        <style >
            body {
                font-family: Camphor W01 Regular;
            }
        </style>
    </head>
        <body>
            <div class="mt-5 md:ml-20 ml-5">
                <div class="md:flex md:items-center md:justify-between">
                    <div class="nav-line md:flex md:content-center md:items-center " style="max-width: 650px">
                        <a href="/" class="lg:ml-12 mr-20"><span>SFR</a>

                        <a href="/how" class="hover:bg-gray-100 md:ml-20" ><span>How it works</span></a>
                        <a href="/contacts" class="ml-20 hover:bg-gray-100"><span>Contact</span></a>
                        <!-- <a href="/" class="nav-login">LogIn</a> -->
                        <!-- <a href="/" class="ml-20 lg:invisible sm:visible"><span class="block">SignIn</span></a> -->


                    </div>

                    <div class="img-lg">
                        <a href="{{ route('login') }}">
                            <button class="bg-transparent hover:bg-blue-500 text-blue-700  hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded-full md:mr-12">
                                SignIn
                            </button>   
                        </a>

                    </div>

                </div>

            </div>

        <div class="lg:flex lg:justify-between lg:flex-wrap" >
            <div class="md:ml-32 md:mt-40  px-5 mt-5">
                <h1 class="font-bold text-5xl" >Let's make It Practical</h1>
                <p class="text-xl">It doesn't have to be crazy looking for field work --</p>
                <p class="text-xl">Check the requirements needed and your good to go,</p>
                <p class="text-xl">you shall communicate directly with the concerned person.</p>


                <button class=" mt-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Start Now
                </button>

                <button class=" mt-8 ml-5 bg-white hover:bg-green-500 text-balck font-bold py-2 px-4 rounded">
                    LogIn
                </button>

            </div>

            <div class="img-lg" style="margin-top: 16rem;">
                <img src="/images/lib.png" width="400" height="500">
            </div>


            <footer class="mt-8">
                
            </footer>

        </body>
    
</html>
