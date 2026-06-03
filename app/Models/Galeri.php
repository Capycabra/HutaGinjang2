<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;
class Galeri extends Model
{
    use HasFactory;

    protected $table = 'galeri';
    protected $fillable = ['judul', 'kategori', 'deskripsi', 'gambar', 'status', 'admin_id'];

    public function getGambarAttribute($value)
    {
        if (!$value) {
            return null;
        }

        if (str_starts_with($value, 'data:') || str_starts_with($value, 'http')) {
            return $value;
        }

        return route('media.galeri', ['path' => $value]);
    }

     public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}