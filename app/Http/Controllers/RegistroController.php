<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Animals;
use App\Models\Especie;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //$users = User::all();
    //    return($users);
    // $animales = Animals::all();

    $animales = Animals::select('nombre', 'idespecie')->get();

        return($animales);
        //return view('index');

        //$animales['animales']=animals::paginate(5);

        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$datosanimales=request()->all();

        $datosanimales=request()->except('_token');

        if($request->hasFile('IMG')){

            $datosanimales['IMG']=$request->file('IMG')->store('uploads','public');
        }

        animals::insert($datosanimales);

        return response()->json($datosanimales);
    }

    /**
     * Display the specified resource.
     */
    public function show(Animals $animales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return view('update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return view('delete');
    }
}
