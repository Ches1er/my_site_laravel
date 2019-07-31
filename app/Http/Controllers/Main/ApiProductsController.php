<?php

namespace App\Http\Controllers\main;

use App\Contracts\ServiceApiBrands;
use App\Contracts\ServiceApiProducts;
use App\Contracts\ServiceApplyingGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiProductsController extends Controller
{
    private $applyingGroupsService;
    private $brandsService;
    private $productService;

    /**
     * ApiProductsController constructor.
     * @param ServiceApplyingGroup $applyingGroupService
     * @param ServiceApiBrands $brandsService
     * @param ServiceApiProducts $productsService
     */
    public function __construct(
        ServiceApplyingGroup $applyingGroupService,
        ServiceApiBrands $brandsService,
        ServiceApiProducts $productsService
    )
    {
        $this->applyingGroupsService = $applyingGroupService;
        $this->brandsService = $brandsService;
        $this->productService = $productsService;
    }

    // Applying Groups

    public function actionShowApplyingGroups($salesarea){
        return json_encode($this
            ->applyingGroupsService
            ->showApplyingGroups($salesarea));
    }

    public function actionAddApplyingGroup(Request $request){
        $data = $request->only('name','sales_area');
        return $this->applyingGroupsService->addApplyingGroup($data);
    }

    // Brands

    public function actionShowBrands($salesarea){
        return json_encode($this->brandsService
            ->showBrands($salesarea));
    }

    public function actionAddBrand(Request $request){
        $data = $request->only('name','sales_area','img');
        return $this->brandsService->addBrand($data);
    }

        // Products

    //Show

    public function actionShowProduct($id){
        $product = $this->productService->showProduct($id);
        $product->img = explode(',',$product->img);
        return json_encode($product);
    }
    public function actionShowProductsByApplying($id){
        $products = $this->productService->showProductsByApp($id);
        foreach ($products as $product){
            $product->img =  explode(',',$product->img);
        }
        return json_encode($products);
    }
    public function actionShowProductsByBrand($id){
        $products = $this->productService->showProductsByBrand($id);
        foreach ($products as $product){
            $product->img =  explode(',',$product->img);
        }
        return json_encode($products);
    }
}
