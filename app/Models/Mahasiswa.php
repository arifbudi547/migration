<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    
    protected $table = 'mahasiswa';
    protected $fillable = ['nama', 'prodi', 'semester', 'biodata'];

    protected static function boot()
    {
        parent::boot();
        
        static::saving(function ($mahasiswa) {
            if (strlen($mahasiswa->biodata) > 50) {
                throw new \Exception('Biodata tidak boleh lebih dari 50 karakter');
            }
        });
    }
}