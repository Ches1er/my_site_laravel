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
use App\Models\Image;
use App\Models\News;
use App\Models\Sales_area;
use App\MyTraits\getObjWithImagesPath;

class DBApiNewsService implements ServiceApiNews
{
    Use getObjWithImagesPath;

    public function showNews(string $sales_area)
    {
        if ($sales_area === 'pack')$sales_area = SalesAreaConfigs::PACK;
        if ($sales_area === 'building')$sales_area = SalesAreaConfigs::BUILDING;
        $sales_area = Sales_area::where('name',$sales_area)->first();
        $news = News::where('sales_area_id',$sales_area->id)->orderBy('id','DESC')->get();
        return $this->getWithImagesPath($news);
    }

    public function addNews(Array $data)
    {
        if (!$data['img']){
            $default_image = Image::where('name','default_news')->first();
            $data['img'] = $default_image->id;
        }
        if (News::where('name',$data['name'])->first() && $data['action']==='add')return ['response'=>'this news exist'];
        if (News::updateOrCreate(['id'=>$data['id']],
            [
                'name' => $data['name'],
                'short_news'=>$data['short_news'],
                'full_news'=>$data['full_news'],
                'img'=>(string)$data['img'],
                'date'=>$data['date'],
                'sales_area_id' => $data['salesArea']
            ]
        )){
            if ($data['action']==='update')return ['response'=>'update success'];
            return ['response'=>'insert success'];
        }
        return ['response'=>'error'];
    }

    public function delNews(int $id)
    {
        return ['response'=>'success'];
    }

    public function showAllNews()
    {
        $news = News::orderBy('id','DESC')->get();
        return $this->getWithImagesPath($news);
    }

    public function showFindedNews(string $findData)
    {
        $news = News::where('full_news', 'like', '%'.$findData.'%')->get();
        return $news;
    }
}
