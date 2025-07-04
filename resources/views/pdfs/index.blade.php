@extends('layouts.dashboard')

@section('dash-content')
<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div class="mb-12">
            <h1 class="text-3xl font-bold text-gray-900 mb-6">Explore PDFs</h1>
            <div class="flex flex-col md:flex-row gap-4">
                <!-- Search -->
                <div class="flex-1">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="pdfSearch" class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg bg-white shadow-sm focus:ring-2 focus:ring-blue-500" placeholder="Search PDFs...">
                    </div>
                </div>

                <!-- categories Filter -->
                <select id="pdfCategory" class="block w-full md:w-64 px-4 py-3 border border-gray-300 rounded-lg bg-white shadow-sm focus:ring-2 focus:ring-blue-500">
                    <option value="">All Categories</option>
                    <option value="notes">Lecture Notes</option>
                    <option value="ebook">E-Books</option>
                    <option value="research">Research Papers</option>
                    <option value="assignment">Assignments</option>
                </select>
            </div>
        </div>

        <!-- PDF Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6" id="pdfContainer">
            <!-- PDFs rendered by JS -->
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const pdfs = [
            { id: 1, title: "Introduction to Algorithms", category: "ebook", description: "Comprehensive guide on algorithms.", file: "#", color: "blue" },
            { id: 2, title: "Biology Notes", category: "notes", description: "Cell biology and genetics.", file: "#", color: "green" },
            { id: 3, title: "AI Research 2024", category: "research", description: "Latest trends in artificial intelligence.", file: "#", color: "purple" },
            { id: 4, title: "Finance Assignment", category: "assignment", description: "Case studies and solutions.", file: "#", color: "amber" },
            { id: 5, title: "Advanced Physics", category: "notes", description: "Mechanics and thermodynamics.", file: "#", color: "red" },
        ];

        const pdfContainer = document.getElementById('pdfContainer');
        const pdfSearch = document.getElementById('pdfSearch');
        const pdfCategory = document.getElementById('pdfCategory');

        function displayPDFs(data) {
            pdfContainer.innerHTML = '';
            if (data.length === 0) {
                pdfContainer.innerHTML = `<p class="text-gray-500 col-span-4 text-center py-8">No PDFs found matching your criteria.</p>`;
                return;
            }

            data.forEach(pdf => {
                const card = document.createElement('div');
                card.className = "bg-white rounded-xl shadow-md overflow-hidden transition-transform hover:scale-105";
                card.innerHTML = `
                    <div class="h-40 bg-${pdf.color}-100 flex items-center justify-center">
                        <svg class="w-10 h-10 text-${pdf.color}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="uppercase text-sm text-${pdf.color}-600 font-semibold">${pdf.category}</div>
                        <h3 class="mt-1 text-lg font-medium text-gray-900">${pdf.title}</h3>
                        <p class="mt-2 text-gray-500 text-sm">${pdf.description}</p>
                        <a href="${pdf.file}" class="mt-4 inline-block text-${pdf.color}-600 hover:underline text-sm">View / Download</a>
                    </div>
                `;
                pdfContainer.appendChild(card);
            });
        }

        function filterPDFs() {
            const term = pdfSearch.value.toLowerCase();
            const category = pdfCategory.value;

            let filtered = pdfs;

            if (term) {
                filtered = filtered.filter(pdf =>
                    pdf.title.toLowerCase().includes(term) || pdf.description.toLowerCase().includes(term)
                );
            }

            if (category) {
                filtered = filtered.filter(pdf => pdf.category === category);
            }

            displayPDFs(filtered);
        }

        pdfSearch.addEventListener('input', filterPDFs);
        pdfCategory.addEventListener('change', filterPDFs);

        displayPDFs(pdfs);
    });
</script>
@endsection
