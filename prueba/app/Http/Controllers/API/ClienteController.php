<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function getAllClientes() {
        $data = Cliente::get();

        return response()->json($data ,200);
    }

    public function createClientes(Request $request) {
        $data['idcliente'] = $request['idcliente'];
        $data['nombre'] = $request['nombre'];
        $data['idciudad'] = $request['idciudad'];
        $data['direccion'] = $request['direccion'];
        $data['telefono'] = $request['telefono'];
        $data['creado'] = $request['creado'];
        $data['estado'] = $request['estado'];

        Cliente::create($data);
        return response()->json([
            'message' => "Cliente creado",
            'success' => true
        ], 200);
    }
}
