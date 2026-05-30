<?php
$config = [
    'company_name' => 'PT. Morton Global',
    'short_name' => 'PT. Morton Global',
    'tagline' => 'Sejahtera',
    'logo' => 'logo-perusahaan.png',
];
?>
@extends('layouts.main')

@section('title', 'Jenis Mangrove - ' . $config['company_name'])

@push('styles')
<style>
    .lightbox { display: none; position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.95); justify-content: center; align-items: center; }
    .lightbox.active { display: flex; }
    .lightbox-content { max-width: 90%; max-height: 90vh; border-radius: 16px; box-shadow: 0 30px 60px rgba(0,0,0,0.5); }
    .lightbox-close { position: fixed; top: 24px; right: 24px; width: 48px; height: 48px; background: rgba(255,255,255,0.15); backdrop-filter: blur(8px); border: none; border-radius: 50%; color: white; font-size: 22px; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease; z-index: 10000; }
    .lightbox-close:hover { background: rgba(255,255,255,0.3); transform: scale(1.1); }
</style>
@endpush

@push('scripts')
<script>
    function openLightbox(src) {
        var img = document.getElementById('lightbox-img');
        var lb = document.getElementById('lightbox');
        if (!img || !lb) return;
        img.src = src;
        img.style.display = 'block';
        lb.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }
    function closeLightbox(event) {
        if (event) event.stopPropagation();
        var img = document.getElementById('lightbox-img');
        var lb = document.getElementById('lightbox');
        if (!img || !lb) return;
        img.style.display = 'none';
        img.src = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';
        lb.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
    document.onkeydown = function(evt) { if (evt.key === 'Escape') closeLightbox(); };
</script>
@endpush

@section('content')
<!-- Header Section -->
<section class="pt-32 pb-16 bg-gradient-to-br from-mangrove-50 via-white to-ocean-50">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-mangrove-100 rounded-full mb-6">
            <i class="fas fa-leaf text-mangrove-600"></i>
            <span class="text-sm font-medium text-mangrove-700">Kekayaan Hayati</span>
        </div>
        <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Jenis-Jenis <span class="text-gradient">Pohon Mangrove</span></h1>
        <p class="text-gray-600 max-w-2xl mx-auto text-lg">Indonesia memiliki berbagai jenis mangrove yang tersebar di seluruh kepulauan. Berikut adalah beberapa jenis mangrove yang paling umum ditemukan.</p>
    </div>
</section>

<!-- Main Content -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Jenis 1 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg card-hover group">
                <div class="relative h-56 overflow-hidden">
                    <img src="{{ asset('assets/mangrove/mangrove-merah.png') }}" alt="Mangrove Merah" class="w-full h-full object-cover transform group-hover:scale-125 smooth-transition duration-500 cursor-pointer" onclick="openLightbox('{{ asset('assets/mangrove/mangrove-merah.png') }}')">
                    <div class="absolute top-4 right-4 w-10 h-10 bg-white/90 backdrop-blur rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 smooth-transition">
                        <i class="fas fa-expand text-gray-700"></i>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="px-3 py-1 bg-gradient-to-r from-mangrove-500 to-mangrove-600 text-white text-xs font-semibold rounded-full">True Mangrove</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Mangrove Merah</h3>
                    <p class="text-sm text-mangrove-600 font-medium mb-4">Rhizophora mucronata</p>
                    <p class="text-gray-600 text-sm leading-relaxed">Ciri khasnya memiliki akar tunjal (stilt roots) yang tumbuh dari batang dan melengkung ke bawah. Daunnya elliptis dengan ujung meruncing.</p>
                </div>
            </div>

            <!-- Jenis 2 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg card-hover group">
                <div class="relative h-56 overflow-hidden">
                    <img src="{{ asset('assets/mangrove/mangrove-putih.png') }}" alt="Mangrove Putih" class="w-full h-full object-cover transform group-hover:scale-125 smooth-transition duration-500 cursor-pointer" onclick="openLightbox('{{ asset('assets/mangrove/mangrove-putih.png') }}')">
                    <div class="absolute top-4 right-4 w-10 h-10 bg-white/90 backdrop-blur rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 smooth-transition">
                        <i class="fas fa-expand text-gray-700"></i>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="px-3 py-1 bg-gradient-to-r from-green-500 to-green-600 text-white text-xs font-semibold rounded-full">True Mangrove</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Mangrove Putih</h3>
                    <p class="text-sm text-green-600 font-medium mb-4">Bruguiera gymnorrhiza</p>
                    <p class="text-gray-600 text-sm leading-relaxed">Memiliki akar lutut (knee roots) yang muncul dari permukaan lumpur. Daunnya lebih besar dan tebal dengan warna hijau tua.</p>
                </div>
            </div>

            <!-- Jenis 3 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg card-hover group">
                <div class="relative h-56 overflow-hidden">
                    <img src="{{ asset('assets/mangrove/mangrove-bua.png') }}" alt="Mangrove Bua" class="w-full h-full object-cover transform group-hover:scale-125 smooth-transition duration-500 cursor-pointer" onclick="openLightbox('{{ asset('assets/mangrove/mangrove-bua.png') }}')">
                    <div class="absolute top-4 right-4 w-10 h-10 bg-white/90 backdrop-blur rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 smooth-transition">
                        <i class="fas fa-expand text-gray-700"></i>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="px-3 py-1 bg-gradient-to-r from-ocean-500 to-ocean-600 text-white text-xs font-semibold rounded-full">True Mangrove</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Mangrove Bua / Pidada</h3>
                    <p class="text-sm text-ocean-600 font-medium mb-4">Sonneratia alba</p>
                    <p class="text-gray-600 text-sm leading-relaxed">Berbuah seperti apel kecil. Akarnya berbentuk pionemat (akar napas) yang pendek dan tajam. Sering ditemukan di hutan mangrove muda.</p>
                </div>
            </div>

            <!-- Jenis 4 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg card-hover group">
                <div class="relative h-56 overflow-hidden">
                    <img src="{{ asset('assets/mangrove/mangrove-hitam.png') }}" alt="Mangrove Hitam" class="w-full h-full object-cover transform group-hover:scale-125 smooth-transition duration-500 cursor-pointer" onclick="openLightbox('{{ asset('assets/mangrove/mangrove-hitam.png') }}')">
                    <div class="absolute top-4 right-4 w-10 h-10 bg-white/90 backdrop-blur rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 smooth-transition">
                        <i class="fas fa-expand text-gray-700"></i>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="px-3 py-1 bg-gradient-to-r from-gray-600 to-gray-700 text-white text-xs font-semibold rounded-full">True Mangrove</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Mangrove Hitam</h3>
                    <p class="text-sm text-gray-600 font-medium mb-4">Avicennia marina</p>
                    <p class="text-gray-600 text-sm leading-relaxed">Dinamakan hitam karena kulit batangnya yang gelap. Memiliki akar napas (pneumatophora) berbentuk seperti pensil.</p>
                </div>
            </div>

            <!-- Jenis 5 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg card-hover group">
                <div class="relative h-56 overflow-hidden">
                    <img src="{{ asset('assets/mangrove/mangrove-nyamplung.png') }}" alt="Mangrove Nyamplung" class="w-full h-full object-cover transform group-hover:scale-125 smooth-transition duration-500 cursor-pointer" onclick="openLightbox('{{ asset('assets/mangrove/mangrove-nyamplung.png') }}')">
                    <div class="absolute top-4 right-4 w-10 h-10 bg-white/90 backdrop-blur rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 smooth-transition">
                        <i class="fas fa-expand text-gray-700"></i>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="px-3 py-1 bg-gradient-to-r from-amber-500 to-amber-600 text-white text-xs font-semibold rounded-full">True Mangrove</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Mangrove Nyamplung</h3>
                    <p class="text-sm text-amber-600 font-medium mb-4">Xylocarpus granatum</p>
                    <p class="text-gray-600 text-sm leading-relaxed">Pohon besar dengan buah bulat besar yang dapat dimakan. Kayunya keras dan tahan lama untuk bahan bangunan.</p>
                </div>
            </div>

            <!-- Jenis 6 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg card-hover group">
                <div class="relative h-56 overflow-hidden">
                    <img src="{{ asset('assets/mangrove/mangrove-buta.png') }}" alt="Mangrove Buta-buta" class="w-full h-full object-cover transform group-hover:scale-125 smooth-transition duration-500 cursor-pointer" onclick="openLightbox('{{ asset('assets/mangrove/mangrove-buta.png') }}')">
                    <div class="absolute top-4 right-4 w-10 h-10 bg-white/90 backdrop-blur rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 smooth-transition">
                        <i class="fas fa-expand text-gray-700"></i>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="px-3 py-1 bg-gradient-to-r from-teal-500 to-teal-600 text-white text-xs font-semibold rounded-full">True Mangrove</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Mangrove Buta-buta</h3>
                    <p class="text-sm text-teal-600 font-medium mb-4">Excoecaria agallocha</p>
                    <p class="text-gray-600 text-sm leading-relaxed">Pohon atau semak kecil dengan akar napas berbentuk silinder. Daun hijau mengkilap dan buah kapsul bulat merah saat matang.</p>
                </div>
            </div>
        </div>
        
        <!-- CTA -->
        <div class="mt-16 bg-gradient-to-r from-mangrove-600 to-ocean-600 rounded-3xl p-10 text-white relative overflow-hidden">
            <div class="absolute top-0 right-0 w-40 h-40 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-32 h-32 bg-white/5 rounded-full translate-y-1/2 -translate-x-1/2"></div>
            <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="text-center md:text-left">
                    <h3 class="text-2xl font-bold mb-2">Ingin tahu lebih banyak?</h3>
                    <p class="text-green-100">Konsultasikan dengan tim ahli kami untuk identifikasi dan pengelolaan mangrove.</p>
                </div>
                <a href="{{ route('hubungi-kami') }}" class="flex items-center px-8 py-4 bg-white text-gray-900 font-semibold rounded-2xl hover:bg-gray-100 transition shadow-lg hover:shadow-xl smooth-transition group">
                    <i class="fas fa-phone mr-2 group-hover:scale-110 smooth-transition"></i>
                    Hubungi Kami
                </a>
            </div>
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
@endsection
