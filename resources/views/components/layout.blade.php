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
<!-- <header>
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
             
               <div class="pt-8">
                   Cards
               </div>
              <x-dropdown>
  
                  <a href="" class="block text-left px-3 text-lg leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white">limit</a>
                  <a href="" class="block text-left px-3 text-lg leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white">details</a>
                  
               </x-dropdown>

                
            </li>

            <li>
           
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
</header> -->

<header class="relative">
    <nav aria-label="Top">
      <!-- Top navigation -->
      <div class="bg-blue-700">
        <div class="max-w-7xl mx-auto h-10 px-4 flex items-center justify-between sm:px-6 lg:px-8">
          <!-- Currency selector -->
          <form>
            <div>
              <label for="desktop-currency" class="sr-only">Currency</label>
              <div class="-ml-2 group relative bg-blue-800 border-transparent rounded-md focus-within:ring-2 focus-within:ring-white">
                <select id="desktop-currency" name="currency" class="bg-none bg-blue-800 border-transparent rounded-md py-0.5 pl-2 pr-5 flex items-center text-sm font-medium text-white group-hover:text-gray-100 focus:outline-none focus:ring-0 focus:border-transparent">
                  <option>Card Details</option>

                  <option>Limits</option>

                  <option>Prepaid</option>

                  <option>Savings</option>
                </select>
                <div class="absolute right-0 inset-y-0 flex items-center pointer-events-none">
                  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" class="w-5 h-5 text-gray-300">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 8l4 4 4-4" />
                  </svg>
                </div>
              </div>
            </div>
          </form>

          <div class="flex items-center space-x-6">
            <a href="#" class="text-lg font-medium text-white hover:text-gray-100 ">Sign in</a>
            <a href="#" class="text-lg font-medium text-white hover:text-gray-100">Create an account</a>
          </div>
        </div>
      </div>

      <!-- Secondary navigation -->
      <div class="bg-blue-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="border-b border-gray-200">
            <div class="h-16 flex items-center justify-between">
              <!-- Logo (lg+) -->
              <div class="hidden lg:flex-1 lg:flex lg:items-center">
                <a href="/">
                  <span class="sr-only">Workflow</span>
                  <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="">
                </a>
              </div>

              <div class="hidden h-full lg:flex">
                <!-- Flyout menus -->
                <div class="px-4 bottom-0 inset-x-0">
                  <div class="h-full flex justify-center space-x-8">
                    <div class="flex">
                      <div class="relative flex">
                        <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                        <button type="button" class="border-transparent text-blue-800 hover:text-blue-700 relative z-10 flex items-center transition-colors ease-out duration-200 text-lg font-medium border-b-2 -mb-px pt-px" aria-expanded="false">
                            Transfer
                        </button>
                      </div>
                    </div>

                    <div class="flex">
                      <div class="relative flex">
                        <button type="button" class="border-transparent text-blue-800 hover:text-blue-700 relative z-10 flex items-center transition-colors ease-out duration-200 text-lg font-medium border-b-2 -mb-px pt-px" aria-expanded="false">
                            Electricity
                        </button>
                      </div>
                      <div class="absolute top-full inset-x-0 text-sm text-gray-500">
                        <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>
                        <div class="relative bg-white">
                          <div class="max-w-7xl mx-auto px-8">
                            <div class="grid grid-cols-4 gap-y-10 gap-x-8 py-16">
                              <div class="group relative">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <a href="#" class="flex items-center text-lg font-medium text-blue-800 hover:text-blue-700">Messages</a>

                    <a href="#" class="flex items-center text-lg font-medium text-blue-800 hover:text-blue-700">Careers</a>
                  </div>
                </div>
              </div>

              <!-- Mobile menu and search (lg-) -->
              <div class="flex-1 flex items-center lg:hidden">

              </div>

              <!-- Logo (lg-) -->
              <a href="#" class="lg:hidden">
                <span class="sr-only">Workflow</span>
                <img src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="" class="h-8 w-auto">
              </a>

              <div class="flex-1 flex items-center justify-end">
                <a href="/about" class="hidden text-lg font-medium text-blue-800 hover:text-blue-700 lg:block">
                  About-us
                </a>

                <div class="flex items-center lg:ml-8">

                     <a href="/contact" class="hidden text-lg font-medium text-blue-800 hover:text-blue-700 lg:block">Contact-us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
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