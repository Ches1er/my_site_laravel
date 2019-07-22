<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 19.07.2019
 * Time: 16:10
 */

namespace App\Services\Main;

use App\Configs\SalesAreaConfigs;
use App\Contracts\ServiceApiNews;
use App\Models\News;
use App\Models\Sales_area;

class DBApiNewsService implements ServiceApiNews
{

    public function showNews(string $sales_area)
    {
        if ($sales_area === 'pack')$sales_area = SalesAreaConfigs::PACK;
        if ($sales_area === 'building')$sales_area = SalesAreaConfigs::BUILDING;
        $sales_area = Sales_area::where('name',$sales_area)->first();
        $news = News::where('sales_area_id',$sales_area->id)->get();
        return $news;
    }

    public function addNews(Array $data)
    {
        if ($data['sales_area'] === 'pack')$sales_area = SalesAreaConfigs::PACK;
        if ($data['sales_area'] === 'building')$sales_area = SalesAreaConfigs::BUILDING;
        $sales_area_db = Sales_area::where('name',$sales_area)->first();
        News::create([
            'name'=>$data['name'],
            'short_news'=>$data['short_news'],
            'full_news'=>$data['full_news'],
            'img'=>$data['img'],
            'date'=>$data['date'],
            'sales_area_id' => $sales_area_db->id
        ]);
    }

    public function delNews(int $id)
    {
        // TODO: Implement delNew() method.
    }
}
