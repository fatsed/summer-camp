<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\panel\CreateController;
use App\Http\Controllers\panel\DeleteController;
use App\Http\Controllers\panel\EditController;
use App\Http\Controllers\panel\ShowAllController;
use App\Http\Controllers\summer\SummerController;
//use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Gate;
use \App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use \App\Http\Controllers\ApiController;

Auth::routes();

////----------------------------------  Home Controllers  ----------------------------------------------
Route::get('/',[HomeController::class,'index'])->middleware('auth')->name('home');
Route::get('/home',[HomeController::class,'index'])->middleware('auth');
//----------------------------------  Admin Routs  ----------------------------------------------

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function (){

    Route::get('/panel',[HomeController::class,'Admin']);

    //----------------------------------  Create Controllers  ----------------------------------------------
    Route::get('/panel/user/create.blade.php',[CreateController::class,'User'])->middleware('can:create-user');
    Route::post('/panel/user/create.blade.php',[CreateController::class,'AddUser'])->middleware('can:create-user');
    Route::get('/panel/about/create.blade.php',[CreateController::class,'About']);
    Route::post('/panel/about/create.blade.php',[CreateController::class,'AddAbout']);
    Route::get('/panel/akhbar/create.blade.php',[CreateController::class,'Akhbar']);
    Route::post('/panel/akhbar/create.blade.php',[CreateController::class,'AddAkhbar']);
    Route::get('/panel/article/create.blade.php',[CreateController::class,'Article']);
    Route::post('/panel/article/create.blade.php',[CreateController::class,'AddArticle']);
    Route::get('/panel/gender/create.blade.php',[CreateController::class,'Gender']);
    Route::post('/panel/gender/create.blade.php',[CreateController::class,'AddGender']);
    Route::get('/panel/order/create.blade.php',[CreateController::class,'Order']);
    Route::post('/panel/order/create.blade.php',[CreateController::class,'AddOrder']);
    Route::get('/panel/tourguide/create.blade.php',[CreateController::class,'Tourguid']);
    Route::post('/panel/tourguide/create.blade.php',[CreateController::class,'AddTourguid']);
    Route::get('/panel/travel/create.blade.php',[CreateController::class,'Travel']);
    Route::post('/panel/travel/create',[CreateController::class,'ADDtravel']);
    Route::get('/panel/activites/create.blade.php',[CreateController::class,'Activite']);
    Route::post('/panel/activites/create.blade.php',[CreateController::class,'ADDActivite']);
    Route::get('/panel/event/create.blade.php',[CreateController::class,'Event']);
    Route::post('/panel/event/create.blade.php',[CreateController::class,'ADDEvent']);
    Route::get('/panel/gallery/create.blade.php',[CreateController::class,'Gallery']);
    Route::post('/panel/gallery/create.blade.php',[CreateController::class,'ADDGallery']);

    Route::get('/panel/user/edit.blade.php/{id}',[EditController::class,'Edituser'])->middleware('can:edit-user');
    Route::post('/panel/user/edit.blade.php/{id}',[EditController::class,'Editusers'])->middleware('can:edit-user');
    Route::get('/panel/about/edit.blade.php/{id}',[EditController::class,'EditAbout']);
    Route::post('/panel/about/edit.blade.php/{id}',[EditController::class,'EditAbouts']);
    Route::get('/panel/akhbar/edit.blade.php/{id}',[EditController::class,'EditAkhbar']);
    Route::post('/panel/akhbar/edit.blade.php/{id}',[EditController::class,'EditAkhbars']);
    Route::get('/panel/article/edit.blade.php/{id}',[EditController::class,'EditArticle']);
    Route::post('/panel/article/edit.blade.php/{id}',[EditController::class,'EditArticles']);
    Route::get('/panel/gender/edit.blade.php/{id}',[EditController::class,'EditGender']);
    Route::post('/panel/gender/edit.blade.php/{id}',[EditController::class,'EditGenders']);
    Route::get('/panel/order/edit.blade.php/{id}',[EditController::class,'Editorder']);
    Route::post('/panel/order/edit.blade.php/{id}',[EditController::class,'Editorders']);
    Route::get('/panel/tourguide/edit.blade.php/{id}',[EditController::class,'Edittourguide']);
    Route::post('/panel/tourguide/edit.blade.php/{id}',[EditController::class,'Edittourguides']);
    Route::get('/panel/travel/edit.blade.php/{id}',[EditController::class,'Edittrsvel']);
    Route::post('/panel/travel/edit.blade.php/{id}',[EditController::class,'Edittravels']);
    Route::get('/panel/activites/edit.blade.php/{id}',[EditController::class,'Editactivite']);
    Route::post('/panel/activites/edit.blade.php/{id}',[EditController::class,'Editactivites']);
    Route::get('/panel/event/edit.blade.php/{id}',[EditController::class,'EditEvent']);
    Route::post('/panel/event/edit.blade.php/{id}',[EditController::class,'EditEvents']);
    Route::get('/panel/gallery/edit.blade.php/{id}',[EditController::class,'Editgallery']);
    Route::post('/panel/gallery/edit.blade.php/{id}',[EditController::class,'Editgalleries']);

    Route::get('/panel/user/delete.blade.php/{id}',[DeleteController::class,'DeleteUser'])->middleware('can:delete-user');
    Route::post('/panel/user/delete.blade.php/{id}',[DeleteController::class,'DeleteUsers']);
    Route::get('/panel/contact/delete.blade.php/{id}',[DeleteController::class,'DeleteContact']);
    Route::post('/panel/contact/delete.blade.php/{id}',[DeleteController::class,'DeleteContacts']);
    Route::get('/panel/about/delete.blade.php/{id}',[DeleteController::class,'DeleteAbout']);
    Route::post('/panel/about/delete.blade.php/{id}',[DeleteController::class,'DeleteAbouts']);
    Route::get('/panel/akhbar/delete.blade.php/{id}',[DeleteController::class,'DeleteAkhbar']);
    Route::post('/panel/akhbar/delete.blade.php/{id}',[DeleteController::class,'DeleteAkhbars']);
    Route::get('/panel/article/delete.blade.php/{id}',[DeleteController::class,'DeleteArticle']);
    Route::post('/panel/article/delete.blade.php/{id}',[DeleteController::class,'DeleteArticles']);
    Route::get('/panel/gender/delete.blade.php/{id}',[DeleteController::class,'DeleteGender']);
    Route::post('/panel/gender/delete.blade.php/{id}',[DeleteController::class,'DeleteGenders']);
    Route::get('/panel/order/delete.blade.php/{id}',[DeleteController::class,'DeleteOrder']);
    Route::post('/panel/order/delete.blade.php/{id}',[DeleteController::class,'DeleteOrders']);
    Route::get('/panel/tourguide/delete.blade.php/{id}',[DeleteController::class,'Deletetourguide']);
    Route::post('/panel/tourguide/delete.blade.php/{id}',[DeleteController::class,'Deletetourguides']);
    Route::get('/panel/travel/delete.blade.php/{id}',[DeleteController::class,'Deletetravel']);
    Route::post('/panel/travel/delete.blade.php/{id}',[DeleteController::class,'Deletetravels']);
    Route::get('/panel/activites/delete.blade.php/{id}',[DeleteController::class,'Deleteactivite']);
    Route::post('/panel/activites/delete.blade.php/{id}',[DeleteController::class,'Deleteactivites']);
    Route::get('/panel/event/delete.blade.php/{id}',[DeleteController::class,'Deleteevent']);
    Route::post('/panel/event/delete.blade.php/{id}',[DeleteController::class,'Deleteevents']);
    Route::get('/panel/gallery/delete.blade.php/{id}',[DeleteController::class,'Deletegallery']);
    Route::post('/panel/gallery/delete.blade.php/{id}',[DeleteController::class,'Deletegalleries']);


    Route::get('/panel/permission/showall.blade.php',[PermissionController::class,'index']);
    Route::get('/panel/permission/create.blade.php',[PermissionController::class,'create']);
    Route::post('/panel/permission/create.blade.php',[PermissionController::class,'createPer']);
    Route::get('/panel/permission/edit.blade.php/{id}',[PermissionController::class,'Editpermission']);
    Route::post('/panel/permission/edit.blade.php/{id}',[PermissionController::class,'Editpermissions']);
    Route::get('/panel/permission/delete.blade.php/{id}',[PermissionController::class,"destroy"]);
    Route::post('/panel/permission/delete.blade.php/{id}',[PermissionController::class,'DeletePermission']);

    Route::get('/panel/role/showall.blade.php',[RoleController::class,'index']);
    Route::get('/panel/role/create.blade.php',[RoleController::class,'create']);
    Route::post('/panel/role/create.blade.php',[RoleController::class,'createRole']);
    Route::get('/panel/role/edit.blade.php/{id}',[RoleController::class,'EditRole']);
    Route::post('/panel/role/edit.blade.php/{id}',[RoleController::class,'EditRoles']);
    Route::get('/panel/role/delete.blade.php/{id}',[RoleController::class,"destroy"]);
    Route::post('/panel/role/delete.blade.php/{id}',[RoleController::class,'DeleteRole']);

    Route::get('/user/{user}/permissions',[\App\Http\Controllers\Admin\User\PermissionController::class,'create'])
        ->name('users.permissions')->middleware('can:staff-user-permissions');
    Route::post('/user/{user}/permissions',[\App\Http\Controllers\Admin\User\PermissionController::class,'store'])
        ->name('users.permissions.store')->middleware('can:show-user');;
});

