<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tratamientos extends Model
{
    use HasFactory;
	protected $table='tratamientos';
	protected $primaryKey='id';
	public $timestamps = false;
	protected $guarded = []; 
	
	public function citas()
    {
 		return $this->belongsToMany(Citas::class,'citas_tratamientos');
    }
	
	public function productos()
    {
 		return $this->belongsToMany(Productos::class,'tratamiento_productos');
    }
	
	public function getNombreCompletoAttribute(){
    	return $this->denominacion . ' - ' . $this->precio. '€';
	}
}
