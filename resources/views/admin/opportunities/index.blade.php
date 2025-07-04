@extends('layouts.dashboard')

@section('dash-content')


<section class="max-w-3xl mx-auto p-6 mt-10 bg-white shadow-md rounded-xl">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Add Opportunity</h2>

    <form class="space-y-5">

        <!-- Type -->
        <div>
            <label class="block mb-1 font-medium text-gray-700">Type</label>
            <input type="text" placeholder="Enter Opportunity Type" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Title -->
        <div>
            <label class="block mb-1 font-medium text-gray-700">Title</label>
            <input type="text" placeholder="Enter Title" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Category -->
        <div>
            <label class="block mb-1 font-medium text-gray-700">Category</label>
            <input type="text" placeholder="Enter Category" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- For Nation or International -->
        <div>
            <label class="block mb-1 font-medium text-gray-700">For</label>
            <select class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Select Option</option>
                <option value="Nation">Nation</option>
                <option value="International">International</option>
            </select>
        </div>

        <!-- Description -->
        <div>
            <label class="block mb-1 font-medium text-gray-700">Description</label>
            <textarea rows="4" placeholder="Enter Description" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Add Opportunity</button>
        </div>

    </form>
</section>


@endsection