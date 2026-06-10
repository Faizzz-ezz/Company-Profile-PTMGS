<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Baru</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <h2 style="color: #2563eb;">Pesan Baru dari Form Kontak</h2>

    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <tr>
            <td style="padding: 8px; font-weight: bold; width: 120px;">Nama</td>
            <td style="padding: 8px;">{{ $contactMessage->name }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; font-weight: bold;">Email</td>
            <td style="padding: 8px;">{{ $contactMessage->email }}</td>
        </tr>
        @if ($contactMessage->phone)
        <tr>
            <td style="padding: 8px; font-weight: bold;">Telepon</td>
            <td style="padding: 8px;">{{ $contactMessage->phone }}</td>
        </tr>
        @endif
        <tr>
            <td style="padding: 8px; font-weight: bold;">Subjek</td>
            <td style="padding: 8px;">{{ $contactMessage->subject }}</td>
        </tr>
    </table>

    <h3 style="color: #2563eb;">Pesan:</h3>
    <p style="background: #f3f4f6; padding: 15px; border-radius: 5px;">{{ $contactMessage->message }}</p>

    <hr style="border: none; border-top: 1px solid #e5e7eb; margin: 20px 0;">
    <p style="font-size: 12px; color: #9ca3af;">Email ini dikirim secara otomatis dari website.</p>
</body>
</html>
