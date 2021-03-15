<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
	protected $table='clientes';
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
}
