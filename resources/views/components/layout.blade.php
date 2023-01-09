<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
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
               
     <button id="dropdownNavbarButton" data-dropdown-toggle="dropdownNavbar" 
     class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-white border-b border-gray-100 md:border-0 md:hover:text-gray-200 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
     Pay <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" 
     xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
      clip-rule="evenodd"></path></svg></button>

     <!-- Dropdown menu -->

          <div id="dropdownNavbar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownNavbarButton">
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                  </li>
                </ul>
                <div class="py-1">
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign out</a>
            </div>
         </div>

        </li>

            <li>
              <a class="hover:underline" href="#">Cards</a>
            </li>
            <li>
              <a class="hover:underline" href="#">Prepaid mobile</a>
            </li>
            <li>
               <a class="hover:underline" href="#">Buy electricity</a>
            </li>
            <li>
              <a class="hover:underline" href="#">Transfer money</a>
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

        <h1 class="text-xl font-bold text-blue-700 pl-4">FBFI</h1>

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