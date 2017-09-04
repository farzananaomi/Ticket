

<?php
Route::resource('users', UserController::class);
Route::get('ajax/pop', ['as' => 'ajax.pop', 'uses' => 'AjaxController@getPop']);
Route::get('ajax/designation', ['as' => 'ajax.designation', 'uses' => 'AjaxController@getDesignation']);
Route::get('ajax/sub_centre', ['as' => 'ajax.sub_centre', 'uses' => 'AjaxController@getSub_centre']);
Route::get('registration/create', ['as' => 'registration.create', 'uses' => 'UserController@registration']);
Route::get('/', ['as' => 'auth.login', 'uses' => function () {
    if (auth()->guard('web')->check()) {

    }

    return view('auth.login');
}]);


Route::post('auth/login', ['as' => 'auth.check', 'uses' => 'AuthController@postLogin']);
Route::group(['middleware' => 'auth:web',], function () {

    Route::resource('stocks', StockController::class);
    Route::resource('sub_centres', Sub_centreController::class);
    Route::resource('pops', PopController::class);
    Route::resource('designations', DesignationController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('invoices', InvoiceController::class);
    Route::resource('products', ProductController::class);
    Route::resource('tickets', TicketController::class);
    Route::put('tickets/admin/{id?}', ['as'=>'tickets.adminupdate','uses'=>'TicketController@adminupdate']);
    Route::get('tickets/{ticket}/adminedit', ['as' => 'tickets.adminedit', 'uses' => 'TicketController@adminedit']);
    Route::get('assignbyme', ['as' => 'tickets.assignbyme', 'uses' => 'TicketController@indexassignbyme']);
    Route::get('barcodes', ['as' => 'barcodes.printbarcode', 'uses' => 'StockController@printbarcode']);
    Route::get('ajax/category', ['as' => 'ajax.category', 'uses' => 'AjaxController@getCategory']);


    Route::get('ajax/sub_category/{id?}', ['as' => 'ajax.sub_category', 'uses' => 'AjaxController@getSubCategory']);
    Route::get('ajax/entity/{id?}', ['as' => 'ajax.entity', 'uses' => 'AjaxController@getEntity']);
    Route::get('ajax/get_product_details/{id?}', ['as' => 'ajax.get_product_details', 'uses' => 'AjaxController@get_product_details']);

    Route::get('ajax/supplier', ['as' => 'ajax.supplier', 'uses' => 'AjaxController@getSupplier']);
    Route::put('items/{id}', ['as' => 'itemList', 'uses' => 'ItemController@itemList']);

    Route::any('auth/logout', ['as' => 'auth.logout', 'uses' => 'AuthController@getLogout']);
    Route::get('error_logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

    Route::get('images/{template}/{filename}', [
        'uses' => '\Intervention\Image\ImageCacheController@getResponse',
        'as' => 'imagecache'])->where(['filename' => '[ \w\\.\\/\\-\\@]+']);
    Route::get('pdfview', array('as' => 'pdfview', 'uses' => 'InvoiceController@pdfview'));
});
