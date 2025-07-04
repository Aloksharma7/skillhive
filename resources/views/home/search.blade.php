@extends('layouts.home')
@section('title')
    Home
@endsection
@section('content')
    

<div class="max-w-5xl mx-auto px-4 py-8">

    <!-- Search Form -->
    <form action="{{ route('search') }}" method="GET" class="flex space-x-2 mb-8">
        <input type="text" name="query" placeholder="Search courses, PDFs, blogs..." 
               class="flex-1 px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" 
               value="{{ request('query') }}">
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 transition">
            Search
        </button>
    </form>

    <!-- Search Term Display -->
    <h1 class="text-2xl font-bold mb-4">
        Search Results for: 
        <span class="text-blue-500">"{{ request('query', 'Laravel') }}"</span>
    </h1>

    <!-- Results Count -->
    <p class="text-gray-600 mb-6">3 result(s) found.</p>

    <!-- Results Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <div class="p-4 border border-gray-200 rounded hover:shadow transition">
            <h2 class="text-lg font-semibold text-[#111827] mb-2">
                Laravel Basics
            </h2>
            <p class="text-gray-600 mb-4">
                Learn Laravel from scratch with beginner-friendly tutorials and examples.
            </p>
            <a href="#" class="text-blue-500 hover:underline hover:text-blue-700 font-medium">
                View Details
            </a>
        </div>

        <div class="p-4 border border-gray-200 rounded hover:shadow transition">
            <h2 class="text-lg font-semibold text-[#111827] mb-2">
                Laravel Advanced Guide
            </h2>
            <p class="text-gray-600 mb-4">
                Dive deeper into Laravel with advanced features and best practices.
            </p>
            <a href="#" class="text-blue-500 hover:underline hover:text-blue-700 font-medium">
                View Details
            </a>
        </div>

        <div class="p-4 border border-gray-200 rounded hover:shadow transition">
            <h2 class="text-lg font-semibold text-[#111827] mb-2">
                Laravel PDF Resources
            </h2>
            <p class="text-gray-600 mb-4">
                Download free PDF resources and cheat sheets for Laravel development.
            </p>
            <a href="#" class="text-blue-500 hover:underline  hover:text-blue-700 font-medium">
                View Details
            </a>
        </div>

    </div>

</div>


@endsection
