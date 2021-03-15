<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\contact;
use App\Models\Mensajes;

class MensajesController extends Controller
{
    public function contact(Request $request)
    {
		Mensajes::create($request->all());
    }
}
