<?php
$config = [
    'company_name' => 'PT. Morton Global',
    'short_name' => 'PT. Morton Global',
    'tagline' => 'Sejahtera',
    'logo' => 'logo-perusahaan.png',
];
?>
@extends('layouts.main')

@section('title', 'Beranda - ' . $config['company_name'])

@push('styles')
<style>
    .hero-bg {
        background: linear-gradient(180deg, #15803d 0%, #166534 50%, #14532d 100%) !important;
        min-height: 100vh;
    }
    .blob {
        position: absolute;
        border-radius: 50%;
        filter: blur(100px);
        animation: float 8s ease-in-out infinite;
    }
    .blob-1 { width: 600px; height: 600px; background: rgba(34, 197, 94, 0.4); top: -20%; right: -10%; }
    .blob-2 { width: 500px; height: 500px; background: rgba(20, 184, 166, 0.3); bottom: 0%; left: -15%; animation-delay: -4s; }
    .blob-3 { width: 400px; height: 400px; background: rgba(22, 163, 74, 0.3); top: 20%; left: 30%; animation-delay: -2s; }
    .shimmer {
        position: relative;
        overflow: hidden;
    }
    .shimmer::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 50%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        animation: shimmer 3s infinite;
    }
    @keyframes shimmer {
        100% { left: 150%; }
    }
    .hero-title {
        text-shadow: 0 2px 4px rgba(0,0,0,0.4);
    }
    .hero-tagline {
        text-shadow: 0 2px 4px rgba(0,0,0,0.4);
    }
    .hero-desc {
        text-shadow: 0 1px 2px rgba(0,0,0,0.4);
    }
    .lightbox {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.95);
        justify-content: center;
        align-items: center;
        padding: 20px;
    }
    .lightbox.active {
        display: flex;
    }
    .lightbox-content {
        max-width: 90%;
        max-height: 90vh;
        border-radius: 16px;
        box-shadow: 0 30px 60px rgba(0,0,0,0.5);
        object-fit: contain;
    }
    .gallery-img {
        cursor: pointer;
    }
    .lightbox-close { position: fixed; top: 24px; right: 24px; width: 48px; height: 48px; background: rgba(255,255,255,0.15); backdrop-filter: blur(8px); border: none; border-radius: 50%; color: white; font-size: 22px; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease; z-index: 10000; }
    .lightbox-close:hover { background: rgba(255,255,255,0.3); transform: scale(1.1); }

    .modal-overlay {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.7);
        backdrop-filter: blur(4px);
        justify-content: center;
        align-items: center;
        padding: 20px;
    }
    .modal-overlay.active {
        display: flex;
    }
    .modal-box {
        background: white;
        max-width: 700px;
        width: 100%;
        max-height: 90vh;
        border-radius: 24px;
        padding: 40px;
        position: relative;
        box-shadow: 0 30px 80px rgba(0,0,0,0.3);
        overflow-y: auto;
        animation: modalIn 0.3s ease-out;
    }
    @keyframes modalIn {
        from { opacity: 0; transform: scale(0.95) translateY(10px); }
        to { opacity: 1; transform: scale(1) translateY(0); }
    }
    .modal-close-btn {
        position: absolute;
        top: 16px;
        right: 16px;
        width: 40px;
        height: 40px;
        background: #f3f4f6;
        border: none;
        border-radius: 50%;
        color: #374151;
        font-size: 18px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }
    .modal-close-btn:hover {
        background: #e5e7eb;
        transform: rotate(90deg);
    }
    .modal-icon-wrap {
        width: 64px;
        height: 64px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }
    .modal-icon-wrap i {
        font-size: 28px;
        color: white;
    }
    .modal-feature {
        display: flex;
        gap: 14px;
        padding: 14px 18px;
        background: #f9fafb;
        border-radius: 14px;
        transition: all 0.3s ease;
    }
    .modal-feature:hover {
        background: #f0fdf4;
        transform: translateX(4px);
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const galleryImages = [
        '/assets/mangrove/hero-mangrove.png',
        '/assets/mangrove/mangrove-merah.png',
        '/assets/mangrove/mangrove-putih.png',
        '/assets/mangrove/mangrove-hitam.png',
        '/assets/mangrove/mangrove-bua.png',
        '/assets/galeri/1.jpeg',
        '/assets/galeri/2.jpeg',
        '/assets/galeri/3.jpeg'
    ];

    window.openLightbox = function(index) {
        var img = document.getElementById('lightbox-img');
        if(img) {
            img.src = galleryImages[index];
            img.style.display = 'block';
        }
        var lightbox = document.getElementById('lightbox');
        if(lightbox) {
            lightbox.classList.add('active');
        }
        document.body.style.overflow = 'hidden';
    };

    window.closeLightbox = function() {
        var lightbox = document.getElementById('lightbox');
        if(lightbox) {
            lightbox.classList.remove('active');
        }
        var img = document.getElementById('lightbox-img');
        if(img) {
            img.style.display = 'none';
            img.src = '';
        }
        document.body.style.overflow = 'auto';
    };

    document.addEventListener('keydown', function(e) {
        var lightbox = document.getElementById('lightbox');
        if(!lightbox || !lightbox.classList.contains('active')) return;
        if (e.key === 'Escape') window.closeLightbox();
    });

    window.openModal = function(type) {
        var modal = document.getElementById('modal-' + type);
        if (modal) {
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    };

    window.closeModal = function(type) {
        var modal = document.getElementById('modal-' + type);
        if (modal) {
            modal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    };

    window.closeAllModals = function() {
        document.querySelectorAll('.modal-overlay').forEach(function(el) {
            el.classList.remove('active');
        });
        document.body.style.overflow = 'auto';
    };

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            var openModal = document.querySelector('.modal-overlay.active');
            if (openModal) {
                openModal.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        }
    });
});
</script>
@endpush

