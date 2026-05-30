<?php
$config = [
    'company_name' => 'PT. Morton Global',
    'short_name' => 'PT. Morton Global',
    'tagline' => 'Sejahtera',
    'logo' => 'logo-perusahaan.png',
];
?>
@extends('layouts.main')

@section('title', 'Perawatan - ' . $config['company_name'])

@section('content')
<!-- Header Section -->
<section class="pt-32 pb-16 bg-gradient-to-br from-green-50 via-white to-mangrove-50">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-green-100 rounded-full mb-6">
            <i class="fas fa-hand-holding-heart text-green-600"></i>
            <span class="text-sm font-medium text-green-700">Panduan Praktis</span>
        </div>
        <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Cara Perawatan <span class="text-gradient">Pohon Mangrove</span></h1>
        <p class="text-gray-600 max-w-2xl mx-auto text-lg">Perawatan mangrove yang tepat sangat penting untuk memastikan pertumbuhan optimal dan keberlanjutan ekosistem.</p>
    </div>
</section>

<!-- Main Content -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-8">
            <div class="space-y-4">
                <div class="flex gap-5 p-6 bg-gray-50 rounded-2xl card-hover border border-gray-100 group">
                    <div class="w-14 h-14 bg-gradient-to-br from-mangrove-500 to-mangrove-600 rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg group-hover:scale-110 smooth-transition">
                        <span class="text-2xl font-bold text-white">1</span>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Pemilihan Lokasi yang Tepat</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">Mangrove memerlukan lokasi di zona pasang surut dengan salinitas air yang sesuai. Pilih area terlindung dari gelombang kuat dengan substrat lumpur cukup. Kedalaman air saat pasang tidak lebih dari 1-1,5 meter untuk bibit muda.</p>
                    </div>
                </div>
                
                <div class="flex gap-5 p-6 bg-gray-50 rounded-2xl card-hover border border-gray-100 group">
                    <div class="w-14 h-14 bg-gradient-to-br from-ocean-500 to-ocean-600 rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg group-hover:scale-110 smooth-transition">
                        <span class="text-2xl font-bold text-white">2</span>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Pengelolaan Salinitas</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">Monitor salinitas air secara berkala. Mangrove optimal pada salinitas 5-30 ppt. Pada salinitas tinggi (di atas 45 ppt), beberapa spesies mengalami stres. Diversifikasi spesies penting di area estuari.</p>
                    </div>
                </div>
                
                <div class="flex gap-5 p-6 bg-gray-50 rounded-2xl card-hover border border-gray-100 group">
                    <div class="w-14 h-14 bg-gradient-to-br from-teal-500 to-teal-600 rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg group-hover:scale-110 smooth-transition">
                        <span class="text-2xl font-bold text-white">3</span>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Pengairan yang Sesuai</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">Mangrove tidak memerlukan penyiraman manual karena mendapat air dari pasang. Untuk bibit di pembibitan, siram dengan air payau 2-3 kali sehari. Hindari genangan air tawar berlebihan.</p>
                    </div>
                </div>
                
                <div class="flex gap-5 p-6 bg-gray-50 rounded-2xl card-hover border border-gray-100 group">
                    <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg group-hover:scale-110 smooth-transition">
                        <span class="text-2xl font-bold text-white">4</span>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Pemupukan Organik</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">Gunakan pupuk organik seperti kompos atau pupuk kandang matang. Berikan 100-200 gram per tanaman per bulan. Hindari pupuk kimia yang dapat mencemari ekosistem.</p>
                    </div>
                </div>
            </div>
            
            <div class="space-y-4">
                <div class="flex gap-5 p-6 bg-gray-50 rounded-2xl card-hover border border-gray-100 group">
                    <div class="w-14 h-14 bg-gradient-to-br from-amber-500 to-amber-600 rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg group-hover:scale-110 smooth-transition">
                        <span class="text-2xl font-bold text-white">5</span>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Pengendalian Hama & Penyakit</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">Pantau rutin serangan ulat, kutu, atau jamur. Gunakan pestisida nabati atau biological control. Penyakit akar jamur dapat dicegah dengan sirkulasi air yang baik.</p>
                    </div>
                </div>
                
                <div class="flex gap-5 p-6 bg-gray-50 rounded-2xl card-hover border border-gray-100 group">
                    <div class="w-14 h-14 bg-gradient-to-br from-rose-500 to-rose-600 rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg group-hover:scale-110 smooth-transition">
                        <span class="text-2xl font-bold text-white">6</span>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Pruning & Pemangkasan</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">Pangkas cabang rusak, kering, atau terserang penyakit. Lakukan pada musim kemarau, potong maksimal 30% dari total cabang. Pemangkasan mendorong pertumbuhan cabang baru.</p>
                    </div>
                </div>
                
                <div class="flex gap-5 p-6 bg-gray-50 rounded-2xl card-hover border border-gray-100 group">
                    <div class="w-14 h-14 bg-gradient-to-br from-violet-500 to-violet-600 rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg group-hover:scale-110 smooth-transition">
                        <span class="text-2xl font-bold text-white">7</span>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Monitoring Pertumbuhan</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">Catat tinggi tanaman, diameter batang, dan jumlah daun setiap bulan. Hitung survival rate secara berkala. Ganti tanaman mati dengan bibit baru untuk menjaga kepadatan hutan.</p>
                    </div>
                </div>
                
                <div class="flex gap-5 p-6 bg-gray-50 rounded-2xl card-hover border border-gray-100 group">
                    <div class="w-14 h-14 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg group-hover:scale-110 smooth-transition">
                        <span class="text-2xl font-bold text-white">8</span>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Pelestarian Ekosistem</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">Jaga vegetasi pendukung di sekitar mangrove. Hindari polusi limbah domestik atau industri. Libatkan masyarakat lokal untuk keberlanjutan jangka panjang.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tips Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-mangrove-100 rounded-full mb-4">
                <i class="fas fa-lightbulb text-mangrove-600"></i>
                <span class="text-sm font-medium text-mangrove-700">Tips Tambahan</span>
            </div>
            <h2 class="text-3xl font-bold text-gray-900">Panduan Perawatan Lanjutan</h2>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-3xl p-8 shadow-lg border border-gray-100 card-hover group">
                <div class="w-16 h-16 bg-gradient-to-br from-amber-100 to-amber-200 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 smooth-transition">
                    <i class="fas fa-cloud-rain text-2xl text-amber-600"></i>
                </div>
                <h4 class="text-xl font-bold text-gray-900 mb-3">Waktu Tanam Ideal</h4>
                <p class="text-gray-600 text-sm leading-relaxed">Tanam di awal musim hujan agar bibit punya waktu cukup untuk berakar sebelum musim hujan berakhir.</p>
                <div class="mt-4 flex items-center gap-2 text-amber-600 text-sm">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Musim hujan</span>
                </div>
            </div>
            
            <div class="bg-white rounded-3xl p-8 shadow-lg border border-gray-100 card-hover group">
                <div class="w-16 h-16 bg-gradient-to-br from-ocean-100 to-ocean-200 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 smooth-transition">
                    <i class="fas fa-search text-2xl text-ocean-600"></i>
                </div>
                <h4 class="text-xl font-bold text-gray-900 mb-3">Pantauan Berkala</h4>
                <p class="text-gray-600 text-sm leading-relaxed">Lakukan pemantauan setiap minggu untuk mendeteksi masalah sejak dini.</p>
                <div class="mt-4 flex items-center gap-2 text-ocean-600 text-sm">
                    <i class="fas fa-check-circle"></i>
                    <span>Checklist mingguan</span>
                </div>
            </div>
            
            <div class="bg-white rounded-3xl p-8 shadow-lg border border-gray-100 card-hover group">
                <div class="w-16 h-16 bg-gradient-to-br from-green-100 to-green-200 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 smooth-transition">
                    <i class="fas fa-users text-2xl text-green-600"></i>
                </div>
                <h4 class="text-xl font-bold text-gray-900 mb-3">Kolaborasi Lokal</h4>
                <p class="text-gray-600 text-sm leading-relaxed">Libatkan masyarakat sekitar dalam perawatan untuk keberlanjutan jangka panjang.</p>
                <div class="mt-4 flex items-center gap-2 text-green-600 text-sm">
                    <i class="fas fa-hands-helping"></i>
                    <span>Community based</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-r from-mangrove-600 to-ocean-600">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h3 class="text-2xl font-bold text-white mb-4">Butuh Bantuan Ahli?</h3>
        <p class="text-green-100 mb-8 max-w-xl mx-auto">Tim profesional kami siap membantu Anda dalam perawatan dan pengelolaan mangrove.</p>
        <a href="{{ route('hubungi-kami') }}" class="inline-flex items-center px-8 py-4 bg-white text-gray-900 font-semibold rounded-2xl hover:bg-gray-100 transition shadow-lg hover:shadow-xl smooth-transition">
            <i class="fas fa-phone mr-2"></i>
            Hubungi Kami
        </a>
    </div>
</section>
@endsection