<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Repositories\KotaService;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    private $kotaService;

    public function __construct(KotaService $kotaService)
    {
        $this->kotaService = $kotaService;
    }


    public function index()
    {
        $data = $this->kotaService->all();
        return view('admin.kota.index', compact('data'));
    }


    public function create()
    {
        return view('admin.kota.create');
    }


    public function store(Request $request)
    {
        $this->kotaService->store($request->all());
        return redirect()->route('kota.index')->with('success','Kota has success created');
    }


    public function show(Kota $kota)
    {
        return view('admin.kota.show', compact('kota'));
    }


    public function edit(Kota $kota)
    {
        return view('admin.kota.edit', compact('kota'));
    }


    public function update(Request $request, Kota $kota)
    {
        $this->kotaService->update($request->all(),$kota->id);
        return redirect()->route('kota.index')->with('success','Kota has success updated');
    }


    public function destroy(Kota $kota)
    {
        $this->kotaService->destroy($kota->id);
        return redirect()->route('kota.index')->with('success','Kota has success deleted');
    }
}