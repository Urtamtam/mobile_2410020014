<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penitipan extends Model
{
    use HasFactory;

    protected $fillable = ['hewan_id', 'tanggal_masuk', 'tanggal_keluar', 'biaya', 'status', 'catatan'];

    public function hewan()
    {
        return $this->belongsTo(Hewan::class);
    }
}