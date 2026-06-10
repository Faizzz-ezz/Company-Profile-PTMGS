@extends('layouts.main')

@section('title', 'Upload Video - Galeri Mangrove')

@push('styles')
<style>
    .upload-area {
        border: 2px dashed #d1d5db;
        border-radius: 16px;
        padding: 40px;
        text-align: center;
        transition: all 0.3s;
        cursor: pointer;
    }
    .upload-area:hover {
        border-color: #15803d;
        background: #f0fdf4;
    }
    .upload-area.has-file {
        border-color: #15803d;
        background: #f0fdf4;
    }
</style>
@endpush

@section('content')
<section class="py-24 bg-gray-50">
    <div class="max-w-4xl mx-auto px-6">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-ocean-100 rounded-full mb-4">
                <i class="fas fa-video text-ocean-600"></i>
                <span class="text-sm font-medium text-ocean-700">Upload Video</span>
            </div>
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Upload Video<br><span class="text-gradient">Galeri Mangrove</span></h2>
        </div>

        @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-2xl mb-8">
            <i class="fas fa-check-circle mr-2"></i>{{ session('success') }}
        </div>
        @endif

        @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-6 py-4 rounded-2xl mb-8">
            <i class="fas fa-exclamation-circle mr-2"></i>{{ session('error') }}
        </div>
        @endif

        <form action="{{ route('video.upload') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-3xl p-8 shadow-lg mb-12">
            @csrf
            <div class="upload-area" onclick="document.getElementById('video-input').click()">
                <i class="fas fa-cloud-upload-alt text-5xl text-gray-300 mb-4"></i>
                <p class="text-gray-500 text-lg mb-2">Klik untuk pilih video</p>
                <p class="text-gray-400 text-sm">MP4, WebM, OGG, MOV, AVI (Max 100MB)</p>
                <input id="video-input" type="file" name="video" accept="video/*" class="hidden" onchange="updateFileName(this)">
                <p id="file-name" class="text-ocean-600 font-medium mt-3 hidden"></p>
            </div>
            @error('video')
            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
            <button type="submit" class="mt-6 w-full px-6 py-3 bg-gradient-to-r from-mangrove-600 to-mangrove-700 text-white font-semibold rounded-xl hover:shadow-lg smooth-transition">
                <i class="fas fa-upload mr-2"></i>Upload Video
            </button>
        </form>

        @if (count($videos) > 0)
        <h3 class="text-2xl font-bold text-gray-900 mb-6">Video Tersimpan</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach ($videos as $video)
            <div class="bg-white rounded-3xl overflow-hidden shadow-lg">
                <video class="w-full aspect-video object-cover" controls>
                    <source src="{{ asset($video['path']) }}" type="video/{{ pathinfo($video['name'], PATHINFO_EXTENSION) }}">
                </video>
                <div class="p-4">
                    <p class="text-gray-800 font-medium truncate">{{ $video['name'] }}</p>
                    <p class="text-gray-400 text-sm">{{ round($video['size'] / 1024 / 1024, 2) }} MB</p>
                    <form action="{{ route('video.destroy', $video['name']) }}" method="POST" class="mt-2" onsubmit="return confirm('Hapus video ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700 text-sm">
                            <i class="fas fa-trash mr-1"></i>Hapus
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-16">
            <i class="fas fa-video-slash text-6xl text-gray-300 mb-4"></i>
            <p class="text-gray-400 text-lg">Belum ada video. Upload video pertama Anda!</p>
        </div>
        @endif
    </div>
</section>

<script>
function updateFileName(input) {
    var name = document.getElementById('file-name');
    var area = input.closest('.upload-area') || input.parentElement;
    if (input.files.length > 0) {
        name.textContent = input.files[0].name;
        name.classList.remove('hidden');
        area.classList.add('has-file');
    }
}
</script>
@endsection
