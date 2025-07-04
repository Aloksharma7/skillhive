<!-- Navigation Bar -->
<nav class="bg-lightblue shadow-md">
  <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
    
    <!-- Logo -->
    <div class="flex items-center">
      <span class="text-2xl font-bold text-skyblue">Skill<span class="text-lightpink">Hive</span></span>
    </div>
    
    <!-- Nav Buttons -->
    <div id="nav-buttons" class="space-x-4">
      <!-- Content populated by JS -->
    </div>
    
  </div>
</nav>

<script>
  // Simulate login status (replace with real logic)
  const isLoggedIn = false; // Change to true to see logged-in view

  const navButtons = document.getElementById('nav-buttons');

  if (isLoggedIn) {
    navButtons.innerHTML = `
      <a href="/dashboard" class="px-4 py-2 bg-skyblue text-white rounded hover:bg-coral transition">Dashboard</a>
    `;
  } else {
    navButtons.innerHTML = `
      <a href="/login" class="px-4 py-2 text-skyblue border border-skyblue rounded hover:bg-skyblue hover:bg-blue-100 transition">Log In</a>
      <a href="/register" class="px-4 py-2 bg-skyblue border rounded hover:bg-blue-100 hover:border-skyblue transition">Register</a>
      `;
  }
</script>
