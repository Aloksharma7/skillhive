@extends('layouts.dashboard')

@section('dash-content')
<div class="min-h-screen bg-gray-50 py-12 px-6">
    <div class="max-w-7xl mx-auto">
        <!-- Header and Filters -->
        <div class="mb-10">
            <h1 class="text-3xl font-bold text-gray-900 mb-6">Explore Opportunities</h1>
            <div class="flex flex-col md:flex-row gap-4">
                <!-- Search -->
                <input id="oppSearch" type="text" placeholder="Search by title or description..."
                    class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">

                <!-- Category Filter -->
                <select id="oppCategory" class="w-full md:w-60 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    <option value="">All Categories</option>
                    <option value="internship">Internship</option>
                    <option value="fulltime">Full-time</option>
                    <option value="remote">Remote</option>
                    <option value="freelance">Freelance</option>
                </select>
            </div>
        </div>

        <!-- Opportunities Grid -->
        <div id="opportunityContainer" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Dynamic content will be rendered by JS -->
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const opportunities = [
            {
                id: 1,
                title: "Web Development Internship",
                description: "Gain real-world experience building modern web applications.",
                category: "internship",
                color: "blue",
                tags: ["Feature", "Job", "Image", "Space"]
            },
            {
                id: 2,
                title: "Remote UX Designer",
                description: "Design intuitive interfaces from anywhere in the world.",
                category: "remote",
                color: "purple",
                tags: ["Job", "Space"]
            },
            {
                id: 3,
                title: "AI Research Assistant",
                description: "Contribute to cutting-edge AI research projects.",
                category: "fulltime",
                color: "green",
                tags: ["Feature", "Job"]
            },
            {
                id: 4,
                title: "Freelance Marketing Consultant",
                description: "Work with brands to develop marketing strategies on a freelance basis.",
                category: "freelance",
                color: "amber",
                tags: ["Feature", "Image"]
            }
        ];

        const container = document.getElementById('opportunityContainer');
        const searchInput = document.getElementById('oppSearch');
        const categorySelect = document.getElementById('oppCategory');

        function renderOpportunities(data) {
            container.innerHTML = '';
            if (data.length === 0) {
                container.innerHTML = '<p class="text-gray-500 col-span-3 text-center py-8">No opportunities found.</p>';
                return;
            }

            data.forEach(opp => {
                const card = document.createElement('div');
                card.className = `border border-gray-200 rounded-xl shadow-sm bg-white hover:shadow-lg transition-shadow duration-300`;

                card.innerHTML = `
                    <div class="p-6">
                        <div class="text-${opp.color}-600 font-semibold text-sm mb-2 uppercase">#${opp.id} — ${opp.category}</div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">${opp.title}</h3>
                        <p class="text-gray-600 text-sm mb-4">${opp.description}</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            ${opp.tags.map(tag => `
                                <span class="inline-block bg-${opp.color}-100 text-${opp.color}-800 text-xs px-2 py-1 rounded-full">
                                    ${tag}
                                </span>
                            `).join('')}
                        </div>
                        <a href="#" class="inline-block text-sm font-medium text-${opp.color}-600 hover:underline">Read more →</a>
                    </div>
                `;
                container.appendChild(card);
            });
        }

        function filterOpportunities() {
            const term = searchInput.value.toLowerCase();
            const category = categorySelect.value;

            let filtered = opportunities;

            if (term) {
                filtered = filtered.filter(opp =>
                    opp.title.toLowerCase().includes(term) || opp.description.toLowerCase().includes(term)
                );
            }

            if (category) {
                filtered = filtered.filter(opp => opp.category === category);
            }

            renderOpportunities(filtered);
        }

        searchInput.addEventListener('input', filterOpportunities);
        categorySelect.addEventListener('change', filterOpportunities);

        renderOpportunities(opportunities);
    });
</script>
@endsection
