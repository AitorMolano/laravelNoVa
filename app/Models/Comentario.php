<?php

namespace App\Models;

use App\Http\Controllers\ArticuloController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = [
        'texto',
    ];

    public function articulo(){
        return $this->belongsTo(Articulo::class);
    }

}
