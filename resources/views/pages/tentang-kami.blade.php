<?php
$config = [
    'company_name' => 'PT. Morton Global',
    'short_name' => 'PT. Morton Global',
    'tagline' => 'Sejahtera',
    'logo' => 'logo-perusahaan.png',
];
?>
@extends('layouts.main')

@section('title', 'Tentang Kami - ' . $config['company_name'])

@section('content')
<!-- Header Section -->
<section class="pt-32 pb-16 bg-gradient-to-br from-mangrove-50 via-white to-ocean-50">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-mangrove-100 rounded-full mb-6">
            <i class="fas fa-building text-mangrove-600"></i>
            <span class="text-sm font-medium text-mangrove-700">Tentang Kami</span>
        </div>
        <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Membangun Masa Depan<br><span class="text-gradient">Lewat Konservasi Mangrove</span></h1>
        <p class="text-gray-600 max-w-2xl mx-auto text-lg">Kenali lebih jauh tentang komitmen kami dalam melestarikan ekosistem mangrove Indonesia.</p>
    </div>
</section>

<!-- About Section -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="relative">
                <div class="aspect-[4/3] rounded-3xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1540202404-a2f29016b523?w=600&h=450&fit=crop" alt="Team" class="w-full h-full object-cover transform hover:scale-105 smooth-transition duration-500">
                </div>
                <div class="absolute -bottom-6 -right-6 bg-gradient-to-br from-mangrove-500 to-mangrove-600 rounded-2xl p-6 shadow-xl">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center">
                            <p class="text-3xl font-bold text-white">50+</p>
                            <p class="text-sm text-green-200">Proyek Selesai</p>
                        </div>
                        <div class="text-center">
                            <p class="text-3xl font-bold text-white">100+</p>
                            <p class="text-sm text-green-200">Hektare Target</p>
                        </div>
                    </div>
                </div>
                <div class="absolute -top-6 -left-6 w-24 h-24 bg-ocean-100 rounded-2xl flex items-center justify-center shadow-lg">
                    <i class="fas fa-award text-3xl text-ocean-600"></i>
                </div>
            </div>
            <div class="space-y-8">
                <div>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        <strong class="text-gray-900">{{ $config['company_name'] }}</strong> adalah perusahaan yang bergerak di bidang konservasi lingkungan, khususnya ekosistem mangrove. Didirikan dengan visi untuk melestarikan kekayaan alam Indonesia, kami berkomitmen untuk menjadi mitra utama dalam upaya restorasi dan pengelolaan hutan mangrove.
                    </p>
                    <p class="text-gray-600 leading-relaxed mt-4">
                        Kami percaya bahwa mangrove bukan hanya pohon, melainkan ekosistem penting yang melindungi garis pantai, menyimpan karbon, dan menjadi habitat bagi berbagai spesies laut. Melalui pendekatan ilmiah dan berkelanjutan, kami membantu pemerintah, swasta, dan komunitas lokal dalam upaya pelestarian mangrove.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 rounded-2xl p-5 border border-gray-100 card-hover group">
                        <div class="w-12 h-12 bg-gradient-to-br from-ocean-100 to-ocean-200 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 smooth-transition">
                            <i class="fas fa-globe-americas text-xl text-ocean-600"></i>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Ekosistem Pesisir</h4>
                        <p class="text-gray-600 text-sm">Mangrove membentuk ekosistem vital di daerah pesisir yang menghubungkan daratan dengan laut.</p>
                    </div>
                    <div class="bg-gray-50 rounded-2xl p-5 border border-gray-100 card-hover group">
                        <div class="w-12 h-12 bg-gradient-to-br from-mangrove-100 to-mangrove-200 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 smooth-transition">
                            <i class="fas fa-fish text-xl text-mangrove-600"></i>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Habitat Laut</h4>
                        <p class="text-gray-600 text-sm">Menjadi rumah bagi berbagai spesies ikan, udang, kepiting, dan burung laut.</p>
                    </div>
                    <div class="bg-gray-50 rounded-2xl p-5 border border-gray-100 card-hover group">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-100 to-green-200 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 smooth-transition">
                            <i class="fas fa-shield-alt text-xl text-green-600"></i>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Pelindung Pantai</h4>
                        <p class="text-gray-600 text-sm">Akar mangrove menyerap energi gelombang dan mengurangi erosi pantai.</p>
                    </div>
                    <div class="bg-gray-50 rounded-2xl p-5 border border-gray-100 card-hover group">
                        <div class="w-12 h-12 bg-gradient-to-br from-amber-100 to-amber-200 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 smooth-transition">
                            <i class="fas fa-wind text-xl text-amber-600"></i>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Penyerap Karbon</h4>
                        <p class="text-gray-600 text-sm">Mangrove menyimpan karbon 4x lebih banyak dari hutan tropis daratan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Visi Misi Section -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-mangrove-100 rounded-full mb-4">
                <i class="fas fa-bullseye text-mangrove-600"></i>
                <span class="text-sm font-medium text-mangrove-700">Visi & Misi</span>
            </div>
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Komitmen Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Dalam pelestarian ekosistem mangrove Indonesia</p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gradient-to-b from-green-600 to-mangrove-700 rounded-3xl p-8 text-white relative overflow-hidden group">
                <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-eye text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">Visi</h3>
                <p class="text-green-100 leading-relaxed">Menjadi perusahaan dalam bidang pelayanan publik yang kredibel, mampu bersaing secara internasional, dan memiliki keunggulan kompetitif di pasar global, sekaligus menjadi pionir dalam konservasi pohon mangrove, berkontribusi pada kelestarian ekosistem pesisir, mitigasi perubahan iklim, serta pemberdayaan masyarakat lokal melalui program keberlanjutan yang inovatif dan berdampak positif bagi lingkungan.</p>
            </div>
            
            <div class="bg-gradient-to-b from-cyan-600 to-blue-700 rounded-3xl p-8 text-white relative overflow-hidden group">
                <div class="w-16 h-16 bg-white/30 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-check-circle text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">Misi</h3>
                <ul class="text-white/90 space-y-3">
                    <li class="flex items-start gap-3"><i class="fas fa-check mt-1"></i> Beroperasi secara efisien (low cost operation)</li>
                    <li class="flex items-start gap-3"><i class="fas fa-check mt-1"></i> Meningkatkan kesejahteraan karyawan</li>
                    <li class="flex items-start gap-3"><i class="fas fa-check mt-1"></i> Berpartisipasi di dalam upaya meminimalkan jumlah penggangguran di lingkungan perusahaan Kabupaten Gresik Pada Khusunya</li>
                    <li class="flex items-start gap-3"><i class="fas fa-check mt-1"></i> Berkolaborasi dengan pemerintah dan sektor swasta</li>
                    <li class="flex items-start gap-3"><i class="fas fa-check mt-1"></i> Mengembangkan teknologi pemantauan ekosistem mangrove</li>
                    <li class="flex items-start gap-3"><i class="fas fa-check mt-1"></i> Memberdayakan masyarakat lokal dalam pelestarian</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Kerja Sama Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-ocean-100 rounded-full mb-4">
                <i class="fas fa-handshake text-ocean-600"></i>
                <span class="text-sm font-medium text-ocean-700">Kerja Sama</span>
            </div>
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Mitra Strategis</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Kami bekerja sama dengan berbagai pihak untuk mewujudkan pelestarian mangrove Indonesia.</p>
        </div>
        
