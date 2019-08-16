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
        $action = $request->only('action');
        if ($action['action'] === 'add') $data = $request->only('name','sales_area','action');
        if ($action['action'] === 'update') $data = $request->only('id','name','sales_area','action');
        return json_encode($this->applyingGroupsService->addApplyingGroup($data));
    }

    // Brands

    public function actionShowBrands($salesarea){
        return json_encode($this->brandsService
            ->showBrands($salesarea));
    }

    public function actionAddBrand(Request $request){
        /* Client give us request without img, in service set img by default
        * In perspective we can send with request img.
        */
        $action = $request->only('action');
        if ($action['action'] === 'add') $data = $request->only('name','sales_area','action');
        if ($action['action'] === 'update') $data = $request->only('id','name','sales_area','action','active');
        return json_encode($this->brandsService->addBrand($data));
    }

        // Products

    //Show

    public function actionShowAllProducts()
    {
        $products = $this->productService->showAllProducts();
        return json_encode($products);
    }
    public function actionShowProduct($id){
        $product = $this->productService->showProduct($id);
        return json_encode($product[0]);
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
    public function actionAddProduct(Request $request){
        $data = $request->only('id','action','name', 'brandId', 'active','img','tech_info','applying_group','salesArea');
        return json_encode($this->productService->addUpdateProduct($data));
    }
}
