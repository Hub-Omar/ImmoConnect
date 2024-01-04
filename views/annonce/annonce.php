
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
        <link href="../../public/css/tailwind.css" rel="stylesheet">
        <link href="../../public/css/annonce.css" rel="stylesheet"> 
        <script src="../../public/js/annonce.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
        <!-- <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css"> -->
         <link rel="stylesheet"href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"> -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,800;0,900;1,500;1,700;1,800;1,900&display=swap"rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>

        <link rel="stylesheet" href="/ImmoConnect/public/css/details.css">
    <title>Document</title>
</head>
<body>

<!-- =================================== header/navbar ============================== -->
   


<nav >
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
  </a>
  <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
      </button>
      <!-- Dropdown menu -->
      <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
        <div class="px-4 py-3">
          <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
          <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
        </div>
        <ul class="py-2" aria-labelledby="user-menu-button">
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
          </li>
        </ul>
      </div>
      <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="#" class="block py-2 px-3 text-white rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
      </li>
      
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
      </li>
    </ul>
  </div>
  </div>
</nav>


<!-- ================================= first View ========================= -->


<div class="relative">
<img style="width:92rem;height:43rem" class="pl-6 rounded-3xl md: flex w-full" src="../../public/image/pexels-clay-elliot-5524336.jpg" />
<div style="top:20rem;right:20rem;background-color:rgba(30, 30, 30, 0.55)" class="absolute rounded-2xl h-52 w-96 flex flex-col space-y-12 md:right-8 w-8	">
  <p style="" class="relative text-white top-5 left-2 font-bold font-medium">Whether you’re searching  for houses, 
  apartments, or condos, it's easy to find a place
   you'll love.</p>
   <div class="head-left">
            <div class="search">
                <input type="text" placeholder="Search" class="search" id="searchInput" oninput="searchCards()">
                <div class="icon">
                    <i class='bx bx-search-alt'></i>
                </div>
            </div>
        </div>
</div>
</div>

<!-- ============================= first Annonce/part1 ============== -->





<button id="openModal" class="bg-blue-500 text-white px-4 py-2 rounded">Open Modal</button>

    <!-- Modal -->
    <div id="modal" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white p-8 rounded shadow-lg w-96">
            <!-- Modal Content with Input Fields -->
            <h2 class="text-2xl font-bold mb-4">Add Product</h2>

            <!-- Image Input -->
            <input type="file" class="w-full border p-2 mb-4" placeholder="Product Image">

            <!-- Title Input -->
            <input type="text" class="w-full border p-2 mb-4" placeholder="Product Title">

            <!-- Description Input -->
            <textarea class="w-full border p-2 mb-4" placeholder="Product Description"></textarea>

            <!-- Price Input -->
            <input type="number" class="w-full border p-2 mb-4" placeholder="Product Price">

            <!-- Date Added Input -->
            <input type="date" class="w-full border p-2 mb-4" placeholder="Date Added">

            <!-- Save Button -->
            <button id="saveProduct" class="bg-green-500 text-white px-4 py-2 rounded">Save</button>

            <!-- Close Button -->
            <button id="closeModal" class="bg-red-500 text-white px-4 py-2 rounded ml-2">Close</button>
        </div>
    </div>
<div class="text-center	text-white font-bold pt-10 ">

<h1 class="text-2xl	">Explore homes on ImmoConnect <br>
Take a deep dive and browse homes for sale, original neighborhood photos, <br>
resident reviews and local insights to find what is right for you.</h1>  

</div>

