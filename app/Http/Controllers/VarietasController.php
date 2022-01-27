<?php

namespace App\Http\Controllers;

use App\Models\Varietas;
use App\Repositories\VarietasService;
use Illuminate\Http\Request;

class VarietasController extends Controller
{
    private $varietasService;

    public function __construct(VarietasService $varietasService)
    {
        $this->varietasService = $varietasService;
    }


    public function index()
    {
        $data = $this->varietasService->all();
        return view('admin.varietas.index', compact('data'));
    }


    public function create()
    {
        return view('admin.varietas.create');
    }


    public function store(Request $request)
    {
        $this->varietasService->store($request->all());
        return redirect()->route('varietas.index')->with('success','Varietas has success created');
    }


    public function show(Varietas $varietas)
    {
        return view('admin.varietas.show', compact('varietas'));
    }


    public function edit(Varietas $varietas)
    {
        return view('admin.varietas.edit', compact('varietas'));
    }


    public function update(Request $request, Varietas $varietas)
    {
        $this->varietasService->update($request->all(),$varietas->id);
        return redirect()->route('varietas.index')->with('success','Varietas has success updated');
    }


    public function destroy(Varietas $varietas)
    {
        $this->varietasService->destroy($varietas->id);
        return redirect()->route('varietas.index')->with('success','Varietas has success deleted');
    }
}