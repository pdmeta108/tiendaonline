<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = "id";

    use HasFactory;

    // Relaciones

    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function producto() {
        return $this->belongsTo(Producto::class);
    }
}
