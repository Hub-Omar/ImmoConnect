<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="public/css/tailwind.css">
  
  <title>Document</title>
  <style>
    body {
      background-color: #1D1D1D;
    }
  </style>
</head>

<body>

  <nav class="bg-white shadow">
    <div class="container mx-auto px-6 py-3">
      <div class="flex items-center justify-between">
        <div class="text-lg font-semibold">ImmoConnect</div>
        <div class="flex items-center">
          <a href="#" class="px-4 hover:text-gray-800">Home</a>
          <a href="#" class="px-4 hover:text-gray-800">Services</a>
          <a href="#" class="px-4 hover:text-gray-800">Sign in</a>
          <a href="#" class="px-4 hover:text-gray-800">Sign up</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="bg-cover bg-center py-32" style="background-image: url('/ImmoConnect/public/images/up.jpg');">
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-bold mb-2 text-white">HOME SWEET HOME</h2>
      <h3 class="text-2xl mb-8 text-gray-200">La meilleure agence pour votre maison de rêve.</h3>
    </div>
  </header>

  <!-- Properties Section -->
  <section class="container mx-auto px-6 py-8">
    <div class="flex flex-wrap -mx-4">
      <!-- Property Card -->
      <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img class="w-full h-56 object-cover object-center" src="/ImmoConnect/public/images/house5.jpg" alt="House">
          <div class="p-4">
            <h3 class="text-2xl text-gray-800 font-bold">6,550,000 Dhs</h3>
            <p class="text-gray-600">4 Ch 2 Sdb 2 s (380m²)</p>
            <p class="text-gray-600">California, CASABLANCA</p>
            <button class="mt-4 w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-500">en savoir plus</button>
          </div>
        </div>
      </div>

      <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img class="w-full h-56 object-cover object-center" src="/ImmoConnect/public/images/house5.jpg" alt="House">
          <div class="p-4">
            <h3 class="text-2xl text-gray-800 font-bold">6,550,000 Dhs</h3>
            <p class="text-gray-600">4 Ch 2 Sdb 2 s (380m²)</p>
            <p class="text-gray-600">California, CASABLANCA</p>
            <button class="mt-4 w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-500">en savoir plus</button>
          </div>
        </div>
      </div>

      <!-- Add more property cards here -->
    </div>
  </section>

  <!-- History Section -->
  <section class="bg-white py-8">
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-bold mb-2">Notre histoire</h2>
      <p class="text-gray-700 mb-8">Imaginez un monde où chacun possédera sa maison. Nous savons que l'accession à la propriété signifie bien plus que simplement posséder une propriété; elle débouche sur des avantages financiers, sociaux et émotionnels.</p>
      <img class="w-32 h-32 rounded-full mx-auto" src="/ImmoConnect/public/images/team1.jpg" alt="Team member">
    </div>
    <div>

    </div>
  </section>

  <!-- Team Section -->
  <section class="container mx-auto px-6 py-8 bg-cyan-600">
    <h2 class="text-4xl font-bold mb-2">Notre Equipe</h2>
    <div class="flex -mx-4">
      <!-- Team Member Card -->
      <div class="w-1/3 px-4">
        <div class="bg-white shadow-lg rounded-lg px-4 py-6">
          <div class="text-center">
            <img class="w-32 h-32 rounded-full mx-auto" src="/ImmoConnect/public/images/team1.jpg" alt="Team member">
            <h3 class="text-xl font-medium mt-2">John Doe</h3>
            <p class="text-gray-600">Position</p>
          </div>
        </div>
      </div>
      <div class="w-1/3 px-4">
        <div class="bg-white shadow-lg rounded-lg px-4 py-6">
          <div class="text-center">
            <img class="w-32 h-32 rounded-full mx-auto" src="/ImmoConnect/public/images/team1.jpg" alt="Team member">
            <h3 class="text-xl font-medium mt-2">John Doe</h3>
            <p class="text-gray-600">Position</p>
          </div>
        </div>
      </div>
      <div class="w-1/3 px-4">
        <div class="bg-white shadow-lg rounded-lg px-4 py-6">
          <div class="text-center">
            <img class="w-32 h-32 rounded-full mx-auto" src="/ImmoConnect/public/images/team1.jpg" alt="Team member">
            <h3 class="text-xl font-medium mt-2">John Doe</h3>
            <p class="text-gray-600">Position</p>
          </div>
        </div>
      </div>
      <div class="w-1/3 px-4">
        <div class="bg-white shadow-lg rounded-lg px-4 py-6">
          <div class="text-center">
            <img class="w-32 h-32 rounded-full mx-auto" src="/ImmoConnect/public/images/team1.jpg" alt="Team member">
            <h3 class="text-xl font-medium mt-2">John Doe</h3>
            <p class="text-gray-600">Position</p>
          </div>
        </div>
      </div>
      <!-- Add more team member cards here -->
    </div>
  </section>

  <!-- Contact Section -->
  <section class="bg-gray-200 py-8 mx-32 my-12">
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-bold mb-2">Contact</h2>
      <form action="#" method="POST">
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <input class="appearance-none block w-full bg-white text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="Full name">
          </div>
          <div class="w-full md:w-1/2 px-3">
            <input class="appearance-none block w-full bg-white text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" type="email" placeholder="Email">
          </div>
        </div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          Send
        </button>
      </form>
    </div>
  </section>

  <footer class="relative bg-teal-900 pt-8 pb-6 mt-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap text-left lg:text-left">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl font-bold text-white">Let's keep in touch!</h4>
                    <h5 class="text-lg mt-0 mb-2 text-white">
                        Find us on any of these platforms, we respond 1-2 business days.
                    </h5>
                    <div class="mt-6 lg:mb-0 mb-6">
                        <button
                            class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-twitter"></i></button><button
                            class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-facebook-square"></i></button><button
                            class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-dribbble"></i></button><button
                            class="bg-white text-teal-700 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-3/12 px-4 ml-auto">
                            <span class="block uppercase text-white text-sm font-bold mb-2">Useful Links</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://www.creative-tim.com/presentation?ref=njs-profile">About Us</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://blog.creative-tim.com?ref=njs-profile">Blog</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://www.github.com/creativetimofficial?ref=njs-profile">Github</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://www.creative-tim.com/bootstrap-themes/free?ref=njs-profile">Free
                                        Products</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-3/12 px-4">
                            <span class="block uppercase text-white text-sm font-semibold mb-2">Other Resources</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-profile">MIT
                                        License</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/terms?ref=njs-profile">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/privacy?ref=njs-profile">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/contact-us?ref=njs-profile">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-3/12 px-4">
                            <span class="block uppercase text-white text-sm font-semibold mb-2">Other Resources</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-profile">MIT
                                        License</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/terms?ref=njs-profile">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/privacy?ref=njs-profile">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/contact-us?ref=njs-profile">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-3/12 px-4">
                            <span class="block uppercase text-white text-sm font-semibold mb-2">Other Resources</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-profile">MIT
                                        License</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/terms?ref=njs-profile">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/privacy?ref=njs-profile">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm"
                                        href="https://creative-tim.com/contact-us?ref=njs-profile">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-blueGray-300">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-white font-semibold py-1">
                        Copyright © <span id="get-current-year">2023</span><a
                            href="https://www.creative-tim.com/product/notus-js"
                            class="tegratext-gray-500er:tteatext-teal-700" target="_blank"> ImmoConnect by
                            <a href="https://www.creative-tim.com?ref=njs-profile" classgratext-gray-500
                                hover:text-teal-700">To Be Or Not To Be</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>



</body>


</html>