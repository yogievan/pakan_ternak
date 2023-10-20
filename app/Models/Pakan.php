<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pakan extends Model
{
    use HasFactory;
    protected $table = 'pakans';
    protected $fillable = [
        'nama_pakan',
        'harga',
    ];
}