@section('content')
<!-- Hero Section -->
<section class="relative flex items-center overflow-hidden" style="background: linear-gradient(180deg, #15803d 0%, #166534 50%, #14532d 100%); min-height: 100vh;">
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    <div class="blob blob-3"></div>
    
    <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    
    <div class="relative max-w-7xl mx-auto px-6 py-20 lg:py-32 grid lg:grid-cols-2 gap-12 items-center">
        <div class="text-white space-y-8">
            <div class="inline-flex items-center gap-3 px-5 py-2.5 bg-white/10 backdrop-blur-md rounded-full border border-white/20 shimmer">
                <span class="w-2.5 h-2.5 bg-green-400 rounded-full animate-pulse"></span>
                <span class="text-sm font-medium text-green-100">Konservasi Alam Indonesia</span>
            </div>
            <h1 class="text-5xl lg:text-7xl font-bold leading-tight tracking-tight hero-title">
                <span class="text-white">{{ $config['company_name'] }}</span><br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-300 via-teal-300 to-cyan-300 hero-tagline">{{ $config['tagline'] }}</span>
            </h1>
            <p class="text-lg text-gray-200 max-w-xl leading-relaxed hero-desc">
                Mitra terpercaya dalam pelestarian dan pengembangan ekosistem mangrove Indonesia untuk masa depan yang lebih hijau dan berkelanjutan.
            </p>
            <div class="flex flex-wrap gap-4 pt-4">
                <a href="{{ route('tentang-kami') }}" class="px-8 py-4 bg-white text-gray-900 font-semibold rounded-2xl hover:bg-gray-100 transition shadow-lg hover:shadow-2xl smooth-transition group">
                    <span class="flex items-center">
                        <i class="fas fa-arrow-right mr-2 group-hover:translate-x-1 smooth-transition"></i>
                        Pelajari Lebih Lanjut
                    </span>
                </a>
                <a href="{{ route('hubungi-kami') }}" class="px-8 py-4 bg-white/10 backdrop-blur text-white font-semibold rounded-2xl hover:bg-white/20 transition border border-white/30 smooth-transition">
                    <span class="flex items-center">
                        <i class="fas fa-phone mr-2"></i>
                        Hubungi Kami
                    </span>
                </a>
            </div>
            
            <div class="flex gap-8 pt-6 border-t border-white/20">
                <div>
                    <p class="text-4xl font-bold text-white">500+</p>
                    <p class="text-sm text-gray-300">Tanaman</p>
                </div>
                <div>
                    <p class="text-4xl font-bold text-white">70+</p>
                    <p class="text-sm text-gray-300">Spesies</p>
                </div>
                <div>
                    <p class="text-4xl font-bold text-white">23%</p>
                    <p class="text-sm text-gray-300">Dunia</p>
                </div>
            </div>
        </div>
        
        <div class="relative">
            <div class="relative z-10 glass rounded-3xl p-3 border border-white/20 shadow-2xl">
                <div class="relative rounded-2xl overflow-hidden group">
                    <img src="{{ asset('assets/mangrove/hero-mangrove.png') }}" alt="Mangrove Forest" class="w-full h-80 md:h-96 lg:h-[420px] object-cover transform transition duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/50 via-transparent to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="inline-flex items-center gap-2 px-4 py-2 bg-black/40 backdrop-blur rounded-full text-sm font-medium text-white shadow-lg">
                            <i class="fas fa-tree text-green-400"></i>
                            Ekosistem Vital Indonesia
                        </span>
                    </div>
                </div>
            </div>
            
            <div class="absolute -bottom-5 -left-5 bg-white rounded-2xl p-4 shadow-xl z-20 animate-[float_6s_ease-in-out_infinite]">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-mangrove-500 to-mangrove-600 rounded-xl flex items-center justify-center shadow-lg">
                        <i class="fas fa-leaf text-white text-lg"></i>
                    </div>
                    <div>
                        <p class="text-xl font-bold text-gray-900">70+</p>
                        <p class="text-xs text-gray-500">Spesies</p>
                    </div>
                </div>
            </div>
            
            <div class="absolute -top-4 -right-4 bg-white rounded-2xl p-4 shadow-xl z-20 animate-[float_6s_ease-in-out_infinite_2s]">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-ocean-500 to-ocean-600 rounded-xl flex items-center justify-center shadow-lg">
                        <i class="fas fa-globe-asia text-white text-lg"></i>
                    </div>
                    <div>
                        <p class="text-xl font-bold text-gray-900">23%</p>
                        <p class="text-xs text-gray-500">Dunia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="absolute bottom-0 left-0 w-full">
        <svg class="w-full h-20" viewBox="0 0 1440 80" preserveAspectRatio="none">
            <path fill="white" d="M0,40 C360,80 720,0 1080,40 C1260,60 1380,40 1440,40 L1440,80 L0,80 Z"></path>
        </svg>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 -mt-12 relative z-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
            <div class="bg-white rounded-3xl p-6 md:p-8 shadow-xl border border-gray-100 card-hover text-center group">
                <div class="w-14 h-14 md:w-16 md:h-16 bg-gradient-to-br from-mangrove-100 to-mangrove-200 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 smooth-transition">
                    <i class="fas fa-leaf text-xl md:text-2xl text-mangrove-600"></i>
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-1">70+</h3>
                <p class="text-gray-500 text-xs md:text-sm">Spesies</p>
            </div>
            <div class="bg-white rounded-3xl p-6 md:p-8 shadow-xl border border-gray-100 card-hover text-center group">
                <div class="w-14 h-14 md:w-16 md:h-16 bg-gradient-to-br from-ocean-100 to-ocean-200 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 smooth-transition">
                    <i class="fas fa-globe-americas text-xl md:text-2xl text-ocean-600"></i>
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-1">23%</h3>
                <p class="text-gray-500 text-xs md:text-sm">Dunia</p>
            </div>
            <div class="bg-white rounded-3xl p-6 md:p-8 shadow-xl border border-gray-100 card-hover text-center group">
                <div class="w-14 h-14 md:w-16 md:h-16 bg-gradient-to-br from-green-100 to-green-200 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 smooth-transition">
                    <i class="fas fa-tasks text-xl md:text-2xl text-green-600"></i>
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-1">500+</h3>
                <p class="text-gray-500 text-xs md:text-sm">Proyek</p>
            </div>
            <div class="bg-white rounded-3xl p-6 md:p-8 shadow-xl border border-gray-100 card-hover text-center group">
                <div class="w-14 h-14 md:w-16 md:h-16 bg-gradient-to-br from-teal-100 to-teal-200 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 smooth-transition">
                    <i class="fas fa-wind text-xl md:text-2xl text-teal-600"></i>
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-1">4x</h3>
                <p class="text-gray-500 text-xs md:text-sm">Karbon</p>
            </div>
        </div>
    </div>
