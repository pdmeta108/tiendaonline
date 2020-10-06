<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'codigo_producto';

    /* Relaciones */

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }

    public function imagens() {
        return $this->hasMany(Imagen::class);
    }

}
