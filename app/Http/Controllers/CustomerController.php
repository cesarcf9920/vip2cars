<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CustomerController;
use App\Http\Requests\CustomerRequest;
use App\Entities\Cliente;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{

    public function __construct()
    {        
    }

    public function index()
    {
        return view('cliente.index');
    }

    public function load()
    {
        $clientes = Cliente::all();
            
        return view('cliente.partials.load', compact('clientes'));
    }

    public function create()
    {
        return view('cliente.modals.create');
    }

    public function store(CustomerRequest $request)
    {
        DB::beginTransaction();
        try {
            Cliente::create($request->all());
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();

            abort(500);
        }

        return response()->json(true);
    }

    public function edit(Cliente $cliente)
    {
        return view('cliente.modals.edit', compact('cliente'));
    }

    public function update(CustomerRequest $request, Cliente $cliente)
    {
        DB::beginTransaction();
        try {
            $cliente->update($request->all());  
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            abort(500);
        }

        return response()->json(true);
    }

    public function show(Cliente $cliente)
    {
        return view('cliente.modals.show', compact('cliente'));
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return response()->json(true);
    }
}
