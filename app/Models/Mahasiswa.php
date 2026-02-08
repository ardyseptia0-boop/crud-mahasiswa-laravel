<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // Tentukan nama tabel secara eksplisit
    protected $table = 'mahasiswa'; // Karena tabel di database: mahasiswa (singular)
    
    // Primary key adalah 'nim' bukan 'id'
    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $keyType = 'string';
    
    // Kolom yang bisa diisi massal
    protected $fillable = ['nim', 'nama', 'kelas', 'matakuliah'];
    
    // Timestamps (created_at, updated_at) otomatis ada
    public $timestamps = true;
}