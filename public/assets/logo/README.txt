==========================================
CARA MENGGANTI LOGO PERUSAHAAN
==========================================

1. Simpan file logo Anda di folder ini:
   public/assets/logo/

2. Format yang didukung: PNG, JPG, JPEG, SVG
3. Nama file yang disarankan: logo.png atau logo.jpg
4. Ukuran yang disarankan: 512x512 piksel (atau cuadrado)

5. Buka file:
   resources/views/company-profile.blade.php

6. Di baris 8, ubah:
   'logo' => null,
   Menjadi:
   'logo' => 'logo.png',

   (ganti "logo.png" dengan nama file logo Anda)

==========================================
CARA MENGUBAH NAMA PERUSAHAAN
==========================================

Buka file:
resources/views/company-profile.blade.php

Di bagian atas (baris 3-9), ubah sesuai keinginan:
- 'company_name' => 'Nama Perusahaan Lengkap'
- 'short_name' => 'Nama Singkat'
- 'tagline' => 'Tagline/Subjudul'

==========================================