<div class="cards" id="cards-container">
        <div class="card">
            <img src="/ImmoConnect/public/images/City Beach Residence Elevation.jfif">
            <div class="descr top-48">
                <p>Carriage House</p>
                <p>$514,999</p>
            </div>

          
    <input type="submit" style="background-color:#183D3D " class="relative w-28 h-11 bottom-16 left-36 rounded-lg text-white font-light" value="Show More">
        </div>
        <div class="card">
            <img src="/ImmoConnect/public/images/Black Brick Vila in Damavand, Iran by Reza Mohtashami.jfif">
            <div class="descr top-48">
                <p>Tudor</p>
                <p>$514,999</p>
            </div>
            <input type="submit" style="background-color:#183D3D " class="relative w-28 h-11 bottom-16 left-36 rounded-lg text-white font-light" value="Show More">

        </div>
        <div class="card">

            <img src="/ImmoConnect/public/images/detail1.jfif">
            <div class="descr top-48">
                <p>Wilson Ave</p>
                <p>$414,999</p>
            </div>
            <input type="submit" style="background-color:#183D3D " class="relative w-28 h-11 bottom-16 left-36 rounded-lg text-white font-light" value="Show More">

        </div>
        <div class="card">
            <img src="/ImmoConnect/public/images/download (3).jfif">
            <div class="descr top-48">
                <p>189 Wilson Ave</p>
                <p>$614,999</p>
            </div>
            <input type="submit" style="background-color:#183D3D " class="relative w-28 h-11 bottom-16 left-36 rounded-lg text-white font-light" value="Show More">

        </div>
        <div class="card">
            <img src="/ImmoConnect/public/images/City Beach Residence Elevation.jfif">
            <div class="descr top-48">
                <p>189 Wilson Ave</p>
                <p>$514,999</p>
            </div>
            <input type="submit" style="background-color:#183D3D " class="relative w-28 h-11 bottom-16 left-36 rounded-lg text-white font-light" value="Show More">

        </div>
        <div class="card">
            <img src="/ImmoConnect/public/images/detail1.jfif">
            <div class="descr top-48">
                <p>189 Wilson Ave</p>
                <p>$514,999</p>
            </div>
            <input type="submit" style="background-color:#183D3D " class="relative w-28 h-11 bottom-16 left-36 rounded-lg text-white font-light" value="Show More">

        </div>
        <div class="card">
            <img src="/ImmoConnect/public/images/download (3).jfif">
            <div class="descr top-48">
                <p>189 Wilson Ave</p>
                <p>$314,999</p>
            </div>
            <input type="submit" style="background-color:#183D3D " class="relative w-28 h-11 bottom-16 left-36 rounded-lg text-white font-light" value="Show More">

        </div>
        <div class="card">
            <img src="/ImmoConnect/public/images/Black Brick Vila in Damavand, Iran by Reza Mohtashami.jfif">
            <div class="descr top-48">
                <p>189 Wilson Ave</p>
                <p>$714,999</p>
                <input type="submit" style="background-color:#183D3D " class="relative w-28 h-11 bottom-0 left-36 rounded-lg text-white font-light" value="Show More">
            </div>
        </div>
    </div>
    <div class="pagination" id="pagination">
        <button onclick="changePage(-1)">Previous</button>
        <button onclick="changePage(1)">Next</button>
    </div>

<div class="cards flex justify-evenly flex-row sm:flex flex-wrap  ">

    <div class="card relative pl-4 border:1px none ;border-radius:20%;">
      <img src="../../public/image/home2.jpg" class="relative " alt="home2" style="border:1px;border-radius:24px;height:16rem;width:15rem">
      <div class="flex flex-col space-y-3 space-x-16 absolute rounded-3xl h-24" style="background-color:rgba(30, 30, 0, 0.55) ; top:160px; width:240px ;left:16px" >
        <span class="relative text-white pt-3 pl-4 font-bold font-medium">189 Wilson Ave</span>       
        <input type="submit" style="background-color:#183D3D" class="relative w-24 h-11 left-10 rounded-lg text-white font-light" value="Show More">
      </div>
     </div>

     <div class="card relative pl-4 border:1px none ;border-radius:20%;">
      <img src="../../public/image/home1.jpg" class="relative " alt="home2" style="border:1px;border-radius:24px;height:16rem;width:15rem">
      <div class="flex flex-col space-y-3 space-x-16 absolute rounded-3xl h-24" style="background-color:rgba(30, 30, 0, 0.55) ; top:160px; width:240px ;left:16px" >
        <span class="relative text-white pt-3 pl-4 font-bold font-medium">189 Wilson Ave</span>       
        <input type="submit" style="background-color:#183D3D" class="relative w-24 h-11 left-10 rounded-lg text-white font-light" value="Show More">
      </div>
     </div>

     <div class="card relative pl-4 border:1px none ;border-radius:20%;">
      <img src="../../public/image/home3.jpg" class="relative " alt="home2" style="border:1px;border-radius:24px;height:16rem;width:15rem">
      <div class="flex flex-col space-y-3 space-x-16 absolute rounded-3xl h-24" style="background-color:rgba(30, 30, 0, 0.55) ; top:160px; width:240px ;left:16px" >
        <span class="relative text-white pt-3 pl-4 font-bold font-medium">189 Wilson Ave</span>       
        <input type="submit" style="background-color:#183D3D" class="relative w-24 h-11 left-10 rounded-lg text-white font-light" value="Show More">
      </div>
     </div>

     <div class="card relative pl-4 border:1px none ;border-radius:20%;">
      <img src="../../public/image/home6.jpg" class="relative " alt="home2" style="border:1px;border-radius:24px;height:16rem;width:15rem">
      <div class="flex flex-col space-y-3 space-x-16 absolute rounded-3xl h-24" style="background-color:rgba(30, 30, 0, 0.55) ; top:160px; width:240px ;left:16px" >
        <span class="relative text-white pt-3 pl-4 font-bold font-medium">189 Wilson Ave</span>       
        <input type="submit" style="background-color:#183D3D" class="relative w-24 h-11 left-10 rounded-lg text-white font-light" value="Show More">
      </div>
     </div>
  
  </div>

  <!-- =================== Annonce/part2 =============== -->

  <div class="cards-b flex justify-evenly flex-row sm:flex flex-wrap pt-20 ">

