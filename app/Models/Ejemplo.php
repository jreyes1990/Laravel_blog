<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ejemplo extends Model
{
    use HasFactory;
    //use SoftDeletes;

    //protected $table = 'ejemplo';
    protected $table = 'tinker';

    /*
    protected $fillable = [
        'titulo',
        'prueba',
        'categoria'
    ];
    */

    protected $fillable = [
        'nombre',
        'contenido'
    ];

    protected $dates = ['deleted_at'];

    public function user(){
        return $this->belongsTo('App\Models\User', 'usuario_id');
    }
}
