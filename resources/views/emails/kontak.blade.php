<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h2 {
            color: #c6a43b;
            border-bottom: 2px solid #c6a43b;
            padding-bottom: 10px;
        }
        .info {
            margin: 15px 0;
            padding: 10px;
            background-color: #fff;
            border-left: 4px solid #c6a43b;
        }
        .label {
            font-weight: bold;
            color: #1a1a1a;
        }
        .message {
            margin-top: 20px;
            padding: 15px;
            background-color: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 3px;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>📬 Pesan Kontak Dari Website</h2>
        
        <div class="info">
            <span class="label">Nama:</span> {{ $nama }}
        </div>
        
        <div class="info">
            <span class="label">Email:</span> {{ $email }}
        </div>
        
        <div class="info">
            <span class="label">Telepon:</span> {{ $telepon }}
        </div>
        
        <div class="info">
            <span class="label">Subjek:</span> {{ $subjek }}
        </div>
        
        <h3 style="color: #1a1a1a; margin-top: 20px;">Pesan:</h3>
        <div class="message">{{ $pesan }}</div>
    </div>
</body>
</html>
