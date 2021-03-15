<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
	protected $table='usuarios';
	protected $primaryKey='id';
	public $timestamps = false;
	protected $guarded = []; 
}
