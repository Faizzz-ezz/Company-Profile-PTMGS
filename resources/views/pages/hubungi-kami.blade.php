<?php
$config = [
    'company_name' => 'PT. Morton Global',
    'short_name' => 'PT. Morton Global',
    'tagline' => 'Sejahtera',
    'logo' => 'logo-perusahaan.png',
];
?>
@extends('layouts.main')

@section('title', 'Hubungi Kami - ' . $config['company_name'])

@section('content')
<!-- Header Section -->
<section class="pt-32 pb-16 bg-gradient-to-br from-mangrove-50 via-white to-ocean-50">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-mangrove-100 rounded-full mb-6">
            <i class="fas fa-phone text-mangrove-600"></i>
            <span class="text-sm font-medium text-mangrove-700">Kontak</span>
        </div>
        <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">Hubungi <span class="text-gradient">Kami</span></h1>
        <p class="text-gray-600 max-w-2xl mx-auto text-lg">Kami siap membantu Anda dalam proyek konservasi mangrove. Silakan hubungi kami untuk konsultasi.</p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-10">
            <!-- Contact Form -->
            <div class="bg-gray-50 rounded-3xl p-8 shadow-lg border border-gray-100">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-3">
                    <i class="fas fa-paper-plane text-mangrove-600"></i>
                    Kirim Pesan
                </h3>
                @if (session('success'))
                    <div class="bg-green-100 border border-green-200 text-green-700 px-6 py-4 rounded-2xl mb-6 flex items-center gap-3">
                        <i class="fas fa-check-circle text-green-500 text-lg"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif
                <form method="POST" action="{{ route('hubungi-kami.kirim') }}" class="space-y-5">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-mangrove-500 focus:border-transparent smooth-transition @error('name') border-red-400 @enderror" placeholder="Nama Anda">
                            @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-mangrove-500 focus:border-transparent smooth-transition @error('email') border-red-400 @enderror" placeholder="email@anda.com">
                            @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Telepon</label>
                        <input type="tel" name="phone" value="{{ old('phone') }}" class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-mangrove-500 focus:border-transparent smooth-transition @error('phone') border-red-400 @enderror" placeholder="+62 xxx xxxx xxxx">
                        @error('phone') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Subjek</label>
                        <select name="subject" class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-mangrove-500 focus:border-transparent smooth-transition @error('subject') border-red-400 @enderror">
                            <option value="Konsultasi Proyek" {{ old('subject') == 'Konsultasi Proyek' ? 'selected' : '' }}>Konsultasi Proyek</option>
                            <option value="Informasi Layanan" {{ old('subject') == 'Informasi Layanan' ? 'selected' : '' }}>Informasi Layanan</option>
                            <option value="Kerja Sama" {{ old('subject') == 'Kerja Sama' ? 'selected' : '' }}>Kerja Sama</option>
                            <option value="Lainnya" {{ old('subject') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                        </select>
                        @error('subject') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                        <textarea rows="5" name="message" class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-mangrove-500 focus:border-transparent smooth-transition @error('message') border-red-400 @enderror" placeholder="Tulis pesan Anda di sini...">{{ old('message') }}</textarea>
                        @error('message') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <button type="submit" class="w-full px-8 py-4 bg-gradient-to-r from-mangrove-600 to-mangrove-700 text-white font-semibold rounded-2xl hover:shadow-lg hover:shadow-mangrove-500/30 smooth-transition btn-glow">
                        <i class="fas fa-paper-plane mr-2"></i>Kirim Pesan
                    </button>
                </form>
            </div>
            
            <!-- Contact Info -->
            <div class="space-y-6">
                <div class="bg-gray-50 rounded-3xl p-8 shadow-lg border border-gray-100">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-3">
                        <i class="fas fa-info-circle text-ocean-600"></i>
                        Informasi Kontak
                    </h3>
                    <div class="space-y-5">
                        <div class="flex items-start gap-4 p-4 bg-white rounded-2xl border border-gray-100 card-hover">
                            <div class="w-12 h-12 bg-gradient-to-br from-mangrove-100 to-mangrove-200 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-mangrove-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Alamat</h4>
                                <p class="text-gray-600 text-sm">Dusun Nambi, RT 15, RW 07, Desa Karangrejo, Kecamatan Manyar, Kabupaten Gresik</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4 p-4 bg-white rounded-2xl border border-gray-100 card-hover">
                            <div class="w-12 h-12 bg-gradient-to-br from-ocean-100 to-ocean-200 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-ocean-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Email</h4>
                                <p class="text-gray-600 text-sm">ptmgs2476@gmail.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4 p-4 bg-white rounded-2xl border border-gray-100 card-hover">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-100 to-green-200 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone text-green-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Telepon</h4>
                                <p class="text-gray-600 text-sm">(+62) 815 5378 5280</p>
                                <p class="text-gray-600 text-sm">(+62) 856 0731 1876 [kantor]</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4 p-4 bg-white rounded-2xl border border-gray-100 card-hover">
                            <div class="w-12 h-12 bg-gradient-to-br from-amber-100 to-amber-200 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-clock text-amber-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Jam Operasional</h4>
                                <p class="text-gray-600 text-sm">Senin - Jumat: 08.00 - 16.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gradient-to-br from-mangrove-600 to-ocean-600 rounded-3xl p-8 text-white relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/2"></div>
                    <h3 class="text-xl font-bold mb-4 flex items-center gap-3">
                        <i class="fas fa-handshake"></i>
                        Mari Berkolaborasi
                    </h3>
                    <p class="text-green-100 text-sm mb-6">Bergabunglah dengan kami dalam upaya pelestarian ekosistem mangrove Indonesia untuk masa depan yang lebih hijau.</p>
                    <div class="flex gap-3">
                        <a href="https://wa.me/6281333885876" class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center hover:bg-white/30 smooth-transition">
                            <i class="fab fa-whatsapp text-lg"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center hover:bg-white/30 smooth-transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center hover:bg-white/30 smooth-transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center hover:bg-white/30 smooth-transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection