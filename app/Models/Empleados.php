<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;
	protected $table='empleados';
	protected $primaryKey='id';
	public $timestamps = false;
	protected $guarded = []; 
	
	
	
	public function citas()
    {
        return $this->hasMany(Citas::class);
    }
	
	public function getNombreCompletoAttribute(){
    	return $this->nombre . ' ' . $this->apellidos;
	}
	
	public function setFotoAttribute($request){
		$foto = base64_encode(file_get_contents($request));
		$this->attributes['foto'] = $foto;
	}
}
