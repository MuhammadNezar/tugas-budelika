<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kelompok 1 | Portfolio Tim (6 Anggota, 1000+ tags)</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
  <style>
    body.light { background: linear-gradient(180deg,#f7f7fb,#eef2ff); color:#1f2937; }
    body.dark  { background: radial-gradient(1200px 600px at 0% 0%,#0f172a,#111827 60%,#0b0f19); color:#e5e7eb; }
    .glass { background: rgba(255,255,255,.08); backdrop-filter: blur(10px); }
  </style>
</head>
<body class="dark font-sans scroll-smooth">
  <!-- Progress Bar -->
  <div id="progress" class="fixed top-0 left-0 h-1 bg-gradient-to-r from-fuchsia-500 to-indigo-500 w-0 z-50"></div>

  <!-- Navbar -->
<header class="fixed w-full top-0 z-40 glass border-b border-white/10">
  <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
    <a href="#" class="text-xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-indigo-400 to-pink-500">
      Kelompok 1
    </a>
    <nav class="hidden md:flex gap-6 text-sm items-center">
      <a href="#team" class="hover:text-pink-400">Tim</a>
      <a href="#skills" class="hover:text-pink-400">Skills</a>
      <a href="#services" class="hover:text-pink-400">Layanan</a>
      <a href="#projects" class="hover:text-pink-400">Projek</a>

      <!-- Tombol Login / Register -->
      <a href="{{ route('login') }}" 
         class="ml-6 px-4 py-2 rounded-full bg-gradient-to-r from-pink-500 to-indigo-600 text-white text-sm shadow hover:scale-105 transition">
        Login
      </a>
      <a href="{{ route('register') }}" 
         class="ml-2 px-4 py-2 rounded-full bg-white/10 text-sm shadow hover:bg-white/20 transition">
        Register
      </a>
    </nav>
  </div>
</header>

  <!-- Hero -->
  <section id="home" class="min-h-[90vh] flex items-center justify-center text-center px-6 pt-24">
    <div class="max-w-4xl">
      <p class="text-sm tracking-widest text-fuchsia-300">UPDATED: 2025-08-21 03:21</p>
      <h1 class="mt-3 text-5xl md:text-6xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-fuchsia-400 via-rose-400 to-indigo-400">Portofolio Kelompok 1</h1>
      <h2 class="mt-4 text-2xl"><span class="text-pink-400">Kami adalah </span><span id="typed"></span></h2>
      <p class="mt-6 text-gray-300">Tim beranggotakan 6 orang dengan spesialisasi lengkap: dari UI/UX, frontend, backend, mobile, hingga DevOps.</p>
      <div class="mt-8 flex gap-4 justify-center">
        <a href="#projects" class="px-6 py-3 rounded-full bg-gradient-to-r from-pink-500 to-indigo-600">Lihat Projek</a>
        <a href="#team" class="px-6 py-3 rounded-full bg-white/10">Kenalan dengan Tim</a>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section id="team" class="py-24">
    <div class="max-w-7xl mx-auto px-6">
      <h3 class="text-3xl font-bold text-center mb-10">Anggota Tim</h3>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        
    <div class="group rounded-2xl p-6 bg-white/70 dark:bg-white/10 backdrop-blur-md shadow hover:shadow-xl transition" data-aos="fade-up">
      <div class="flex items-center gap-4">
    <img src="{{ asset('images/anggota1.jpg') }}" 
     class="w-16 h-16 rounded-xl object-cover" 
     alt="Anggota 1">
        <div>
          <h4 class="font-semibold text-lg">Anggota 1</h4>
          <p class="text-sm text-gray-500 dark:text-gray-300">Fullstack Developer</p>
        </div>
      </div>
      <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">Bagian dari Kelompok 1. Fokus pada kualitas kode, performa, dan UI yang menarik.</p>
      <div class="mt-3 flex flex-wrap gap-2"><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Laravel</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Tailwind</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">React</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">MySQL</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Docker</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">AOS</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Typed.js</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Git</span></div>
      <div class="mt-4 flex gap-3">
        <a href="#member-1-projects" class="px-3 py-1 bg-indigo-600 rounded-full text-white text-sm">Lihat Projek</a>
        <a href="#contact" class="px-3 py-1 bg-white/10 rounded-full text-sm">Kontak</a>
      </div>
    </div>
    

    <div class="group rounded-2xl p-6 bg-white/70 dark:bg-white/10 backdrop-blur-md shadow hover:shadow-xl transition" data-aos="fade-up">
      <div class="flex items-center gap-4">
    <img src="{{ asset('images/fotoridho.jpg') }}" 
     class="w-16 h-16 rounded-xl object-cover" 
     alt="Anggota 1">
        <div>
          <h4 class="font-semibold text-lg">Anggota 2</h4>
          <p class="text-sm text-gray-500 dark:text-gray-300">Frontend Engineer</p>
        </div>
      </div>
      <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">Bagian dari Kelompok 1. Fokus pada kualitas kode, performa, dan UI yang menarik.</p>
      <div class="mt-3 flex flex-wrap gap-2"><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Laravel</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Tailwind</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">React</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">MySQL</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Docker</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">AOS</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Typed.js</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Git</span></div>
      <div class="mt-4 flex gap-3">
        <a href="#member-2-projects" class="px-3 py-1 bg-indigo-600 rounded-full text-white text-sm">Lihat Projek</a>
        <a href="#contact" class="px-3 py-1 bg-white/10 rounded-full text-sm">Kontak</a>
      </div>
    </div>
    

    <div class="group rounded-2xl p-6 bg-white/70 dark:bg-white/10 backdrop-blur-md shadow hover:shadow-xl transition" data-aos="fade-up">
      <div class="flex items-center gap-4">
            <img src="{{ asset('images/anggota3.jpg') }}" 
     class="w-16 h-16 rounded-xl object-cover" 
     alt="Anggota 1">

        <div>
          <h4 class="font-semibold text-lg">Anggota 3</h4>
          <p class="text-sm text-gray-500 dark:text-gray-300">Backend Engineer</p>
        </div>
      </div>
      <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">Bagian dari Kelompok 1. Fokus pada kualitas kode, performa, dan UI yang menarik.</p>
      <div class="mt-3 flex flex-wrap gap-2"><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Laravel</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Tailwind</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">React</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">MySQL</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Docker</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">AOS</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Typed.js</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Git</span></div>
      <div class="mt-4 flex gap-3">
        <a href="#member-3-projects" class="px-3 py-1 bg-indigo-600 rounded-full text-white text-sm">Lihat Projek</a>
        <a href="#contact" class="px-3 py-1 bg-white/10 rounded-full text-sm">Kontak</a>
      </div>
    </div>
    

    <div class="group rounded-2xl p-6 bg-white/70 dark:bg-white/10 backdrop-blur-md shadow hover:shadow-xl transition" data-aos="fade-up">
      <div class="flex items-center gap-4">
            <img src="{{ asset('images/anggota4.jpg') }}" 
     class="w-16 h-16 rounded-xl object-cover" 
     alt="Anggota 1">

        <div>
          <h4 class="font-semibold text-lg">Anggota 4</h4>
          <p class="text-sm text-gray-500 dark:text-gray-300">UI/UX Designer</p>
        </div>
      </div>
      <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">Bagian dari Kelompok 1. Fokus pada kualitas kode, performa, dan UI yang menarik.</p>
      <div class="mt-3 flex flex-wrap gap-2"><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Laravel</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Tailwind</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">React</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">MySQL</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Docker</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">AOS</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Typed.js</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Git</span></div>
      <div class="mt-4 flex gap-3">
        <a href="#member-4-projects" class="px-3 py-1 bg-indigo-600 rounded-full text-white text-sm">Lihat Projek</a>
        <a href="#contact" class="px-3 py-1 bg-white/10 rounded-full text-sm">Kontak</a>
      </div>
    </div>
    

    <div class="group rounded-2xl p-6 bg-white/70 dark:bg-white/10 backdrop-blur-md shadow hover:shadow-xl transition" data-aos="fade-up">
      <div class="flex items-center gap-4">
        <img src="https://source.unsplash.com/300x300/?portrait,man,5" class="w-16 h-16 rounded-xl object-cover" alt="Anggota 5">
        <div>
          <h4 class="font-semibold text-lg">Anggota 5</h4>
          <p class="text-sm text-gray-500 dark:text-gray-300">Mobile Developer</p>
        </div>
      </div>
      <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">Bagian dari Kelompok 1. Fokus pada kualitas kode, performa, dan UI yang menarik.</p>
      <div class="mt-3 flex flex-wrap gap-2"><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Laravel</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Tailwind</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">React</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">MySQL</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Docker</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">AOS</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Typed.js</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Git</span></div>
      <div class="mt-4 flex gap-3">
        <a href="#member-5-projects" class="px-3 py-1 bg-indigo-600 rounded-full text-white text-sm">Lihat Projek</a>
        <a href="#contact" class="px-3 py-1 bg-white/10 rounded-full text-sm">Kontak</a>
      </div>
    </div>
    

    <div class="group rounded-2xl p-6 bg-white/70 dark:bg-white/10 backdrop-blur-md shadow hover:shadow-xl transition" data-aos="fade-up">
      <div class="flex items-center gap-4">
        <img src="https://source.unsplash.com/300x300/?portrait,man,6" class="w-16 h-16 rounded-xl object-cover" alt="Anggota 6">
        <div>
          <h4 class="font-semibold text-lg">Anggota 6</h4>
          <p class="text-sm text-gray-500 dark:text-gray-300">DevOps Engineer</p>
        </div>
      </div>
      <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">Bagian dari Kelompok 1. Fokus pada kualitas kode, performa, dan UI yang menarik.</p>
      <div class="mt-3 flex flex-wrap gap-2"><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Laravel</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Tailwind</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">React</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">MySQL</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Docker</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">AOS</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Typed.js</span><span class="px-2 py-1 rounded-full text-xs bg-indigo-100 dark:bg-indigo-900/40">Git</span></div>
      <div class="mt-4 flex gap-3">
        <a href="#member-6-projects" class="px-3 py-1 bg-indigo-600 rounded-full text-white text-sm">Lihat Projek</a>
        <a href="#contact" class="px-3 py-1 bg-white/10 rounded-full text-sm">Kontak</a>
      </div>
    </div>
    
      </div>
    </div>
  </section>

  <!-- Skills -->
  <section id="skills" class="py-24 bg-white/5">
    <div class="max-w-6xl mx-auto px-6">
      <h3 class="text-3xl font-bold text-center mb-10">Skills Tim</h3>
      <div class="grid md:grid-cols-2 gap-10">
    <div class="space-y-2">
      <div class="flex justify-between text-sm"><span>Laravel/PHP</span><span>92%</span></div>
      <div class="w-full bg-gray-200 dark:bg-white/10 rounded-full h-2">
        <div class="h-2 rounded-full bg-rose-500" style="width:92%"></div>
      </div>
    </div>
    

    <div class="space-y-2">
      <div class="flex justify-between text-sm"><span>JavaScript/TypeScript</span><span>90%</span></div>
      <div class="w-full bg-gray-200 dark:bg-white/10 rounded-full h-2">
        <div class="h-2 rounded-full bg-yellow-400" style="width:90%"></div>
      </div>
    </div>
    

    <div class="space-y-2">
      <div class="flex justify-between text-sm"><span>React/Vue</span><span>88%</span></div>
      <div class="w-full bg-gray-200 dark:bg-white/10 rounded-full h-2">
        <div class="h-2 rounded-full bg-emerald-500" style="width:88%"></div>
      </div>
    </div>
    

    <div class="space-y-2">
      <div class="flex justify-between text-sm"><span>TailwindCSS</span><span>96%</span></div>
      <div class="w-full bg-gray-200 dark:bg-white/10 rounded-full h-2">
        <div class="h-2 rounded-full bg-sky-500" style="width:96%"></div>
      </div>
    </div>
    

    <div class="space-y-2">
      <div class="flex justify-between text-sm"><span>MySQL/Postgres</span><span>85%</span></div>
      <div class="w-full bg-gray-200 dark:bg-white/10 rounded-full h-2">
        <div class="h-2 rounded-full bg-indigo-500" style="width:85%"></div>
      </div>
    </div>
    

    <div class="space-y-2">
      <div class="flex justify-between text-sm"><span>Docker/Kubernetes</span><span>78%</span></div>
      <div class="w-full bg-gray-200 dark:bg-white/10 rounded-full h-2">
        <div class="h-2 rounded-full bg-fuchsia-500" style="width:78%"></div>
      </div>
    </div>
    

    <div class="space-y-2">
      <div class="flex justify-between text-sm"><span>CI/CD & Cloud</span><span>82%</span></div>
      <div class="w-full bg-gray-200 dark:bg-white/10 rounded-full h-2">
        <div class="h-2 rounded-full bg-teal-500" style="width:82%"></div>
      </div>
    </div>
    </div>
    </div>
  </section>

  <!-- Services -->
  <section id="services" class="py-24">
    <div class="max-w-6xl mx-auto px-6">
      <h3 class="text-3xl font-bold text-center mb-12">Layanan</h3>
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <div class="bg-white/70 dark:bg-white/10 backdrop-blur-md rounded-2xl p-6 shadow hover:shadow-xl transition">
      <div class="text-3xl mb-3">🧩</div>
      <h4 class="font-semibold text-lg mb-2">Pengembangan Web</h4>
      <p class="text-gray-600 dark:text-gray-300 text-sm">Website kencang & aman dengan Laravel + Tailwind + SPA.</p>
    </div>
    

    <div class="bg-white/70 dark:bg-white/10 backdrop-blur-md rounded-2xl p-6 shadow hover:shadow-xl transition">
      <div class="text-3xl mb-3">📱</div>
      <h4 class="font-semibold text-lg mb-2">Aplikasi Mobile</h4>
      <p class="text-gray-600 dark:text-gray-300 text-sm">Flutter/React Native multi-platform, smooth & stabil.</p>
    </div>
    

    <div class="bg-white/70 dark:bg-white/10 backdrop-blur-md rounded-2xl p-6 shadow hover:shadow-xl transition">
      <div class="text-3xl mb-3">🎨</div>
      <h4 class="font-semibold text-lg mb-2">UI/UX Design</h4>
      <p class="text-gray-600 dark:text-gray-300 text-sm">Desain modern, aksesibel, fokus ke pengalaman pengguna.</p>
    </div>
    

    <div class="bg-white/70 dark:bg-white/10 backdrop-blur-md rounded-2xl p-6 shadow hover:shadow-xl transition">
      <div class="text-3xl mb-3">⚙</div>
      <h4 class="font-semibold text-lg mb-2">Integrasi & Otomasi</h4>
      <p class="text-gray-600 dark:text-gray-300 text-sm">Integrasi API, bot, otomasi workflow, dan zap.</p>
    </div>
    

    <div class="bg-white/70 dark:bg-white/10 backdrop-blur-md rounded-2xl p-6 shadow hover:shadow-xl transition">
      <div class="text-3xl mb-3">☁</div>
      <h4 class="font-semibold text-lg mb-2">Cloud & DevOps</h4>
      <p class="text-gray-600 dark:text-gray-300 text-sm">Docker, CI/CD, monitoring, dan deploy ke cloud.</p>
    </div>
    

    <div class="bg-white/70 dark:bg-white/10 backdrop-blur-md rounded-2xl p-6 shadow hover:shadow-xl transition">
      <div class="text-3xl mb-3">🔒</div>
      <h4 class="font-semibold text-lg mb-2">Keamanan</h4>
      <p class="text-gray-600 dark:text-gray-300 text-sm">Audit keamanan, proteksi, dan hardening aplikasi.</p>
    </div>
    </div>
    </div>
  </section>

  <!-- Projects with Filter (by category & member) -->
  <section id="projects" class="py-24 bg-white/5">
    <div class="max-w-7xl mx-auto px-6">
      <h3 class="text-3xl font-bold text-center mb-6">Projek Tim</h3>
      <div class="flex flex-wrap justify-center gap-3">
        <button class="filter px-4 py-2 rounded-full bg-indigo-600" data-filter="all">Semua</button>
        <button class="filter px-4 py-2 rounded-full bg-white/10" data-filter="web">Web</button>
        <button class="filter px-4 py-2 rounded-full bg-white/10" data-filter="mobile">Mobile</button>
        <button class="filter px-4 py-2 rounded-full bg-white/10" data-filter="ai">AI</button>
        <button class="filter px-4 py-2 rounded-full bg-white/10" data-filter="m1">Anggota 1</button>
        <button class="filter px-4 py-2 rounded-full bg-white/10" data-filter="m2">Anggota 2</button>
        <button class="filter px-4 py-2 rounded-full bg-white/10" data-filter="m3">Anggota 3</button>
        <button class="filter px-4 py-2 rounded-full bg-white/10" data-filter="m4">Anggota 4</button>
        <button class="filter px-4 py-2 rounded-full bg-white/10" data-filter="m5">Anggota 5</button>
        <button class="filter px-4 py-2 rounded-full bg-white/10" data-filter="m6">Anggota 6</button>
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
        
    <div class="project-card group rounded-2xl overflow-hidden shadow-lg bg-white/70 dark:bg-white/10 backdrop-blur-md" data-category="mobile" data-member="m2" data-aos="zoom-in">
      <div class="relative">
        <img src="https://source.unsplash.com/collection/190727/600x401" class="w-full h-40 object-cover" alt="Project 1" />
        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <a href="#modal-1" class="px-4 py-2 bg-white text-indigo-600 rounded-full">Detail</a>
        </div>
      </div>
      <div class="p-5">
        <h5 class="font-semibold">Project #001 — Anggota 2</h5>
        <p class="text-sm text-gray-600 dark:text-gray-300">Kategori: MOBILE • Fitur lengkap dan performa tinggi.</p>
        <div class="mt-3 flex gap-2 flex-wrap text-xs">
          <span class="px-2 py-1 rounded-full bg-indigo-100 dark:bg-indigo-900/40">Laravel</span>
          <span class="px-2 py-1 rounded-full bg-pink-100 dark:bg-pink-900/40">Tailwind</span>
          <span class="px-2 py-1 rounded-full bg-emerald-100 dark:bg-emerald-900/40">AOS</span>
        </div>
      </div>
    </div>
    
    <div class="project-card group rounded-2xl overflow-hidden shadow-lg bg-white/70 dark:bg-white/10 backdrop-blur-md" data-category="ai" data-member="m3" data-aos="zoom-in">
      <div class="relative">
        <img src="https://source.unsplash.com/collection/190727/600x402" class="w-full h-40 object-cover" alt="Project 2" />
        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <a href="#modal-2" class="px-4 py-2 bg-white text-indigo-600 rounded-full">Detail</a>
        </div>
      </div>
      <div class="p-5">
        <h5 class="font-semibold">Project #002 — Anggota 3</h5>
        <p class="text-sm text-gray-600 dark:text-gray-300">Kategori: AI • Fitur lengkap dan performa tinggi.</p>
        <div class="mt-3 flex gap-2 flex-wrap text-xs">
          <span class="px-2 py-1 rounded-full bg-indigo-100 dark:bg-indigo-900/40">Laravel</span>
          <span class="px-2 py-1 rounded-full bg-pink-100 dark:bg-pink-900/40">Tailwind</span>
          <span class="px-2 py-1 rounded-full bg-emerald-100 dark:bg-emerald-900/40">AOS</span>
        </div>
      </div>
    </div>
    
    <div class="project-card group rounded-2xl overflow-hidden shadow-lg bg-white/70 dark:bg-white/10 backdrop-blur-md" data-category="web" data-member="m4" data-aos="zoom-in">
      <div class="relative">
        <img src="https://source.unsplash.com/collection/190727/600x403" class="w-full h-40 object-cover" alt="Project 3" />
        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <a href="#modal-3" class="px-4 py-2 bg-white text-indigo-600 rounded-full">Detail</a>
        </div>
      </div>
      <div class="p-5">
        <h5 class="font-semibold">Project #003 — Anggota 4</h5>
        <p class="text-sm text-gray-600 dark:text-gray-300">Kategori: WEB • Fitur lengkap dan performa tinggi.</p>
        <div class="mt-3 flex gap-2 flex-wrap text-xs">
          <span class="px-2 py-1 rounded-full bg-indigo-100 dark:bg-indigo-900/40">Laravel</span>
          <span class="px-2 py-1 rounded-full bg-pink-100 dark:bg-pink-900/40">Tailwind</span>
          <span class="px-2 py-1 rounded-full bg-emerald-100 dark:bg-emerald-900/40">AOS</span>
        </div>
      </div>
    </div>
    
    <div class="project-card group rounded-2xl overflow-hidden shadow-lg bg-white/70 dark:bg-white/10 backdrop-blur-md" data-category="mobile" data-member="m5" data-aos="zoom-in">
      <div class="relative">
        <img src="https://source.unsplash.com/collection/190727/600x404" class="w-full h-40 object-cover" alt="Project 4" />
        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <a href="#modal-4" class="px-4 py-2 bg-white text-indigo-600 rounded-full">Detail</a>
        </div>
      </div>
      <div class="p-5">
        <h5 class="font-semibold">Project #004 — Anggota 5</h5>
        <p class="text-sm text-gray-600 dark:text-gray-300">Kategori: MOBILE • Fitur lengkap dan performa tinggi.</p>
        <div class="mt-3 flex gap-2 flex-wrap text-xs">
          <span class="px-2 py-1 rounded-full bg-indigo-100 dark:bg-indigo-900/40">Laravel</span>
          <span class="px-2 py-1 rounded-full bg-pink-100 dark:bg-pink-900/40">Tailwind</span>
          <span class="px-2 py-1 rounded-full bg-emerald-100 dark:bg-emerald-900/40">AOS</span>
        </div>
      </div>
    </div>
    
    <div class="project-card group rounded-2xl overflow-hidden shadow-lg bg-white/70 dark:bg-white/10 backdrop-blur-md" data-category="ai" data-member="m6" data-aos="zoom-in">
      <div class="relative">
        <img src="https://source.unsplash.com/collection/190727/600x405" class="w-full h-40 object-cover" alt="Project 5" />
        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <a href="#modal-5" class="px-4 py-2 bg-white text-indigo-600 rounded-full">Detail</a>
        </div>
      </div>
      <div class="p-5">
        <h5 class="font-semibold">Project #005 — Anggota 6</h5>
        <p class="text-sm text-gray-600 dark:text-gray-300">Kategori: AI • Fitur lengkap dan performa tinggi.</p>
        <div class="mt-3 flex gap-2 flex-wrap text-xs">
          <span class="px-2 py-1 rounded-full bg-indigo-100 dark:bg-indigo-900/40">Laravel</span>
          <span class="px-2 py-1 rounded-full bg-pink-100 dark:bg-pink-900/40">Tailwind</span>
          <span class="px-2 py-1 rounded-full bg-emerald-100 dark:bg-emerald-900/40">AOS</span>
        </div>
      </div>
    </div>
    
    <div class="project-card group rounded-2xl overflow-hidden shadow-lg bg-white/70 dark:bg-white/10 backdrop-blur-md" data-category="web" data-member="m1" data-aos="zoom-in">
      <div class="relative">
        <img src="https://source.unsplash.com/collection/190727/600x406" class="w-full h-40 object-cover" alt="Project 6" />
        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <a href="#modal-6" class="px-4 py-2 bg-white text-indigo-600 rounded-full">Detail</a>
        </div>
      </div>
      <div class="p-5">
        <h5 class="font-semibold">Project #006 — Anggota 1</h5>
        <p class="text-sm text-gray-600 dark:text-gray-300">Kategori: WEB • Fitur lengkap dan performa tinggi.</p>
        <div class="mt-3 flex gap-2 flex-wrap text-xs">
          <span class="px-2 py-1 rounded-full bg-indigo-100 dark:bg-indigo-900/40">Laravel</span>
          <span class="px-2 py-1 rounded-full bg-pink-100 dark:bg-pink-900/40">Tailwind</span>
          <span class="px-2 py-1 rounded-full bg-emerald-100 dark:bg-emerald-900/40">AOS</span>
        </div>
      </div>
    </div>
    
    <div class="project-card group rounded-2xl overflow-hidden shadow-lg bg-white/70 dark:bg-white/10 backdrop-blur-md" data-category="mobile" data-member="m2" data-aos="zoom-in">
      <div class="relative">
        <img src="https://source.unsplash.com/collection/190727/600x407" class="w-full h-40 object-cover" alt="Project 7" />
        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <a href="#modal-7" class="px-4 py-2 bg-white text-indigo-600 rounded-full">Detail</a>
        </div>
      </div>
      <div class="p-5">
        <h5 class="font-semibold">Project #007 — Anggota 2</h5>
        <p class="text-sm text-gray-600 dark:text-gray-300">Kategori: MOBILE • Fitur lengkap dan performa tinggi.</p>
        <div class="mt-3 flex gap-2 flex-wrap text-xs">
          <span class="px-2 py-1 rounded-full bg-indigo-100 dark:bg-indigo-900/40">Laravel</span>
          <span class="px-2 py-1 rounded-full bg-pink-100 dark:bg-pink-900/40">Tailwind</span>
          <span class="px-2 py-1 rounded-full bg-emerald-100 dark:bg-emerald-900/40">AOS</span>
        </div>
      </div>
    </div>
    
    <div class="project-card group rounded-2xl overflow-hidden shadow-lg bg-white/70 dark:bg-white/10 backdrop-blur-md" data-category="ai" data-member="m3" data-aos="zoom-in">
      <div class="relative">
        <img src="https://source.unsplash.com/collection/190727/600x408" class="w-full h-40 object-cover" alt="Project 8" />
        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <a href="#modal-8" class="px-4 py-2 bg-white text-indigo-600 rounded-full">Detail</a>
        </div>
      </div>
      <div class="p-5">
        <h5 class="font-semibold">Project #008 — Anggota 3</h5>
        <p class="text-sm text-gray-600 dark:text-gray-300">Kategori: AI • Fitur lengkap dan performa tinggi.</p>
        <div class="mt-3 flex gap-2 flex-wrap text-xs">
          <span class="px-2 py-1 rounded-full bg-indigo-100 dark:bg-indigo-900/40">Laravel</span>
          <span class="px-2 py-1 rounded-full bg-pink-100 dark:bg-pink-900/40">Tailwind</span>
          <span class="px-2 py-1 rounded-full bg-emerald-100 dark:bg-emerald-900/40">AOS</span>
        </div>
      </div>
    </div>
    
    <div class="project-card group rounded-2xl overflow-hidden shadow-lg bg-white/70 dark:bg-white/10 backdrop-blur-md" data-category="web" data-member="m4" data-aos="zoom-in">
      <div class="relative">
        <img src="https://source.unsplash.com/collection/190727/600x409" class="w-full h-40 object-cover" alt="Project 9" />
        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
          <a href="#modal-9" class="px-4 py-2 bg-white text-indigo-600 rounded-full">Detail</a>
        </div>
      </div>
      <div class="p-5">
        <h5 class="font-semibold">Project #009 — Anggota 4</h5>
        <p class="text-sm text-gray-600 dark:text-gray-300">Kategori: WEB • Fitur lengkap dan performa tinggi.</p>
        <div class="mt-3 flex gap-2 flex-wrap text-xs">
          <span class="px-2 py-1 rounded-full bg-indigo-100 dark:bg-indigo-900/40">Laravel</span>
          <span class="px-2 py-1 rounded-full bg-pink-100 dark:bg-pink-900/40">Tailwind</span>
          <span class="px-2 py-1 rounded-full bg-emerald-100 dark:bg-emerald-900/40">AOS</span>
        </div>
      </div>
    </div>
    
    
    </div>
  
    

      </div>
    </div>
    

  <!-- Scripts -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>AOS.init({duration:800, once:true});</script>
  <script>
    // Typed
    new Typed('#typed', {strings: ['Tim Developer', 'UI/UX & Frontend', 'Backend & DevOps', 'Mobile & Cloud'], typeSpeed: 60, backSpeed: 40, loop: true});
    // Theme toggle
    const themeBtn = document.getElementById('themeToggle');
    themeBtn && themeBtn.addEventListener('click', () => document.body.classList.toggle('light'));
    // Scroll progress
    window.addEventListener('scroll', () => { 
      const h = document.documentElement; 
      const s = (h.scrollTop)/(h.scrollHeight - h.clientHeight) * 100; 
      document.getElementById('progress').style.width = s + '%';
    });
    // Filter (by category or member)
    document.querySelectorAll('.filter').forEach(btn => btn.addEventListener('click', () => { 
      const f = btn.dataset.filter; 
      document.querySelectorAll('.filter').forEach(b=>b.classList.remove('bg-indigo-600')); 
      btn.classList.add('bg-indigo-600');
      document.querySelectorAll('.project-card').forEach(c => {
        const cat = c.dataset.category;
        const mem = c.dataset.member;
        let show = (f==='all') || (cat===f) || (mem===f);
        c.style.display = show ? 'block' : 'none';
      });
    }));
    // FAQ Toggle
    document.querySelectorAll('.faq-toggle').forEach(t => t.addEventListener('click', () => {
      const ans = t.nextElementSibling; ans.classList.toggle('hidden');
    }));
    // Modal open/close
    document.querySelectorAll('[href^="#modal-"]').forEach(a => a.addEventListener('click', (e)=>{ 
      e.preventDefault(); const id=a.getAttribute('href').replace('#',''); 
      const m=document.getElementById(id); if(m){m.classList.remove('hidden'); m.classList.add('flex');} 
    }));
    document.querySelectorAll('.close-modal').forEach(b => b.addEventListener('click', ()=>{ 
      const id=b.dataset.target; const m=document.getElementById(id); if(m){m.classList.add('hidden'); m.classList.remove('flex');} 
    }));
    document.querySelectorAll('[id^="modal-"]').forEach(m => m.addEventListener('click', (e)=>{ if(e.target===m){m.classList.add('hidden'); m.classList.remove('flex');} }));
  </script>
</body>
</html>