</section>

<!-- Layanan Section -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-mangrove-100 rounded-full mb-4">
                <i class="fas fa-star text-mangrove-600"></i>
                <span class="text-sm font-medium text-mangrove-700">Layanan Kami</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Solusi Komprehensif<br><span class="text-gradient">Konservasi Mangrove</span></h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">Kami menawarkan berbagai layanan terkait konservasi dan pengelolaan mangrove dengan pendekatan ilmiah dan berkelanjutan.</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div onclick="openModal('survey')" class="bg-white rounded-3xl p-8 shadow-lg border border-gray-100 card-hover group relative overflow-hidden cursor-pointer">
                <div class="absolute top-0 right-0 w-20 h-20 bg-mangrove-50 rounded-full -translate-y-1/2 translate-x-1/2 group-hover:scale-150 smooth-transition"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-mangrove-500 to-mangrove-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 smooth-transition">
                        <i class="fas fa-clipboard-list text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Survey & Perencanaan</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Survei lokasi, pemetaan topografi, analisis kelayakan, dan penyusunan rencana pengelolaan mangrove terpadu.</p>
                    <div class="mt-6 flex items-center text-mangrove-600 font-medium text-sm group-hover:gap-3 gap-2 smooth-transition">
                        <span>Selengkapnya</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>
            
            <div onclick="openModal('penanaman')" class="bg-white rounded-3xl p-8 shadow-lg border border-gray-100 card-hover group relative overflow-hidden cursor-pointer">
                <div class="absolute top-0 right-0 w-20 h-20 bg-ocean-50 rounded-full -translate-y-1/2 translate-x-1/2 group-hover:scale-150 smooth-transition"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-ocean-500 to-ocean-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 smooth-transition">
                        <i class="fas fa-seedling text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Penanaman Mangrove</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Pelaksanaan penanaman mangrove dengan teknik yang tepat, menggunakan spesies lokal dan perencanaan komprehensif.</p>
                    <div class="mt-6 flex items-center text-ocean-600 font-medium text-sm group-hover:gap-3 gap-2 smooth-transition">
                        <span>Selengkapnya</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>
            
            <div onclick="openModal('monitoring')" class="bg-white rounded-3xl p-8 shadow-lg border border-gray-100 card-hover group relative overflow-hidden cursor-pointer">
                <div class="absolute top-0 right-0 w-20 h-20 bg-teal-50 rounded-full -translate-y-1/2 translate-x-1/2 group-hover:scale-150 smooth-transition"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-teal-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 smooth-transition">
                        <i class="fas fa-chart-line text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Monitoring & Pemeliharaan</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Pemantauan berkala, pemeliharaan, dan evaluasi keberhasilan proyek konservasi mangrove jangka panjang.</p>
                    <div class="mt-6 flex items-center text-teal-600 font-medium text-sm group-hover:gap-3 gap-2 smooth-transition">
                        <span>Selengkapnya</span>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ route('hubungi-kami') }}" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-mangrove-600 to-mangrove-700 text-white font-semibold rounded-2xl hover:shadow-xl hover:shadow-mangrove-500/30 smooth-transition group">
                <i class="fas fa-comments mr-2 group-hover:scale-110 smooth-transition"></i>
                Konsultasi Gratis
            </a>
        </div>
    </div>
</section>

