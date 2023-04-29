@extends('template.base')
@section('content')
<div class="fixed z-10 right-5 text-center  bottom-5" >
   <!-- Facebook -->
   <a href="#" title="Share on Facebook">
      <p class="bg-primary px-4 py-3 rounded-full text-white text-2xl"><i class="fa-brands fa-whatsapp"></i></p>
   </a>
</div>
<div class="flex items-center">
   <div class="w-full absolute z-20 inset-0 md:relative md:w-1/2 text-center lg:flex flex-col justify-center hidden">
      <h1 class="text-3xl md:text-5xl leading-tight font-semibold">
         The Room <br class="" />You've Dreaming
      </h1>
      <h2 class="px-8 text-base md:px-0 md:text-lg my-6 tracking-wide">
         Kami menyediakan furniture berkelas yang
         <br class="hidden lg:block" />membuat ruangan terasa homey
      </h2>
      <div>
         <a
            href="#browse-the-room"
            class="bg-primary text-white hover:bg-black hover:text-pink-400 rounded-full px-8 py-3 mt-4 inline-block flex-none transition duration-200"
            >Explore Now</a
            >
      </div>
   </div>
   <div class="w-full min-h-screen md:min-h-full md:relative md:w-1/2">
      <div class="relative" style="height: calc(var(--top-bar-height) + 20px);">
         <img
            src="images/content/image-section-1.png" class="md:relative w-full  md:min-h-fit min-h-screen object-cover object-center"
            />
         <div class="absolute top-0 left-0 w-full h-full inset-0 text-center flex  flex-col items-center justify-center text-white lg:hidden md:hidden ">
            <h1 class="text-3xl md:text-5xl leading-tight font-semibold">
               The Room <br class="" />You've Dreaming
            </h1>
            <h2 class="px-8 text-base md:px-0 md:text-lg my-6 tracking-wide">
               Kami menyediakan furniture berkelas yang
               <br class="hidden lg:block" />membuat ruangan terasa homey
            </h2>
            <div>
               <a
                  href="#browse-the-room"
                  class="bg-primary text-white hover:bg-black hover:text-pink-400 rounded-full px-8 py-3 mt-4 inline-block flex-none transition duration-200"
                  >Explore Now</a
                  >
            </div>
         </div>
      </div>
   </div>
