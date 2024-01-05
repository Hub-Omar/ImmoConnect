<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
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
  <header class="bg-cover bg-center" style="height:40rem; background-image: url('/ImmoConnect/public/images/up.jpg');">
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-bold  text-white">HOME SWEET HOME</h2>
      <h3 class="text-2xl mb-8 text-gray-200">La meilleure agence pour votre maison de rêve.</h3>
    </div>
  </header>

  <!-- Properties Section -->
  <section class="container mx-auto px-4 py-6">
    <div class="flex flex-wrap">
      <!-- Property Card -->
      <div class="w-1/4 md:w-1/2 lg:w-1/4 px-4 mb-8">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <div id="animation-carousel" class="relative w-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative overflow-hidden rounded-lg md:h-96" style="background-color: #5C8374;">
              <!-- Item 1 -->
              <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                <img src="/ImmoConnect/public/images/house8.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              </div>
              <!-- Item 2 -->
              <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="/ImmoConnect/public/images/cuisine2.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              </div>
              <!-- Item 3 -->
              <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="/ImmoConnect/public/images/room3.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              </div>
              <!-- Item 4 -->
              <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="/ImmoConnect/public/images/sdb.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              </div>
              <!-- Item 5 -->
              <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="/ImmoConnect/public/images/salon2.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
              </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
              </span>
            </button>
          </div>
          <div class="p-4">
            <h3 class="text-2xl text-gray-800 font-bold">6,550,000 Dhs</h3>
            <p class="text-gray-600">4 Ch 2 Sdb 2 S (380m²)</p>
            <p class="text-gray-600">California, CASABLANCA</p>
            <button class="mt-4 w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-500">en savoir plus</button>
          </div>
        </div>
      </div>

      <div class="w-1/4 md:w-1/2 lg:w-1/4 px-4 mb-8">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <div id="animation-carousel" class="relative w-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative overflow-hidden rounded-lg md:h-96" style="background-color: #5C8374;">
              <!-- Item 1 -->
              <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                <img src="/ImmoConnect/public/images/house2.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              </div>
              <!-- Item 2 -->
              <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="/ImmoConnect/public/images/cuisine.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              </div>
              <!-- Item 3 -->
              <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="/ImmoConnect/public/images/room1.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              </div>
              <!-- Item 4 -->
              <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="/ImmoConnect/public/images/sdb2.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              </div>
              <!-- Item 5 -->
              <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="/ImmoConnect/public/images/salon.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
              </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
              </span>
            </button>
          </div>
          <div class="p-4">
            <h3 class="text-2xl text-gray-800 font-bold">9,550,000 Dhs</h3>
            <p class="text-gray-600">6 Ch 3 Sdb 3 S (770m²)</p>
            <p class="text-gray-600">Guiliz, MARRAKECH</p>
            <button class="mt-4 w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-500">en savoir plus</button>
          </div>
        </div>
      </div>

      <div class="w-1/4 md:w-1/2 lg:w-1/4 px-4 mb-8">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <div id="animation-carousel" class="relative w-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative overflow-hidden rounded-lg md:h-96" style="background-color: #5C8374;">
              <!-- Item 1 -->
              <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                <img src="/ImmoConnect/public/images/house12.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              </div>
              <!-- Item 2 -->
              <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="/ImmoConnect/public/images/cuisine4.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              </div>
              <!-- Item 3 -->
              <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="/ImmoConnect/public/images/room2.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              </div>
              <!-- Item 4 -->
              <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="/ImmoConnect/public/images/pool2.jfif" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              </div>
              <!-- Item 5 -->
              <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="/ImmoConnect/public/images/salon3.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
              </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
              </span>
            </button>
          </div>
          <div class="p-4">
            <h3 class="text-2xl text-gray-800 font-bold">7,550,000 Dhs</h3>
            <p class="text-gray-600">4 Ch 3 Sdb 2 S (650m²)</p>
            <p class="text-gray-600">Agdal, RABAT</p>
            <button class="mt-4 w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-500">en savoir plus</button>
          </div>
        </div>
      </div>

      <div class="w-1/4 md:w-1/2 lg:w-1/4 px-4 mb-8">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">


          <div id="animation-carousel" class="relative w-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative overflow-hidden rounded-lg md:h-96" style="background-color: #5C8374;">
              <!-- Item 1 -->
              <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                <img src="/ImmoConnect/public/images/house10.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              </div>
              <!-- Item 2 -->
              <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="/ImmoConnect/public/images/cuisine3.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              </div>
              <!-- Item 3 -->
              <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="/ImmoConnect/public/images/room.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              </div>
              <!-- Item 4 -->
              <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="/ImmoConnect/public/images/living-room.jfif" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              </div>
              <!-- Item 5 -->
              <div class="hidden duration-200 ease-linear" data-carousel-item>
                <img src="/ImmoConnect/public/images/salon4.jpg" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
              </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
              </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
              </span>
            </button>
          </div>

          <div class="p-4">
            <h3 class="text-2xl text-gray-800 font-bold">9,100,000 Dhs</h3>
            <p class="text-gray-600">8 Ch 4 Sdb 4 S (1180m²)</p>
            <p class="text-gray-600">Rmel, YOUSSOUFIA</p>
            <button class="mt-4 w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-500">en savoir plus</button>
          </div>
        </div>
      </div>

      <!-- Add more property cards here -->
    </div>
  </section>

  <!-- History Section -->
  <section class="bg-white py-8" style="background-color: #5C8374;">
    <div style="width: 100%; height: 100%;">
      <div style="width: 312px; height: 69px; left: 0px; top: 2px; background: #D9D9D9; border-radius: 30px">
        <div class="" style=" color: #183D3D; font-size: 50px; font-family: Poppins; font-weight: 400; word-wrap: break-word cen ">About Us</div>
      </div>

    </div>
    <div class="container mx-auto flex px-6">
      <div class="" style="width: 100%; height:100%"><span style="color: black; font-size: 25px; font-family: Poppins; font-weight: 600; text-decoration: underline; word-wrap: break-word">Notre histoire<br /></span><span style="color: white; font-size: 25px; font-family: Roboto Serif; font-weight: 700; word-wrap: break-word">Imaginez un monde où chacun possédra ca maison</span><span style="color: white; font-size: 25px; font-family: Poppins; font-weight: 600; word-wrap: break-word">.<br /></span><span style="color: white; font-size: 25px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Nous savons que l’accession à la propriété signifie bien plus que simplement posséder une propriété : elle débouche sur des avantages financiers, sociaux et émotionnels</span><span style="color: white; font-size: 25px; font-family: Poppins; font-weight: 600; word-wrap: break-word">.</span></div>
      <div>
        <img style="width: 100%; height: 100%; border-radius: 12px" src="/ImmoConnect/public/images/history2.jpg" />
      </div>
    </div>
    <div class="container mx-auto flex px-6">
      <div>
        <img style="width: 100%; height: 100%; border-radius: 12px" src="/ImmoConnect/public/images/team0.jpg" />
      </div>
      <div style="width: 100%; height: 100%"><span style="color: black; font-size: 25px; font-family: Poppins; font-weight: 600; text-decoration: underline; word-wrap: break-word">Qu’est-ce qu’ImmoConnect ?<br /></span><span style="color: white; font-size: 25px; font-family: Poppins; font-weight: 500; word-wrap: break-word">ImmoConnect est une société de technologie immobilière basée au Maroc et axée sur l'amélioration de l'accession à la propriété. Nous aidons les consommateurs dans leur cheminement vers la maison de leurs Rêves.</span></div>
    </div>
    <div>
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
    </div>
  </section>

  <!-- Contact Section -->
  <section class="bg-gray-200 py-8 mx-32 my-12">
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-bold mb-2">Contact</h2>


      <form class="max-w-md mx-auto">
        <div class="relative z-0 w-full mb-5 group">
          <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
          <input type="password" name="floating_password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
          <input type="password" name="repeat_password" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirm password</label>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
          <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
          </div>
          <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
          </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
          <div class="relative z-0 w-full mb-5 group">
            <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number (123-456-7890)</label>
          </div>
          <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="floating_company" id="floating_company" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Company (Ex. Google)</label>
          </div>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
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
            <button class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
              <i class="fab fa-twitter"></i></button><button class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
              <i class="fab fa-facebook-square"></i></button><button class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
              <i class="fab fa-dribbble"></i></button><button class="bg-white text-teal-700 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
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
                  <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm" href="https://www.creative-tim.com/presentation?ref=njs-profile">About Us</a>
                </li>
                <li>
                  <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm" href="https://blog.creative-tim.com?ref=njs-profile">Blog</a>
                </li>
                <li>
                  <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm" href="https://www.github.com/creativetimofficial?ref=njs-profile">Github</a>
                </li>
                <li>
                  <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm" href="https://www.creative-tim.com/bootstrap-themes/free?ref=njs-profile">Free
                    Products</a>
                </li>
              </ul>
            </div>
            <div class="w-full lg:w-3/12 px-4">
              <span class="block uppercase text-white text-sm font-semibold mb-2">Other Resources</span>
              <ul class="list-unstyled">
                <li>
                  <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm" href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-profile">MIT
                    License</a>
                </li>
                <li>
                  <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm" href="https://creative-tim.com/terms?ref=njs-profile">Terms &amp; Conditions</a>
                </li>
                <li>
                  <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm" href="https://creative-tim.com/privacy?ref=njs-profile">Privacy Policy</a>
                </li>
                <li>
                  <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm" href="https://creative-tim.com/contact-us?ref=njs-profile">Contact Us</a>
                </li>
              </ul>
            </div>
            <div class="w-full lg:w-3/12 px-4">
              <span class="block uppercase text-white text-sm font-semibold mb-2">Other Resources</span>
              <ul class="list-unstyled">
                <li>
                  <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm" href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-profile">MIT
                    License</a>
                </li>
                <li>
                  <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm" href="https://creative-tim.com/terms?ref=njs-profile">Terms &amp; Conditions</a>
                </li>
                <li>
                  <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm" href="https://creative-tim.com/privacy?ref=njs-profile">Privacy Policy</a>
                </li>
                <li>
                  <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm" href="https://creative-tim.com/contact-us?ref=njs-profile">Contact Us</a>
                </li>
              </ul>
            </div>
            <div class="w-full lg:w-3/12 px-4">
              <span class="block uppercase text-white text-sm font-semibold mb-2">Other Resources</span>
              <ul class="list-unstyled">
                <li>
                  <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm" href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-profile">MIT
                    License</a>
                </li>
                <li>
                  <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm" href="https://creative-tim.com/terms?ref=njs-profile">Terms &amp; Conditions</a>
                </li>
                <li>
                  <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm" href="https://creative-tim.com/privacy?ref=njs-profile">Privacy Policy</a>
                </li>
                <li>
                  <a class="text-gray-500 hover:text-teal-700 font-semibold block pb-2 text-sm" href="https://creative-tim.com/contact-us?ref=njs-profile">Contact Us</a>
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
            Copyright © <span id="get-current-year">2023</span><a href="https://www.creative-tim.com/product/notus-js" class="tegratext-gray-500er:tteatext-teal-700" target="_blank"> ImmoConnect by
              <a href="https://www.creative-tim.com?ref=njs-profile" classgratext-gray-500 hover:text-teal-700">To Be Or Not To Be</a>.
          </div>
        </div>
      </div>
    </div>
  </footer>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>


</html>