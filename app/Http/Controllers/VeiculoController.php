<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VeiculoController extends Controller
{
    public function index()
    {
        $veiculos = Veiculo::where('user_id', Auth::id())->get();
        $totalVeiculos = $veiculos->count();
        $totalProtegidos = $veiculos->where('status', 'Protegido')->count();
        $totalAlertas = $veiculos->where('status', 'Alerta')->count();

        return view('dashboard', compact('veiculos', 'totalVeiculos', 'totalProtegidos', 'totalAlertas'));
    }

    public function create()
    {
        return view('veiculos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'placa' => 'required|string|max:10|unique:veiculos',
            'marca' => 'required|string|max:50',
            'modelo' => 'required|string|max:50',
            'ano' => 'required|digits:4',
            'cor' => 'required|string|max:30',
        ]);

        Veiculo::create([
            'user_id' => Auth::id(),
            'placa' => strtoupper($request->placa),
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'ano' => $request->ano,
            'cor' => $request->cor,
            'status' => 'Protegido',
        ]);

        return redirect()->route('dashboard')->with('success', 'Veículo cadastrado com sucesso!');
    }

    public function destroy(Veiculo $veiculo)
    {
        if ($veiculo->user_id !== Auth::id()) {
            abort(403);
        }

        $veiculo->delete();
        return redirect()->route('dashboard')->with('success', 'Veículo removido com sucesso!');
    }
}