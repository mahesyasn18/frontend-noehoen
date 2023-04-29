<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      @vite(['resources/css/app.css','resources/js/app.js'])
      <link rel="stylesheet" href="{{asset("css/jquery.flipster.min.css")}}">
      <!-- jQuery -->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="{{asset("js/jquery.flipster.min.js")}}"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      @stack('css')
   </head>
   <body>
      <nav class="border-gray-200 bg-transparent dark:bg-gray-800 dark:border-gray-700 fixed top-0 w-full z-50 shadow-sm">
         <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center">
            <img src="{{asset("logo/noehoen4.png")}}" class="h-10 mr-3" alt="noehoen Logo" />
            </a>
            <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
               <span class="sr-only">Open main menu</span>
               <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
               </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
               <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                  <li>
                     <a href="/" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
                  </li>
                  <li>
                     <a href="/news" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">News</a>
                  </li>
                  <li>
                     <a href="/product" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Product</a>
                  </li>
                  <li>
                     <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Product</a>
                  </li>
                  <li>
                     <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">News</a>
                  </li>
                  <li>
                     <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                        More 
                        <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                     </button>
                     <!-- Dropdown menu -->
                     <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                           <li>
                              <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
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
               </ul>
            </div>
         </div>
      </nav>
      @yield('content')
      <div class="border-t border-b border-gray-200 py-12 mt-16 px-4">
         <aside class="container mx-auto">
            <div class="flex flex-wrap -mx-4 justify-evenly">
               <div class="px-4 w-full md:w-2/12 mb-4 md:mb-0 accordion">
                  <img src="{{asset("logo/noehoen4.png")}}" class="h-10 mr-3" alt="noehoen Logo" />
                  <div class="flex flex-col ml-3 mt-2">
                     <p>A108 Adam Street</p>
                     <p>New York, NY 535022</p>
                     <p>United States</p>
                     <br>
                     <p><span class="font-bold">Phone:</span> 7235237563257</p>
                     <p><span class="font-bold">Email:</span> info@gmail.com</p>
                  </div>
               </div>
               <div class="px-4 w-full md:w-2/12 mb-4 md:mb-0 accordion ml-3 ">
                  <h5 class="text-lg font-semibold mb-2 relative">Overview</h5>
                  <div class="flex flex-col mt-2"> 
                     <a href="#" class="hover:underline py-1 block">Shipping</a>
                     <a href="#" class="hover:underline py-1 block">Refund</a>
                     <a href="#" class="hover:underline py-1 block">Promotion</a>
                  </div>
               </div>
               <div class="px-4 w-full md:w-2/12 mb-4 md:mb-0 accordion ml-3 ">
                  <h5 class="text-lg font-semibold mb-2 relative">Overview</h5>
                  <div class="flex flex-col mt-2"> 
                     <a href="#" class="hover:underline py-1 block">About</a>
                     <a href="#" class="hover:underline py-1 block">Career</a>
                     <a href="#" class="hover:underline py-1 block">Contact Us</a>
                  </div>
               </div>
               <div class="px-4 w-full md:w-2/12 mb-4 md:mb-0 accordion  ml-3">
                  <h5 class="text-lg font-semibold mb-2 relative">Our Social Network</h5>
                  <div class="flex flex-col mt-2">
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                     <br> 
                     <div class="flex flex-wrap gap-4 items-center">
                        <p class="bg-primary px-2 py-1 rounded-full text-white"><i class="fa-brands fa-whatsapp"></i></p>
                        <p class="bg-primary px-2 py-1 rounded-full text-white"><i class="fa-brands fa-whatsapp"></i></p>
                        <p class="bg-primary px-2 py-1 rounded-full text-white"><i class="fa-brands fa-whatsapp"></i></p>
                        <p class="bg-primary px-2 py-1 rounded-full text-white"><i class="fa-brands fa-whatsapp"></i></p>
                     </div>
                  </div>
               </div>
            </div>
         </aside>
      </div>
      <!-- START: FOOTER -->
      <footer class="flex text-center px-4 py-8 justify-center">
         <p class="text-sm">
            Copyright 2023 • All Rights Reserved LuxSpace by BuildWith Angga
         </p>
      </footer>
   </body>
