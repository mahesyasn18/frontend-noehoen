@extends('template.base') 
@section('content')

<section class="bg-gray-100 py-8 px-4 mt-17">
    <div class="container mx-auto">
        <div class="md:grid grid-cols-5 gap-4 hidden">
            <div class="col-span-1 bg-white shadow-lg text-gray-800 py-4 px-6 rounded-lg w-full h-fit mx-auto text-center">
                <h2 class="text-lg font-semibold mb-4">Kategori</h2>
                <ul class="list-none p-0 m-0">
                    <li class="mb-2 flex items-center">
                        <input type="checkbox" id="pakaian" name="pakaian" class="mr-2" />
                        <label for="pakaian" class="block text-gray-700 hover:text-white hover:bg-gray-700 py-2 px-4 rounded-md transition-colors duration-300 ease-in-out">Pakaian</label>
                    </li>
                    <li class="mb-2 flex items-center">
                        <input type="checkbox" id="sepatu" name="sepatu" class="mr-2" />
                        <label for="sepatu" class="block text-gray-700 hover:text-white hover:bg-gray-700 py-2 px-4 rounded-md transition-colors duration-300 ease-in-out">Sepatu</label>
                    </li>
                    <li class="mb-2 flex items-center">
                        <input type="checkbox" id="aksesoris" name="aksesoris" class="mr-2" />
                        <label for="aksesoris" class="block text-gray-700 hover:text-white hover:bg-gray-700 py-2 px-4 rounded-md transition-colors duration-300 ease-in-out">Aksesoris</label>
                    </li>
                    <li class="mb-2 flex items-center">
                        <input type="checkbox" id="elektronik" name="elektronik" class="mr-2" />
                        <label for="elektronik" class="block text-gray-700 hover:text-white hover:bg-gray-700 py-2 px-4 rounded-md transition-colors duration-300 ease-in-out">Elektronik</label>
                    </li>
                    <button class="inline-flex items-center px-4 py-2.5 text-sm font-medium text-white bg-primary rounded-lg hover:bg-black focus:outline-none focus:ring-4 focus:ring-blue-300 transition duration-200">
                        Apply
                    </button>
                </ul>
            </div>

            <div class="col-span-4 bg-white p-4 shadow-lg">
                <h2 class="text-xl font-semibold mb-4">All Product</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="relative card group">
                        <div class="rounded-xl overflow-hidden card-shadow relative w:1/2" style="width: auto; height: auto;">
                            <div class="absolute opacity-0 group-hover:opacity-100 transition duration-200 flex items-center justify-center w-full h-full bg-black bg-opacity-35">
                                <div class="bg-white text-black rounded-full w-16 h-16 flex items-center justify-center">
                                    <svg class="fill-current" width="43" height="24" viewBox="0 0 43 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M41.6557 10.0065C39.2794 6.95958 36.2012 4.43931 32.7542 2.71834C29.2355 0.961548 25.4501 0.0500333 21.4985 0.00223289C21.3896 -0.000744296 20.9526 -0.000744296 20.8438 0.00223289C16.8923 0.050116 13.1068 0.961548 9.58807 2.71834C6.14106 4.43931 3.06307 6.9595 0.686613 10.0065C-0.228871 11.1802 -0.228871 12.8198 0.686613 13.9935C3.06299 17.0404 6.14106 19.5607 9.58807 21.2817C13.1068 23.0385 16.8922 23.95 20.8438 23.9978C20.9526 24.0007 21.3896 24.0007 21.4985 23.9978C25.45 23.9499 29.2355 23.0385 32.7542 21.2817C36.2012 19.5607 39.2793 17.0405 41.6557 13.9935C42.5712 12.8196 42.5712 11.1802 41.6557 10.0065ZM10.3576 19.7406C7.13892 18.1335 4.26445 15.7799 2.04487 12.9341C1.61591 12.3841 1.61591 11.6159 2.04487 11.0659C4.26436 8.22009 7.13883 5.86646 10.3576 4.25944C11.2717 3.80311 12.2053 3.40846 13.1561 3.07436C10.71 5.27317 9.16886 8.45975 9.16886 12C9.16886 15.5403 10.7101 18.7272 13.1564 20.9259C12.2056 20.5918 11.2718 20.197 10.3576 19.7406ZM21.1712 22.2798C15.5028 22.2798 10.8913 17.6683 10.8913 11.9999C10.8913 6.33148 15.5028 1.72007 21.1712 1.72007C26.8396 1.72007 31.4511 6.33156 31.4511 12C31.4511 17.6684 26.8396 22.2798 21.1712 22.2798ZM40.2976 12.9341C38.0781 15.7798 35.2036 18.1335 31.9849 19.7405C31.0718 20.1963 30.1388 20.5892 29.1892 20.923C31.6336 18.7243 33.1736 15.5387 33.1736 11.9999C33.1736 8.45918 31.6321 5.27218 29.1856 3.07336C30.1366 3.40755 31.0705 3.80269 31.9849 4.25928C35.2036 5.86629 38.0781 8.21993 40.2976 11.0657C40.7265 11.6158 40.7265 12.384 40.2976 12.9341Z"
                                        />
                                        <path
                                            d="M21.1712 7.60071C18.7454 7.60071 16.772 9.57417 16.772 11.9999C16.772 14.4257 18.7454 16.3991 21.1712 16.3991C23.5969 16.3991 25.5704 14.4257 25.5704 11.9999C25.5705 9.57417 23.597 7.60071 21.1712 7.60071ZM21.1712 14.6767C19.6952 14.6767 18.4944 13.476 18.4944 11.9999C18.4944 10.5239 19.6951 9.32318 21.1712 9.32318C22.6471 9.32318 23.8479 10.5239 23.8479 11.9999C23.848 13.476 22.6471 14.6767 21.1712 14.6767Z"
                                        />
                                    </svg>
                                </div>
                            </div>
                            <img src="{{asset("img/berita2.png")}}" alt="" class="w-full h-96 object-cover object-center" />
                        </div>
                        <h5 class="text-lg font-semibold mt-4">Cangkir Mauttie</h5>

                        <a href="/detail" class="stretched-link">
                            <!-- fake children -->
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="md:hidden">
            <div class="bg-white p-4 shadow-lg">
                <div class="flex justify-between">
                    <h2 class="text-lg font-semibold mb-4">All Product</h2>

                    <select
                        id="small"
                        class="block w-1/2 p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    >
                        <option selected hidden>Sort by Category</option>
                        <option value="US">Home application</option>
                        <option value="CA">Living Room</option>
                        <option value="FR">Bath Room</option>
                        <option value="DE">Room</option>
                    </select>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <div class="relative card group">
                        <div class="rounded-xl overflow-hidden card-shadow relative w:1/2" style="width: auto; height: auto;">
                            <div class="absolute opacity-0 group-hover:opacity-100 transition duration-200 flex items-center justify-center w-full h-full bg-black bg-opacity-35">
                                <div class="bg-white text-black rounded-full w-16 h-16 flex items-center justify-center">
                                    <svg class="fill-current" width="43" height="24" viewBox="0 0 43 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M41.6557 10.0065C39.2794 6.95958 36.2012 4.43931 32.7542 2.71834C29.2355 0.961548 25.4501 0.0500333 21.4985 0.00223289C21.3896 -0.000744296 20.9526 -0.000744296 20.8438 0.00223289C16.8923 0.050116 13.1068 0.961548 9.58807 2.71834C6.14106 4.43931 3.06307 6.9595 0.686613 10.0065C-0.228871 11.1802 -0.228871 12.8198 0.686613 13.9935C3.06299 17.0404 6.14106 19.5607 9.58807 21.2817C13.1068 23.0385 16.8922 23.95 20.8438 23.9978C20.9526 24.0007 21.3896 24.0007 21.4985 23.9978C25.45 23.9499 29.2355 23.0385 32.7542 21.2817C36.2012 19.5607 39.2793 17.0405 41.6557 13.9935C42.5712 12.8196 42.5712 11.1802 41.6557 10.0065ZM10.3576 19.7406C7.13892 18.1335 4.26445 15.7799 2.04487 12.9341C1.61591 12.3841 1.61591 11.6159 2.04487 11.0659C4.26436 8.22009 7.13883 5.86646 10.3576 4.25944C11.2717 3.80311 12.2053 3.40846 13.1561 3.07436C10.71 5.27317 9.16886 8.45975 9.16886 12C9.16886 15.5403 10.7101 18.7272 13.1564 20.9259C12.2056 20.5918 11.2718 20.197 10.3576 19.7406ZM21.1712 22.2798C15.5028 22.2798 10.8913 17.6683 10.8913 11.9999C10.8913 6.33148 15.5028 1.72007 21.1712 1.72007C26.8396 1.72007 31.4511 6.33156 31.4511 12C31.4511 17.6684 26.8396 22.2798 21.1712 22.2798ZM40.2976 12.9341C38.0781 15.7798 35.2036 18.1335 31.9849 19.7405C31.0718 20.1963 30.1388 20.5892 29.1892 20.923C31.6336 18.7243 33.1736 15.5387 33.1736 11.9999C33.1736 8.45918 31.6321 5.27218 29.1856 3.07336C30.1366 3.40755 31.0705 3.80269 31.9849 4.25928C35.2036 5.86629 38.0781 8.21993 40.2976 11.0657C40.7265 11.6158 40.7265 12.384 40.2976 12.9341Z"
                                        />
                                        <path
                                            d="M21.1712 7.60071C18.7454 7.60071 16.772 9.57417 16.772 11.9999C16.772 14.4257 18.7454 16.3991 21.1712 16.3991C23.5969 16.3991 25.5704 14.4257 25.5704 11.9999C25.5705 9.57417 23.597 7.60071 21.1712 7.60071ZM21.1712 14.6767C19.6952 14.6767 18.4944 13.476 18.4944 11.9999C18.4944 10.5239 19.6951 9.32318 21.1712 9.32318C22.6471 9.32318 23.8479 10.5239 23.8479 11.9999C23.848 13.476 22.6471 14.6767 21.1712 14.6767Z"
                                        />
                                    </svg>
                                </div>
                            </div>
                            <img src="{{asset("images/content/image-arrived-1.png")}}" alt="" class="w-full h-64 object-cover object-center" />
                        </div>
                        <h5 class="text-lg font-semibold mt-4">Cangkir Mauttie</h5>
                        <a href="/detail" class="stretched-link">
                            <!-- fake children -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
