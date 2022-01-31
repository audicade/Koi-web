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

    public function rekap($id)
    {
        $data = $this->entryService->getByIdEvent('id_event',$id);
        $rekap = $this->event->entry();
        return view('rekap-data.index', compact('data','rekap'));
    }

}
