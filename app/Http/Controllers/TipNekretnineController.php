<?php

namespace App\Http\Controllers;

use App\Http\Resources\TipNekretnineResource;
use App\Models\Tip_Nekretnine;
use Illuminate\Http\Request;

class TipNekretnineController extends Controller
{
    public function index()
    {
        $tipNekretnine = Tip_Nekretnine::all();
        return TipNekretnineResource::collection($tipNekretnine);
    }

    public function store(Request $request)
    {
        return Tip_Nekretnine::create($request->all());
    }
    
    public function show($id)
    {
        $tipNekretnine = Tip_Nekretnine::find($id);
        return new TipNekretnineResource($tipNekretnine);
    }

    public function update(Request $request, $id)
    {
        $tipNekretnine = Tip_Nekretnine::find($id);
        $tipNekretnine->update($request->all());
        return $tipNekretnine;
    }

    public function delete($id)
    {
        return Tip_Nekretnine::destroy($id);
    }

    public function search($prom)
    {
        return Tip_Nekretnine::where('///....////')->get();
    }
}
