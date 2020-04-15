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
use App\Models\Image;
use App\Models\Sales_area;
use App\MyTraits\getObjWithImagesPath;

class DBApiEventsService implements ServiceApiEvent
{
    Use getObjWithImagesPath;
    public function showEvents(string $sales_area)
    {
        if ($sales_area==='all') {
            $events = Event::get();
            return $this->getWithImagesPath($events);
        }

        if ($sales_area === 'pack')$sales_area = SalesAreaConfigs::PACK;
        if ($sales_area === 'building')$sales_area = SalesAreaConfigs::BUILDING;
        $sales_area = Sales_area::where('name',$sales_area)->first();
        $events = Event::where('sales_area_id',$sales_area->id)->orderBy('id','DESC')->get();
        return $this->getWithImagesPath($events);
    }

    public function addEvent(Array $data)
    {
        if (!$data['img']){
            $default_image = Image::where('name','default_news')->first();
            $data['img'] = $default_image->id;
        }
        if (Event::where('name',$data['name'])->first() && $data['action']==='add')return ['response'=>'this event exist'];
        if (Event::updateOrCreate(['id'=>$data['id']],[
            'name'=>$data['name'],
            'short_event'=>$data['short_event'],
            'full_event'=>$data['full_event'],
            'img'=>$data['img'],
            'date'=>$data['date'],
            'expiration'=>$data['expiration'],
            'sales_area_id' => $data['sales_area']
        ])) {
            if ($data['action']==='update')return ['response'=>'update success'];
            return ['response'=>'insert success'];
        };
        return ['response'=>'error'];
    }

    public function delEvent(int $id)
    {
        return ['response'=>'success'];
    }

    public function findEvents(string $findData)
    {
        $events = Event::where('full_event', 'like', '%'.$findData.'%')->get();
        return $events;
    }
}
