<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Wings Fine Arts — Aviation Art</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .glass { background: rgba(255,255,255,0.06); backdrop-filter: blur(6px); }
    .card-grad { background: linear-gradient(180deg, rgba(255,255,255,0.03), rgba(0,0,0,0.03)); }
  </style>
</head>
<body class="bg-[#0b1221] text-slate-100 antialiased">
  <!-- NAVBAR -->
  <header id="siteHeader" class="sticky top-0 z-50 bg-transparent transition-transform duration-300">
    <div class="max-w-7xl mx-auto px-6 py-0 flex items-center justify-between">
      <a href="#" class="flex items-center gap-3">
        <img src="assets/images/Wings_gold.avif" class="w-24 h-24 object-contain" alt="Wings Fine Arts logo" />
      </a>

      <nav class="hidden md:flex items-center gap-6">
        <a href="#collection" class="text-slate-200/80 hover:text-white transition">Collection</a>
        <a href="#artists" class="text-slate-200/80 hover:text-white transition">Artists</a>
        <a href="#about" class="text-slate-200/80 hover:text-white transition">About</a>
        <a href="#" class="px-4 py-2 rounded-md bg-slate-800/60 hover:bg-slate-700 transition">Contact</a>
      </nav>

      <div class="flex items-center gap-3">
        <button class="p-2 rounded-md hover:bg-slate-700/40 transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-4.35-4.35m1.1-5.4A6.75 6.75 0 1110.35 4.05a6.75 6.75 0 017.4 7.2z"/></svg>
        </button>
        <button class="p-2 rounded-md hover:bg-slate-700/40 transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 12c2.485 0 4.5-2.015 4.5-4.5S14.485 3 12 3 7.5 5.015 7.5 7.5 9.515 12 12 12zm0 1.5c-3.03 0-9 1.515-9 4.5V21h18v-3c0-2.985-5.97-4.5-9-4.5z"/></svg>
        </button>
        <button class="p-2 rounded-md hover:bg-slate-700/40 transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 7h12l-1 12H7L6 7zm3-3h6v3H9V4z"/></svg>
        </button>

        <button class="md:hidden p-2 rounded-md glass">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" /></svg>
        </button>
      </div>
    </div>
  </header>

  <!-- HERO -->
  <section>
    <div class="max-w-7xl mx-auto px-6">
      <div class="relative rounded-2xl overflow-hidden shadow-2xl">
        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover" poster="https://fallback-image.jpg">
          <source src="assets/videos/bg-plane.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-slate-900/20 to-slate-900/80"></div>
        <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 gap-6 items-center p-10 md:p-16">
          <div class="space-y-6">
            <span class="inline-block px-3 py-1 rounded-full bg-indigo-600/80 text-xs font-medium">Limited Editions</span>
            <h1 class="text-4xl md:text-5xl font-bold leading-tight">Aviation Art & Prints — Elevate your space with the spirit of flight</h1>
            <p class="text-slate-200/80 max-w-xl">Original illustrations, archival prints, and framed artworks inspired by historic aircraft, modern jets, and aerial photography. Hand-picked by pilots and collectors.</p>
            <div class="flex gap-3">
              <a href="#collection" class="px-6 py-3 rounded-lg bg-sky-500 hover:bg-sky-400 transition font-semibold">Shop Collection</a>
              <a href="#about" class="px-6 py-3 rounded-lg border border-slate-600 hover:bg-slate-800 transition">Learn More</a>
            </div>
          </div>
          <div class="hidden md:flex justify-end">
            <div class="w-full max-w-md rounded-xl card-grad p-4 glass backdrop-blur-sm">
              <div class="flex items-start gap-4">
                <img src="https://placehold.co/400x300?text=Aviation+Art" alt="featured" class="w-28 h-28 object-cover rounded-lg shadow" />
                <div class="flex-1">
                  <h3 class="font-semibold">Spitfire No. 22 — Archival Print</h3>
                  <p class="text-sm text-slate-300/80">Signed limited edition, 18x24 in, archival paper.</p>
                  <div class="mt-3 flex items-center justify-between">
                    <div class="font-bold">$220</div>
                    <a href="#" class="text-xs px-3 py-2 rounded-md bg-slate-700/50">Add to cart</a>
                  </div>
                </div>
              </div>
              <div class="mt-4 text-xs text-slate-400">Free shipping over $150 • 30-day returns</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MAIN GRID -->
  <main class="max-w-7xl mx-auto px-6 mt-12">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
      <!-- SIDEBAR -->
      <aside class="lg:col-span-1">
        <div class="bg-[#071020] p-5 rounded-2xl shadow-lg glass">
          <h4 class="font-semibold mb-3">Filters</h4>
          <details class="mb-3">
            <summary class="cursor-pointer font-medium">Category</summary>
            <ul class="mt-2 space-y-2 text-sm text-slate-300/80">
              <li><label class="flex items-center gap-3"><input type="checkbox" class="accent-sky-400"> Prints</label></li>
              <li><label class="flex items-center gap-3"><input type="checkbox" class="accent-sky-400"> Originals</label></li>
              <li><label class="flex items-center gap-3"><input type="checkbox" class="accent-sky-400"> Photography</label></li>
            </ul>
          </details>

          <details class="mb-3">
            <summary class="cursor-pointer font-medium">Aircraft Type</summary>
            <ul class="mt-2 space-y-2 text-sm text-slate-300/80">
              <li><label class="flex items-center gap-3"><input type="checkbox" class="accent-sky-400"> Vintage</label></li>
              <li><label class="flex items-center gap-3"><input type="checkbox" class="accent-sky-400"> Fighter</label></li>
              <li><label class="flex items-center gap-3"><input type="checkbox" class="accent-sky-400"> Commercial</label></li>
            </ul>
          </details>

          <div class="mt-4">
            <h5 class="text-sm font-medium mb-2">Price</h5>
            <div class="flex items-center space-x-3">
              <input type="text" placeholder="$100" class="w-1/2 rounded-md bg-transparent border border-slate-700 px-3 py-2 text-sm" />
              <input type="text" placeholder="$500" class="w-1/2 rounded-md bg-transparent border border-slate-700 px-3 py-2 text-sm" />
            </div>
          </div>

          <button class="mt-6 w-full px-4 py-2 rounded-lg bg-indigo-600 hover:bg-indigo-500 font-semibold">Apply Filters</button>
        </div>

        <div class="mt-6 text-sm text-slate-400">
          <h6 class="font-medium mb-2">Why Wings Fine Arts?</h6>
          <p class="text-xs">Curated aviation art, museum-quality printing, and fast secure shipping worldwide. Support independent aviation artists.</p>
        </div>
      </aside>

      <!-- PRODUCT AREA -->
      <section id="collection" class="lg:col-span-3">
        <div class="flex items-center justify-between mb-6">
          <div>
            <h2 class="text-2xl font-bold">Featured Collection</h2>
            <p class="text-sm text-slate-400">New arrivals & popular prints</p>
          </div>
          <div class="flex items-center gap-3">
            <label class="text-sm text-slate-300/80">Sort</label>
            <select class="rounded-md bg-transparent border border-slate-700 px-3 py-2 text-sm">
              <option>Popular</option>
              <option>Newest</option>
              <option>Price: Low to High</option>
            </select>
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Card 1 -->
          <article class="rounded-2xl card-grad shadow-lg overflow-hidden group">
            <div class="w-full aspect-[4/3] bg-slate-900 overflow-hidden group">
              <img src="https://placehold.co/800x600?text=Aviation+Art" class="w-full h-full object-cover group-hover:object-contain transition-all duration-500" />
            </div>
            <div class="p-4 space-y-2">
              <h3 class="font-semibold">Artwork 1</h3>
              <p class="text-xs text-slate-400">Description</p>
              <div class="flex items-center justify-between">
                <div class="font-bold">$145</div>
                <button class="px-3 py-2 rounded-md bg-sky-500 hover:bg-sky-400 font-semibold text-sm">Add to cart</button>
              </div>
            </div>
          </article>

          <!-- Card 2 -->
          <article class="rounded-2xl card-grad shadow-lg overflow-hidden group">
            <div class="w-full aspect-[4/3] bg-slate-900 overflow-hidden group">
              <img src="https://placehold.co/800x600?text=Aviation+Art" class="w-full h-full object-cover group-hover:object-contain transition-all duration-500" />
            </div>
            <div class="p-4 space-y-2">
              <h3 class="font-semibold">Artwork 2</h3>
              <p class="text-xs text-slate-400">Description</p>
              <div class="flex items-center justify-between">
                <div class="font-bold">$220</div>
                <button class="px-3 py-2 rounded-md bg-sky-500 hover:bg-sky-400 font-semibold text-sm">Add to cart</button>
              </div>
            </div>
          </article>

          <!-- Card 3 -->
          <article class="rounded-2xl card-grad shadow-lg overflow-hidden group">
            <div class="w-full aspect-[4/3] bg-slate-900 overflow-hidden group">
              <img src="https://placehold.co/800x600?text=Aviation+Art" class="w-full h-full object-cover group-hover:object-contain transition-all duration-500" />
            </div>
            <div class="p-4 space-y-2">
              <h3 class="font-semibold">Artwork 3</h3>
              <p class="text-xs text-slate-400">Description</p>
              <div class="flex items-center justify-between">
                <div class="font-bold">$180</div>
                <button class="px-3 py-2 rounded-md bg-sky-500 hover:bg-sky-400 font-semibold text-sm">Add to cart</button>
              </div>
            </div>
          </article>
        </div>

        <div class="mt-8 flex justify-center">
          <button class="px-5 py-3 rounded-full border border-slate-700">Load more</button>
        </div>
      </section>
    </div>
  </main>

  <footer class="mt-20 border-t border-slate-800 pt-12 pb-16 text-center">
    <p class="text-slate-500 text-xs">© <span id="year"></span> Wings Fine Arts — All rights reserved</p>
  </footer>

  <script>
    document.getElementById('year').textContent = new Date().getFullYear();

    let lastScroll = 0;
    const header = document.getElementById('siteHeader');

    window.addEventListener('scroll', () => {
      const current = window.pageYOffset;
      if (current > lastScroll && current > 80) header.style.transform = 'translateY(-100%)';
      else header.style.transform = 'translateY(0)';
      lastScroll = current;
    });
  </script>
</body>
</html>
