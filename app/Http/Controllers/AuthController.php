<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Korisnik;
use App\Models\Nekretnine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $polja = $request->validate([
            'ime_i_prezime' => 'required|string',
            'password' => 'required|string',
            'JMBG' => 'required|string'
        ]);

        $agent = Agent::create([
            'ime_i_prezime' => $polja['ime_i_prezime'],
            'password' => bcrypt($polja['password']),
            'JMBG' => $polja['JMBG']
        ]);

        $token = $agent->createToken('aplikacijatoken')->plainTextToken;
        $response = [
            'agent' => $agent,
            'token' => $token
        ];
        return response($response, 201);
    }

    public function registerkorisnik(Request $request)
    {
        $polja = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $korisnik = Korisnik::create([
            'email' => $polja['email'],
            'password' => bcrypt($polja['password']),
        ]);

        $token = $korisnik->createToken('aplikacijatoken')->plainTextToken;
        $response = [
            'agent' => $korisnik,
            'token' => $token
        ];
        return response($response, 201);
    }

    public function login(Request $request)
    {
        $polja = $request->validate([
            'JMBG' => 'required|string',
            'password' => 'required|string'
        ]);
        $agent = Agent::where('JMBG', $polja['JMBG'])->first();
        
        if (!$agent || !Hash::check($polja['password'], $agent->password)) {
            return response([
                'message' => 'Pogresan JMBG ili sifra'
            ], 401);
        }

        $token = $agent->createToken('aplikacijatoken')->plainTextToken;
        $response = [
            'korisnik' => $agent,
            'token' => $token
        ];
        return response($response, 201);
    }

    public function loginkorisnik(Request $request)
    {
        $polja = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        $korisnik = Korisnik::where('email', $polja['email'])->first();
        
        if (!$korisnik || !Hash::check($polja['password'], $korisnik->password)) {
            return response([
                'message' => 'Pogresan JMBG ili sifra'
            ], 401);
        }

        $token = $korisnik->createToken('aplikacijatoken')->plainTextToken;
        $response = [
            'korisnik' => $korisnik,
            'token' => $token
        ];
        return response($response, 201);
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Izlogovani ste'
        ];
    }

    public function dodajNekretninu(Request $request){
        $polja = $request->validate([
            'Adresa' => 'required|string',
            'cena_po_kvadratu' => 'required|double',
            'tip_nekretnine' => 'required',
            'agent_zaduzen_za_nekretninu' => 'required'
        ]);
        $nekretnina = Nekretnine::create([
            'Adresa' => $polja['Adresa'],
            'cena_po_kvadratu' => $polja['cena_po_kvadratu'],
            'tip_nekretnine' => $polja['tip_nekretnine'],
            'agent_zaduzen_za_nekretninu' => $polja['agent_zaduzen_za_nekretninu']
        ]);
        $response = [
            'agent' => $nekretnina
        ];
        return response($response, 201);
    }
}
