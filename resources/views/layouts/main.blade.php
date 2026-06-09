<?php
$config = [
    'company_name' => 'PT. Morton Global',
    'short_name' => 'PT. Morton Global',
    'tagline' => 'Sejahtera',
    'logo' => 'logo-perusahaan.png',
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', $config['company_name']) - Company Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Outfit', 'sans-serif'],
                        'serif': ['Playfair Display', 'serif'],
                    },
                    colors: {
                        'mangrove': {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        },
                        'ocean': {
                            400: '#0ea5e9',
                            500: '#0284c7',
                            600: '#0369a1',
                        },
                        'dark': '#0f172a',
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'slide-up': 'slideUp 0.8s ease-out',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        slideUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .text-gradient {
            background: linear-gradient(135deg, #14532d, #22c55e, #0ea5e9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .glass-dark {
            background: rgba(15, 23, 42, 0.1);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .card-hover {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover:hover {
            transform: translateY(-12px);
            box-shadow: 0 30px 60px rgba(0,0,0,0.15);
        }
        .btn-glow {
            position: relative;
            overflow: hidden;
        }
        .btn-glow::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s;
        }
        .btn-glow:hover::before {
            left: 100%;
        }
        .gradient-text {
            background: linear-gradient(135deg, #0f172a 0%, #14532d 50%, #0284c7 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .smooth-transition {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
    </style>
    @stack('styles')
</head>
<body class="font-sans text-gray-800 antialiased bg-gray-50">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white/80 backdrop-blur-2xl shadow-lg shadow-black/5 z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3 group">
                    @if($config['logo'])
                        <div class="relative">
                            <img src="{{ asset('assets/logo/' . $config['logo']) }}" alt="Logo" class="w-12 h-12 rounded-2xl object-cover shadow-lg group-hover:scale-110 smooth-transition">
                            <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-green-500 rounded-full border-2 border-white"></div>
                        </div>
                    @else
                        <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-mangrove-500 to-mangrove-700 flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                    @endif
                    <div>
                        <h1 class="text-xl font-bold text-gray-900 tracking-tight">{{ $config['short_name'] }}</h1>
                        <p class="text-xs text-mangrove-600 font-medium">{{ $config['tagline'] }}</p>
                    </div>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center gap-2">
                    <a href="{{ route('beranda') }}" class="px-4 py-2 rounded-xl text-sm font-medium {{ Request::is('/') ? 'bg-mangrove-100 text-mangrove-700' : 'text-gray-600 hover:bg-gray-100' }} smooth-transition">
                        <i class="fas fa-home mr-2"></i>Beranda
                    </a>
                    <a href="{{ route('tentang-kami') }}" class="px-4 py-2 rounded-xl text-sm font-medium {{ Request::is('tentang-kami') ? 'bg-mangrove-100 text-mangrove-700' : 'text-gray-600 hover:bg-gray-100' }} smooth-transition">
                        <i class="fas fa-building mr-2"></i>Tentang Kami
                    </a>
                    <a href="{{ route('mangrove') }}" class="px-4 py-2 rounded-xl text-sm font-medium {{ Request::is('mangrove') ? 'bg-mangrove-100 text-mangrove-700' : 'text-gray-600 hover:bg-gray-100' }} smooth-transition">
                        <i class="fas fa-tree mr-2"></i>Mangrove
                    </a>
                    <a href="{{ route('jenis-mangrove') }}" class="px-4 py-2 rounded-xl text-sm font-medium {{ Request::is('jenis-mangrove') ? 'bg-mangrove-100 text-mangrove-700' : 'text-gray-600 hover:bg-gray-100' }} smooth-transition">
                        <i class="fas fa-leaf mr-2"></i>Jenis
                    </a>
                    <a href="{{ route('perawatan') }}" class="px-4 py-2 rounded-xl text-sm font-medium {{ Request::is('perawatan') ? 'bg-mangrove-100 text-mangrove-700' : 'text-gray-600 hover:bg-gray-100' }} smooth-transition">
                        <i class="fas fa-hand-holding-heart mr-2"></i>Perawatan
                    </a>
                    <a href="{{ route('hubungi-kami') }}" class="ml-2 px-6 py-2.5 bg-gradient-to-r from-mangrove-600 to-mangrove-700 text-white text-sm font-semibold rounded-full hover:shadow-lg hover:shadow-mangrove-500/30 btn-glow smooth-transition">
                        <i class="fas fa-phone mr-2"></i>Hubungi Kami
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="lg:hidden p-3 rounded-xl bg-gray-100 hover:bg-gray-200 smooth-transition">
                    <i class="fas fa-bars text-gray-700 text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-100 px-6 py-4 shadow-lg">
            <div class="flex flex-col gap-2">
                <a href="{{ route('beranda') }}" class="px-4 py-3 rounded-xl text-sm font-medium {{ Request::is('/') ? 'bg-mangrove-100 text-mangrove-700' : 'text-gray-600 hover:bg-gray-100' }} smooth-transition">
                    <i class="fas fa-home mr-3"></i>Beranda
                </a>
                <a href="{{ route('tentang-kami') }}" class="px-4 py-3 rounded-xl text-sm font-medium {{ Request::is('tentang-kami') ? 'bg-mangrove-100 text-mangrove-700' : 'text-gray-600 hover:bg-gray-100' }} smooth-transition">
                    <i class="fas fa-building mr-3"></i>Tentang Kami
                </a>
                <a href="{{ route('mangrove') }}" class="px-4 py-3 rounded-xl text-sm font-medium {{ Request::is('mangrove') ? 'bg-mangrove-100 text-mangrove-700' : 'text-gray-600 hover:bg-gray-100' }} smooth-transition">
                    <i class="fas fa-tree mr-3"></i>Mangrove
                </a>
                <a href="{{ route('jenis-mangrove') }}" class="px-4 py-3 rounded-xl text-sm font-medium {{ Request::is('jenis-mangrove') ? 'bg-mangrove-100 text-mangrove-700' : 'text-gray-600 hover:bg-gray-100' }} smooth-transition">
                    <i class="fas fa-leaf mr-3"></i>Jenis Mangrove
                </a>
                <a href="{{ route('perawatan') }}" class="px-4 py-3 rounded-xl text-sm font-medium {{ Request::is('perawatan') ? 'bg-mangrove-100 text-mangrove-700' : 'text-gray-600 hover:bg-gray-100' }} smooth-transition">
                    <i class="fas fa-hand-holding-heart mr-3"></i>Perawatan
                </a>
                <a href="{{ route('hubungi-kami') }}" class="mt-2 px-4 py-3 bg-gradient-to-r from-mangrove-600 to-mangrove-700 text-white text-sm font-semibold rounded-xl text-center">
                    <i class="fas fa-phone mr-2"></i>Hubungi Kami
                </a>
            </div>
        </div>
    </nav>

    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-mangrove-500 via-ocean-500 to-mangrove-500"></div>
        <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        
        <div class="max-w-7xl mx-auto px-6 py-16 relative z-10">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-3 mb-6">
                        @if($config['logo'])
                            <img src="{{ asset('assets/logo/' . $config['logo']) }}" alt="Logo" class="w-12 h-12 rounded-2xl object-cover">
                        @else
                            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-mangrove-500 to-mangrove-700 flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                            </div>
                        @endif
                        <div>
                            <h3 class="text-lg font-bold">{{ $config['company_name'] }}</h3>
                            <p class="text-xs text-mangrove-400">{{ $config['tagline'] }}</p>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">Mitra terpercaya dalam pelestarian dan pengembangan ekosistem mangrove Indonesia untuk generasi mendatang.</p>
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center hover:bg-mangrove-600 smooth-transition">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center hover:bg-mangrove-600 smooth-transition">
                            <i class="fab fa-facebook-f text-lg"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center hover:bg-mangrove-600 smooth-transition">
                            <i class="fab fa-linkedin-in text-lg"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="font-bold mb-6 flex items-center gap-2">
                        <i class="fas fa-compass text-mangrove-500"></i>
                        Menu
                    </h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('beranda') }}" class="text-gray-400 hover:text-white smooth-transition text-sm flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-mangrove-500"></i> Beranda</a></li>
                        <li><a href="{{ route('tentang-kami') }}" class="text-gray-400 hover:text-white smooth-transition text-sm flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-mangrove-500"></i> Tentang Kami</a></li>
                        <li><a href="{{ route('mangrove') }}" class="text-gray-400 hover:text-white smooth-transition text-sm flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-mangrove-500"></i> Mangrove</a></li>
                        <li><a href="{{ route('jenis-mangrove') }}" class="text-gray-400 hover:text-white smooth-transition text-sm flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-mangrove-500"></i> Jenis Mangrove</a></li>
                        <li><a href="{{ route('perawatan') }}" class="text-gray-400 hover:text-white smooth-transition text-sm flex items-center gap-2"><i class="fas fa-chevron-right text-xs text-mangrove-500"></i> Perawatan</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-6 flex items-center gap-2">
                        <i class="fas fa-envelope text-mangrove-500"></i>
                        Kontak
                    </h4>
                    <ul class="space-y-4 text-gray-400 text-sm">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-map-marker-alt mt-1 text-mangrove-500"></i>
                            <span>Dusun Nambi, RT 15, RW 07, Desa Karangrejo, Kecamatan Manyar, Kabupaten Gresik</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-phone text-mangrove-500"></i>
                            <span>(+62) 815 5378 5280</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-envelope text-mangrove-500"></i>
                            <span>ptmgs2476@gmail.com</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-6 flex items-center gap-2">
                        <i class="fas fa-newspaper text-mangrove-500"></i>
                        Newsletter
                    </h4>
                    <p class="text-gray-400 text-sm mb-4">Dapatkan update terbaru tentang konservasi mangrove.</p>
                    @if (session('success'))
                        <div class="bg-green-800/50 border border-green-600 text-green-200 px-4 py-3 rounded-xl mb-4 text-sm flex items-center gap-2">
                            <i class="fas fa-check-circle"></i>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('newsletter.berlangganan') }}" class="flex gap-2">
                        @csrf
                        <input type="email" name="email" placeholder="Email Anda" class="flex-1 px-4 py-3 bg-white/10 rounded-xl border border-white/20 text-white text-sm focus:outline-none focus:border-mangrove-500 @error('email') border-red-400 @enderror">
                        <button type="submit" class="px-4 py-3 bg-mangrove-600 rounded-xl hover:bg-mangrove-700 smooth-transition">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                    @error('email') <p class="text-red-400 text-xs mt-2">{{ $message }}</p> @enderror
                </div>
            </div>
            <div class="border-t border-white/10 pt-8 text-center">
                <p class="text-gray-400 text-sm">© {{ date('Y') }} <span class="text-white font-semibold">PT Morton Global Sejahtera</span>. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
    @stack('scripts')
</body>
</html>