<div class="card relative pl-4 border:1px none ;border-radius:20%;">
  <img src="../../public/image/home7.jpg" class="relative " alt="home2" style="border:1px;border-radius:24px;height:28rem;width:20rem">
    <div class="flex flex-col absolute rounded-3xl h-48" style="background-color:rgba(30, 30, 0, 0.55) ; top:256px; width:320px ;left:16px" >
        <p class="relative text-white pt-3 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <input type="submit" style="background-color:#183D3D" class="relative w-24 h-11 left-44	 rounded-lg text-white font-light" value="Show More">
    </div>
 </div>

 <div class="card relative pl-4 border:1px none ;border-radius:20%;">
  <img src="../../public/image/home5.jpg" class="relative " alt="home2" style="border:1px;border-radius:24px;height:28rem;width:20rem">
    <div class="flex flex-col absolute rounded-3xl h-48" style="background-color:rgba(30, 30, 0, 0.55) ; top:256px; width:320px ;left:16px" >
        <p class="relative text-white pt-3 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <input type="submit" style="background-color:#183D3D" class="relative w-24 h-11 left-44	 rounded-lg text-white font-light" value="Show More">
    </div>
 </div>

 <div class="card relative pl-4 border:1px none ;border-radius:20%;">
  <img src="../../public/image/home6.jpg" class="relative " alt="home2" style="border:1px;border-radius:24px;height:28rem;width:20rem">
    <div class="flex flex-col absolute rounded-3xl h-48" style="background-color:rgba(30, 30, 0, 0.55) ; top:256px; width:320px ;left:16px" >
        <p class="relative text-white pt-3 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <input type="submit" style="background-color:#183D3D" class="relative w-24 h-11 left-44	 rounded-lg text-white font-light" value="Show More">
    </div>
 </div>
 </div>

<!-- ======================================= second Annonce ============= -->

