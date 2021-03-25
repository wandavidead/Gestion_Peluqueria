<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clientes;
use App\Models\Empleados;

class Citas extends Model
{
    use HasFactory;
	protected $table='citas';
	protected $primaryKey='id';
	public $timestamps = false;
	protected $guarded = []; 
	
	public function clientes()
    {
        return $this->belongsTo(Clientes::class, 'cliente_id', 'id');
    }
	
	public function empleados()
    {
        return $this->belongsTo(Empleados::class,'empleado_id', 'id');
    }
	
	public function tratamientos()
    {
        return $this->belongsToMany(Tratamientos::class,'citas_tratamientos');
    }

    public function gettiempoAttribute(){
        $timestamp = $this->fecha_cita;
        $datetime = explode(" ",$timestamp);
        return $time = $datetime[1];
	}
}
