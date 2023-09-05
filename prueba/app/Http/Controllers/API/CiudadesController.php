<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Ciudades;
use Illuminate\Http\Request;

class CiudadesController extends Controller
{
    //
    public function getAllCiudades() {
        $data = Ciudades::get();

        return response()->json($data ,200);
    }

    public function createCiudades(Request $request) {
        $data['nombre'] = $request['nombre'];
        $data['direccion'] = $request['direccion'];
        $data['telefono'] = $request['telefono'];
        $data['estado'] = $request['estado'];

        Ciudades::create($data);
        return response()->json([
            'message' => "Cliente creado",
            'success' => true
        ], 200);
    }
}
