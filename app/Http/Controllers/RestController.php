<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Contracts\CategoryServiceContracts;
use Illuminate\Http\Request;

class RestController extends Controller
{
    protected $categoryService;

    /**
     * RestController constructor.
     * @param CategoryServiceContracts $categoryService
     */
    public function __construct(CategoryServiceContracts $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function actionCategories(){
        return $this->categoryService->Categories();

    }
    public function actionAddCategory(Request $request){
        return $this->categoryService
            ->AddCategory($request->post('name'),$request->post('user_id'));
    }
}
