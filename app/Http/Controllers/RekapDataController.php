<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Repositories\EntryService;
use App\Repositories\EventService;
use App\Repositories\HandlerService;
use App\Repositories\KategoriService;
use App\Repositories\KotaService;
use App\Repositories\VarietasService;
use Illuminate\Http\Request;

class RekapDataController extends Controller
{
    private $eventService;
    private $event;

    public function __construct(EventService $eventService, HandlerService $handlerService, EntryService $entryService, KategoriService $kategoriService, KotaService $kotaService, VarietasService $varietasService)
    {
        $this->event = new Event;
        $this->eventService = $eventService;
        $this->handlerService = $handlerService;
        $this->entryService = $entryService;
        $this->kategoriService = $kategoriService;
        $this->kotaService = $kotaService;
        $this->varietasService = $varietasService;
    }

    public function rekap(int $id)
    {
        $data_event = $this->event->where('id',$id)->get('nama_event');
        $rekap_event = $this->entryService->getByIdEvent($id);
        return view('rekap-data.rekap')
                ->with(compact('data_event'))
                ->with(compact('rekap_event'));
    }

}