<!-- Gallery Preview -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-ocean-100 rounded-full mb-4">
                <i class="fas fa-images text-ocean-600"></i>
                <span class="text-sm font-medium text-ocean-700">Galeri Mangrove</span>
            </div>
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Keindahan Ekosistem<br><span class="text-gradient">Mangrove Indonesia</span></h2>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="col-span-2 row-span-2 rounded-3xl overflow-hidden card-hover group">
                <img src="{{ asset('assets/mangrove/hero-mangrove.png') }}" alt="Mangrove" class="w-full h-full object-cover transform group-hover:scale-110 smooth-transition duration-500 gallery-img" onclick="openLightbox(0)">
            </div>
            <div class="rounded-3xl overflow-hidden card-hover group">
                <img src="{{ asset('assets/mangrove/mangrove-merah.png') }}" alt="Mangrove Merah" class="w-full h-40 md:h-48 object-cover transform group-hover:scale-110 smooth-transition duration-500 gallery-img" onclick="openLightbox(1)">
            </div>
            <div class="rounded-3xl overflow-hidden card-hover group">
                <img src="{{ asset('assets/mangrove/mangrove-putih.png') }}" alt="Mangrove Putih" class="w-full h-40 md:h-48 object-cover transform group-hover:scale-110 smooth-transition duration-500 gallery-img" onclick="openLightbox(2)">
            </div>
            <div class="rounded-3xl overflow-hidden card-hover group">
                <img src="{{ asset('assets/mangrove/mangrove-hitam.png') }}" alt="Mangrove Hitam" class="w-full h-40 md:h-48 object-cover transform group-hover:scale-110 smooth-transition duration-500 gallery-img" onclick="openLightbox(3)">
            </div>
            <div class="rounded-3xl overflow-hidden card-hover group">
                <img src="{{ asset('assets/mangrove/mangrove-bua.png') }}" alt="Mangrove Bua" class="w-full h-40 md:h-48 object-cover transform group-hover:scale-110 smooth-transition duration-500 gallery-img" onclick="openLightbox(4)">
            </div>
            <div class="rounded-3xl overflow-hidden card-hover group">
                <img src="{{ asset('assets/galeri/1.jpeg') }}" alt="Galeri 1" class="w-full h-40 md:h-48 object-cover transform group-hover:scale-110 smooth-transition duration-500 gallery-img" onclick="openLightbox(5)">
            </div>
            <div class="rounded-3xl overflow-hidden card-hover group">
                <img src="{{ asset('assets/galeri/2.jpeg') }}" alt="Galeri 2" class="w-full h-40 md:h-48 object-cover transform group-hover:scale-110 smooth-transition duration-500 gallery-img" onclick="openLightbox(6)">
            </div>
            <div class="rounded-3xl overflow-hidden card-hover group">
                <img src="{{ asset('assets/galeri/3.jpeg') }}" alt="Galeri 3" class="w-full h-40 md:h-48 object-cover transform group-hover:scale-110 smooth-transition duration-500 gallery-img" onclick="openLightbox(7)">
            </div>
        </div>
        
        @if (count($videos) > 0)
        <div class="mt-12">
            <div class="text-center mb-8">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-ocean-100 rounded-full mb-4">
                    <i class="fas fa-video text-ocean-600"></i>
                    <span class="text-sm font-medium text-ocean-700">Video Mangrove</span>
                </div>
                <h3 class="text-3xl font-bold text-gray-900">Dokumentasi Video</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach ($videos as $video)
                <div class="rounded-3xl overflow-hidden shadow-lg bg-white">
                    <video class="w-full aspect-video object-cover" controls>
                        <source src="{{ asset($video['path']) }}" type="video/{{ pathinfo($video['name'], PATHINFO_EXTENSION) }}">
                    </video>
                    <div class="p-4">
                        <p class="text-gray-700 font-medium truncate">{{ $video['name'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

        <div class="text-center mt-10">
            <a href="{{ route('jenis-mangrove') }}" class="inline-flex items-center px-6 py-3 bg-gray-100 text-gray-700 font-medium rounded-xl hover:bg-gray-200 smooth-transition">
                <i class="fas fa-eye mr-2"></i>
                Lihat Semua Jenis
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-gradient-to-br from-dark via-gray-900 to-dark relative overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-mangrove-500/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-ocean-500/20 rounded-full blur-3xl"></div>
    
    <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
        <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">Mari Bersama<br><span class="text-gradient">Lestarikan Mangrove</span></h2>
        <p class="text-gray-300 text-lg mb-10 max-w-2xl mx-auto">Hubungi kami untuk membahas proyek konservasi mangrove Anda. Tim ahli kami siap membantu.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('hubungi-kami') }}" class="px-8 py-4 bg-white text-gray-900 font-semibold rounded-2xl hover:bg-gray-100 transition shadow-xl hover:shadow-2xl smooth-transition">
                <span class="flex items-center">
                    <i class="fas fa-phone mr-2"></i>
                    Hubungi Kami
                </span>
            </a>
            <a href="{{ route('tentang-kami') }}" class="px-8 py-4 bg-white/10 backdrop-blur text-white font-semibold rounded-2xl hover:bg-white/20 transition border border-white/30 smooth-transition">
                <span class="flex items-center">
                    <i class="fas fa-info-circle mr-2"></i>
                    Tentang Kami
                </span>
            </a>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div id="lightbox" class="lightbox" onclick="closeLightbox(event)">
    <button class="lightbox-close" onclick="event.stopPropagation();closeLightbox(event);" aria-label="Tutup">
        <i class="fas fa-times"></i>
    </button>
    <img id="lightbox-img" class="lightbox-content" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Gambar" onclick="event.stopPropagation();" style="display:none;">
</div>

<!-- Modal Survey & Perencanaan -->
<div id="modal-survey" class="modal-overlay" onclick="if(event.target===this)closeModal('survey')">
    <div class="modal-box">
        <button class="modal-close-btn" onclick="closeModal('survey')" aria-label="Tutup"><i class="fas fa-times"></i></button>
        <div class="modal-icon-wrap" style="background: linear-gradient(135deg, #15803d, #166534);">
            <i class="fas fa-clipboard-list"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-3">Survey & Perencanaan</h3>
        <p class="text-gray-600 mb-6 leading-relaxed">Layanan survey dan perencanaan kami mencakup analisis menyeluruh untuk memastikan keberhasilan proyek konservasi mangrove Anda.</p>
        <div class="space-y-3">
            <div class="modal-feature">
                <div class="w-8 h-8 bg-mangrove-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-map-marked-alt text-mangrove-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Survei Lokasi & Pemetaan</h4><p class="text-sm text-gray-500">Pemetaan topografi detail dan identifikasi karakteristik lahan untuk menentukan kesesuaian area penanaman.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-mangrove-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-flask text-mangrove-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Analisis Kelayakan</h4><p class="text-sm text-gray-500">Studi kelayakan lingkungan dan sosial untuk memastikan proyek berkelanjutan dan berdampak positif.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-mangrove-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-file-alt text-mangrove-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Rencana Pengelolaan</h4><p class="text-sm text-gray-500">Penyusunan dokumen rencana pengelolaan mangrove terpadu yang komprehensif dan adaptif.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-mangrove-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-users text-mangrove-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Pemetaan Partisipatif</h4><p class="text-sm text-gray-500">Melibatkan masyarakat lokal dalam pemetaan dan perencanaan untuk memastikan keberlanjutan proyek.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-mangrove-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-chart-bar text-mangrove-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Studi Dampak Lingkungan</h4><p class="text-sm text-gray-500">Analisis dampak lingkungan (AMDAL) untuk meminimalkan risiko dan memaksimalkan manfaat ekologis.</p></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Penanaman Mangrove -->
<div id="modal-penanaman" class="modal-overlay" onclick="if(event.target===this)closeModal('penanaman')">
    <div class="modal-box">
        <button class="modal-close-btn" onclick="closeModal('penanaman')" aria-label="Tutup"><i class="fas fa-times"></i></button>
        <div class="modal-icon-wrap" style="background: linear-gradient(135deg, #0d9488, #0f766e);">
            <i class="fas fa-seedling"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-3">Penanaman Mangrove</h3>
        <p class="text-gray-600 mb-6 leading-relaxed">Kami melaksanakan penanaman mangrove dengan teknik terbaik dan spesies lokal yang tepat untuk memastikan pertumbuhan optimal.</p>
        <div class="space-y-3">
            <div class="modal-feature">
                <div class="w-8 h-8 bg-ocean-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-leaf text-ocean-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Pemilihan Spesies Lokal</h4><p class="text-sm text-gray-500">Menggunakan spesies mangrove asli yang sesuai dengan karakteristik ekologis lokasi penanaman.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-ocean-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-seedling text-ocean-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Pembibitan & Persiapan Lahan</h4><p class="text-sm text-gray-500">Pembibitan berkualitas tinggi dan persiapan lahan yang matang sebelum pelaksanaan penanaman.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-ocean-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-tools text-ocean-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Teknik Penanaman Tepat</h4><p class="text-sm text-gray-500">Penerapan teknik penanaman yang sesuai dengan kondisi lahan, pasang surut, dan jenis substrat.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-ocean-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-hand-holding-heart text-ocean-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Pelibatan Masyarakat</h4><p class="text-sm text-gray-500">Pelibatan aktif masyarakat lokal dalam proses penanaman untuk membangun rasa kepemilikan dan keberlanjutan.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-ocean-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-ruler-combined text-ocean-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Sistem Jarak Tanam</h4><p class="text-sm text-gray-500">Pengaturan jarak tanam yang optimal berdasarkan jenis spesies dan karakteristik lahan untuk pertumbuhan maksimal.</p></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Monitoring & Pemeliharaan -->
<div id="modal-monitoring" class="modal-overlay" onclick="if(event.target===this)closeModal('monitoring')">
    <div class="modal-box">
        <button class="modal-close-btn" onclick="closeModal('monitoring')" aria-label="Tutup"><i class="fas fa-times"></i></button>
        <div class="modal-icon-wrap" style="background: linear-gradient(135deg, #0d9488, #0f766e);">
            <i class="fas fa-chart-line"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-3">Monitoring & Pemeliharaan</h3>
        <p class="text-gray-600 mb-6 leading-relaxed">Kami menyediakan layanan monitoring dan pemeliharaan berkelanjutan untuk memastikan keberhasilan proyek konservasi mangrove jangka panjang.</p>
        <div class="space-y-3">
            <div class="modal-feature">
                <div class="w-8 h-8 bg-teal-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-search text-teal-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Pemantauan Berkala</h4><p class="text-sm text-gray-500">Pemantauan pertumbuhan dan kesehatan mangrove secara rutin dengan metode ilmiah yang terstandarisasi.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-teal-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-hand-sparkles text-teal-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Perawatan & Penyulaman</h4><p class="text-sm text-gray-500">Perawatan intensif dan penyulaman tanaman yang tidak tumbuh untuk memastikan tingkat keberhasilan tinggi.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-teal-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-clipboard-check text-teal-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Evaluasi Keberhasilan</h4><p class="text-sm text-gray-500">Evaluasi menyeluruh terhadap indikator keberhasilan proyek termasuk tingkat hidup, pertumbuhan, dan dampak ekologis.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-teal-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-file-signature text-teal-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Pelaporan Dampak</h4><p class="text-sm text-gray-500">Penyusunan laporan berkala mengenai dampak lingkungan, sosial, dan ekonomi dari proyek konservasi.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-teal-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-people-arrows text-teal-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Pemberdayaan Masyarakat</h4><p class="text-sm text-gray-500">Pelatihan dan pemberdayaan masyarakat lokal dalam perawatan mangrove untuk keberlanjutan jangka panjang.</p></div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center hero-bg overflow-hidden">
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    <div class="blob blob-3"></div>
    
    <!-- Decorative Elements -->
    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'100\' height=\'100\' viewBox=\'0 0 100 100\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z\' fill=\'%23ffffff\' fill-opacity=\'0.4\' fill-rule=\'evenodd\'/%3E%3C/svg%3E');"></div>
    
    <div class="relative max-w-7xl mx-auto px-6 py-32 grid lg:grid-cols-2 gap-16 items-center">
        <div class="text-white space-y-8 animate-[slideUp_0.8s_ease-out]">
            <div class="inline-flex items-center gap-3 px-5 py-2.5 bg-white/10 backdrop-blur-md rounded-full border border-white/20">
                <span class="w-2.5 h-2.5 bg-green-400 rounded-full animate-pulse"></span>
                <span class="text-sm font-medium text-green-100">Konservasi Alam Indonesia</span>
            </div>
            <h1 class="text-5xl lg:text-7xl font-bold leading-tight tracking-tight">
                {{ $config['company_name'] }}<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-300 via-teal-300 to-cyan-300">{{ $config['tagline'] }}</span>
            </h1>
            <p class="text-lg text-gray-200 max-w-xl leading-relaxed">
                Mitra terpercaya dalam pelestarian dan pengembangan ekosistem mangrove Indonesia untuk masa depan yang lebih hijau dan berkelanjutan.
            </p>
            <div class="flex flex-wrap gap-4 pt-4">
                <a href="{{ route('tentang-kami') }}" class="px-8 py-4 bg-white text-gray-900 font-semibold rounded-2xl hover:bg-gray-100 transition shadow-lg hover:shadow-xl smooth-transition btn-glow">
                    <i class="fas fa-arrow-right mr-2"></i>Pelajari Lebih Lanjut
                </a>
                <a href="{{ route('hubungi-kami') }}" class="px-8 py-4 bg-white/10 backdrop-blur text-white font-semibold rounded-2xl hover:bg-white/20 transition border border-white/30 smooth-transition">
                    <i class="fas fa-phone mr-2"></i>Hubungi Kami
                </a>
            </div>
            
            <!-- Stats -->
            <div class="flex gap-8 pt-6">
                <div>
                    <p class="text-3xl font-bold text-white">500+</p>
                    <p class="text-sm text-gray-300">Tanaman Mangrove</p>
                </div>
                <div>
                    <p class="text-3xl font-bold text-white">70+</p>
                    <p class="text-sm text-gray-300">Spesies</p>
                </div>
                <div>
                    <p class="text-3xl font-bold text-white">23%</p>
                    <p class="text-sm text-gray-300">Mangrove Dunia</p>
                </div>
            </div>
        </div>
        
        <div class="relative animate-[slideUp_0.8s_ease-out_0.2s]">
            <div class="relative z-10 glass rounded-3xl p-3">
                <div class="relative rounded-2xl overflow-hidden">
                    <img src="{{ asset('assets/mangrove/hero-mangrove.png') }}" alt="Mangrove Forest" class="w-full h-[500px] object-cover transform hover:scale-110 smooth-transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur rounded-full text-sm font-medium text-white">Ekosistem Vital Indonesia</span>
                    </div>
                </div>
            </div>
            
            <!-- Floating Cards -->
            <div class="absolute -bottom-8 -left-8 glass rounded-2xl p-5 shadow-2xl animate-[float_6s_ease-in-out_infinite]">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 bg-gradient-to-br from-mangrove-500 to-mangrove-600 rounded-xl flex items-center justify-center shadow-lg">
                        <i class="fas fa-leaf text-white text-xl"></i>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-gray-900">70+</p>
                        <p class="text-sm text-gray-500">Spesies Mangrove</p>
                    </div>
                </div>
            </div>
            
            <div class="absolute -top-8 -right-8 glass rounded-2xl p-5 shadow-2xl animate-[float_6s_ease-in-out_infinite_2s]">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 bg-gradient-to-br from-ocean-500 to-ocean-600 rounded-xl flex items-center justify-center shadow-lg">
                        <i class="fas fa-globe-asia text-white text-xl"></i>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-gray-900">23%</p>
                        <p class="text-sm text-gray-500">Dari Dunia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Wave Separator -->
    <div class="absolute bottom-0 left-0 w-full">
        <svg class="w-full h-24" viewBox="0 0 1440 80" preserveAspectRatio="none">
            <path fill="white" d="M0,40 C360,80 720,0 1080,40 C1260,60 1380,40 1440,40 L1440,80 L0,80 Z"></path>
        </svg>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 -mt-12 relative z-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-6">
            <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 card-hover text-center group">
                <div class="w-16 h-16 bg-gradient-to-br from-mangrove-100 to-mangrove-200 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 smooth-transition">
                    <i class="fas fa-leaf text-2xl text-mangrove-600"></i>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-2">70+</h3>
                <p class="text-gray-500 text-sm">Spesies Mangrove</p>
            </div>
            <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 card-hover text-center group">
                <div class="w-16 h-16 bg-gradient-to-br from-ocean-100 to-ocean-200 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 smooth-transition">
                    <i class="fas fa-globe-americas text-2xl text-ocean-600"></i>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-2">23%</h3>
                <p class="text-gray-500 text-sm">Mangrove Dunia</p>
            </div>
            <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 card-hover text-center group">
                <div class="w-16 h-16 bg-gradient-to-br from-green-100 to-green-200 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 smooth-transition">
                    <i class="fas fa-tasks text-2xl text-green-600"></i>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-2">500+</h3>
                <p class="text-gray-500 text-sm">Proyek Selesai</p>
            </div>
            <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 card-hover text-center group">
                <div class="w-16 h-16 bg-gradient-to-br from-teal-100 to-teal-200 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 smooth-transition">
                    <i class="fas fa-wind text-2xl text-teal-600"></i>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-2">4x</h3>
                <p class="text-gray-500 text-sm">Penyerap Karbon</p>
            </div>
        </div>
    </div>
