<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidosProductos extends Model
{
    use HasFactory;
	protected $table='pedidos_productos';
    public $timestamps = false;
    protected $guarded = [];
}
