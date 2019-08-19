<?php

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

        //TEST

Route::middleware('auth:api')->get('testapi', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api', 'hasRole:admin')->
    get('admintest', function (){
        return json_encode("Hello Admin");
});

        //AUTH

Route::get('/categories','RestController@actionCategories');
Route::post('/categories/add','RestController@actionAddCategory');

Route::post('login', 'Auth\ApiAuthController@actionLogin');
Route::post('login_remember', 'Auth\ApiAuthController@actionLoginRemember');

Route::post('register', 'Auth\ApiAuthController@actionRegister');
Route::get('finalregister/{verificationtoken}', 'Auth\ApiAuthController@actionEmailVerification');

Route::post('user', 'Auth\ApiAuthController@actionUser');
Route::post('roles', 'Auth\ApiAuthController@actionRoles');
Route::post('is_admin', 'Auth\ApiAuthController@actionIsAdmin');

    //NEWS

Route::get('news', 'Main\ApiNewsController@actionShowAllNews');
Route::get('news/{salesarea}', 'Main\ApiNewsController@actionShowNews');

// todo add/del route with admin middleware
//Route::middleware('auth:api', 'hasRole:admin')->post('news/add', 'Main\ApiNewsController@actionAddNews');
Route::post('news/add', 'Main\ApiNewsController@actionAddNews');
Route::middleware('auth:api', 'hasRole:admin')->post('news/del', 'Main\ApiNewsController@actionDelNews');

    //EVENTS

Route::get('events/{salesarea?}','Main\ApiEventsController@actionShowEvents');
// todo add/del route with admin middleware
Route::post('events/add', 'Main\ApiEventsController@actionAddEvent');

    //GOODS

    //Sales_area

Route::get('salesarea','Main\ApiSalesAreaController@actionSalesAreas');
//Route::get('salesarea/{id}','Main\ApiSalesAreaController@actionSalesArea');

    //Applying_groups

Route::get('applying_groups/{salesarea}','Main\ApiProductsController@actionShowApplyingGroups');
// todo add/del route with admin middleware
Route::post('applying_groups/add','Main\ApiProductsController@actionAddApplyingGroup');

    //Brands

Route::get('brands/{salesarea}','Main\ApiProductsController@actionShowBrands');
// todo add/del route with admin middleware
Route::post('brands/add','Main\ApiProductsController@actionAddBrand');

    //Products
Route::get('products/all','Main\ApiProductsController@actionShowAllProducts');
Route::get('products/{id}','Main\ApiProductsController@actionShowProduct');
Route::get('products/applying/{id}','Main\ApiProductsController@actionShowProductsByApplying');
Route::get('products/brand/{id}','Main\ApiProductsController@actionShowProductsByBrand');
Route::post('products/add', 'Main\ApiProductsController@actionAddProduct');

    //Clients

Route::get('client/{id}','Main\ApiClientsController@actionShowClient');
Route::get('clients/{salesarea}','Main\ApiClientsController@actionShowClients');
Route::post('client/add','Main\ApiClientsController@actionAddClient');

    //Objects

Route::get('object/{id}','Main\ApiObjectsController@actionShowObject');
Route::get('objects','Main\ApiObjectsController@actionShowObjects');

    //Images
Route::get('images','Main\ApiImagesController@actionGetAllImages');
Route::get('image/{name}','Main\ApiImagesController@actionGetImage');
Route::post('images/upload_image','Main\ApiImagesController@actionUploadImage');

    //Branches

Route::get('branches','Main\ApiContactsController@actionShowBranches');

    //Solutions
Route::get('solutions','Main\ApiSolutionController@actionShowSolutions');
Route::post('solutions/add','Main\ApiSolutionController@actionAddSolution');





