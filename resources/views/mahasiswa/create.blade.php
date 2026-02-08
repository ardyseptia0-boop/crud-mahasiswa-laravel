<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>➕ Tambah Mahasiswa Baru</h1>
        
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="nim" class="form-label">NIM *</label>
                <input type="text" class="form-control" id="nim" name="nim" 
                       value="{{ old('nim') }}" required>
                <div class="form-text">Nomor Induk Mahasiswa (unik)</div>
            </div>
            
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap *</label>
                <input type="text" class="form-control" id="nama" name="nama"
                       value="{{ old('nama') }}" required>
            </div>
            
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas *</label>
                <input type="text" class="form-control" id="kelas" name="kelas"
                       value="{{ old('kelas') }}" required>
                <div class="form-text">Contoh: TI-1A, SI-2B</div>
            </div>
            
            <div class="mb-3">
                <label for="matakuliah" class="form-label">Mata Kuliah *</label>
                <input type="text" class="form-control" id="matakuliah" name="matakuliah"
                       value="{{ old('matakuliah') }}" required>
            </div>
            
            <button type="submit" class="btn btn-primary">💾 Simpan</button>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">❌ Batal</a>
        </form>
    </div>
</body>
</html>