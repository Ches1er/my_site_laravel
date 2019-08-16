<?php

namespace App\Http\Controllers\Main;

use App\Contracts\ServiceApiSolutions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiSolutionController extends Controller
{
    protected $solutionService;

    /**
     * ApiSolutionController constructor.
     * @param ServiceApiSolutions $solutionService
     */
    public function __construct(ServiceApiSolutions $solutionService)
    {
        $this->solutionService = $solutionService;
    }

    public function actionShowSolutions(){
        return json_encode($this->solutionService->showSolutions());
    }
}
