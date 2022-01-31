<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Repositories\EventService;
use App\Repositories\KotaService;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private $eventService;
    private $kotaService;

    public function __construct(EventService $eventService, KotaService $kotaService)
    {
        $this->eventService = $eventService;
        $this->kotaService = $kotaService;
    }


    public function index()
    {
        $data = $this->eventService->all();
        return view('admin.event.index', compact('data'));
    }
    public function sidebar()
    {
        $data = $this->eventService->all();
        return view('admin.event.index', compact('data'));
    }


    public function create()
    {
        $kota =  $this->kotaService->selectCity();
        return view('admin.event.create', compact('kota'));
    }


    public function store(Request $request)
    {
        $this->eventService->store($request->all());
        return redirect()->route('event.index')->with('success','Event has success created');
    }


    public function show(Event $event)
    {
        return view('admin.event.show', compact('event'));
    }


    public function edit(Event $event)
    {
        return view('admin.event.edit', compact('event'));
    }


    public function update(Request $request, Event $event)
    {
        $this->eventService->update($request->all(),$event->id);
        return redirect()->route('event.index')->with('success','Event has success updated');
    }


    public function destroy(Event $event)
    {
        $this->eventService->destroy($event->id);
        return redirect()->route('event.index')->with('success','Event has success deleted');
    }
}
