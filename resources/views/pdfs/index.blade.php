@extends('layouts.dashboard')

@section('dash-content')
<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <!-- Scroll to Top Button -->
    <button id="scrollToTopBtn" class="fixed bottom-8 right-8 p-3 bg-blue-600 text-white rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-blue-700 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>

    <div class="max-w-7xl mx-auto">
        <!-- Search and Filter Section -->
        <div class="mb-12" id="topSection">
            <h1 class="text-3xl font-bold text-gray-900 mb-6">Explore Courses</h1>
            <div class="flex flex-col md:flex-row gap-4">
                <div class="flex-1">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="searchInput" class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg bg-white shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Search courses...">
                    </div>
                </div>
                <select id="categoryFilter" class="block w-full md:w-64 px-4 py-3 border border-gray-300 rounded-lg bg-white shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option value="">All Categories</option>
                    <option value="computer">Computer Science</option>
                    <option value="bio">Biotechnology</option>
                    <option value="management">Management</option>
                    <option value="engineering">Engineering</option>
                </select>
            </div>
        </div>

        <!-- Course Categories Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <!-- Computer Science Category -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                <div class="p-6">
                    <div class="flex items-center justify-center w-16 h-16 rounded-lg bg-blue-100 mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-3">Computer Science</h2>
                    <div class="grid grid-cols-2 gap-3">
                        <a href="#" class="bg-blue-50 hover:bg-blue-100 text-blue-800 text-sm font-medium px-3 py-2 rounded-lg transition-colors duration-200">Programming</a>
                        <a href="#" class="bg-blue-50 hover:bg-blue-100 text-blue-800 text-sm font-medium px-3 py-2 rounded-lg transition-colors duration-200">AI/ML</a>
                        <a href="#" class="bg-blue-50 hover:bg-blue-100 text-blue-800 text-sm font-medium px-3 py-2 rounded-lg transition-colors duration-200">Cybersecurity</a>
                        <a href="#" class="bg-blue-50 hover:bg-blue-100 text-blue-800 text-sm font-medium px-3 py-2 rounded-lg transition-colors duration-200">Data Science</a>
                    </div>
                </div>
            </div>

            <!-- Biotechnology Category -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                <div class="p-6">
                    <div class="flex items-center justify-center w-16 h-16 rounded-lg bg-green-100 mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-3">Biotechnology</h2>
                    <div class="grid grid-cols-2 gap-3">
                        <a href="#" class="bg-green-50 hover:bg-green-100 text-green-800 text-sm font-medium px-3 py-2 rounded-lg transition-colors duration-200">Genetics</a>
                        <a href="#" class="bg-green-50 hover:bg-green-100 text-green-800 text-sm font-medium px-3 py-2 rounded-lg transition-colors duration-200">Bioinformatics</a>
                        <a href="#" class="bg-green-50 hover:bg-green-100 text-green-800 text-sm font-medium px-3 py-2 rounded-lg transition-colors duration-200">Pharmaceutical</a>
                        <a href="#" class="bg-green-50 hover:bg-green-100 text-green-800 text-sm font-medium px-3 py-2 rounded-lg transition-colors duration-200">Biochemistry</a>
                    </div>
                </div>
            </div>

            <!-- Management Category -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                <div class="p-6">
                    <div class="flex items-center justify-center w-16 h-16 rounded-lg bg-purple-100 mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-3">Management</h2>
                    <div class="grid grid-cols-2 gap-3">
                        <a href="#" class="bg-purple-50 hover:bg-purple-100 text-purple-800 text-sm font-medium px-3 py-2 rounded-lg transition-colors duration-200">Marketing</a>
                        <a href="#" class="bg-purple-50 hover:bg-purple-100 text-purple-800 text-sm font-medium px-3 py-2 rounded-lg transition-colors duration-200">Finance</a>
                        <a href="#" class="bg-purple-50 hover:bg-purple-100 text-purple-800 text-sm font-medium px-3 py-2 rounded-lg transition-colors duration-200">HR</a>
                        <a href="#" class="bg-purple-50 hover:bg-purple-100 text-purple-800 text-sm font-medium px-3 py-2 rounded-lg transition-colors duration-200">Operations</a>
                    </div>
                </div>
            </div>

            <!-- Engineering Category -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                <div class="p-6">
                    <div class="flex items-center justify-center w-16 h-16 rounded-lg bg-amber-100 mb-4">
                        <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"></path>
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-3">Engineering</h2>
                    <div class="grid grid-cols-2 gap-3">
                        <a href="#" class="bg-amber-50 hover:bg-amber-100 text-amber-800 text-sm font-medium px-3 py-2 rounded-lg transition-colors duration-200">Mechanical</a>
                        <a href="#" class="bg-amber-50 hover:bg-amber-100 text-amber-800 text-sm font-medium px-3 py-2 rounded-lg transition-colors duration-200">Electrical</a>
                        <a href="#" class="bg-amber-50 hover:bg-amber-100 text-amber-800 text-sm font-medium px-3 py-2 rounded-lg transition-colors duration-200">Civil</a>
                        <a href="#" class="bg-amber-50 hover:bg-amber-100 text-amber-800 text-sm font-medium px-3 py-2 rounded-lg transition-colors duration-200">Chemical</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Popular Courses Section -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Popular Courses</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6" id="coursesContainer">
                <!-- Demo courses will be inserted here by JavaScript -->
            </div>
        </div>

        <!-- PDF Resources Section -->
        <div class="mb-12" id="pdfSection">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">PDF Resources</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Computer Science PDFs -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                    <div class="h-40 bg-blue-100 flex items-center justify-center">
                        <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="uppercase tracking-wide text-sm text-blue-600 font-semibold">Computer Science</div>
                        <h3 class="text-lg font-medium text-gray-900 mt-1">Python Basics</h3>
                        <p class="mt-2 text-gray-500">Introduction to Python programming language</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-sm text-gray-500">2.4 MB</span>
                            <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium flex items-center">
                                Download
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Biotechnology PDFs -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                    <div class="h-40 bg-green-100 flex items-center justify-center">
                        <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="uppercase tracking-wide text-sm text-green-600 font-semibold">Biotechnology</div>
                        <h3 class="text-lg font-medium text-gray-900 mt-1">Genetic Engineering</h3>
                        <p class="mt-2 text-gray-500">Fundamentals of genetic manipulation</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-sm text-gray-500">3.1 MB</span>
                            <a href="#" class="text-green-600 hover:text-green-800 text-sm font-medium flex items-center">
                                Download
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Management PDFs -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                    <div class="h-40 bg-purple-100 flex items-center justify-center">
                        <svg class="w-12 h-12 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="uppercase tracking-wide text-sm text-purple-600 font-semibold">Management</div>
                        <h3 class="text-lg font-medium text-gray-900 mt-1">Marketing Strategies</h3>
                        <p class="mt-2 text-gray-500">Modern digital marketing techniques</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-sm text-gray-500">1.8 MB</span>
                            <a href="#" class="text-purple-600 hover:text-purple-800 text-sm font-medium flex items-center">
                                Download
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Engineering PDFs -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:transform hover:scale-105">
                    <div class="h-40 bg-amber-100 flex items-center justify-center">
                        <svg class="w-12 h-12 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="uppercase tracking-wide text-sm text-amber-600 font-semibold">Engineering</div>
                        <h3 class="text-lg font-medium text-gray-900 mt-1">Mechanical Principles</h3>
                        <p class="mt-2 text-gray-500">Core concepts of mechanical engineering</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-sm text-gray-500">4.2 MB</span>
                            <a href="#" class="text-amber-600 hover:text-amber-800 text-sm font-medium flex items-center">
                                Download
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to Top Section -->
        <div class="text-center mb-8">
            <button id="backToTopBtn" class="inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                </svg>
                Back to Top
            </button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Demo data
        const demoCourses = [
            {
                id: 1,
                title: "Python Programming",
                category: "Computer Science",
                color: "blue",
                description: "Learn Python from scratch and build real-world applications",
                is_popular: true
            },
            {
                id: 2,
                title: "Genetic Engineering",
                category: "Biotechnology",
                color: "green",
                description: "Introduction to modern genetic engineering techniques",
                is_popular: true
            },
            {
                id: 3,
                title: "Digital Marketing",
                category: "Management",
                color: "purple",
                description: "Master digital marketing strategies for business growth",
                is_popular: true
            },
            {
                id: 4,
                title: "Machine Learning",
                category: "Computer Science",
                color: "blue",
                description: "Fundamentals of machine learning and AI algorithms",
                is_popular: true
            },
            {
                id: 5,
                title: "Structural Engineering",
                category: "Engineering",
                color: "amber",
                description: "Principles of structural design and analysis",
                is_popular: false
            },
            {
                id: 6,
                title: "Financial Management",
                category: "Management",
                color: "purple",
                description: "Corporate finance and investment strategies",
                is_popular: true
            },
            {
                id: 7,
                title: "Bioinformatics",
                category: "Biotechnology",
                color: "green",
                description: "Computational approaches to biological problems",
                is_popular: true
            },
            {
                id: 8,
                title: "Web Development",
                category: "Computer Science",
                color: "blue",
                description: "Build modern web applications with JavaScript",
                is_popular: true
            }
        ];

        // Display all popular courses initially
        displayCourses(demoCourses.filter(course => course.is_popular));

        // Search and filter functionality
        const searchInput = document.getElementById('searchInput');
        const categoryFilter = document.getElementById('categoryFilter');

        searchInput.addEventListener('input', filterCourses);
        categoryFilter.addEventListener('change', filterCourses);

        function filterCourses() {
            const searchTerm = searchInput.value.toLowerCase();
            const selectedCategory = categoryFilter.value;

            let filtered = demoCourses.filter(course => course.is_popular);

            if (searchTerm) {
                filtered = filtered.filter(course =>
                    course.title.toLowerCase().includes(searchTerm) ||
                    course.description.toLowerCase().includes(searchTerm)
                );
            }

            if (selectedCategory) {
                if (selectedCategory === "computer") {
                    filtered = filtered.filter(course => course.category === "Computer Science");
                } else if (selectedCategory === "bio") {
                    filtered = filtered.filter(course => course.category === "Biotechnology");
                } else if (selectedCategory === "management") {
                    filtered = filtered.filter(course => course.category === "Management");
                } else if (selectedCategory === "engineering") {
                    filtered = filtered.filter(course => course.category === "Engineering");
                }
            }

            displayCourses(filtered);
        }

        function displayCourses(courses) {
            const container = document.getElementById('coursesContainer');
            container.innerHTML = '';

            if (courses.length === 0) {
                container.innerHTML = '<p class="text-gray-500 col-span-4 text-center py-8">No courses found matching your criteria.</p>';
                return;
            }

            courses.forEach(course => {
                const courseCard = document.createElement('div');
                courseCard.className = `bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300`;
                courseCard.innerHTML = `
                    <div class="h-40 bg-${course.color}-100 flex items-center justify-center">
                        <svg class="w-12 h-12 text-${course.color}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="uppercase tracking-wide text-sm text-${course.color}-600 font-semibold">${course.category}</div>
                        <a href="#" class="block mt-1 text-lg font-medium text-gray-900 hover:text-${course.color}-600">${course.title}</a>
                        <p class="mt-2 text-gray-500">${course.description}</p>
                    </div>
                `;
                container.appendChild(courseCard);
            });
        }

        // Scroll to Top Functionality
        const scrollToTopBtn = document.getElementById('scrollToTopBtn');
        const backToTopBtn = document.getElementById('backToTopBtn');
        const topSection = document.getElementById('topSection');

        // Show/hide scroll to top button based on scroll position
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.remove('opacity-0', 'invisible');
                scrollToTopBtn.classList.add('opacity-100', 'visible');
            } else {
                scrollToTopBtn.classList.remove('opacity-100', 'visible');
                scrollToTopBtn.classList.add('opacity-0', 'invisible');
            }
        });

        // Smooth scroll to top
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        scrollToTopBtn.addEventListener('click', scrollToTop);
        backToTopBtn.addEventListener('click', scrollToTop);

        // Smooth scroll to any anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
</script>
@endsection
