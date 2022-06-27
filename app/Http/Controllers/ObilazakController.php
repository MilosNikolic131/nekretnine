<?php

namespace App\Http\Controllers;

use App\Http\Resources\ObilazakResource;
use App\Models\Obilazak;
use Illuminate\Http\Request;

class ObilazakController extends Controller
{
    public function index()
    {
        $obilazak = Obilazak::all();
        return ObilazakResource::collection($obilazak);
    }

    public function store(Request $request)
    {
        return Obilazak::create($request->all());
    }
    
    public function show($id)
    {
        $obilazak = Obilazak::find($id);
        return new ObilazakResource($obilazak);
    }

    public function update(Request $request, $id)
    {
        $obilazak = Obilazak::find($id);
        $obilazak->update($request->all());
        return $obilazak;
    }

    public function delete($id)
    {
        return Obilazak::destroy($id);
    }

    public function search($prom)
    {
        return Obilazak::where('///....////')->get();
    }
}