</html>
@stack('js')

<script>
   window.addEventListener("scroll", function() {
     var navbar = document.querySelector("nav");
     navbar.classList.toggle("bg-white", window.scrollY > 0);
   });
   
   const carouselId = document.getElementById("carousel");
   const carouselItems = carouselId?.getElementsByClassName("flex")[0];
   const carouselContainer = carouselId?.getElementsByClassName("container")[0];
   
   function carousel_calc_offset(e) {
   const carouselOffset = carouselContainer.getBoundingClientRect().left;
   
   carouselItems.style.paddingLeft = `${carouselOffset - 16}px`;
   carouselItems.style.paddingRight = `${carouselOffset - 16}px`;
   }
   
   function slide(wrapper, items) {
   let posX1 = 0,
     posX2 = 0,
     posInitial,
     posFinal,
     threshold = 100,
     itemToShow = 4,
     slides = items.getElementsByClassName("card"),
     slidesLength = slides.length,
     slideSize = items.getElementsByClassName("card")[0].offsetWidth,
     index = 0,
     allowShift = true;
   
   wrapper.classList.add("loaded");
   
   // Mouse events
   items.onmousedown = dragStart;
   
   // Touch events
   items.addEventListener("touchstart", dragStart);
   items.addEventListener("touchend", dragEnd);
   items.addEventListener("touchmove", dragAction);
   
   // Transition events
   items.addEventListener("transitionend", checkIndex);
   
   function dragStart(e) {
     e = e || window.event;
     e.preventDefault();
     posInitial = items.offsetLeft;
   
     if (e.type == "touchstart") {
       posX1 = e.touches[0].clientX;
     } else {
       posX1 = e.clientX;
       document.onmouseup = dragEnd;
       document.onmousemove = dragAction;
     }
   }
   
   function dragAction(e) {
     e = e || window.event;
   
     if (e.type == "touchmove") {
       posX2 = posX1 - e.touches[0].clientX;
       posX1 = e.touches[0].clientX;
     } else {
       posX2 = posX1 - e.clientX;
       posX1 = e.clientX;
     }
     items.style.left = items.offsetLeft - posX2 + "px";
   }
   
   function dragEnd(e) {
     posFinal = items.offsetLeft;
     if (posFinal - posInitial < -threshold) {
       shiftSlide(1, "drag");
     } else if (posFinal - posInitial > threshold) {
       shiftSlide(-1, "drag");
     } else {
       items.style.left = posInitial + "px";
     }
   
     document.onmouseup = null;
     document.onmousemove = null;
   }
   
   function shiftSlide(dir, action) {
     items.classList.add("transition-all");
     items.classList.add("duration-200");
   
     if (allowShift) {
       if (!action) {
         posInitial = items.offsetLeft;
       }
   
       if (dir == 1) {
         items.style.left = posInitial - slideSize + "px";
         index++;
       } else if (dir == -1) {
         items.style.left = posInitial + slideSize + "px";
         index--;
       }
     }
     console.log(index);
   
     allowShift = false;
   }
   
   function checkIndex() {
     setTimeout(() => {
       items.classList.remove("transition-all");
       items.classList.remove("duration-200");
     }, 200);
     if (index == -1) {
       items.style.left = -(slidesLength * slideSize) + "px";
       index = slidesLength - 1;
     }
   
     if (index == slidesLength - itemToShow) {
       items.style.left = -((slidesLength - itemToShow - 1) * slideSize) + "px";
       index = slidesLength - itemToShow - 1;
     }
   
     if (index == slidesLength || index == slidesLength - 1) {
       items.style.left = "0px";
       index = 0;
     }
   
     allowShift = true;
   }
   }
   
   if (document.getElementById("carousel")) {
   slide(carouselId, carouselItems);
   window.addEventListener("load", carousel_calc_offset);
   window.addEventListener("resize", carousel_calc_offset);
   }
   
</script>