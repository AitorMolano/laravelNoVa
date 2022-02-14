<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Articulo extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'contenido',
    ];

    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
