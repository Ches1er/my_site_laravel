<?php

namespace App\Http\Controllers\main;

use App\Configs\RedirectUrlConfigs;
use App\Contracts\ServiceApiEvent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiEventsController extends Controller
{
    protected $eventsService;
    private $redirectUrlConfigs;

    /**
     * ApiNewsController constructor.
     * @param ServiceApiEvent $events_service
     */
    public function __construct(ServiceApiEvent $events_service)
    {
        $this->eventsService = $events_service;
            $this->redirectUrlConfigs = new RedirectUrlConfigs();
    }

    public function actionShowEvents($salesarea){
        return json_encode($this->eventsService->showEvents($salesarea));
    }

    public function actionAddEvent(Request $request){
        $data = $request->only('id','name','short_event','full_event','img','date','expiration','sales_area','action');

        /* From request we`ve got action, depends on this we:
        *  1. Update DB record without changing in 'data' or 'expiration'
        *  2. Add new record where put new date and q-ty of days, when event must be expired */
        if ($data['action']==='update')return json_encode($this->eventsService->addEvent($data));
        // Date come to us in JS format (ms), therefore expiration must be in ms too
        $data['expiration'] = (int)$data['date'] + (int)$data['expiration']*24*60*60*1000;
        $data['date'] = (int)$data['date'];
        return json_encode($this->eventsService->addEvent($data));
    }
}
