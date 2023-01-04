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
        <ul class="bg-black flex text-white items-center pt-4 pb-4 space-x-8 pl-72">
            <li>
              <a class="hover:underline" href="#">Home</a>
            </li>
            <li>
              <a class="hover:underline" href="#">Pay</a>
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
              <a class="hover:underline" href="#">About us</a>
          </li>
            <li>
              <a class="hover:underline" href="#">Contact us</a>
          </li>
        </ul>

        <h1 class="text-xl font-bold text-green-500 bg-gray-500">FBIF</h1>

      </nav>
  
   </div>  
</header>

<section>
  
    <div class="grid grid-cols-3 gap-14 pl-4 pt-20">
      <div>
          <img src="/images/first.jpg" alt="first">
      </div>
    
      <div>
        <img src="/images/second.jpg" alt="first">
      </div>

        <div>
          <img src="/images/third.jpg" alt="first">
        </div>

  </div>

  <div class="grid grid-cols-3 gap-14 pl-4 pt-8 text-xl font-bold">
        <div>
            Start banking and invest with us
        </div>
      
        <div>
            Open a savings account with us with a low interest
        </div>

          <div>
            Get a black card and start flexing
         </div>
</section>


<footer class="bg-black border border-black border-opacity-5 text-center py-16 px-10 mt-16">
        
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
                                class="transition-colors duration-300 bg-black hover:bg-gray-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
</body>
</html>
