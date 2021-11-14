<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsipsurat extends Model
{
    use HasFactory;
    protected $fillable=[
        'no_surat',
        'kategori',
        'judul',
    ];
}
