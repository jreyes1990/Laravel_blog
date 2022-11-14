<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ejemplo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'ejemplo';

    protected $fillable = [
        'titulo',
        'prueba',
        'categoria'
    ];

    protected $dates = ['deleted_at'];
}
