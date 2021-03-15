<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TratamientoProducto extends Model
{
    use HasFactory;
	protected $table='tratamiento_productos';
    public $timestamps = false;
    protected $guarded = [];
	
	
}
