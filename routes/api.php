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

Route::middleware('auth:api')->get('testapi', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api', 'hasRole:admin')->
    get('admintest', function (){
        return json_encode("Hello Admin");
});

Route::get('/categories','RestController@actionCategories');
Route::post('/categories/add','RestController@actionAddCategory');

Route::post('login', 'Auth\ApiAuthController@actionLogin');
Route::post('login_remember', 'Auth\ApiAuthController@actionLoginRemember');

Route::post('register', 'Auth\ApiAuthController@actionRegister');
Route::get('finalregister/{verificationtoken}', 'Auth\ApiAuthController@actionEmailVerification');

Route::post('user', 'Auth\ApiAuthController@actionUser');
Route::post('roles', 'Auth\ApiAuthController@actionRoles');

Route::get('redirect', function () {
    return redirect('google.com');
});



