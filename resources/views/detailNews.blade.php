@extends('template.base') 
@section('content')
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
                    <a href="/news" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">News</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Name News</span>
                </div>
            </li>
        </ol>
    </nav>
</section>
<div class="bg-white rounded-lg p-6">
    <div class="flex flex-col">
        <div class="md:w-3/4 mx-auto px-10 mt-4 mb-5">
            <p class="text-xl lg:text-3xl font-bold leading-relaxed text-gray-900 dark:text-white text-justify">The Al-powered app will help you improve yourself by analysing your everyday life.</p>
        </div>

        <div class="lg:w-full lg:pr-4 mb-4 lg:mb-0 px-10">
            <div class="rounded-xl border border-gray-400 overflow-hidden md:w-3/4 w-full mx-auto">
                <img src="{{asset("img/berita1.png")}}" class="w-full h-full object-cover object-center" alt="News Image">
            </div>
        </div>
        <div class="md:w-3/4 mx-auto px-10 mt-5">
            <p class="text-black mb-5 text-lg md:text-xl">24 December 2023 12:53:52</p>
            <div class="prose">
                <p
                    class="text-justify mb-3 text-gray-500 dark:text-gray-400 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-gray-100 first-letter:mr-3 first-letter:float-left"
                >
                    Track work across the enterprise through an open, collaborative platform. Link issues across Jira and ingest data from other software development tools, so your IT support and operations teams have richer contextual
                    information to rapidly respond to requests, incidents, and changes. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, enim dolorem. Culpa ipsum voluptatum necessitatibus numquam quibusdam quia
                    reprehenderit beatae asperiores maxime consectetur. Unde eveniet dolore fuga porro sint ratione! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo ipsa accusantium at recusandae adipisci excepturi placeat
                    numquam, autem, harum mollitia blanditiis magni totam illo alias ut labore rem? Voluptatum, temporibus!
                </p>
            </div>
        </div>
    </div>
</div>

@endsection