</div>
<div class="bg-gray-100 py-16 px-4" id="browse-the-room">
   <div class="container mx-auto">
      <div class="flex flex-start mb-4">
         <h3 class="text-2xl capitalize font-semibold">
            Category <br class="" />that We Designed for You
         </h3>
      </div>
      <div class="grid grid-cols-2  md:grid-cols-4 gap-6 mt-10">
         <div class="relative h-32  md:h-32 bg-white rounded-xl overflow-hidden shadow-lg ">
            <img src="./images/content/image-catalog-3.png" alt="Decoration" class="w-full h-full object-cover object-center"/>
            <div class="absolute inset-0 bg-gray-700 opacity-70  text-white  flex items-center justify-center flex-col  hover:bg-black hover:opacity-70 hover:transition hover:duration-200">
               <h5 class="text-2xl font-semibold text-white ">Decoration</h5>
               <span class="text-white">77,392 items</span>
               <a href="details.html" class="absolute inset-0 z-10"></a>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="flex flex-col py-16">
   <div class="container mx-auto mb-4">
      <div class="flex justify-between px-4">
         <div class="">
            <h3 class="text-2xl capitalize font-semibold">
               Product 
            </h3>
         </div>
         <a href="" class="bg-primary text-white hover:bg-black hover:text-pink-400 rounded-full px-8 py-3 inline-block transition duration-200"> See more</a>
      </div>
   </div>
   <div class="overflow-x-hidden px-4 mt-10" id="carousel">
      <div class="container mx-auto"></div>
      <!-- <div class="overflow-hidden z-10"> -->
      <div class="flex -mx-4 flex-row relative">
         <!-- START: JUST ARRIVED ROW 1 -->
         <div class="px-4 relative card group">
            <div
               class="rounded-xl overflow-hidden card-shadow relative"
               style="width: 287px; height: 386px"
               >
               <div
                  class="absolute opacity-0 group-hover:opacity-100 transition duration-200 flex items-center justify-center w-full h-full bg-black bg-opacity-35"
                  >
                  <div
                     class="bg-white text-black rounded-full w-16 h-16 flex items-center justify-center"
                     >
                     <svg
                        class="fill-current"
                        width="43"
                        height="24"
                        viewBox="0 0 43 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                           d="M41.6557 10.0065C39.2794 6.95958 36.2012 4.43931 32.7542 2.71834C29.2355 0.961548 25.4501 0.0500333 21.4985 0.00223289C21.3896 -0.000744296 20.9526 -0.000744296 20.8438 0.00223289C16.8923 0.050116 13.1068 0.961548 9.58807 2.71834C6.14106 4.43931 3.06307 6.9595 0.686613 10.0065C-0.228871 11.1802 -0.228871 12.8198 0.686613 13.9935C3.06299 17.0404 6.14106 19.5607 9.58807 21.2817C13.1068 23.0385 16.8922 23.95 20.8438 23.9978C20.9526 24.0007 21.3896 24.0007 21.4985 23.9978C25.45 23.9499 29.2355 23.0385 32.7542 21.2817C36.2012 19.5607 39.2793 17.0405 41.6557 13.9935C42.5712 12.8196 42.5712 11.1802 41.6557 10.0065ZM10.3576 19.7406C7.13892 18.1335 4.26445 15.7799 2.04487 12.9341C1.61591 12.3841 1.61591 11.6159 2.04487 11.0659C4.26436 8.22009 7.13883 5.86646 10.3576 4.25944C11.2717 3.80311 12.2053 3.40846 13.1561 3.07436C10.71 5.27317 9.16886 8.45975 9.16886 12C9.16886 15.5403 10.7101 18.7272 13.1564 20.9259C12.2056 20.5918 11.2718 20.197 10.3576 19.7406ZM21.1712 22.2798C15.5028 22.2798 10.8913 17.6683 10.8913 11.9999C10.8913 6.33148 15.5028 1.72007 21.1712 1.72007C26.8396 1.72007 31.4511 6.33156 31.4511 12C31.4511 17.6684 26.8396 22.2798 21.1712 22.2798ZM40.2976 12.9341C38.0781 15.7798 35.2036 18.1335 31.9849 19.7405C31.0718 20.1963 30.1388 20.5892 29.1892 20.923C31.6336 18.7243 33.1736 15.5387 33.1736 11.9999C33.1736 8.45918 31.6321 5.27218 29.1856 3.07336C30.1366 3.40755 31.0705 3.80269 31.9849 4.25928C35.2036 5.86629 38.0781 8.21993 40.2976 11.0657C40.7265 11.6158 40.7265 12.384 40.2976 12.9341Z"
                           />
                        <path
                           d="M21.1712 7.60071C18.7454 7.60071 16.772 9.57417 16.772 11.9999C16.772 14.4257 18.7454 16.3991 21.1712 16.3991C23.5969 16.3991 25.5704 14.4257 25.5704 11.9999C25.5705 9.57417 23.597 7.60071 21.1712 7.60071ZM21.1712 14.6767C19.6952 14.6767 18.4944 13.476 18.4944 11.9999C18.4944 10.5239 19.6951 9.32318 21.1712 9.32318C22.6471 9.32318 23.8479 10.5239 23.8479 11.9999C23.848 13.476 22.6471 14.6767 21.1712 14.6767Z"
                           />
                     </svg>
                  </div>
               </div>
               <img
                  src="./images/content/image-arrived-1.png"
                  alt=""
                  class="w-full h-full object-cover object-center"
                  />
            </div>
            <h5 class="text-lg font-semibold mt-4">Cangkir Mauttie</h5>
            <span class="">IDR 89.300</span>
            <a href="/detail" class="stretched-link">
               <!-- fake children -->
            </a>
         </div>
         <div class="px-4 relative card group">
            <div
               class="rounded-xl overflow-hidden card-shadow relative"
               style="width: 287px; height: 386px"
               >
               <div
                  class="absolute opacity-0 group-hover:opacity-100 transition duration-200 flex items-center justify-center w-full h-full bg-black bg-opacity-35"
                  >
                  <div
                     class="bg-white text-black rounded-full w-16 h-16 flex items-center justify-center"
                     >
                     <svg
                        class="fill-current"
                        width="43"
                        height="24"
                        viewBox="0 0 43 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                           d="M41.6557 10.0065C39.2794 6.95958 36.2012 4.43931 32.7542 2.71834C29.2355 0.961548 25.4501 0.0500333 21.4985 0.00223289C21.3896 -0.000744296 20.9526 -0.000744296 20.8438 0.00223289C16.8923 0.050116 13.1068 0.961548 9.58807 2.71834C6.14106 4.43931 3.06307 6.9595 0.686613 10.0065C-0.228871 11.1802 -0.228871 12.8198 0.686613 13.9935C3.06299 17.0404 6.14106 19.5607 9.58807 21.2817C13.1068 23.0385 16.8922 23.95 20.8438 23.9978C20.9526 24.0007 21.3896 24.0007 21.4985 23.9978C25.45 23.9499 29.2355 23.0385 32.7542 21.2817C36.2012 19.5607 39.2793 17.0405 41.6557 13.9935C42.5712 12.8196 42.5712 11.1802 41.6557 10.0065ZM10.3576 19.7406C7.13892 18.1335 4.26445 15.7799 2.04487 12.9341C1.61591 12.3841 1.61591 11.6159 2.04487 11.0659C4.26436 8.22009 7.13883 5.86646 10.3576 4.25944C11.2717 3.80311 12.2053 3.40846 13.1561 3.07436C10.71 5.27317 9.16886 8.45975 9.16886 12C9.16886 15.5403 10.7101 18.7272 13.1564 20.9259C12.2056 20.5918 11.2718 20.197 10.3576 19.7406ZM21.1712 22.2798C15.5028 22.2798 10.8913 17.6683 10.8913 11.9999C10.8913 6.33148 15.5028 1.72007 21.1712 1.72007C26.8396 1.72007 31.4511 6.33156 31.4511 12C31.4511 17.6684 26.8396 22.2798 21.1712 22.2798ZM40.2976 12.9341C38.0781 15.7798 35.2036 18.1335 31.9849 19.7405C31.0718 20.1963 30.1388 20.5892 29.1892 20.923C31.6336 18.7243 33.1736 15.5387 33.1736 11.9999C33.1736 8.45918 31.6321 5.27218 29.1856 3.07336C30.1366 3.40755 31.0705 3.80269 31.9849 4.25928C35.2036 5.86629 38.0781 8.21993 40.2976 11.0657C40.7265 11.6158 40.7265 12.384 40.2976 12.9341Z"
                           />
                        <path
                           d="M21.1712 7.60071C18.7454 7.60071 16.772 9.57417 16.772 11.9999C16.772 14.4257 18.7454 16.3991 21.1712 16.3991C23.5969 16.3991 25.5704 14.4257 25.5704 11.9999C25.5705 9.57417 23.597 7.60071 21.1712 7.60071ZM21.1712 14.6767C19.6952 14.6767 18.4944 13.476 18.4944 11.9999C18.4944 10.5239 19.6951 9.32318 21.1712 9.32318C22.6471 9.32318 23.8479 10.5239 23.8479 11.9999C23.848 13.476 22.6471 14.6767 21.1712 14.6767Z"
                           />
                     </svg>
                  </div>
               </div>
               <img
                  src="{{asset("img/berita2.png")}}" 
                  alt=""
                  class="w-full h-full object-cover object-center"
                  />
            </div>
            <h5 class="text-lg font-semibold mt-4">Cangkir Mauttie</h5>
            <span class="">IDR 89.300</span>
            <a href="/detail" class="stretched-link">
               <!-- fake children -->
            </a>
         </div>
         <!-- END: JUST ARRIVED ROW 1 -->
         <!-- START: JUST ARRIVED ROW 2 -->
         <!-- END: JUST ARRIVED ROW 2 -->
      </div>
      <!-- </div> -->
   </div>
