<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Repositories\EventService;
use Illuminate\Http\Request;

class LandingEventController extends Controller
{
    private $eventService;

    public function __construct(EventService $eventService)
    {
        $this->eventService = $eventService;
    }

    public function getEvent()
    {
        $data = $this->eventService->all();
        return view('landing.events-list', compact('data'));
    }

    public function showEvent($id)
    {
        $data = $this->eventService->getById($id);
        return view('landing.event-details')->with(compact('data'))->with($this->sideBar());
    }

    public function index()
    {
        $data = $this->eventService->getOrderByLimit('tanggal_event','desc');
        return view('landing.index')->with(compact('data'))->with($this->sideBar());
    }
    public function sideBar()
    {
        $data_sidebar = $this->eventService->getOrderByLimit('tanggal_event','desc');
        return compact('data_sidebar');
    }
}
