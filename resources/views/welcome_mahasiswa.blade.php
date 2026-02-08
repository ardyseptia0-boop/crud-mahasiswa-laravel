<!DOCTYPE html>
<html>
<head>
    <title>Modul 1 Laravel 12</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            padding: 50px;
            max-width: 800px;
            width: 100%;
            text-align: center;
        }
        
        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 2.5rem;
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .nama {
            color: #667eea;
            font-weight: bold;
            font-size: 1.8rem;
            margin: 10px 0;
        }
        
        .mata-kuliah {
            background: #f7f7f7;
            padding: 15px;
            border-radius: 10px;
            margin: 25px 0;
            border-left: 5px solid #667eea;
        }
        
        .mata-kuliah h3 {
            color: #555;
            margin-bottom: 5px;
        }
        
        .mata-kuliah p {
            color: #333;
            font-size: 1.3rem;
            font-weight: bold;
        }
        
        .info-box {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 15px;
            margin-top: 30px;
        }
        
        .ai-note {
            font-size: 0.9rem;
            color: #666;
            margin-top: 30px;
            padding-top: 15px;
            border-top: 1px solid #eee;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎉 Selamat Datang di Laravel 12 🎉</h1>
        
        <p>Halo, saya adalah:</p>
        <div class="nama">{{ $nama }}</div>
        
        <div class="mata-kuliah">
            <h3>📚 Mata Kuliah yang sedang dipelajari:</h3>
            <p>{{ $mata_kuliah }}</p>
        </div>
        
        <p>Ini adalah halaman pertama saya di Laravel 12 dengan implementasi Route → Controller → View.</p>
        
        <div class="info-box">
            <h3>💡 Yang sudah dipelajari:</h3>
            <p>✓ Instalasi Laravel 12<br>
               ✓ Membuat Controller<br>
               ✓ Membuat View dengan Blade Template<br>
               ✓ Passing data dari Controller ke View<br>
               ✓ Styling dengan CSS modern</p>
        </div>
        
        <div class="ai-note">
            Catatan: Pengembangan halaman ini dibantu dengan DeepSeek untuk optimalisasi kode dan styling.
        </div>
    </div>
</body>
</html>