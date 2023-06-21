<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kode OTP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            color: #333333;
            margin: 0 0 20px;
        }

        .code {
            font-size: 48px;
            color: #007bff;
            margin: 0;
        }

        .note {
            font-size: 14px;
            color: #777777;
            margin: 20px 0 0;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #999999;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Kode OTP Anda</h1>
        <h2 class="code">{{$code}}</h2>
        <p class="note">Harap jaga kerahasiaan kode ini dan jangan berikan kepada siapapun.</p>
    </div>
    <div class="footer">
        Email ini dikirim secara otomatis, mohon jangan membalas email ini.
    </div>
</body>
</html>
