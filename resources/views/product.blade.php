@extends('template.base')

@section('content')

<section class="bg-gray-100 py-8 px-4 mt-17">
    <div class="bg-white p-6 rounded-lg shadow-md">
    <h6 class="text-lg font-semibold mb-4 text-black">Product</h6>
    <div class="flex items-center justify-between my-3">
       <p class="text-sm text-gray-600">found 2478 Items</p>
       <div class="relative inline-flex items-center ml-4">
          <button id="dropdownBgHoverButton" data-dropdown-toggle="dropdownBgHover" class="inline-flex items-center px-4 py-2.5 text-sm font-medium text-white bg-primary rounded-lg hover:bg-black focus:outline-none focus:ring-4 focus:ring-blue-300 transition duration-200">
             <span>Category</span>
             <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
             </svg>
          </button>
          <!-- Dropdown menu -->
          <div id="dropdownBgHover" class="absolute right-0 z-10 hidden w-44 py-2 mt-1 bg-white rounded-lg shadow-md dark:bg-gray-700">
             <form action="/">
                <ul class="px-3 py-2 space-y-1 text-sm text-gray-700 dark:text-gray-200">
                   <li>
                      <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                         <input id="checkbox-item-4" type="checkbox" value="" class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary focus:ring-2">
                         <label for="checkbox-item-4" class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Category 1</label>
                      </div>
                   </li>
                   <li>
                      <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                         <input checked id="checkbox-item-5" type="checkbox" value="" class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary focus:ring-2">
                         <label for="checkbox-item-5" class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Category 2</label>
                      </div>
                   </li>
                   <li>
                      <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                         <input id="checkbox-item-6" type="checkbox" value="" class="w-4 h-4 text-primary bg-gray-100 border-gray-300 rounded focus:ring-primary focus:ring-2">
                         <label for="checkbox-item-6" class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Category 3</label>
                      </div>
                   </li>
                   <li>
                      <button class="px-4 py-2 mt-2 text-sm font-medium text-white bg-primary rounded-full hover:bg-black transition duration-200">
                      Simpan
                      </button>
                   </li>
                </ul>
             </form>
          </div>
       </div>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
       <div class="bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
          <a href="/detail">
          <img class="h-48 w-full object-cover rounded-t-lg" src="{{asset("images/content/image-arrived-1.png")}}" alt="product image" />
          </a>
          <div class="p-4">
             <a href="/detail">
                <h5 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mt-2">Cangkir Mauttie</h5>
             </a>
             <div class="flex items-center justify-between mt-4">
                <span class="text-gray-700 dark:text-gray-300 font-medium text-lg">IDR 89.300</span>
             </div>
          </div>
       </div>
    </div>
    <div class="mt-5 text-center">
       <nav aria-label="Page navigation example ">
          <ul class="inline-flex -space-x-px">
             <li>
                <a href="#" class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
             </li>
             <li>
                <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
             </li>
             <li>
                <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
             </li>
             <li>
                <a href="#" aria-current="page" class="px-3 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
             </li>
             <li>
                <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
             </li>
             <li>
                <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
             </li>
             <li>
                <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
             </li>
          </ul>
       </nav>
    </div>
 </section>

  
@endsection