<div class="text-center	text-white font-bold pt-10 ">
<h1 class="text-2xl	">original neighborhood photos, resident reviews and local 
<br>insights to find what is right for you.
</div>

 <div class="flex flex-row justify-evenly sm:flex flex-wrap pt-20 ">
     <div class="card1 relative border:1px none ;border-radius:20%;">
     <img src="../../public/image/home1.jpg" class="relative " alt="home2" style="border:1px;border-radius:24px;height:24rem;width:18rem">
        <div class="flex flex-col absolute rounded-3xl h-48" style="background-color:rgba(30, 30, 0, 0.55) ; top:192px; width:288px ;left:0px" >
         <p class="relative text-white pt-3 pl-1 font-bold font-medium">189 Wilson Ave</p>       
         <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
         <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
         <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
         <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
         <input type="submit" style="background-color:#183D3D" class="relative left-40 w-24 h-11 rounded-lg text-white font-light" value="Show More">
        </div>
      </div>

      <div class="flex flex-col justify-between sm:flex flex-wrap">
          <div class="card2 relative border:1px none ;border-radius:20%;">
           <img src="../../public/image/home2.jpg" class="relative " alt="home2" style="border:1px;border-radius:24px;height:11rem;width:15rem">
           <div class="flex flex-col space-y-1 space-x-32 absolute rounded-3xl h-20 left-0 bottom-0" style="background-color:rgba(30, 30, 0, 0.55); width:240px" >
              <p class="relative text-white pl-4 font-bold font-medium">189 Wilson Ave</p>       
              <input type="submit" style="background-color:#183D3D" class="relative w-24 h-10 bottom-0 left-0 rounded-lg text-white font-light" value="Show More">
           </div>
          </div>

          <div class="card2 relative border:1px none ;border-radius:20%;">
           <img src="../../public/image/home2.jpg" class="relative " alt="home2" style="border:1px;border-radius:24px;height:11rem;width:15rem">
           <div class="flex flex-col space-y-1 space-x-32 absolute rounded-3xl h-20 left-0 bottom-0" style="background-color:rgba(30, 30, 0, 0.55); width:240px" >
              <p class="relative text-white pl-4 font-bold font-medium">189 Wilson Ave</p>       
              <input type="submit" style="background-color:#183D3D" class="relative w-24 h-10 bottom-0 left-0 rounded-lg text-white font-light" value="Show More">
           </div>
          </div>
      </div>

       <div class="card3 relative border:1px none ;border-radius:20%;">
          <img src="../../public/image/home1.jpg" class="relative " alt="home2" style="border:1px;border-radius:24px;height:24rem;width:18rem">
          <div class="flex flex-col absolute rounded-3xl h-48" style="background-color:rgba(30, 30, 0, 0.55) ; top:192px; width:288px ;left:0px" >
             <p class="relative text-white pt-3 pl-1 font-bold font-medium">189 Wilson Ave</p>       
             <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
             <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
             <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
             <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
             <input type="submit" style="background-color:#183D3D" class="relative left-40 w-24 h-11 rounded-lg text-white font-light" value="Show More">
          </div>
        </div>

        <div class="flex flex-col justify-between sm:flex flex-wrap">
          <div class="card2 relative border:1px none ;border-radius:20%;">
           <img src="../../public/image/home2.jpg" class="relative " alt="home2" style="border:1px;border-radius:24px;height:11rem;width:15rem">
           <div class="flex flex-col space-y-1 space-x-32 absolute rounded-3xl h-20 left-0 bottom-0" style="background-color:rgba(30, 30, 0, 0.55); width:240px" >
              <span class="relative text-white font-bold font-medium">189 Wilson Ave</span>       
              <input type="submit" style="background-color:#183D3D" class="relative w-24 h-10 bottom-0 left-0 rounded-lg text-white font-light" value="Show More">
           </div>
          </div>

          <div class="card2 relative border:1px none ;border-radius:20%;">
           <img src="../../public/image/home2.jpg" class="relative " alt="home2" style="border:1px;border-radius:24px;height:11rem;width:15rem">
           <div class="flex flex-col space-y-1 space-x-32 absolute rounded-3xl h-20 left-0 bottom-0" style="background-color:rgba(30, 30, 0, 0.55); width:240px" >
              <span class="relative text-white font-bold font-medium">189 Wilson Ave</span>       
              <input type="submit" style="background-color:#183D3D" class="relative w-24 h-10 bottom-0 left-0 rounded-lg text-white font-light" value="Show More">
           </div>
          </div>
      </div>
    </div>



<!-- ======================================= second Annonce ============= -->

<div class="text-center	text-white font-bold pt-10 ">
<h1 class="text-2xl	">Newly listed homes in Youssoufia</h1>
</div>


<div class="cards-b flex justify-evenly flex-row sm:flex flex-wrap pt-20 ">