</div>
<div class="flex flex-col py-16">
   <iframe class="min-h-screen" src="https://www.youtube.com/embed/jNQXAC9IVRw?autoplay=1&playlist=jNQXAC9IVRw&mute=1&controls=0&modestbranding=1&showinfo=0&loop=1"  title="YouTube video player" frameborder="0"></iframe>
   <!-- </div> -->
</div>

<div id="demo-flat" class="demo">
   <h3 class="text-2xl capitalize font-semibold text-center my-10">
      testimony 
   </h3>
   <div id="flat" class="mb-20">
      <ul>
         <li data-flip-title="Red">
            <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
               <figure class="max-w-screen-md mx-auto text-center">
                  <svg aria-hidden="true" class="w-12 h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
                  </svg>
                  <blockquote>
                     <p class="text-2xl italic font-medium text-gray-900 dark:text-white">"Flowbite is just awesome. It contains tons of predesigned components and pages starting from login screen to complex dashboard. Perfect choice for your next SaaS application."</p>
                  </blockquote>
                  <figcaption class="flex items-center justify-center mt-6 space-x-3">
                     <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture">
                     <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                        <cite class="pr-3 font-medium text-gray-900 dark:text-white">Micheal Gough</cite>
                        <cite class="pl-3 text-sm text-gray-500 dark:text-gray-400">CEO at Google</cite>
                     </div>
                  </figcaption>
               </figure>
            </div>
         </li>
         <li data-flip-title="Razzmatazz" data-flip-category="Purples">
            <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
               <figure class="max-w-screen-sm mx-auto text-center">
                  <svg aria-hidden="true" class="w-12 h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
                  </svg>
                  <blockquote>
                     <p class="text-2xl italic font-medium text-gray-900 dark:text-white">"Flowbite is just awesome. It contains tons of predesigned components and pages starting from login screen to complex dashboard. Perfect choice for your next SaaS application."</p>
                  </blockquote>
                  <figcaption class="flex items-center justify-center mt-6 space-x-3">
                     <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture">
                     <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                        <cite class="pr-3 font-medium text-gray-900 dark:text-white">Micheal Gough</cite>
                        <cite class="pl-3 text-sm text-gray-500 dark:text-gray-400">CEO at Google</cite>
                     </div>
                  </figcaption>
               </figure>
            </div>
         </li>
         <li data-flip-title="Deep Lilac" data-flip-category="Purples">
            <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
               <figure class="max-w-screen-md mx-auto text-center">
                  <svg aria-hidden="true" class="w-12 h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
                  </svg>
                  <blockquote>
                     <p class="text-2xl italic font-medium text-gray-900 dark:text-white">"Flowbite is just awesome. It contains tons of predesigned components and pages starting from login screen to complex dashboard. Perfect choice for your next SaaS application."</p>
                  </blockquote>
                  <figcaption class="flex items-center justify-center mt-6 space-x-3">
                     <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture">
                     <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                        <cite class="pr-3 font-medium text-gray-900 dark:text-white">Micheal Gough</cite>
                        <cite class="pl-3 text-sm text-gray-500 dark:text-gray-400">CEO at Google</cite>
                     </div>
                  </figcaption>
               </figure>
            </div>
         </li>
      </ul>
   </div>
   <script>
      var flat = $("#flat").flipster({
          style: 'flat',
          spacing: -0.25
      });
   </script>
