<?php

namespace App\Http\Controllers;

use App\Http\Resources\NekretnineResource;
use App\Models\Nekretnine;
use Illuminate\Http\Request;

class NekretnineController extends Controller
{
    public function index()
    {
        $nekretnina = Nekretnine::all();
        return NekretnineResource::collection($nekretnina);
    }

    public function store(Request $request)
    {
        return Nekretnine::create($request->all());
    }
    
    public function show($id)
    {
        $nekretnina = Nekretnine::find($id);
        return new NekretnineResource($nekretnina);
    }

    public function update(Request $request, $id)
    {
        $nekretnina = Nekretnine::find($id);
        $nekretnina->update($request->all());
        return $nekretnina;
    }

    public function delete($id_nekretnine)
    {
        return Nekretnine::destroy($id_nekretnine);
    }

    public function search($prom)
    {
        return Nekretnine::where('///....////')->get();
    }
}
