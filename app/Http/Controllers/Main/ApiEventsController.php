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
     * @param $news_service
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
        $data = $request->only('name','short_event','full_event','img','date','expiration','sales_area');
        $data['date'] = date('Y-m-d H:i:s', $data['date']);
        $data['expiration'] = date('Y-m-d H:i:s', $data['expiration']);
        return $this->eventsService->addEvent($data);
    }
}