//----------------------------------  ShowAll Controllers  ----------------------------------------------

Route::get('/admin/panel/user/showall.blade.php',[ShowAllController::class,'ShowallUser'])->middleware('can:show-user');
Route::get('/admin/panel/contact/showall.blade.php',[ShowAllController::class,'ShowAllContact']);
Route::post('/admin/panel/contact/showall.blade.php',[CreateController::class,'AddResponse']);
Route::get('/admin/panel/about/showall.blade.php',[ShowAllController::class,'ShowAllAbout']);
Route::get('/admin/panel/akhbar/showall.blade.php',[ShowAllController::class,'ShowAllAkhbar']);
Route::get('/admin/panel/article/showall.blade.php',[ShowAllController::class,'ShowallArticle']);
Route::get('/admin/panel/gender/showall.blade.php',[ShowAllController::class,'ShowallGender']);
Route::get('/admin/panel/order/showall.blade.php',[ShowAllController::class,'Showallorder']);
Route::get('/admin/panel/tourguide/showall.blade.php',[ShowAllController::class,'Showalltoutguid']);
Route::get('/admin/panel/travel/showall.blade.php',[ShowAllController::class,'Showalltravel']);
Route::get('/admin/panel/activites/showall.blade.php',[ShowAllController::class,'ShowallAvtivite']);
Route::get('/admin/panel/event/showall.blade.php',[ShowAllController::class,'ShowallEvent']);
Route::get('/admin/panel/gallery/showall.blade.php',[ShowAllController::class,'Showallgallery']);

Route::get('/contact',[HomeController::class,'Contact']);
//Route::get('/contact',[HomeController::class,'AddContact']);

Route::get('/vacation',[SummerController::class,'Vacation']);
Route::get('/gallery',[SummerController::class,'Gallery']);
Route::get('/tourguide',[SummerController::class,'TourGuide']);
Route::get('/event',[SummerController::class,'Event']);
Route::get('/about',[SummerController::class,'AboutUs']);