<div class="flex flex-wrap justify-center items-center gap-8 md:gap-16">
            <div class="w-56 h-56 bg-white rounded-2xl shadow-lg flex items-center justify-center p-4 card-hover">
                <div class="text-center">
                    <img src="{{ asset('assets/logo/LH.png') }}" alt="LH" class="w-36 h-36 object-contain mx-auto mb-2">
                    <p class="text-sm text-gray-700 font-semibold">Lembaga Konservasi Lingkungan Hidup</p>
                </div>
            </div>
            <div class="w-56 h-56 bg-white rounded-2xl shadow-lg flex items-center justify-center p-4 card-hover">
                <div class="text-center">
                    <img src="{{ asset('assets/logo/logo2.png') }}" alt="Logo 2" class="w-36 h-36 object-contain mx-auto mb-2">
                    <p class="text-sm text-gray-700 font-semibold">PT Freeport Indonesia</p>
                </div>
            </div>
            <div class="w-56 h-56 bg-white rounded-2xl shadow-lg flex items-center justify-center p-4 card-hover">
                <div class="text-center">
                    <img src="{{ asset('assets/logo/logo3.png') }}" alt="Logo 3" class="w-36 h-36 object-contain mx-auto mb-2">
                    <p class="text-sm text-gray-700 font-semibold">Badan Riset Urusan Sungai Nusantara</p>
                </div>
            </div>
            <div class="w-56 h-56 bg-white rounded-2xl shadow-lg flex items-center justify-center p-4 card-hover">
                <div class="text-center">
                    <img src="{{ asset('assets/logo/logo4.png') }}" alt="Logo 4" class="w-36 h-36 object-contain mx-auto mb-2">
                    <p class="text-sm text-gray-700 font-semibold">CV Nam Jaya</p>
                </div>
            </div>
            <div class="w-56 h-56 bg-white rounded-2xl shadow-lg flex items-center justify-center p-4 card-hover">
                <div class="text-center">
                    <img src="{{ asset('assets/logo/logo5.png') }}" alt="Logo 4" class="w-36 h-36 object-contain mx-auto mb-2">
                    <p class="text-sm text-gray-700 font-semibold">Jiipe</p>
                </div>
            </div>
            <div class="w-56 h-56 bg-white rounded-2xl shadow-lg flex items-center justify-center p-4 card-hover">
                <div class="text-center">
                    <img src="{{ asset('assets/logo/logo6.png') }}" alt="Logo 4" class="w-36 h-36 object-contain mx-auto mb-2">
                    <p class="text-sm text-gray-700 font-semibold">PT Nambi Jaya</p>
                </div>
            </div>
            <div class="w-56 h-56 bg-white rounded-2xl shadow-lg flex items-center justify-center p-4 card-hover">
                <div class="text-center">
                    <img src="{{ asset('assets/logo/logo7.png') }}" alt="Logo 4" class="w-36 h-36 object-contain mx-auto mb-2">
                    <p class="text-sm text-gray-700 font-semibold">PT Sampurnan Berkah</p>
                </div>
            </div>
            <div class="w-56 h-56 bg-white rounded-2xl shadow-lg flex items-center justify-center p-4 card-hover">
                <div class="text-center">
                    <img src="{{ asset('assets/logo/logo8.png') }}" alt="Logo 4" class="w-36 h-36 object-contain mx-auto mb-2">
                    <p class="text-sm text-gray-700 font-semibold">Wihasta</p>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
