<?php

namespace App\Http\Controllers;

use App\Http\Resources\AgentResource;
use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index()
    {
        $agent = Agent::all();
        return AgentResource::collection($agent);
    }

    public function store(Request $request)
    {
        return Agent::create($request->all());
    }
    
    public function show($id)
    {
        $agent = Agent::find($id);
        return new AgentResource($agent);
    }

    public function update(Request $request, $id)
    {
        $agent = Agent::find($id);
        $agent->update($request->all());
        return $agent;
    }

    public function delete($id)
    {
        return Agent::destroy($id);
    }

    public function search($prom)
    {
        return Agent::where('///....////')->get();
    }
}
