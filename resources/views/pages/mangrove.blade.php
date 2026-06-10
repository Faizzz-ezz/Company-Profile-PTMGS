<?php
$config = [
    'company_name' => 'PT. Morton Global',
    'short_name' => 'PT. Morton Global',
    'tagline' => 'Sejahtera',
    'logo' => 'logo-perusahaan.png',
];
?>
@extends('layouts.main')

@section('title', 'Mangrove - ' . $config['company_name'])

@section('content')
<!-- Header Section -->
<section class="pt-32 pb-16 bg-gradient-to-br from-mangrove-50 via-white to-ocean-50">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-mangrove-100 rounded-full mb-6">
            <i class="fas fa-tree text-mangrove-600"></i>
            <span class="text-sm font-medium text-mangrove-700">Ekosistem Pesisir</span>
        </div>
        <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Apa Itu <span class="text-gradient">Pohon Mangrove?</span></h1>
        <p class="text-gray-600 max-w-2xl mx-auto text-lg">Mangrove adalah kelompok pohon dan shrubs yang tumbuh di zona pasang surut di wilayah tropis dan subtropis.</p>
    </div>
</section>

<!-- Main Content -->
<section class="py-24 bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-mangrove-50 rounded-full -translate-y-1/2 translate-x-1/2 opacity-40"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-ocean-50 rounded-full translate-y-1/2 -translate-x-1/2 opacity-40"></div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
            <div class="relative">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl group">
                    <img src="{{ asset('assets/mangrove/hero-mangrove.png') }}" alt="Mangrove Forest" class="w-full h-[450px] object-cover transform transition duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 via-transparent to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <span class="inline-block px-5 py-2.5 bg-white/20 backdrop-blur rounded-full text-sm font-semibold text-white">Ekosistem Vital Pesisir Indonesia</span>
                    </div>
                </div>
                <div class="absolute -bottom-6 -right-6 bg-gradient-to-br from-mangrove-500 to-mangrove-600 rounded-2xl p-6 shadow-xl">
                    <div class="text-center text-white">
                        <p class="text-4xl font-bold">70+</p>
                        <p class="text-sm text-green-200">Spesies</p>
                    </div>
                </div>
                <div class="absolute -top-6 -left-6 bg-white rounded-2xl p-4 shadow-xl">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-mangrove-100 rounded-xl flex items-center justify-center">
                            <i class="fas fa-leaf text-mangrove-600"></i>
                        </div>
                        <div>
                            <p class="text-lg font-bold text-gray-900">100%</p>
                            <p class="text-xs text-gray-500">Alamiah</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="space-y-6">
                <div class="flex items-start gap-5 p-6 bg-gray-50 rounded-2xl hover:bg-mangrove-50 smooth-transition border border-gray-100">
                    <div class="w-14 h-14 bg-gradient-to-br from-mangrove-500 to-mangrove-600 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                        <i class="fas fa-book text-white text-xl"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Definisi Mangrove</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">Mangrove berasal dari bahasa Portugis "mangue" yang berarti pohon. Secara ilmiah, mangrove diklasifikasikan dalam beberapa familia botanis, namun semua spesies mangrove memiliki karakteristik adaptasi khusus terhadap lingkungan laut yang ekstrem.</p>
                    </div>
                </div>
                
                <div class="flex items-start gap-5 p-6 bg-gray-50 rounded-2xl hover:bg-ocean-50 smooth-transition border border-gray-100">
                    <div class="w-14 h-14 bg-gradient-to-br from-ocean-500 to-ocean-600 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                        <i class="fas fa-map-marker-alt text-white text-xl"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Habitat Asli</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">Mangrove hidup di daerah pesisir tropis dan subtropis, di area yang terpengaruh oleh pasang surut air laut. Ekosistem ini merupakan tempat pertemuan antara daratan dan lautan.</p>
                    </div>
                </div>
                
                <div class="flex items-start gap-5 p-6 bg-gray-50 rounded-2xl hover:bg-green-50 smooth-transition border border-gray-100">
                    <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                        <i class="fas fa-magic text-white text-xl"></i>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Keunikan Adaptasi</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">Mangrove memiliki kemampuan luar biasa untuk bertahan di air payau, tanah berlumpur, dan kondisi yang menantang lainnya. Beberapa spesies bahkan dapat hidup di air dengan salinity hingga 90 ppt.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Features Grid -->
        <div class="grid md:grid-cols-4 gap-6 mb-20">
            <div class="bg-gradient-to-br from-mangrove-500 to-mangrove-700 rounded-2xl p-6 text-white card-hover group">
                <div class="w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 smooth-transition">
                    <i class="fas fa-tree text-2xl"></i>
                </div>
                <h4 class="text-lg font-bold mb-2">Akar Adaptif</h4>
                <p class="text-green-100 text-sm">Akar napas dan akar tunjal untuk bertahan di lumpur</p>
            </div>
            
            <div class="bg-gradient-to-br from-ocean-500 to-ocean-700 rounded-2xl p-6 text-white card-hover group">
                <div class="w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 smooth-transition">
                    <i class="fas fa-tint text-2xl"></i>
                </div>
                <h4 class="text-lg font-bold mb-2">Toleransi Garam</h4>
                <p class="text-green-100 text-sm">Dapat menyerap dan mengeluarkan garam berlebih</p>
            </div>
            
            <div class="bg-gradient-to-br from-emerald-500 to-emerald-700 rounded-2xl p-6 text-white card-hover group">
                <div class="w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 smooth-transition">
                    <i class="fas fa-seedling text-2xl"></i>
                </div>
                <h4 class="text-lg font-bold mb-2">Perkembangbiakan</h4>
                <p class="text-green-100 text-sm">Viviparous - biji tumbuh sebelum terlepas</p>
            </div>
            
            <div class="bg-gradient-to-br from-teal-500 to-teal-700 rounded-2xl p-6 text-white card-hover group">
                <div class="w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 smooth-transition">
                    <i class="fas fa-wind text-2xl"></i>
                </div>
                <h4 class="text-lg font-bold mb-2">Energi Terbarukan</h4>
                <p class="text-green-100 text-sm">Penyerap karbon 4x lebih banyak dari hutan tropis</p>
            </div>
        </div>
        
        <!-- Fakta Menarik -->
        <div class="bg-gradient-to-r from-mangrove-600 to-ocean-600 rounded-3xl p-10 text-white mb-20 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
            <h4 class="text-2xl font-bold mb-8 flex items-center gap-3">
                <i class="fas fa-lightbulb"></i>
                Fakta Menarik Mangrove
            </h4>
            <div class="grid md:grid-cols-4 gap-6 relative z-10">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center flex-shrink-0">
                        <span class="text-2xl font-bold">1</span>
                    </div>
                    <div>
                        <h5 class="font-bold mb-2">70+ Spesies</h5>
                        <p class="text-green-100 text-sm">Ada lebih dari 70 spesies mangrove di dunia</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center flex-shrink-0">
                        <span class="text-2xl font-bold">2</span>
                    </div>
                    <div>
                        <h5 class="font-bold mb-2">23% Dunia</h5>
                        <p class="text-green-100 text-sm">Indonesia memiliki 23% mangrove dunia</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center flex-shrink-0">
                        <span class="text-2xl font-bold">3</span>
                    </div>
                    <div>
                        <h5 class="font-bold mb-2">90 ppt Salinity</h5>
                        <p class="text-green-100 text-sm">Mangrove dapat hidup di air dengan salinity hingga 90 ppt</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center flex-shrink-0">
                        <span class="text-2xl font-bold">4</span>
                    </div>
                    <div>
                        <h5 class="font-bold mb-2">Filter Air</h5>
                        <p class="text-green-100 text-sm">Akar mangrove berfungsi sebagai filter air laut</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Fungsi Mangrove -->
        <div class="mb-20">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-mangrove-100 rounded-full mb-4">
                    <i class="fas fa-tasks text-mangrove-600"></i>
                    <span class="text-sm font-medium text-mangrove-700">Manfaat Ekosistem</span>
                </div>
                <h3 class="text-3xl font-bold text-gray-900">Fungsi <span class="text-gradient">Mangrove</span></h3>
                <p class="text-gray-500 mt-3">Berbagai fungsi penting hutan mangrove bagi lingkungan dan kehidupan</p>
            </div>
            <div class="grid md:grid-cols-4 gap-6">
                <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 card-hover group text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-mangrove-500 to-mangrove-600 rounded-2xl flex items-center justify-center mx-auto mb-5 group-hover:scale-110 smooth-transition shadow-lg">
                        <i class="fas fa-globe-asia text-white text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 mb-3">Fungsi Ekologis</h4>
                    <ul class="text-sm text-gray-600 space-y-2 text-left">
                        <li class="flex items-start gap-2"><i class="fas fa-check-circle text-mangrove-500 mt-0.5"></i>Habitat biota laut dan darat</li>
                        <li class="flex items-start gap-2"><i class="fas fa-check-circle text-mangrove-500 mt-0.5"></i>Penyerap karbon (blue carbon)</li>
                        <li class="flex items-start gap-2"><i class="fas fa-check-circle text-mangrove-500 mt-0.5"></i>Penghasil oksigen</li>
                        <li class="flex items-start gap-2"><i class="fas fa-check-circle text-mangrove-500 mt-0.5"></i>Daur ulang nutrisi perairan</li>
                    </ul>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 card-hover group text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-ocean-500 to-ocean-600 rounded-2xl flex items-center justify-center mx-auto mb-5 group-hover:scale-110 smooth-transition shadow-lg">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 mb-3">Fungsi Fisik</h4>
                    <ul class="text-sm text-gray-600 space-y-2 text-left">
                        <li class="flex items-start gap-2"><i class="fas fa-check-circle text-ocean-500 mt-0.5"></i>Pelindung pantai dari abrasi</li>
                        <li class="flex items-start gap-2"><i class="fas fa-check-circle text-ocean-500 mt-0.5"></i>Penahan gelombang & tsunami</li>
                        <li class="flex items-start gap-2"><i class="fas fa-check-circle text-ocean-500 mt-0.5"></i>Pencegah intrusi air laut</li>
                        <li class="flex items-start gap-2"><i class="fas fa-check-circle text-ocean-500 mt-0.5"></i>Penjernih air alami</li>
                    </ul>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 card-hover group text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-5 group-hover:scale-110 smooth-transition shadow-lg">
                        <i class="fas fa-coins text-white text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 mb-3">Fungsi Ekonomis</h4>
                    <ul class="text-sm text-gray-600 space-y-2 text-left">
                        <li class="flex items-start gap-2"><i class="fas fa-check-circle text-emerald-500 mt-0.5"></i>Sumber kayu & bahan bangunan</li>
                        <li class="flex items-start gap-2"><i class="fas fa-check-circle text-emerald-500 mt-0.5"></i>Bahan baku industri (tanin)</li>
                        <li class="flex items-start gap-2"><i class="fas fa-check-circle text-emerald-500 mt-0.5"></i>Ekowisata & edukasi</li>
                        <li class="flex items-start gap-2"><i class="fas fa-check-circle text-emerald-500 mt-0.5"></i>Budidaya perikanan (silvofishery)</li>
                    </ul>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 card-hover group text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-teal-600 rounded-2xl flex items-center justify-center mx-auto mb-5 group-hover:scale-110 smooth-transition shadow-lg">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 mb-3">Fungsi Sosial</h4>
                    <ul class="text-sm text-gray-600 space-y-2 text-left">
                        <li class="flex items-start gap-2"><i class="fas fa-check-circle text-teal-500 mt-0.5"></i>Lapangan kerja masyarakat pesisir</li>
                        <li class="flex items-start gap-2"><i class="fas fa-check-circle text-teal-500 mt-0.5"></i>Laboratorium alam & penelitian</li>
                        <li class="flex items-start gap-2"><i class="fas fa-check-circle text-teal-500 mt-0.5"></i>Objek pendidikan lingkungan</li>
                        <li class="flex items-start gap-2"><i class="fas fa-check-circle text-teal-500 mt-0.5"></i>Warisan budaya & kearifan lokal</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Detail Cards -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gray-50 rounded-3xl overflow-hidden shadow-lg card-hover group">
                <div class="grid md:grid-cols-2">
                    <div class="relative h-full min-h-[280px]">
                        <img src="{{ asset('assets/mangrove/akar.png') }}" alt="Mangrove Roots" class="w-full h-full object-cover transform group-hover:scale-110 smooth-transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent to-gray-50"></div>
                    </div>
                    <div class="p-8 flex flex-col justify-center">
                        <span class="inline-block px-3 py-1 bg-mangrove-100 text-mangrove-700 text-xs font-semibold rounded-full mb-4 w-fit">Struktur Akar</span>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Akar Napas (Pneumatophora)</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">Akar yang muncul dari permukaan lumpur berfungsi untuk respirasi. Membantu tanaman mendapatkan oksigen yang dibutuhkan dalam kondisi tanah yang tergenang air.</p>
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-mangrove-100 rounded-xl flex items-center justify-center">
                                <i class="fas fa-check-circle text-mangrove-600"></i>
                            </div>
                            <span class="text-sm font-medium text-gray-700">Vital untuk Survival</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-50 rounded-3xl overflow-hidden shadow-lg card-hover group">
                <div class="grid md:grid-cols-2">
                    <div class="relative h-full min-h-[280px]">
                        <img src="{{ asset('assets/mangrove/pelindung-pantai.png') }}" alt="Pelindung Pantai" class="w-full h-full object-cover transform group-hover:scale-110 smooth-transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent to-gray-50"></div>
                    </div>
                    <div class="p-8 flex flex-col justify-center">
                        <span class="inline-block px-3 py-1 bg-ocean-100 text-ocean-700 text-xs font-semibold rounded-full mb-4 w-fit">Fungsi Ekosistem</span>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Pelindung Pantai Alami</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">Akar mangrove efektif menyerap energi gelombang dan arus, mengurangi erosi pantai, serta melindungi pemukiman pesisir dari bencana alam seperti tsunami.</p>
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-ocean-100 rounded-xl flex items-center justify-center">
                                <i class="fas fa-shield-alt text-ocean-600"></i>
                            </div>
                            <span class="text-sm font-medium text-gray-700">Perlindungan Ekosistem</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection