<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Banking-app</title>
</head>
<body>
<header>
  <div>
     <nav>
       <ul class="flex space-x-4 ml-80 pl-96 pt-4">
          <li>
            <a class="hover:underline" href="#">Login</a>
        </li>
          <li>
            <a class="hover:underline" href="#">Register</a>
        </li>
       </ul>
     </nav>
     
    <nav>
        <ul class="bg-blue-700 flex text-white items-center pt-4 pb-4 space-x-8 pl-72">

        <li>
              <a class="hover:underline" href="/">Home</a>
       </li>

           
        <li>

          <div class="pt-8">
              Pay
          </div>
             <x-dropdown>
  
                <a href="" class="block text-left px-3 text-lg leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white">oneghhh</a>
                <a href="" class="block text-left px-3 text-lg leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white">two</a>
                <a href="" class="block text-left px-3 text-lg leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white">three</a>
                <a href="" class="block text-left px-3 text-lg leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white">three</a>
      
             </x-dropdown>
             
        </li>

            <li>
              <!-- <a class="hover:underline" href="#">Cards</a> -->
               <div class="pt-8">
                   Cards
               </div>
              <x-dropdown>
  
                  <a href="" class="block text-left px-3 text-lg leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white">limit</a>
                  <a href="" class="block text-left px-3 text-lg leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white">details</a>
                  
               </x-dropdown>

                
            </li>

            <li>
              <!-- <a class="hover:underline" href="#">Prepaid</a> -->
              <div class="pt-8">
                   Prepaid
               </div>
              <x-dropdown>
                  
                  <a href="" class="block text-left px-3 text-lg leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white">airtime</a>
                  <a href="" class="block text-left px-3 text-lg leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white">data</a>
                  
              </x-dropdown>

            </li>

            
            <li>
               <a class="hover:underline" href="#">Transfer</a>
    
            </li>
            <li>
              <a class="hover:underline" href="#">Electricity</a>
          </li>
            <li>
              <a class="hover:underline" href="#">Open account</a>
          </li>
            <li>
              <a class="hover:underline" href="#">Careers</a>
          </li>
            <li>
              <a class="hover:underline" href="#">Loan</a>
          </li>
            <li>
              <a class="hover:underline" href="#">Invest</a>
          </li>
            <li>
              <a class="hover:underline" href="/about">About us</a>
          </li>
            <li>
              <a class="hover:underline" href="/contact">Contact us</a>
          </li>

        </ul>

        <h1 class="text-xl font-bold text-blue-700 pl-4"><a href="/">FBFI</a></h1>

      </nav>
  
   </div>  
</header>

    {{ $slot }}

<footer class="bg-blue-700 border border-black border-opacity-5 text-center py-16 px-10 mt-16">
        
            <h5 class="text-xl font-bold text-white">Subscibe to our newsletter</h5>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200">

                    <form method="POST" action="#" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                            </label>

                            <input id="email" type="text" placeholder="Your email address"
                                   class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit"
                                class="transition-colors duration-300 bg-blue-700 hover:bg-blue-800 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
</body>
</html>