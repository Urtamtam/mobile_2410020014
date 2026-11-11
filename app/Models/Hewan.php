<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    use HasFactory;

    protected $fillable = ['nama_hewan', 'jenis', 'ras', 'umur', 'nama_pemilik', 'no_hp'];

    public function penitipan()
    {
        return $this->hasMany(Penitipan::class);
    }
}