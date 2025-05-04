<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $datos['empleados'] = Empleado::paginate(5);

        return view('empleados.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage
     */
    public function store(Request $request)
    {

        $datosEmpleado = request()->except('_token');

        if ($request->hasFile('Foto')) {

            $datosEmpleado['Foto'] = $request->file('Foto')->store('uploads', 'public');
        }

        Empleado::insert($datosEmpleado);
        return redirect('empleado')->width('mensaje','empleado agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $empleado = Empleado::findOrFail($id);
        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        $datosEmpleado = request()->except('_token', '_method');

        if($request->hasFile('Foto')){
            if($empleado->Foto){
                Storage::delete('public/'.$empleado->Foto);
            }
            $datosEmpleado['Foto']=$request->file('Foto')->store('uploads', 'public');
        }
    
        $empleado->update($datosEmpleado);

        
        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $empleado = Empleado::findOrFail($id);

        if(Storage::delete('public/'.$empleado->Foto)){
            Empleado::destroy($id);

        }

        Empleado::destroy($id);
        return redirect('empleado')->with('mensaje','empleado eliminado');
    }
}
