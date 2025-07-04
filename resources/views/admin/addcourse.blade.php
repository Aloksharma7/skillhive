@extends('layouts.dashboard')

@section('dash-content')

<div class="max-w-4xl mx-auto px-4 py-8">

    <!-- Page Title -->
    <h1 class="text-2xl font-bold mb-6">Add New Content</h1>

    <!-- Content Type Selector -->
    <div class="mb-6">
        <label for="contentType" class="block mb-2 font-medium">Select Content Type:</label>
        <select id="contentType" class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-sky-500 focus:outline-none">
            <option value="">-- Choose --</option>
            <option value="course">Course</option>
            <option value="pdf">PDF</option>
            <option value="opportunity">Opportunity</option>
            <option value="blog">Blog</option>
        </select>
    </div>

    <!-- Forms Section -->
    <div id="formsContainer">

        <!-- Course Form -->
        <form id="courseForm" action="#" method="POST" class="space-y-4 hidden">
            <h2 class="text-lg font-semibold">Add Course</h2>
            <input type="text" placeholder="Feature Image URL" class="input">
            <input type="text" placeholder="Alt Text" class="input">
            <input type="text" placeholder="Title" class="input">
            <textarea placeholder="Description (What is, Why it is, Achievement)" class="input"></textarea>
            <textarea placeholder="Guide (Syllabus, PDF, Roadmaps)" class="input"></textarea>
            <textarea placeholder="Resources (References, Links)" class="input"></textarea>
            <button type="submit" class="btn">Submit Course</button>
        </form>

        <!-- PDF Form -->
        <form id="pdfForm" action="#" method="POST" class="space-y-4 hidden">
            <h2 class="text-lg font-semibold">Add PDF</h2>
            <input type="text" placeholder="Feature Image URL" class="input">
            <input type="text" placeholder="Alt Text" class="input">
            <input type="text" placeholder="Title" class="input">
            <input type="text" placeholder="Author" class="input">
            <input type="text" placeholder="Edition" class="input">
            <input type="text" placeholder="Download Link" class="input">
            <button type="submit" class="btn">Submit PDF</button>
        </form>

        <!-- Opportunity Form -->
        <form id="opportunityForm" action="#" method="POST" class="space-y-4 hidden">
            <h2 class="text-lg font-semibold">Add Opportunity</h2>
            <input type="text" placeholder="Type" class="input">
            <input type="text" placeholder="Title" class="input">
            <textarea placeholder="Description" class="input"></textarea>
            <input type="text" placeholder="Feature Image URL" class="input">
            <input type="text" placeholder="Alt Text" class="input">
            <input type="text" placeholder="Link" class="input">
            <button type="submit" class="btn">Submit Opportunity</button>
        </form>

        <!-- Blog Form -->
        <form id="blogForm" action="#" method="POST" class="space-y-4 hidden">
            <h2 class="text-lg font-semibold">Add Blog</h2>
            <input type="text" placeholder="Category" class="input">
            <input type="text" placeholder="Feature Image URL" class="input">
            <input type="text" placeholder="Alt Text" class="input">
            <input type="text" placeholder="Title" class="input">
            <textarea placeholder="Description" class="input"></textarea>
            <button type="submit" class="btn">Submit Blog</button>
        </form>

    </div>

</div>

<!-- Tailwind Utility Classes for Inputs/Buttons -->
<style>
    .input {
        @apply w-full border border-gray-300 rounded px-4 py-2 focus:ring-sky-500 focus:outline-none;
    }
    .btn {
        @apply px-4 py-2 bg-sky-500 text-white rounded hover:bg-sky-600 transition;
    }
</style>

<script>
    const contentType = document.getElementById('contentType');
    const courseForm = document.getElementById('courseForm');
    const pdfForm = document.getElementById('pdfForm');
    const opportunityForm = document.getElementById('opportunityForm');
    const blogForm = document.getElementById('blogForm');

    contentType.addEventListener('change', () => {
        courseForm.classList.add('hidden');
        pdfForm.classList.add('hidden');
        opportunityForm.classList.add('hidden');
        blogForm.classList.add('hidden');

        if (contentType.value === 'course') courseForm.classList.remove('hidden');
        if (contentType.value === 'pdf') pdfForm.classList.remove('hidden');
        if (contentType.value === 'opportunity') opportunityForm.classList.remove('hidden');
        if (contentType.value === 'blog') blogForm.classList.remove('hidden');
    });
</script>


@endsection