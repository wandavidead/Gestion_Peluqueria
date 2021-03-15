<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductosProveedores extends Model
{
    use HasFactory;
	protected $table='productos_proveedores';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];
}
