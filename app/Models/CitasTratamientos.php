<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitasTratamientos extends Model
{
    use HasFactory;
	protected $table='citas_tratamientos';
    public $timestamps = false;
    protected $guarded = [];
	
	public function products()
    {
 return $this->belongsToMany(Product::class,'category_product');
    }
}