</section>

<!-- Tim Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-mangrove-100 rounded-full mb-4">
                <i class="fas fa-users text-mangrove-600"></i>
                <span class="text-sm font-medium text-mangrove-700">Tim Kami</span>
            </div>
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Struktur Organisasi</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Tim profesional yang berpengalaman di bidang konservasi mangrove.</p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Komisaris -->
            <div class="text-center">
                <div class="w-40 h-40 rounded-full mx-auto mb-4 overflow-hidden">
                    <img src="{{ asset('assets/foto/Pak S.png') }}" alt="H. Abdul Salam" class="w-full h-full object-cover">
                </div>
                <h4 class="text-lg font-bold text-gray-900">H. Abdul Salam, S.Pd., M.Pd.I</h4>
                <p class="text-sm text-mangrove-600 font-medium">Direktur CV Nam Jaya</p>
            </div>
            
            <!-- Direktur -->
            <div class="text-center">
                <div class="w-40 h-40 rounded-full mx-auto mb-4 overflow-hidden">
                    <img src="{{ asset('assets/foto/Pak T.png') }}" alt="Direktur" class="w-full h-full object-cover">
                </div>
                <h4 class="text-lg font-bold text-gray-900">Moh. Khozinatul A. Robbani</h4>
                <p class="text-sm text-ocean-600 font-medium">Direktur PT Morton Global Sejahtera</p>
            </div>
                    </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="bg-gradient-to-r from-mangrove-600 to-ocean-600 rounded-3xl p-12 text-white text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-white/5"></div>
            <div class="relative z-10">
                <h2 class="text-3xl font-bold mb-4">Siap Berkolaborasi?</h2>
                <p class="text-green-100 mb-8 max-w-2xl mx-auto">Hubungi kami untuk membahas proyek konservasi mangrove Anda.</p>
                <a href="{{ route('hubungi-kami') }}" class="inline-flex items-center px-8 py-4 bg-white text-gray-900 font-semibold rounded-2xl hover:bg-gray-100 transition shadow-lg hover:shadow-xl smooth-transition">
                    <i class="fas fa-phone mr-2"></i>Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>
@endsection