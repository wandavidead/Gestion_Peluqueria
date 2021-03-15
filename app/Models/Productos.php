<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
	protected $table='productos';
	protected $primaryKey='id';
	public $timestamps = false;
	protected $guarded = []; 
	
	public function tratamientos()
    {
 		return $this->belongsToMany(Tratamientos::class,'tratamiento_productos');
    }
	
	public function proveedores()
    {
 		return $this->belongsToMany(Proveedores::class,'productos_proveedores');
    }
	
	public function categorias()
    {
        return $this->belongsTo(Categorias::class, 'categoria_id', 'id');
    }
	
	public function getNombreCompletoAttribute(){
    	return $this->denominacion_producto . ' - ' . $this->precio. '€ Caducidad: ' . $this->fecha_cadu;
	}
	
	public function setFotoAttribute($request){
		$foto = base64_encode(file_get_contents($request));
		$this->attributes['foto'] = $foto;
	}

}
