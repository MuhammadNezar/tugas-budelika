<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between backdrop-blur-sm bg-white/70 dark:bg-gray-900/60 shadow-lg rounded-xl px-6 py-4">
            <h2 class="font-bold text-2xl text-gray-800 dark:text-gray-100 tracking-wide">
                {{ __('Dashboard') }}
            </h2>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}" class="ml-4">
                @csrf
                <button type="submit"
                        class="px-5 py-2.5 rounded-xl bg-gradient-to-r from-emerald-400 via-cyan-500 to-blue-500 
                               hover:from-emerald-500 hover:via-cyan-600 hover:to-blue-600 
                               text-white font-semibold shadow-lg transition-all duration-300 ease-in-out 
                               hover:scale-105 focus:outline-none focus:ring-4 focus:ring-emerald-300">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-slot>

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="hidden md:flex md:flex-col w-64 bg-gradient-to-b from-indigo-600 via-purple-600 to-pink-500 text-white p-6 space-y-6">
            <div class="text-3xl font-extrabold tracking-wide">🌟 Menu</div>
            <nav class="flex flex-col space-y-3">
                <button onclick="showContent('dashboard')" class="flex items-center space-x-2 hover:bg-white/10 rounded-lg p-2 transition w-full text-left">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6m-6 0H7v6m6-6l2 2"/></svg>
                    <span>Dashboard</span>
                </button>
                <button onclick="showContent('data')" class="flex items-center space-x-2 hover:bg-white/10 rounded-lg p-2 transition w-full text-left">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 9h10M5 21h14a2 2 0 002-2V7H3v12a2 2 0 002 2z"/></svg>
                    <span>Data</span>
                </button>
                <button onclick="showContent('settings')" class="flex items-center space-x-2 hover:bg-white/10 rounded-lg p-2 transition w-full text-left">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1m0-10V5"/></svg>
                    <span>Settings</span>
                </button>
            </nav>
        </aside>

        <!-- Main content -->
        <main class="flex-1 bg-gradient-to-br from-sky-50 via-cyan-100 to-indigo-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 py-16 px-6">
            <div class="max-w-7xl mx-auto">
                <!-- Dashboard Content -->
                <div id="dashboard-content" class="content-section">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-2xl sm:rounded-3xl hover:shadow-indigo-500/30 transition-shadow duration-500">
                        <div class="p-10 text-center text-gray-900 dark:text-gray-100">
                            <h1 class="text-4xl font-extrabold mb-4">🎉 {{ __("You're logged in!") }}</h1>
                            <p class="text-lg opacity-80">Selamat datang di Dashboard super keren dengan warna vibrant 🚀</p>
                        </div>
                    </div>
                </div>

               <!-- Data Content -->
<div id="data-content" class="content-section hidden">
  <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-2xl sm:rounded-3xl hover:shadow-indigo-500/30 transition-shadow duration-500">
    <div class="p-10 text-gray-900 dark:text-gray-100">
      <h1 class="text-4xl font-extrabold mb-6">📊 Data Project</h1>

      <!-- Form tambah project -->
      <form id="projectForm" class="space-y-4">
        <div>
          <label class="block text-sm font-medium mb-1">Judul Project</label>
          <input type="text" name="title" class="w-full rounded-lg border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-white focus:ring focus:ring-indigo-300" required>
        </div>
        <div>
          <label class="block text-sm font-medium mb-1">Deskripsi</label>
          <textarea name="description" rows="3" class="w-full rounded-lg border-gray-300 dark:border-gray-700 dark:bg-gray-700 dark:text-white focus:ring focus:ring-indigo-300" required></textarea>
        </div>
        <div>
          <label class="block text-sm font-medium mb-1">Upload Gambar</label>
          <input type="file" name="image" accept="image/*" class="block w-full text-sm text-gray-500 
            file:mr-4 file:py-2 file:px-4
            file:rounded-full file:border-0
            file:text-sm file:font-semibold
            file:bg-indigo-50 file:text-indigo-700
            hover:file:bg-indigo-100" required>
        </div>
        <button type="submit" class="px-6 py-2.5 rounded-xl bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white font-semibold hover:scale-105 transition">Tambah Project</button>
      </form>

      <!-- Preview Project yang ditambahkan -->
      <div id="projectList" class="grid md:grid-cols-3 gap-6 mt-10">
        <!-- Card project akan muncul di sini -->
      </div>
    </div>
  </div>
</div>
                <!-- Settings Content -->
                <div id="settings-content" class="content-section hidden">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-2xl sm:rounded-3xl hover:shadow-indigo-500/30 transition-shadow duration-500">
                        <div class="p-10 text-gray-900 dark:text-gray-100">
                            <h1 class="text-4xl font-extrabold mb-4">⚙️ Settings</h1>
                            <p class="text-lg opacity-80">Ini halaman pengaturan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function showContent(section) {
            // Sembunyikan semua section
            document.querySelectorAll('.content-section').forEach(el => el.classList.add('hidden'));
            // Tampilkan section sesuai parameter
            document.getElementById(section + '-content').classList.remove('hidden');
        }
    </script>
</x-app-layout>