<div class="card relative pl-4 border:1px none ;border-radius:20%;">
  <img src="../../public/image/home7.jpg" class="relative " alt="home2" style="border:1px;border-radius:24px;height:28rem;width:20rem">
    <div class="flex flex-col absolute rounded-3xl h-48" style="background-color:rgba(30, 30, 0, 0.55) ; top:256px; width:320px ;left:16px" >
        <p class="relative text-white pt-3 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <input type="submit" style="background-color:#183D3D" class="relative w-24 h-11 left-44	 rounded-lg text-white font-light" value="Show More">
    </div>
 </div>

 <div class="card relative pl-4 border:1px none ;border-radius:20%;">
  <img src="../../public/image/home5.jpg" class="relative " alt="home2" style="border:1px;border-radius:24px;height:28rem;width:20rem">
    <div class="flex flex-col absolute rounded-3xl h-48" style="background-color:rgba(30, 30, 0, 0.55) ; top:256px; width:320px ;left:16px" >
        <p class="relative text-white pt-3 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <input type="submit" style="background-color:#183D3D" class="relative w-24 h-11 left-44	 rounded-lg text-white font-light" value="Show More">
    </div>
 </div>

 <div class="card relative pl-4 border:1px none ;border-radius:20%;">
  <img src="../../public/image/home6.jpg" class="relative " alt="home2" style="border:1px;border-radius:24px;height:28rem;width:20rem">
    <div class="flex flex-col absolute rounded-3xl h-48" style="background-color:rgba(30, 30, 0, 0.55) ; top:256px; width:320px ;left:16px" >
        <p class="relative text-white pt-3 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <p class="relative text-white pt-0 pl-1 font-bold font-medium">189 Wilson Ave</p>       
        <input type="submit" style="background-color:#183D3D" class="relative w-24 h-11 left-44	 rounded-lg text-white font-light" value="Show More">
    </div>
 </div>
 </div>
<!-- ======================================= FOOTER ============= -->
<footer class="relative bg-teal-900 pt-8 pb-6 mt-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap text-left lg:text-left">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl font-bold text-white">ImmoConnect</h4>
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
                            <a href="https://www.creative-tim.com?ref=njs-profile" class ="gratext-gray-500
                                hover:text-teal-700">To Be Or Not To Be</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>

     <!-- Add this to the head of your HTML file -->

     <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
     <script src="/ImmoConnect/public/js/main.js"></script>

     <!-- Add this to your HTML file where the form is located -->

    <script>
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
        openmodal[i].addEventListener('click', function (event) {
            event.preventDefault()
            toggleModal()
        })
    }

    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)

    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
        closemodal[i].addEventListener('click', toggleModal)
    }

    document.onkeydown = function (evt) {
        evt = evt || window.event
        var isEscape = false
        if ("key" in evt) {
            isEscape = (evt.key === "Escape" || evt.key === "Esc")
        } else {
            isEscape = (evt.keyCode === 27)
        }
        if (isEscape && document.body.classList.contains('modal-active')) {
            toggleModal()
        }
    };


    function toggleModal() {
        const body = document.querySelector('body')
        const modal = document.querySelector('.modal')
        modal.classList.toggle('opacity-0')
        modal.classList.toggle('pointer-events-none')
        body.classList.toggle('modal-active')
    }

</script>

<script>
    const cardsContainer = document.getElementById('cards-container');
    const pagination = document.getElementById('pagination');
    const cardsPerPage = 10; // Adjust this based on the number of cards you want per page
    let currentPage = 1;

    // Function to show/hide cards based on the current page
    function showCards() {
        const cards = cardsContainer.querySelectorAll('.card');
        const start = (currentPage - 1) * cardsPerPage;
        const end = start + cardsPerPage;

        cards.forEach((card, index) => {
            card.style.display = index >= start && index < end ? 'block' : 'none';
        });
    }

    // Function to handle page change
    function changePage(direction) {
        currentPage += direction;
        if (currentPage < 1) {
            currentPage = 1;
        } else if (currentPage > Math.ceil(cardsContainer.children.length / cardsPerPage)) {
            currentPage = Math.ceil(cardsContainer.children.length / cardsPerPage);
        }
        showCards();
    }

    // Initial call to show the first page of cards
    showCards();
</script>



<!-- =================== modal ============= -->
<script>
        // JavaScript to handle modal opening and closing
        const openModalButton = document.getElementById('openModal');
        const closeModalButton = document.getElementById('closeModal');
        const modal = document.getElementById('modal');

        openModalButton.addEventListener('click', () => {
            modal.style.display = 'flex';
        });

        closeModalButton.addEventListener('click', () => {
            modal.style.display = 'none';
        });
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</body>
</html>