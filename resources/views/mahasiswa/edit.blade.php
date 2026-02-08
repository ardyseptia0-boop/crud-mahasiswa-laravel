<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>✏️ Edit Data Mahasiswa</h1>
        
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
        <form action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" 
                       value="{{ $mahasiswa->nim }}" readonly>
                <div class="form-text">NIM tidak dapat diubah</div>
            </div>
            
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap *</label>
                <input type="text" class="form-control" id="nama" name="nama"
                       value="{{ $mahasiswa->nama }}" required>
            </div>
            
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas *</label>
                <input type="text" class="form-control" id="kelas" name="kelas"
                       value="{{ $mahasiswa->kelas }}" required>
            </div>
            
            <div class="mb-3">
                <label for="matakuliah" class="form-label">Mata Kuliah *</label>
                <input type="text" class="form-control" id="matakuliah" name="matakuliah"
                       value="{{ $mahasiswa->matakuliah }}" required>
            </div>
            
            <button type="submit" class="btn btn-success">📤 Update</button>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">❌ Batal</a>
        </form>
    </div>
</body>
</html>