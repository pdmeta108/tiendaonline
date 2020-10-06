<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    // Relaciones

    public function productos() {
        return $this->hasMany(Producto::class);
    }

    public function empresas() {
        return $this->hasMany(Empresa::class);
    }

    public function parent() {
        return $this->hasMany(Categoria::class);
    }

    public function child() {
        return $this->belongsTo(Categoria::class);
    }
}