</div>
<div class="bg-gray-100 py-16 px-4 text-center" id="browse-the-room">
   <div class="container mx-auto">
      <div class="flex flex-col">
         <h3 class="text-2xl capitalize font-semibold text-center mb-10">
            Email Catalog 
         </h3>
         <form action="#">
            <label class="relative w-full">
               <input type="text" class="bg-gray-100 rounded-full py-3 px-5 md:w-1/2 w-full focus:outline-none" placeholder="Your email adress"
                  />
               <button class="bg-primary absolute rounded-full right-0 py-3 px-10">
                  <p class="text-white"><i class="fa-solid fa-paper-plane"></i> Send</p>
               </button>
            </label>
         </form>
      </div>
   </div>
</div>
<section class="container mx-auto mt-10">
   <div class="grid grid-cols-3 md:flex md:flex-wrap md:justify-center gap-4 px-2">
      <div class="w-full flex-auto md:w-auto md:flex-initial px-4 py-2 md:px-6 my-4 md:my-0 bg-slate-300 ">
         <img src="./images/content/logo-adobe.svg" alt="" class="mx-auto h-7" />
      </div>
      <div class="w-full flex-auto md:w-auto md:flex-initial px-4 py-2 md:px-6 my-4 md:my-0 bg-slate-300" >
         <img src="./images/content/logo-ikea.svg" alt="" class="mx-auto h-7" />
      </div>
      <div class="w-full flex-auto md:w-auto md:flex-initial px-4 py-2 md:px-6 my-4 md:my-0 bg-slate-300" >
         <img src="./images/content/logo-hermanmiller.svg" alt="" class="mx-auto h-7" />
      </div>
      <div class="w-full flex-auto md:w-auto md:flex-initial px-4 py-2 md:px-6 my-4 md:my-0 bg-slate-300" >
         <img src="./images/content/logo-miele.svg" alt="" class="mx-auto h-7" />
      </div>
      <div class="w-full flex-auto md:w-auto md:flex-initial px-4 py-2 md:px-6 my-4 md:my-0 bg-slate-300 ">
         <img src="./images/content/logo-adobe.svg" alt="" class="mx-auto h-7" />
      </div>
      <div class="w-full flex-auto md:w-auto md:flex-initial px-4 py-2 md:px-6 my-4 md:my-0 bg-slate-300" >
         <img src="./images/content/logo-ikea.svg" alt="" class="mx-auto h-7" />
      </div>
      <div class="w-full flex-auto md:w-auto md:flex-initial px-4 py-2 md:px-6 my-4 md:my-0 bg-slate-300" >
         <img src="./images/content/logo-hermanmiller.svg" alt="" class="mx-auto h-7" />
      </div>
      <div class="w-full flex-auto md:w-auto md:flex-initial px-4 py-2 md:px-6 my-4 md:my-0 bg-slate-300" >
         <img src="./images/content/logo-miele.svg" alt="" class="mx-auto h-7" />
      </div>
      <div class="w-full flex-auto md:w-auto md:flex-initial px-4 py-2 md:px-6 my-4 md:my-0 bg-slate-300 ">
         <img src="./images/content/logo-adobe.svg" alt="" class="mx-auto h-7" />
      </div>
      <div class="w-full flex-auto md:w-auto md:flex-initial px-4 py-2 md:px-6 my-4 md:my-0 bg-slate-300" >
         <img src="./images/content/logo-ikea.svg" alt="" class="mx-auto h-7" />
      </div>
      <div class="w-full flex-auto md:w-auto md:flex-initial px-4 py-2 md:px-6 my-4 md:my-0 bg-slate-300" >
         <img src="./images/content/logo-hermanmiller.svg" alt="" class="mx-auto h-7" />
      </div>
      <div class="w-full flex-auto md:w-auto md:flex-initial px-4 py-2 md:px-6 my-4 md:my-0 bg-slate-300" >
         <img src="./images/content/logo-miele.svg" alt="" class="mx-auto h-7" />
      </div>
      <div class="w-full flex-auto md:w-auto md:flex-initial px-4 py-2 md:px-6 my-4 md:my-0 bg-slate-300 ">
         <img src="./images/content/logo-adobe.svg" alt="" class="mx-auto h-7" />
      </div>
      <div class="w-full flex-auto md:w-auto md:flex-initial px-4 py-2 md:px-6 my-4 md:my-0 bg-slate-300" >
         <img src="./images/content/logo-ikea.svg" alt="" class="mx-auto h-7" />
      </div>
      <div class="w-full flex-auto md:w-auto md:flex-initial px-4 py-2 md:px-6 my-4 md:my-0 bg-slate-300" >
         <img src="./images/content/logo-hermanmiller.svg" alt="" class="mx-auto h-7" />
      </div>
      <div class="w-full flex-auto md:w-auto md:flex-initial px-4 py-2 md:px-6 my-4 md:my-0 bg-slate-300" >
         <img src="./images/content/logo-miele.svg" alt="" class="mx-auto h-7" />
      </div>
   </div>
</section>
@endsection
@push('js')

@endpush