<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>GameStore - Home Storefront</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#7f0df2",
                        "background-light": "#f7f5f8",
                        "background-dark": "#0a0a0a",
                        "neutral-dark": "#1a1321",
                        "accent-blue": "#00f2ff"
                    },
                    fontFamily: {
                        "display": ["Space Grotesk"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        body {
            font-family: "Space Grotesk", sans-serif;
        }
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .hero-gradient {
            background: linear-gradient(0deg, rgba(10,10,10,1) 0%, rgba(10,10,10,0.5) 50%, rgba(10,10,10,0) 100%);
        }
        .card-glow:hover {
            box-shadow: 0 0 15px rgba(127, 13, 242, 0.4);
            border-color: #7f0df2;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white min-h-screen overflow-x-hidden">
<!-- Top Navigation Bar -->
<header class="sticky top-0 z-50 bg-background-dark/80 backdrop-blur-md border-b border-white/10 px-6 py-4">
<div class="max-w-[1440px] mx-auto flex items-center justify-between">
<div class="flex items-center gap-10">
<div class="flex items-center gap-3">
<div class="size-8 bg-primary rounded flex items-center justify-center text-white">
<span class="material-symbols-outlined">videogame_asset</span>
</div>
<h1 class="text-xl font-bold tracking-tight text-white uppercase italic">NeoVault</h1>
</div>
<nav class="hidden md:flex items-center gap-8">
<a class="text-primary font-bold text-sm uppercase tracking-wider" href="#">Store</a>
<a class="text-white/70 hover:text-white font-medium text-sm uppercase tracking-wider transition-colors" href="#">Library</a>
<a class="text-white/70 hover:text-white font-medium text-sm uppercase tracking-wider transition-colors" href="#">Community</a>
<a class="text-white/70 hover:text-white font-medium text-sm uppercase tracking-wider transition-colors" href="#">Support</a>
</nav>
</div>
<div class="flex items-center gap-6 flex-1 justify-end max-w-xl">
<div class="relative w-full max-w-xs">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-white/40 text-lg">search</span>
<input class="w-full bg-white/5 border-white/10 rounded-lg pl-10 pr-4 py-2 text-sm focus:ring-primary focus:border-primary border placeholder:text-white/30 text-white" placeholder="Search titles, genres..." type="text"/>
</div>
<div class="flex items-center gap-4 border-l border-white/10 pl-6">
<button class="text-white/60 hover:text-white transition-colors relative">
<span class="material-symbols-outlined">favorite</span>
<span class="absolute -top-1 -right-1 size-2 bg-primary rounded-full"></span>
</button>
<button class="text-white/60 hover:text-white transition-colors">
<span class="material-symbols-outlined">shopping_cart</span>
</button>
<div class="size-9 rounded-full bg-primary/20 border border-primary/30 overflow-hidden cursor-pointer">
<img class="w-full h-full object-cover" data-alt="User profile avatar with a tech-focused aesthetic" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBlcM3LYC_TPjNQ76E78De9zg8xZGVQNkmWFv3IkhHIAJffjNFocMSQvJA9c6lk6xpG0neuAE5Z_7L2xo6ndgbrCQ_JeRE9XlUKYPS_-sEJn1J1pgnDj9ATo8CG5VDgNaG_GYZcJZ-nqeL3FnxVjz89OtQlmgqDbmjSa7SAh5UaxQoxnhWiKg8NaUbK9w2vRFujMTfxJVB9jSPwWIGFQbqL03zVGoKxqrWZeO0B4YxEajCQL8KcS5kqCA3MEAQYfck6XKDmIbrYZtYS"/>
</div>
</div>
</div>
</div>
</header>
<main class="w-full">
<!-- Hero Carousel Section -->
<section class="relative w-full h-[75vh] min-h-[600px] overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center" data-alt="Cinematic background showing a futuristic neon city from a video game" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBsS_q5kVlwJBso9L_Q3DkckSXp0ZKJce_sMVUycGGV_S0ONtrvVYZ1bsNssEtDyZ9SEqWfwd02zwOd0n5DWdJFMH-hxlhpWZq9N5uBCXzZJ0DT9oeAuWwh-rokE8UhbSj-JviNai2x7ubKIqe5Il2IbtKUORB_e9HvMmC-knF54AVmNhawz716opnJxHuaqZhSoqwTZ7MnG0eyIRWCC58cdeUl9ahtacbK-h9fZR3Fz3r6Lu_x-44FEMbe3ewKzwV2amkCQUCv_-xm');"></div>
<div class="absolute inset-0 hero-gradient"></div>
<div class="relative h-full max-w-[1440px] mx-auto px-6 flex flex-col justify-end pb-20">
<div class="max-w-2xl space-y-6">
<div class="flex items-center gap-3">
<span class="bg-primary/90 text-white text-xs font-bold px-3 py-1 rounded-sm uppercase tracking-tighter">New Expansion</span>
<span class="text-white/60 text-xs font-bold px-3 py-1 border border-white/20 rounded-sm uppercase tracking-tighter">Action RPG</span>
</div>
<h2 class="text-7xl font-bold tracking-tighter text-white uppercase italic leading-[0.9]">Cyber<br/><span class="text-primary">Odyssey</span> 2077</h2>
<p class="text-xl text-white/70 max-w-lg font-light leading-relaxed">
                        Become a mercenary of the future. Experience the neon-drenched streets of Night City with the all-new Phantom Liberty expansion.
                    </p>
<div class="flex items-center gap-4 pt-4">
<button class="bg-primary hover:bg-primary/90 text-white font-bold px-8 py-4 rounded-lg flex items-center gap-2 transition-all transform hover:scale-105">
<span class="material-symbols-outlined">shopping_bag</span>
                            Buy Now - $59.99
                        </button>
<button class="bg-white/10 hover:bg-white/20 backdrop-blur-md text-white font-bold px-8 py-4 rounded-lg flex items-center gap-2 border border-white/20 transition-all">
<span class="material-symbols-outlined">play_circle</span>
                            Watch Trailer
                        </button>
</div>
</div>
<!-- Carousel Nav Indicators -->
<div class="absolute right-6 bottom-20 flex flex-col gap-3">
<div class="size-1 w-12 bg-primary rounded-full"></div>
<div class="size-1 w-12 bg-white/20 rounded-full"></div>
<div class="size-1 w-12 bg-white/20 rounded-full"></div>
</div>
</div>
</section>
<!-- Main Content Area -->
<div class="max-w-[1440px] mx-auto px-6 py-12 space-y-16">
<!-- Trending Now Section -->
<section>
<div class="flex items-center justify-between mb-8">
<div class="flex items-center gap-4">
<h3 class="text-2xl font-bold tracking-tight uppercase italic border-l-4 border-primary pl-4">Trending Now</h3>
<span class="text-xs font-bold text-white/40 uppercase tracking-widest mt-1">Updated 1h ago</span>
</div>
<div class="flex gap-2">
<button class="size-10 rounded-full border border-white/10 flex items-center justify-center hover:bg-white/5 transition-colors">
<span class="material-symbols-outlined text-sm">arrow_back_ios</span>
</button>
<button class="size-10 rounded-full border border-white/10 flex items-center justify-center hover:bg-white/5 transition-colors">
<span class="material-symbols-outlined text-sm">arrow_forward_ios</span>
</button>
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-6 gap-6">
<!-- Game Card -->
<div class="group cursor-pointer">
<div class="relative aspect-[3/4] rounded-xl overflow-hidden mb-4 border border-white/5 card-glow transition-all duration-300">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Retro synthwave themed game cover art" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_Jg3_wkFMwe8CDHaf0ibPoC5n3eSnAkspAy79AEkxpCGCtzjxSFlZ0mkc7YoyfP7E8guvR9kmnc4COdVTjEh4B6XLr3mjPQJxBkvx2GTIw1pjIqOTpmaMp98In1rN_eP6mZCnmpVC3L14iSvqtpGbtrMeex6Ty5OquW9mqkRdIpv_hlQHdAQx5LSkcFJ0TX1-8N4y9OKUALkTQPqDp26qsEgZQ3r7id3kk3PniearLLjldkSuTDO4gLu5lDo6lPdnxptvtDSsC_5z"/>
<div class="absolute top-3 right-3 bg-accent-blue/90 text-black font-bold text-xs px-2 py-1 rounded">HOT</div>
</div>
<h4 class="font-bold text-white group-hover:text-primary transition-colors">Neon Velocity</h4>
<div class="flex items-center justify-between mt-1">
<p class="text-sm text-white/50">Racing / Sports</p>
<span class="text-sm font-bold">$29.99</span>
</div>
</div>
<!-- Game Card -->
<div class="group cursor-pointer">
<div class="relative aspect-[3/4] rounded-xl overflow-hidden mb-4 border border-white/5 card-glow transition-all duration-300">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Epic dark fantasy video game cover art" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBYaNX0H-3vo9vcZl9WlJDnwt0oFfSrTcUsQRwwMYxyMXptYw0UA89HnlSSK-W7r9y_jcE8Uv5mo47Cdaui3pC5a37ls38z2V4Yo9a-bBZVKxt0hpvbvJwYrYg1ygZevtJkcYiKlzTdMtxNJO16Kv768rpLVkpWYOC_iH6ZQN-bRbPYqC5sXM1tu8vLkQRWxy419jhxgOI5XS-4sw0wWAMi9lxXj9O3WlcSw_WAhnBoF9MZBkEtu1dE_9Gh8yw4UWFDqFp88_vJa6Hp"/>
</div>
<h4 class="font-bold text-white group-hover:text-primary transition-colors">Shadow Protocol</h4>
<div class="flex items-center justify-between mt-1">
<p class="text-sm text-white/50">Stealth Action</p>
<span class="text-sm font-bold">$44.99</span>
</div>
</div>
<!-- Game Card -->
<div class="group cursor-pointer">
<div class="relative aspect-[3/4] rounded-xl overflow-hidden mb-4 border border-white/5 card-glow transition-all duration-300">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Space exploration game cover featuring a nebula" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDTryTpgGe6gVkB958JSVsXbdbUd7DA4F5t5qtpUnO6kRFTcLGCmaAxnJtw8uI29vb2EWHKGCUA2IpcwkF5ZPrdmVJoP65wEg-0MIEs5D3jwND1aIfMdpna9X0Oo8atedLzn6Cd7-a259dc9C7I1UaqC6AXAADbOcusoO60SytGx1nrTkn7NHozn3b8irnM8Cm2WDYStO0HBZQWeGBgPUolNLUvwzh5ezS3B3kAKl9SFK5aGUjDJlS-tiexhAGJVBMWuBTNFFhKA9Zl"/>
</div>
<h4 class="font-bold text-white group-hover:text-primary transition-colors">Starfield Reach</h4>
<div class="flex items-center justify-between mt-1">
<p class="text-sm text-white/50">Simulation / Sci-fi</p>
<span class="text-sm font-bold text-primary">$59.99</span>
</div>
</div>
<!-- Game Card -->
<div class="group cursor-pointer">
<div class="relative aspect-[3/4] rounded-xl overflow-hidden mb-4 border border-white/5 card-glow transition-all duration-300">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Medieval fantasy forest landscape game art" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCyZd1gi2Ty2RMwnDQpwLoVAqkwJ3asAUul-DoJUAwwmSwOCFX9P90rh0Nvj7U03bUEAZvWyemM9T59-pKBGk1KKk3ZJb8gYyS_eXNrXRdPbH2e0yUGVyrWgd3TJzC7_rkWJGhsdxY_O9AqyK-GT23hfcucg3noKkeAYQZXZPIOooatR8ouZMeIjz3RFQvl1Si4xwW9g-XfmwxA3Zgb6BKzu0nh9PhjECtoM1XcwzZjwSxSfCDu8e5IyQZAfE3GJBlH0op7z6nZddAG"/>
</div>
<h4 class="font-bold text-white group-hover:text-primary transition-colors">Elderwood Tales</h4>
<div class="flex items-center justify-between mt-1">
<p class="text-sm text-white/50">RPG / Adventure</p>
<span class="text-sm font-bold">$39.99</span>
</div>
</div>
<!-- Game Card -->
<div class="group cursor-pointer">
<div class="relative aspect-[3/4] rounded-xl overflow-hidden mb-4 border border-white/5 card-glow transition-all duration-300">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Cyberpunk character profile game art" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDRYhpwYRtTcT-JaHkMJKAULsUgZPvKgmiW4orr0C1CrIGpeFWqfrHUzp9ymNiX_RW8cu_DMUZh8gYRzDQs_bTskQXBrXDznrXRy6jawApTag-uv8acKGoZnwpY678hT8ebWzEo3jPA-AgU-N1pJPQTKKisaQa7FIHQ3lhB7YbriRy2iz2XinRsMjUYorGJtbdt18lkEwcbAqc2OQzgUE_CuNeQsfwbG3UU5zLNjd8natkFNhUbG9cJqPPAGF9UGLsmE3e2DEBBe6oP"/>
</div>
<h4 class="font-bold text-white group-hover:text-primary transition-colors">Circuit Breaker</h4>
<div class="flex items-center justify-between mt-1">
<p class="text-sm text-white/50">Indie / Roguelike</p>
<span class="text-sm font-bold">$19.99</span>
</div>
</div>
<!-- Game Card -->
<div class="group cursor-pointer">
<div class="relative aspect-[3/4] rounded-xl overflow-hidden mb-4 border border-white/5 card-glow transition-all duration-300">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Techno-abstract video game visual" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB3aUwHm2HvHDgnzkhgL-cpl1lauBJFUSUWcA_dVlFAXFFlFp2YiRdrDDTNguUz4kSDRA4BJ8uY2VUVfp-MntIgLQurBajX-oQfrDrk7ry0XzD99BqM3THjY_8NHtqwGr-5yzIpYWz81hXbYq4nFiDcXAWzAkPqPTlA_bbqCsGpJbMaLJEXSeHEiHIXNQo-1tfVSDTNZPL391wPY_7ZrDZ_G2DumFuXg8KZmKVXUNp6QCOpS_wP_9YFQlHnjoc1tT_mom4g-3772aXp"/>
</div>
<h4 class="font-bold text-white group-hover:text-primary transition-colors">Void Runners</h4>
<div class="flex items-center justify-between mt-1">
<p class="text-sm text-white/50">FPS / Multiplayer</p>
<span class="text-sm font-bold">$49.99</span>
</div>
</div>
</div>
</section>
<!-- Special Offers Section -->
<section class="bg-primary/5 rounded-2xl p-8 border border-primary/20">
<div class="flex items-center justify-between mb-8">
<div class="flex items-center gap-4">
<h3 class="text-2xl font-bold tracking-tight uppercase italic border-l-4 border-accent-blue pl-4">Special Offers</h3>
<span class="bg-primary text-white text-[10px] px-2 py-0.5 rounded-full font-bold uppercase">Mega Sale Live</span>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Offer Card Large -->
<div class="flex bg-neutral-dark rounded-xl overflow-hidden border border-white/5 hover:border-primary/50 transition-all group">
<div class="w-2/5 relative">
<img class="w-full h-full object-cover" data-alt="Urban neon warfare game character" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC1YcynhgWWcPc2NdBfxAXTbEg5EvoqyslJiw8RcybLLYd5dP8XAetBePMl1pnWTSB0qwe-nD4OfShKAQVxyIq04s7MDJfVNHD8KXlt9DREBsy5oXbIT_d_2tKicC-cyuRQMYWoqKyvDSzNufR9hkOaPpJjPWzqOJL3x8wzEi0k9xCBPjB9E0w_SX9PeidnqHSv00Xc6PbjI23I4d2Oqt44bOnEVA7FxN_X7G5M_CB4Dimg-DP27FZcB6WErD9Wz7khcEW-f_suTP0W"/>
<div class="absolute bottom-0 left-0 right-0 bg-primary py-1 text-center font-bold text-xs uppercase tracking-widest">-75%</div>
</div>
<div class="w-3/5 p-6 flex flex-col justify-between">
<div>
<h4 class="text-lg font-bold leading-tight mb-2">Apex Legends: Legacy Pack</h4>
<p class="text-xs text-white/50 line-clamp-2">Exclusive skins, 1000 Apex Coins and character unlocks for the new season.</p>
</div>
<div class="flex items-end justify-between mt-4">
<div class="flex flex-col">
<span class="text-xs text-white/40 line-through">$40.00</span>
<span class="text-xl font-bold text-primary">$10.00</span>
</div>
<button class="size-10 bg-white/5 rounded-lg flex items-center justify-center hover:bg-primary transition-colors text-white">
<span class="material-symbols-outlined">add_shopping_cart</span>
</button>
</div>
</div>
</div>
<!-- Offer Card Large -->
<div class="flex bg-neutral-dark rounded-xl overflow-hidden border border-white/5 hover:border-primary/50 transition-all group">
<div class="w-2/5 relative">
<img class="w-full h-full object-cover" data-alt="Mystical warrior game character" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC9pwjF5f1zcuyq2TDeVbVxVql4kxfZOtZVuJuu8i_0KT_8hIGSn23AisNUXBWJWQsjkadxRYDCgEJmaYJhNMuldegwafXDPJKWylRKJ_6x1cOBIlDZWkqhj92vGCY7yD2VM_g5jtqU20-JxOPS1-c-Su5qhrpBLthTID9HxPKJD2x80D8Uu5f0taWciGMvxNgiEa5RtVO4d_mj6oFR4qIfW0p_bsd3DNA-Tc5vg92LvoOvwjTc5wC8IvuhzmJ3o7BDl4bzAvb40Ac8"/>
<div class="absolute bottom-0 left-0 right-0 bg-primary py-1 text-center font-bold text-xs uppercase tracking-widest">-50%</div>
</div>
<div class="w-3/5 p-6 flex flex-col justify-between">
<div>
<h4 class="text-lg font-bold leading-tight mb-2">Eternal Blades HD</h4>
<p class="text-xs text-white/50 line-clamp-2">The remastered classic including all DLC and improved textures.</p>
</div>
<div class="flex items-end justify-between mt-4">
<div class="flex flex-col">
<span class="text-xs text-white/40 line-through">$59.99</span>
<span class="text-xl font-bold text-primary">$29.99</span>
</div>
<button class="size-10 bg-white/5 rounded-lg flex items-center justify-center hover:bg-primary transition-colors text-white">
<span class="material-symbols-outlined">add_shopping_cart</span>
</button>
</div>
</div>
</div>
<!-- Offer Card Large -->
<div class="flex bg-neutral-dark rounded-xl overflow-hidden border border-white/5 hover:border-primary/50 transition-all group">
<div class="w-2/5 relative">
<img class="w-full h-full object-cover" data-alt="Futuristic mech suit combat game" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBTwsk3Nhr5E0EHypTzYV2vZ1YkseXQDqyDrmThGIgpPR3J3MB8BF1NRZTZT8iex73ZLWnnVo1ZrTbpfeeCOKWZjEfVNz8Y4UUdCB_Jfnmsht4uAbPtpFnKWCpMMrSEy6GAx82DMMvaLQWnsl0BfM5qCWLSLyt2jX8yB164v8Avsj9ujonsWPhqcqza3mTrUtAgG4hlMIgY9HQDMIh55HrOxTIjdm-DGg_PC64u_HsQt7zYatoFcLPjnF8Ykj2OA4SFU-2MopEe2LNy"/>
<div class="absolute bottom-0 left-0 right-0 bg-primary py-1 text-center font-bold text-xs uppercase tracking-widest">-30%</div>
</div>
<div class="w-3/5 p-6 flex flex-col justify-between">
<div>
<h4 class="text-lg font-bold leading-tight mb-2">Mech Battalion</h4>
<p class="text-xs text-white/50 line-clamp-2">Heavy metal warfare in a destructible environment.</p>
</div>
<div class="flex items-end justify-between mt-4">
<div class="flex flex-col">
<span class="text-xs text-white/40 line-through">$34.99</span>
<span class="text-xl font-bold text-primary">$24.49</span>
</div>
<button class="size-10 bg-white/5 rounded-lg flex items-center justify-center hover:bg-primary transition-colors text-white">
<span class="material-symbols-outlined">add_shopping_cart</span>
</button>
</div>
</div>
</div>
</div>
</section>
<!-- New Releases Section -->
<section>
<div class="flex items-center justify-between mb-8">
<div class="flex items-center gap-4">
<h3 class="text-2xl font-bold tracking-tight uppercase italic border-l-4 border-white pl-4">New Releases</h3>
<a class="text-sm font-bold text-primary hover:underline uppercase tracking-tighter" href="#">View All</a>
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
<div class="flex gap-4 group cursor-pointer hover:bg-white/5 p-3 rounded-xl transition-colors">
<div class="w-24 aspect-[3/4] rounded-lg overflow-hidden flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="Minimalist pixel art game cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCEnU9sbwyA7mNPmYi0WCVidbrLc6TsshSmMevXFNgMs8yFZx_sxSdwZylat2TRkRh9jGt0Ss55X0U7elTgF4qo5KEqqYKLnz41FiuxnGV4RtCNWkO7s6ZS3P7kTiwE9UVvSFLnQ8FbL45hlrLXzMMu5Mx_vnZ7wh8EjfwkGLRi3hi5iPF8jkP1_jxZadQ8EUIErvXL1KjrSmp_uwIyVAvexarl7MJxH5KIlDFbMEblAMOyGBf_syLIY8RmXLRW7E4p9Vfes1x4IfDp"/>
</div>
<div class="flex flex-col justify-center">
<h5 class="font-bold text-white group-hover:text-primary transition-colors">Pixel Quest Remastered</h5>
<p class="text-xs text-white/50 mb-2">Released 2 days ago</p>
<span class="text-sm font-bold">$14.99</span>
</div>
</div>
<div class="flex gap-4 group cursor-pointer hover:bg-white/5 p-3 rounded-xl transition-colors">
<div class="w-24 aspect-[3/4] rounded-lg overflow-hidden flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="High-octane racing game thumbnail" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBgl7-MnWYMelUMoSMH3a-H8vUFzXtFjqsjskXLUdhEd7FqbyieVddL6zx9qoIrCnV5bzgN5S3i-Md1Ftm3vOdlA1kAWvQrTq3uzOFuXU0Ari3SFc0YocKyoU9GKcPeyMJ71i5SxohXvOJwb2fONW01R2By8ucFSoGwrxSWvBhgPXAbo24oncYRur7japnC1Ztt3_dRfpw3QMpopAZQVzQ_xtvQhdd9jnxTOhDbimrqkhxx0C2JmzyhyYSFAIm89wh-Pxc3IHxGUSqo"/>
</div>
<div class="flex flex-col justify-center">
<h5 class="font-bold text-white group-hover:text-primary transition-colors">Drift Horizon X</h5>
<p class="text-xs text-white/50 mb-2">Released 3 days ago</p>
<span class="text-sm font-bold">$39.99</span>
</div>
</div>
<div class="flex gap-4 group cursor-pointer hover:bg-white/5 p-3 rounded-xl transition-colors">
<div class="w-24 aspect-[3/4] rounded-lg overflow-hidden flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="Horror survival game cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_W3ZeLrEqfZlqeen0qS8VpDxn7Oc6tpm23eiVH1u2bZ6An2ptH1rLPZQu3JbKojX0UQRCz8HZInbKiTTok3zKZozhN7PjZfVq9r4G6jJumBJA6E8w_VEVdcSY7lr1TrvvcOLTrH5lSMYzGnCqvMexWcUcuRcw_j881hbo5CdeqiAkpCHti0LtjPB7MEEmQvUa1CRgXt_QnDB-6TuxhDqUwdhswPpWfJngISCSS67jvW-w0P-M46S_FJh6hiJY47AddDUQ0A1k_TP7"/>
</div>
<div class="flex flex-col justify-center">
<h5 class="font-bold text-white group-hover:text-primary transition-colors">Lost In The Dark</h5>
<p class="text-xs text-white/50 mb-2">Released Yesterday</p>
<span class="text-sm font-bold">$24.99</span>
</div>
</div>
<div class="flex gap-4 group cursor-pointer hover:bg-white/5 p-3 rounded-xl transition-colors">
<div class="w-24 aspect-[3/4] rounded-lg overflow-hidden flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="Cybernetic hand reaching for a glowing orb" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA84H5UXRAFNH0xjU0m39AZ_yWitUVe1Fm4_4JY4Huij4tT_yReYNwonUhi8gObsdZ5dwhxMH-5hAg9sstbGCW-JWwU6MDZUIDFcD9--g276MJI1dLhdDB_anEHn3sz5Ig3O4Cn5_ImCHCMNXvPhl1jDOstHk0o3cAGkFFmF6tOCMEsldGrFJumDZ4aOPr93xx7vayKZdeqm995uM7eR3foM_IxRwe1o-R75IxFwejz9aH60zgyMefXe3nc-uTbONTKesC2ax9IdB5y"/>
</div>
<div class="flex flex-col justify-center">
<h5 class="font-bold text-white group-hover:text-primary transition-colors">Soul Engine</h5>
<p class="text-xs text-white/50 mb-2">Released Today</p>
<span class="text-sm font-bold text-accent-blue">Free to Play</span>
</div>
</div>
</div>
</section>
</div>
</main>
<!-- Footer -->
<footer class="bg-neutral-dark border-t border-white/10 mt-20 py-16 px-6">
<div class="max-w-[1440px] mx-auto grid grid-cols-1 md:grid-cols-4 gap-12">
<div class="space-y-6">
<div class="flex items-center gap-3">
<div class="size-8 bg-primary rounded flex items-center justify-center text-white">
<span class="material-symbols-outlined">videogame_asset</span>
</div>
<h1 class="text-xl font-bold tracking-tight text-white uppercase italic">NeoVault</h1>
</div>
<p class="text-sm text-white/40 leading-relaxed">
                    The ultimate destination for digital gaming. Discover, play, and connect with millions of gamers worldwide on the most advanced gaming platform.
                </p>
<div class="flex gap-4">
<a class="size-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary transition-colors" href="#"><span class="material-symbols-outlined text-lg">public</span></a>
<a class="size-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary transition-colors" href="#"><span class="material-symbols-outlined text-lg">chat</span></a>
<a class="size-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary transition-colors" href="#"><span class="material-symbols-outlined text-lg">share</span></a>
</div>
</div>
<div class="space-y-6">
<h5 class="font-bold uppercase tracking-widest text-white/80">Platform</h5>
<ul class="space-y-3 text-sm text-white/50">
<li><a class="hover:text-primary transition-colors" href="#">Download Launcher</a></li>
<li><a class="hover:text-primary transition-colors" href="#">System Requirements</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Cloud Gaming</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Mobile App</a></li>
</ul>
</div>
<div class="space-y-6">
<h5 class="font-bold uppercase tracking-widest text-white/80">Company</h5>
<ul class="space-y-3 text-sm text-white/50">
<li><a class="hover:text-primary transition-colors" href="#">About Us</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Careers</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Press Kit</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Contact</a></li>
</ul>
</div>
<div class="space-y-6">
<h5 class="font-bold uppercase tracking-widest text-white/80">Legal</h5>
<ul class="space-y-3 text-sm text-white/50">
<li><a class="hover:text-primary transition-colors" href="#">Terms of Service</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Privacy Policy</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Refund Policy</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Cookies</a></li>
</ul>
</div>
</div>
<div class="max-w-[1440px] mx-auto mt-16 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="text-xs text-white/30">© 2024 NeoVault Interactive. All rights reserved. Trademarks are property of their respective owners.</p>
<div class="flex gap-6">
<img class="opacity-30 grayscale hover:grayscale-0 transition-all cursor-help" data-alt="ESRB rating icons" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD04c3Mr54kh3CU0Cl72YLXP3PQjPgmSTX8EMshskUxEjMTnGr7mRerBN7aGHkLA_FqZtgMx0BydYw0ue0ma9ACuO7wuHzSYX2C2zm38jGTAurrv0SHAK7O6_wr91-BcIlbzugZrPl75EXvAgITgO7VJ2qtITdfH22qc469u_PXIzKC1_pMdc1vLL6a-rvvuUYdnl1jkvpB-65Ada_EhM6zDt-RZnf_YMOzgin0U9bO6efYZViRb0p7Mdnd-DsJm4g8Jv1b3xF6OmoB"/>
</div>
</div>
</footer>
</body></html>