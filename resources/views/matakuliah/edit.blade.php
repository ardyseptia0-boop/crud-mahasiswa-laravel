<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>✏️ Edit Mata Kuliah</h1>
        
        @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
        <form action="{{ route('matakuliah.update', $matakuliah->kode_mk) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="kode_mk" class="form-label">Kode Mata Kuliah</label>
                <input type="text" class="form-control" id="kode_mk" 
                       value="{{ $matakuliah->kode_mk }}" readonly>
                <div class="form-text">Kode mata kuliah tidak dapat diubah</div>
            </div>
            
            <div class="mb-3">
                <label for="nama_mk" class="form-label">Nama Mata Kuliah *</label>
                <input type="text" class="form-control @error('nama_mk') is-invalid @enderror" 
                       id="nama_mk" name="nama_mk" value="{{ old('nama_mk', $matakuliah->nama_mk) }}" required>
                @error('nama_mk')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="sks" class="form-label">SKS *</label>
                    <input type="number" class="form-control @error('sks') is-invalid @enderror" 
                           id="sks" name="sks" value="{{ old('sks', $matakuliah->sks) }}" min="1" max="6" required>
                    @error('sks')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="semester" class="form-label">Semester *</label>
                    <input type="number" class="form-control @error('semester') is-invalid @enderror" 
                           id="semester" name="semester" value="{{ old('semester', $matakuliah->semester) }}" min="1" max="8" required>
                    @error('semester')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <button type="submit" class="btn btn-success">📤 Update</button>
            <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">❌ Batal</a>
        </form>
    </div>
</body>
</html>