</section>

<!-- Layanan Section -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-mangrove-100 rounded-full mb-4">
                <i class="fas fa-star text-mangrove-600 text-sm"></i>
                <span class="text-sm font-medium text-mangrove-700">Layanan Kami</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Solusi Komprehensif<br><span class="text-gradient">Konservasi Mangrove</span></h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                {{ $config['company_name'] }} menawarkan berbagai layanan terkait konservasi dan pengelolaan mangrove dengan pendekatan ilmiah dan berkelanjutan.
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div onclick="openModal('survey')" class="bg-white rounded-3xl p-8 shadow-lg border border-gray-100 card-hover group cursor-pointer">
                <div class="w-16 h-16 bg-gradient-to-br from-mangrove-500 to-mangrove-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 smooth-transition">
                    <i class="fas fa-clipboard-list text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Survey & Perencanaan</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Survei lokasi, pemetaan topografi, analisis kelayakan, dan penyusunan rencana pengelolaan mangrove terpadu.
                </p>
                <div class="mt-6 flex items-center text-mangrove-600 font-medium text-sm">
                    <span>Pelajari selengkapnya</span>
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 smooth-transition"></i>
                </div>
            </div>
            
            <div onclick="openModal('penanaman')" class="bg-white rounded-3xl p-8 shadow-lg border border-gray-100 card-hover group cursor-pointer">
                <div class="w-16 h-16 bg-gradient-to-br from-ocean-500 to-ocean-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 smooth-transition">
                    <i class="fas fa-seedling text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Penanaman Mangrove</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Pelaksanaan penanaman mangrove dengan teknik yang tepat, menggunakan spesies lokal dan perencanaan yang komprehensif.
                </p>
                <div class="mt-6 flex items-center text-ocean-600 font-medium text-sm">
                    <span>Pelajari selengkapnya</span>
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 smooth-transition"></i>
                </div>
            </div>
            
            <div onclick="openModal('monitoring')" class="bg-white rounded-3xl p-8 shadow-lg border border-gray-100 card-hover group cursor-pointer">
                <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-teal-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 smooth-transition">
                    <i class="fas fa-chart-line text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Monitoring & Pemeliharaan</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Pemantauan berkala, pemeliharaan, dan evaluasi keberhasilan proyek konservasi mangrove jangka panjang.
                </p>
                <div class="mt-6 flex items-center text-teal-600 font-medium text-sm">
                    <span>Pelajari selengkapnya</span>
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 smooth-transition"></i>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ route('hubungi-kami') }}" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-mangrove-600 to-mangrove-700 text-white font-semibold rounded-2xl hover:shadow-lg hover:shadow-mangrove-500/30 smooth-transition btn-glow">
                <i class="fas fa-comments mr-2"></i>Konsultasi Gratis
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-gradient-to-br from-dark via-gray-900 to-dark relative overflow-hidden">
    <div class="absolute inset-0 opacity-20" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-mangrove-500/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-ocean-500/20 rounded-full blur-3xl"></div>
    
    <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
        <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">Mari Bersama<br><span class="text-gradient">Lestarikan Mangrove</span></h2>
        <p class="text-gray-300 text-lg mb-10 max-w-2xl mx-auto">Hubungi kami untuk membahas proyek konservasi mangrove Anda. Tim ahli kami siap membantu Anda.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('hubungi-kami') }}" class="px-8 py-4 bg-white text-gray-900 font-semibold rounded-2xl hover:bg-gray-100 transition shadow-lg hover:shadow-xl smooth-transition">
                <i class="fas fa-phone mr-2"></i>Hubungi Kami
            </a>
            <a href="{{ route('tentang-kami') }}" class="px-8 py-4 bg-white/10 backdrop-blur text-white font-semibold rounded-2xl hover:bg-white/20 transition border border-white/30 smooth-transition">
                <i class="fas fa-info-circle mr-2"></i>Tentang Kami
            </a>
        </div>
    </div>
