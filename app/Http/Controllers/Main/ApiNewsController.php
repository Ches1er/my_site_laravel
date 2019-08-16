<?php

namespace App\Http\Controllers\Main;

use App\Configs\RedirectUrlConfigs;
use App\Contracts\ServiceApiNews;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiNewsController extends Controller
{
    protected $newsService;
    private $redirectUrlConfigs;

    /**
     * ApiNewsController constructor.
     * @param $news_service
     */
    public function __construct(ServiceApiNews $news_service)
    {
        $this->newsService = $news_service;
        $this->redirectUrlConfigs = new RedirectUrlConfigs();
    }

    public function actionShowAllNews(){
        return json_encode($this->newsService->showAllNews());
    }
    public function actionShowNews($salesarea){
        return json_encode($this->newsService->showNews($salesarea));
    }

    public function actionAddNews(Request $request){
        $data = $request->only('id','name','short_news','full_news','img','salesArea','action');
        $data['date'] = time();
        return json_encode($this->newsService->addNews($data));
    }

}
