<?php

namespace App\Http\Controllers;

use App\Models\Handler;
use App\Repositories\HandlerService;
use Illuminate\Http\Request;

class HandlerController extends Controller
{
    private $handlerService;

    public function __construct(HandlerService $handlerService)
    {
        $this->handlerService = $handlerService;
    }


    public function index()
    {
        $data = $this->handlerService->all();
        return view('admin.handler.index', compact('data'));
    }


    public function create()
    {
        return view('admin.handler.create');
    }


    public function store(Request $request)
    {
        $this->handlerService->store($request->all());
        return redirect()->route('handler.index')->with('success','Handler has success created');
    }


    public function show(Handler $handler)
    {
        return view('admin.handler.show', compact('handler'));
    }


    public function edit(Handler $handler)
    {
        return view('admin.handler.edit', compact('handler'));
    }


    public function update(Request $request, Handler $handler)
    {
        $this->handlerService->update($request->all(),$handler->id);
        return redirect()->route('handler.index')->with('success','Handler has success updated');
    }


    public function destroy(Handler $handler)
    {
        $this->handlerService->destroy($handler->id);
        return redirect()->route('handler.index')->with('success','Handler has success deleted');
    }
}