</section>

<!-- Modal Survey & Perencanaan -->
<div id="modal-survey" class="modal-overlay" onclick="if(event.target===this)closeModal('survey')">
    <div class="modal-box">
        <button class="modal-close-btn" onclick="closeModal('survey')" aria-label="Tutup"><i class="fas fa-times"></i></button>
        <div class="modal-icon-wrap" style="background: linear-gradient(135deg, #15803d, #166534);">
            <i class="fas fa-clipboard-list"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-3">Survey & Perencanaan</h3>
        <p class="text-gray-600 mb-6 leading-relaxed">Layanan survey dan perencanaan kami mencakup analisis menyeluruh untuk memastikan keberhasilan proyek konservasi mangrove Anda.</p>
        <div class="space-y-3">
            <div class="modal-feature">
                <div class="w-8 h-8 bg-mangrove-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-map-marked-alt text-mangrove-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Survei Lokasi & Pemetaan</h4><p class="text-sm text-gray-500">Pemetaan topografi detail dan identifikasi karakteristik lahan untuk menentukan kesesuaian area penanaman.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-mangrove-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-flask text-mangrove-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Analisis Kelayakan</h4><p class="text-sm text-gray-500">Studi kelayakan lingkungan dan sosial untuk memastikan proyek berkelanjutan dan berdampak positif.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-mangrove-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-file-alt text-mangrove-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Rencana Pengelolaan</h4><p class="text-sm text-gray-500">Penyusunan dokumen rencana pengelolaan mangrove terpadu yang komprehensif dan adaptif.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-mangrove-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-users text-mangrove-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Pemetaan Partisipatif</h4><p class="text-sm text-gray-500">Melibatkan masyarakat lokal dalam pemetaan dan perencanaan untuk memastikan keberlanjutan proyek.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-mangrove-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-chart-bar text-mangrove-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Studi Dampak Lingkungan</h4><p class="text-sm text-gray-500">Analisis dampak lingkungan (AMDAL) untuk meminimalkan risiko dan memaksimalkan manfaat ekologis.</p></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Penanaman Mangrove -->
