<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Repositories\EntryService;
use App\Repositories\EventService;
use App\Repositories\HandlerService;
use App\Repositories\KategoriService;
use App\Repositories\KotaService;
use App\Repositories\VarietasService;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    private $entryService;
    private $varietasService;
    private $kategoriService;
    private $kotaService;
    private $handlerService;
    private $eventService;

    public function __construct(EntryService $entryService, VarietasService $varietasService, KategoriService $kategoriService, KotaService $kotaService, HandlerService $handlerService, EventService $eventService, )
    {
        $this->entryService = $entryService;
        $this->varietasService = $varietasService;
        $this->kategoriService = $kategoriService;
        $this->kotaService = $kotaService;
        $this->handlerService = $handlerService;
        $this->eventService = $eventService;
    }


    public function index()
    {
        $data = $this->entryService->all();
        return view('admin.entry.index', compact('data'));
    }


    public function create()
    {
        $kategori = $this->kategoriService->selectKategori();
        $varietas = $this->varietasService->selectVarietas();
        $kota = $this->kotaService->selectCity();
        $handler = $this->handlerService->selectHandler();
        $event = $this->eventService->selectEvent();
        return view('admin.entry.create',compact('kategori','varietas','kota','handler','event'));
    }


    public function store(Request $request)
    {
        $this->entryService->store($request->all());
        return redirect()->route('entry.index')->with('success','Entry has success created');
    }


    public function show(Entry $entry)
    {
        return view('admin.entry.show', compact('entry'));
    }


    public function edit(Entry $entry)
    {
        return view('admin.entry.edit', compact('entry'));
    }


    public function update(Request $request, Entry $entry)
    {
        $this->entryService->update($request->all(),$entry->id);
        return redirect()->route('entry.index')->with('success','Entry has success updated');
    }


    public function destroy(Entry $entry)
    {
        $this->entryService->destroy($entry->id);
        return redirect()->route('entry.index')->with('success','Entry has success deleted');
    }
}
