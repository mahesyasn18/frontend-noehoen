@extends('template.base') @section('content')
<!-- START: BREADCRUMB -->
<section class="bg-gray-100 py-8 px-4 mt-17">
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="/product" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Product</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Nama Barang</span>
                </div>
            </li>
        </ol>
    </nav>
</section>
<!-- END: BREADCRUMB -->
<section class="container mx-auto">
    <div class="flex flex-wrap my-4 md:my-12">
        <div class="w-full md:hidden px-4">
            <h2 class="text-5xl font-semibold">Chair Thatty</h2>
            <span class="text-xl">IDR 12.000.000</span>
        </div>
        <div class="flex-1">
            <div class="slider">
                <div class="thumbnail">
                    <div class="px-2">
                        <div class="item selected" data-img="./images/content/showcase-1.front.jpg">
                            <img src="./images/content/showcase-1.front.jpg" alt="front" class="object-cover w-full h-full rounded-lg" />
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="item" data-img="./images/content/showcase-1.back.jpg">
                            <img src="./images/content/showcase-1.back.jpg" alt="back" class="object-cover w-full h-full rounded-lg" />
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="item" data-img="./images/content/showcase-1.rear.jpg">
                            <img src="./images/content/showcase-1.rear.jpg" alt="rear" class="object-cover w-full h-full rounded-lg" />
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="item" data-img="./images/content/showcase-1.side.jpg">
                            <img src="./images/content/showcase-1.side.jpg" alt="side" class="object-cover w-full h-full rounded-lg" />
                        </div>
                    </div>
                    <div class="px-2">
                        <div class="item" data-img="./images/content/showcase-1.top.jpg">
                            <img src="./images/content/showcase-1.top.jpg" alt="top" class="object-cover w-full h-full rounded-lg" />
                        </div>
                    </div>
                </div>
                <div class="preview">
                    <div class="item rounded-lg h-full overflow-hidden">
                        <img src="./images/content/showcase-1.front.jpg" alt="front" class="object-cover w-full h-full rounded-lg" />
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-1 px-4 md:p-6">
            <h2 class="text-5xl font-semibold">Chair Thatty</h2>
            <hr class="my-8" />
            <h6 class="text-xl font-semibold mb-4">About the product</h6>
            <p class="text-xl leading-7 mb-6">
                Tailored to a level of perfection synonymous with that of a Savile Row suit and with understated quality in the detail, Jetty has been influenced by timeless 1950s style.
            </p>
            <p class="text-xl leading-7">
                Providing a subtle nod to the past, Jetty also provides a perfect solution for the way we work today. A comprehensive product family, Jetty features a variety of elegant chairs and sofas.
            </p>
        </div>
    </div>
</section>
<section class="bg-gray-100 px-4 py-16">
    <div class="container mx-auto">
        <div class="flex flex-start mb-4">
            <h3 class="text-2xl capitalize font-semibold">
                Complete your room <br class="" />
                with what we designed
            </h3>
        </div>
        <div class="flex overflow-x-auto mb-4 -mx-3">
            <div class="px-3 flex-none" style="width: 320px;">
                <div class="rounded-xl p-4 pb-8 relative bg-white">
                    <div class="rounded-xl overflow-hidden card-shadow w-full h-36">
                        <img src="/images/content/chair-1.png" alt="" class="w-full h-full object-cover object-center" />
                    </div>
                    <h5 class="text-lg font-semibold mt-4">Cangkir Mauttie</h5>
                    <span class="">IDR 89.300.000</span>
                    <a href="details.html" class="stretched-link">
                        <!-- fake children -->
                    </a>
                </div>
            </div>
            <div class="px-3 flex-none" style="width: 320px;">
                <div class="rounded-xl p-4 pb-8 relative bg-white">
                    <div class="rounded-xl overflow-hidden card-shadow w-full h-36">
                        <img src="/images/content/chair-2.png" alt="" class="w-full h-full object-cover object-center" />
                    </div>
                    <h5 class="text-lg font-semibold mt-4">Saman Kakka</h5>
                    <span class="">IDR 14.500.399</span>
                    <a href="details.html" class="stretched-link">
                        <!-- fake children -->
                    </a>
                </div>
            </div>
            <div class="px-3 flex-none" style="width: 320px;">
                <div class="rounded-xl p-4 pb-8 relative bg-white">
                    <div class="rounded-xl overflow-hidden card-shadow w-full h-36">
                        <img src="/images/content/chair-3.png" alt="" class="w-full h-full object-cover object-center" />
                    </div>
                    <h5 class="text-lg font-semibold mt-4">Lino Dino</h5>
                    <span class="">IDR 22.000.000</span>
                    <a href="details.html" class="stretched-link">
                        <!-- fake children -->
                    </a>
                </div>
            </div>
            <div class="px-3 flex-none" style="width: 320px;">
                <div class="rounded-xl p-4 pb-8 relative bg-white">
                    <div class="rounded-xl overflow-hidden card-shadow w-full h-36">
                        <img src="/images/content/chair-1.png" alt="" class="w-full h-full object-cover object-center" />
                    </div>
                    <h5 class="text-lg font-semibold mt-4">Syail Ammeno</h5>
                    <span class="">IDR 6.399.999</span>
                    <a href="details.html" class="stretched-link">
                        <!-- fake children -->
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection @push('js')
<script>
    // Ambil thumbnail image dan preview image
    const thumbnailImages = document.querySelectorAll(".thumbnail .item");
    const previewImage = document.querySelector(".preview .item img");

    // Looping untuk setiap thumbnail image
    thumbnailImages.forEach((thumbnail) => {
        // Tambahkan event listener 'click' pada thumbnail image
        thumbnail.addEventListener("click", () => {
            // Ambil path image dari thumbnail
            const imagePath = thumbnail.getAttribute("data-img");

            // Hapus class 'selected' dari thumbnail image sebelumnya
            document.querySelector(".thumbnail .item.selected").classList.remove("selected");

            // Tambahkan class 'selected' pada thumbnail image yang baru di-klik
            thumbnail.classList.add("selected");
            // Set src dari preview image dengan path image yang baru di-klik
            previewImage.setAttribute("src", imagePath);
        });
    });
</script>
@endpush