<div id="modal-penanaman" class="modal-overlay" onclick="if(event.target===this)closeModal('penanaman')">
    <div class="modal-box">
        <button class="modal-close-btn" onclick="closeModal('penanaman')" aria-label="Tutup"><i class="fas fa-times"></i></button>
        <div class="modal-icon-wrap" style="background: linear-gradient(135deg, #0d9488, #0f766e);">
            <i class="fas fa-seedling"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-3">Penanaman Mangrove</h3>
        <p class="text-gray-600 mb-6 leading-relaxed">Kami melaksanakan penanaman mangrove dengan teknik terbaik dan spesies lokal yang tepat untuk memastikan pertumbuhan optimal.</p>
        <div class="space-y-3">
            <div class="modal-feature">
                <div class="w-8 h-8 bg-ocean-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-leaf text-ocean-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Pemilihan Spesies Lokal</h4><p class="text-sm text-gray-500">Menggunakan spesies mangrove asli yang sesuai dengan karakteristik ekologis lokasi penanaman.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-ocean-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-seedling text-ocean-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Pembibitan & Persiapan Lahan</h4><p class="text-sm text-gray-500">Pembibitan berkualitas tinggi dan persiapan lahan yang matang sebelum pelaksanaan penanaman.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-ocean-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-tools text-ocean-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Teknik Penanaman Tepat</h4><p class="text-sm text-gray-500">Penerapan teknik penanaman yang sesuai dengan kondisi lahan, pasang surut, dan jenis substrat.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-ocean-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-hand-holding-heart text-ocean-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Pelibatan Masyarakat</h4><p class="text-sm text-gray-500">Pelibatan aktif masyarakat lokal dalam proses penanaman untuk membangun rasa kepemilikan dan keberlanjutan.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-ocean-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-ruler-combined text-ocean-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Sistem Jarak Tanam</h4><p class="text-sm text-gray-500">Pengaturan jarak tanam yang optimal berdasarkan jenis spesies dan karakteristik lahan untuk pertumbuhan maksimal.</p></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Monitoring & Pemeliharaan -->
