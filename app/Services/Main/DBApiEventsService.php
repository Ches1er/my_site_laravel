<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 22.07.2019
 * Time: 17:12
 */

namespace App\Services\Main;


use App\Configs\SalesAreaConfigs;
use App\Contracts\ServiceApiEvent;
use App\Models\Event;
use App\Models\Sales_area;

class DBApiEventsService implements ServiceApiEvent
{

    public function showEvents(string $sales_area)
    {
        if ($sales_area === 'pack')$sales_area = SalesAreaConfigs::PACK;
        if ($sales_area === 'building')$sales_area = SalesAreaConfigs::BUILDING;
        $sales_area = Sales_area::where('name',$sales_area)->first();
        $events = Event::where('sales_area_id',$sales_area->id)->get();
        return $events;
    }

    public function addEvent(Array $data)
    {
        if ($data['sales_area'] === 'pack')$sales_area = SalesAreaConfigs::PACK;
        if ($data['sales_area'] === 'building')$sales_area = SalesAreaConfigs::BUILDING;
        $sales_area_db = Sales_area::where('name',$sales_area)->first();
        Event::create([
            'name'=>$data['name'],
            'short_event'=>$data['short_event'],
            'full_event'=>$data['full_event'],
            'img'=>$data['img'],
            'date'=>$data['date'],
            'expiration'=>$data['expiration'],
            'sales_area_id' => $sales_area_db->id
        ]);
    }

    public function delEvent(int $id)
    {
        // TODO: Implement delEvent() method.
    }
}
