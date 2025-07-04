
    <div class="flex min-h-screen">
        <!-- Sidebar Navigation -->
        <div class="w-64 bg-[#4F46E5] text-white p-4 flex flex-col">
            <!-- Logo --><a href="/">
            <div class="mb-8 p-2">
                <h1 class="text-2xl font-bold">SkillHive</h1>
            </div></a>

            <!-- Main Navigation -->
            <nav class="flex-1">
                <ul class="space-y-2">
                    <a href="{{ route('dashboard') }}" 
   class="block px-4 py-2 rounded transition 
   {{ request()->routeIs('dashboard') ? 'bg-[#4338CA]' : 'hover:bg-[#6366F1]' }}">
   Dashboard
</a>

<a href="{{ route('course') }}" 
   class="block px-4 py-2 rounded transition 
   {{ request()->routeIs('course') ? 'bg-[#4338CA]' : 'hover:bg-[#6366F1]' }}">
   Courses
</a>

<a href="{{ route('pdfs') }}" 
   class="block px-4 py-2 rounded transition 
   {{ request()->routeIs('pdfs') ? 'bg-[#4338CA]' : 'hover:bg-[#6366F1]' }}">
   PDF Resources
</a>

<a href="{{ route('opportunities') }}" 
   class="block px-4 py-2 rounded transition 
   {{ request()->routeIs('opportunities') ? 'bg-[#4338CA]' : 'hover:bg-[#6366F1]' }}">
   Opportunities
</a>

<a href="{{ route('blogs') }}" 
   class="block px-4 py-2 rounded transition 
   {{ request()->routeIs('blogs') ? 'bg-[#4338CA]' : 'hover:bg-[#6366F1]' }}">
   Blogs
</a>

                </ul>
            </nav>

            <!-- Admin Section -->
            <div class="mt-auto border-t border-[#4338CA] pt-4">
                <h3 class="px-4 text-sm font-semibold text-[#A5B4FC] mb-2">Admin</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="block px-4 py-2 rounded hover:bg-[#6366F1] transition">Add Content</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 rounded hover:bg-[#6366F1] transition">Admin Panel</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Header -->
            <header class="bg-white shadow-sm p-4 flex justify-between items-center">
                <h2 class="text-xl font-semibold text-[#111827]">Dashboard</h2>

                <!-- User Profile -->
                <div class="flex items-center space-x-4">
                    <div class="text-right">
                        <p class="font-medium text-[#111827]">{{ Auth::user()->name }}</p>
                        <p class="text-sm text-[#6B7280]">{{ Auth::user()->role }}</p>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-[#4F46E5] flex items-center justify-center text-white font-bold">
                        {{ strtoupper(substr(explode(' ', Auth::user()->name)[0], 0, 1) . substr(explode(' ', Auth::user()->name)[1] ?? '', 0, 1)) }}
                    </div>
                </div>
            </header>

            <!-- Main Content -->
