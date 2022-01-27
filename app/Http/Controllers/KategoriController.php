<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Repositories\KategoriService;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    private $kategoriService;

    public function __construct(KategoriService $kategoriService)
    {
        $this->kategoriService = $kategoriService;
    }


    public function index()
    {
        $data = $this->kategoriService->all();
        return view('admin.kategori.index', compact('data'));
    }


    public function create()
    {
        return view('admin.kategori.create');
    }


    public function store(Request $request)
    {
        $this->kategoriService->store($request->all());
        return redirect()->route('kategori.index')->with('success','Kategori has success created');
    }


    public function show(Kategori $kategori)
    {
        return view('admin.kategori.show', compact('kategori'));
    }


    public function edit(Kategori $kategori)
    {
        return view('admin.kategori.edit', compact('kategori'));
    }


    public function update(Request $request, Kategori $kategori)
    {
        $this->kategoriService->update($request->all(),$kategori->id);
        return redirect()->route('kategori.index')->with('success','Kategori has success updated');
    }


    public function destroy(Kategori $kategori)
    {
        $this->kategoriService->destroy($kategori->id);
        return redirect()->route('kategori.index')->with('success','Kategori has success deleted');
    }
}