<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    
    <body style="background-image: url('../upload/bg.png'); background-size: cover; background-repeat: no-repeat; background-position: center center;" class="lg:h-screen min-h-screen">
     
 
             
      <div class=" sm:grid lg:block sm:place-content-center xl:h-screen min-w-max pb-14">
        <div class="w-full sm:max-w-sm sm:mt-14 min-w-min lg:mt-14 xl:max-w-xl lg:max-w-xl lg:ml-20 pt-16 bg-white rounded-md shadow-md text-left xl:mt-14 xl:ml-28 grid place-items-center ">
              
          <div class=" sm:max-w-sm sm:p-5 xl:mt-14 max-w-md space-y-2 lg:max-w-sm lg:mb-28 xl:mb-5 xl:max-w-md">
              <!-- plm logo -->
        
            <img src="../upload/plmlogo-header.png" alt="plm">
            <h2 class="xl:text-5xl lg:text-5xl text-4xl  font-semibold text-blue-400 pt-5 pl-5">
              <span class="font-bold">PLM Module</span>
            </h2>
            <h3 class="text-blue-400 text-3xl pl-5 font-normal sm:text-xl">
              Agent Sign In
            </h3>
              <form class="space-y-4 pt-5 pl-5 pr-5 " action="{{ route('login') }}" method="post">
                @csrf

                  <div>
                    <label for="login" class="text-sm font-medium text-gray-700">
                      <p class="pb-2 text-xl sm:text-sm">PLM Email</p>
                    </label>
                    <input id="login" name="login" type="text" required class="w-full p-2 border border-blue-300 focus:outline-none rounded-md" />

                  </div>

                  <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control w-full p-2 border border-blue-300 focus:outline-none rounded-md" id="password" 
                        autocomplete="current-password" placeholder="password">
                  </div>

                  <div class="flex items-center">
                    <input id="keepSignedIn" name="keepSignedIn" type="checkbox" class="mr-3 h-6 w-6" />
                    <label for="keepSignedIn" class="text-lg text-gray-600">
                      Keep me signed in
                    </label>
                  </div>  
              
                  <div class="pb-28">
                    <button type="submit" class=" font-bold w-full p-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                      Log In
                    </button>
                  </div>
              </form>
            </div>
          </div>
      </div> 
    </body>
</html>
