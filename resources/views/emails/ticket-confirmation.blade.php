{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}

{{-- @component('mail::message')
    # Konfirmasi Aduan Anda

    Terima kasih telah mengajukan aduan kepada kami.

    Berikut adalah detail tiket aduan Anda:

    Nomor Tiket     :    {{ $aduan->no_tiket }}
    Nama Pelapor    :    {{ $aduan->nama }}
    Deskripsi Aduan :    {{ $aduan->deskripsi }}
    Status Saat Ini :    {{ ucfirst($aduan->status) }}

    Anda dapat menggunakan nomor tiket ini untuk melacak status aduan Anda di kemudian hari.

    Hormat kami,
    {{ config('app.name') }}
@endcomponent --}}

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Konfirmasi Aduan Anda</title>
    <!-- Inline CSS for maximum compatibility with email clients -->
    <style type="text/css">
        body, html {
            margin: 0 !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            font-family: 'Inter', sans-serif; /* Fallback to sans-serif */
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            background-color: #f4f4f4;
        }
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        img {
            -ms-interpolation-mode: bicubic;
        }
        a {
            text-decoration: none;
        }
        /* Responsive styles */
        @media screen and (max-width: 600px) {
            .email-container {
                width: 100% !important;
                margin: auto !important;
            }
            .content-padding {
                padding: 15px !important;
            }
            .button-wrapper {
                padding: 10px 0 !important;
            }
            .button-link {
                padding: 12px 20px !important;
                font-size: 16px !important;
            }
            h1 {
                font-size: 24px !important;
            }
            p {
                font-size: 14px !important;
            }
        }
    </style>
</head>
<body width="100%" style="margin: 0; padding: 0; background-color: #f4f4f4;">
    <center style="width: 100%; background-color: #f4f4f4;">
        <div style="display: none; font-size: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
            Konfirmasi Aduan Anda - Nomor Tiket: {{ $aduan->no_tiket }}
        </div>
        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="600" style="margin: auto;" class="email-container">
            <!-- Header/Logo (Optional) -->
            <tr>
                <td style="padding: 20px 0; text-align: center; background-color: #ffffff;">
                    <!-- If you have a logo, you can put it here -->
                    <h1 style="text-align: center;  margin: 0; font-size: 28px; line-height: 30px; color: #333333;">Konfirmasi Aduan</h1>
                </td>
            </tr>
            <!-- Content Area -->
            <tr>
                <td style="background-color: #ffffff;">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <td style="padding: 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;" class="content-padding">
                                <p style="margin: 0;">Terima kasih telah mengajukan aduan kepada kami.</p>
                                <p style="margin: 20px 0 10px 0;">Berikut adalah detail tiket aduan Anda:</p>

                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin-bottom: 20px;">
                                    <tr>
                                        <td style="padding: 5px 0; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; width: 120px;"><strong>Nomor Tiket</strong></td>
                                        <td style="padding: 5px 0; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">: {{ $aduan->no_tiket }}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px 0; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; width: 120px;"><strong>Nama Pelapor</strong></td>
                                        <td style="padding: 5px 0; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">: {{ $aduan->nama }}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px 0; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; width: 120px;"><strong>Deskripsi Aduan</strong></td>
                                        <td style="padding: 5px 0; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">: {{ $aduan->deskripsi }}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px 0; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; width: 120px;"><strong>Status Saat Ini</strong></td>
                                        <td style="padding: 5px 0; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">: {{ ucfirst($aduan->status) }}</td>
                                    </tr>
                                </table>

                                <p style="margin: 0;">Anda dapat menggunakan nomor tiket ini untuk melacak status aduan Anda di kemudian hari.</p>
                                <br><br>
                                <p style="margin: 0;">Hormat kami,<br>{{ config('app.name') }}</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <!-- Footer (Optional) -->
            <tr>
                <td style="padding: 20px; font-family: sans-serif; font-size: 12px; line-height: 18px; color: #888888; text-align: center;">
                    <p style="margin: 0;">&copy; {{ date('Y') }} {{ config('app.name') }}. Semua Hak Cipta Dilindungi.</p>
                    <p style="margin: 0;">Ini adalah email otomatis, mohon tidak membalas email ini.</p>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>

