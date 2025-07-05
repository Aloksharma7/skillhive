@extends('layouts.dashboard')

@section('dash-content')
<div class="max-w-7xl mx-auto px-4 py-12">
    <!-- Header Section -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Courses</h1>
        <p class="text-gray-600">Explore our comprehensive course catalog</p>
    </div>

    <!-- Category Filter -->
    <div class="mb-8">
        <div class="flex flex-wrap gap-2">
            <span class="px-4 py-2 rounded-full text-sm font-medium bg-gray-100 text-gray-700">
                All Courses
            </span>
            @foreach($categories as $category)
                <span class="px-4 py-2 rounded-full text-sm font-medium bg-blue-100 text-blue-700">
                    {{ $category->name }}
                </span>
            @endforeach
        </div>
    </div>

    <!-- Courses Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($courses as $course)
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <!-- Feature Image -->
                <div class="w-full h-48 bg-gray-200 overflow-hidden">
                    @if($course->feature_image)
                        <img src="{{ asset($course->feature_image) }}" 
                             alt="{{ $course->title }}" 
                             class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-blue-400 to-purple-500 flex items-center justify-center">
                            <span class="text-white text-xl font-bold">{{ substr($course->title, 0, 2) }}</span>
                        </div>
                    @endif
                </div>

                <!-- Card Content -->
                <div class="p-6">
                    <!-- Category Badge -->
                    <div class="mb-3">
                        <span class="inline-block px-3 py-1 rounded-full text-sm font-semibold bg-blue-100 text-blue-800">
                            @php
                                $categoryName = 'Uncategorized';
                                foreach($categories as $category) {
                                    if($category->id == $course->category_id) {
                                        $categoryName = $category->name;
                                        break;
                                    }
                                }
                            @endphp
                            {{ $categoryName }}
                        </span>
                    </div>

                    <!-- Title -->
                    <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2">
                        {{ $course->title }}
                    </h3>

                    <!-- Description -->
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        {{ $course->description ? Str::limit($course->description, 120) : 'No description available.' }}
                    </p>

                    <!-- Course Sections Preview -->
                    <div class="mb-4">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Course Includes:
                        </div>
                        <div class="grid grid-cols-2 gap-2 text-sm">
                            @if($course->how_section)
                                <div class="flex items-center text-green-600">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    How Section
                                </div>
                            @endif
                            @if($course->guidance)
                                <div class="flex items-center text-green-600">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Guidance
                                </div>
                            @endif
                            @if($course->reference)
                                <div class="flex items-center text-green-600">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    References
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-wrap gap-2 pt-4 border-t border-gray-100">
                        <a href="/courses/{{ $course->id }}" 
                           class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors text-center">
                            View Course
                        </a>
                        <a href="/courses/{{ $course->id }}/edit" 
                           class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-200 transition-colors">
                            Edit
                        </a>
                        <form action="/courses/{{ $course->id }}" 
                              method="POST" 
                              class="inline-block"
                              onsubmit="return confirm('Are you sure you want to delete this course?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="bg-red-100 text-red-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-red-200 transition-colors">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <!-- Empty State -->
            <div class="col-span-full text-center py-12">
                <div class="mx-auto w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-gray-900 mb-2">No courses found</h3>
                <p class="text-gray-500 mb-4">Get started by creating your first course.</p>
                <a href="/courses/create" 
                   class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Create New Course
                </a>
            </div>
        @endforelse
    </div>

    <!-- Pagination (if using pagination) -->
    @if(method_exists($courses, 'links'))
        <div class="mt-8">
            {{ $courses->links() }}
        </div>
    @endif
</div>

<!-- Success Message -->
@if(session('success'))
    <div class="fixed top-4 right-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg shadow-md z-50" 
         x-data="{ show: true }" 
         x-show="show" 
         x-transition 
         x-init="setTimeout(() => show = false, 3000)">
        <div class="flex items-center">
            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            {{ session('success') }}
        </div>
    </div>
@endif

<style>
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
@endsection