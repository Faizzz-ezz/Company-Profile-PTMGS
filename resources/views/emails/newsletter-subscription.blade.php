<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Newsletter</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <h2 style="color: #2563eb;">Terima Kasih Telah Berlangganan!</h2>

    <p>Halo, <strong>{{ $subscriber->email }}</strong></p>

    <p>Terima kasih telah berlangganan newsletter kami. Anda akan menerima informasi terbaru seputar:</p>

    <ul>
        <li>Berita dan artikel terbaru</li>
        <li>Info kegiatan dan acara</li>
        <li>Tips dan panduan bermanfaat</li>
    </ul>

    <p>Jika Anda tidak merasa mendaftar, abaikan email ini.</p>

    <hr style="border: none; border-top: 1px solid #e5e7eb; margin: 20px 0;">
    <p style="font-size: 12px; color: #9ca3af;">Email ini dikirim secara otomatis dari website.</p>
</body>
</html>