<div id="modal-monitoring" class="modal-overlay" onclick="if(event.target===this)closeModal('monitoring')">
    <div class="modal-box">
        <button class="modal-close-btn" onclick="closeModal('monitoring')" aria-label="Tutup"><i class="fas fa-times"></i></button>
        <div class="modal-icon-wrap" style="background: linear-gradient(135deg, #0d9488, #0f766e);">
            <i class="fas fa-chart-line"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-3">Monitoring & Pemeliharaan</h3>
        <p class="text-gray-600 mb-6 leading-relaxed">Kami menyediakan layanan monitoring dan pemeliharaan berkelanjutan untuk memastikan keberhasilan proyek konservasi mangrove jangka panjang.</p>
        <div class="space-y-3">
            <div class="modal-feature">
                <div class="w-8 h-8 bg-teal-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-search text-teal-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Pemantauan Berkala</h4><p class="text-sm text-gray-500">Pemantauan pertumbuhan dan kesehatan mangrove secara rutin dengan metode ilmiah yang terstandarisasi.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-teal-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-hand-sparkles text-teal-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Perawatan & Penyulaman</h4><p class="text-sm text-gray-500">Perawatan intensif dan penyulaman tanaman yang tidak tumbuh untuk memastikan tingkat keberhasilan tinggi.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-teal-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-clipboard-check text-teal-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Evaluasi Keberhasilan</h4><p class="text-sm text-gray-500">Evaluasi menyeluruh terhadap indikator keberhasilan proyek termasuk tingkat hidup, pertumbuhan, dan dampak ekologis.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-teal-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-file-signature text-teal-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Pelaporan Dampak</h4><p class="text-sm text-gray-500">Penyusunan laporan berkala mengenai dampak lingkungan, sosial, dan ekonomi dari proyek konservasi.</p></div>
            </div>
            <div class="modal-feature">
                <div class="w-8 h-8 bg-teal-100 rounded-lg flex items-center justify-center flex-shrink-0"><i class="fas fa-people-arrows text-teal-600"></i></div>
                <div><h4 class="font-semibold text-gray-900">Pemberdayaan Masyarakat</h4><p class="text-sm text-gray-500">Pelatihan dan pemberdayaan masyarakat lokal dalam perawatan mangrove untuk keberlanjutan jangka panjang.</p></div>
            </div>
        </div>
    </div>
</div>
@endsection