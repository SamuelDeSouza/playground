<?php


/*
| -----------------------------------------------------------------------
| Rotas Painel Administrativo 
| -----------------------------------------------------------------------
*/

Route::get('/admin', function () { return redirect('admin/home'); });

Route::group(['prefix' => 'admin',  'middleware' => 'auth.admin'], function () {
    
    Route::get('/{model}/search/{id_father?}', 'App\Http\Controllers\Admin\SearchController@search')->name('admin.search');
    
    Route::get('/home', 'App\Http\Controllers\Admin\HomeController@dashboard');
    Route::get('/error/{errortype}', 'App\Http\Controllers\Admin\ErrorController@errorList');
    
    Route::get('/navgroup', 'App\Http\Controllers\Admin\NavgroupController@index');
    Route::get('/navgroup/edit/{id}', 'App\Http\Controllers\Admin\NavgroupController@edit');
    Route::get('/navgroup/insert', 'App\Http\Controllers\Admin\NavgroupController@newinsert');
    Route::get('/navgroup/lixeira', 'App\Http\Controllers\Admin\NavgroupController@lixeira');
    Route::get('/navgroup/orderList/{order}/{collumn}', 'App\Http\Controllers\Admin\NavgroupController@orderList');
    Route::get('/navgroup/updatestatus/{id}/{status}', 'App\Http\Controllers\Admin\NavgroupController@updateStatus');
    Route::post('/navgroup/create', 'App\Http\Controllers\Admin\NavgroupController@create');
    Route::post('/navgroup/toedit/{id}', 'App\Http\Controllers\Admin\NavgroupController@toedit');
    Route::post('/navgroup/delete', 'App\Http\Controllers\Admin\NavgroupController@delete');
    Route::post('/navgroup/delete/{id}', 'App\Http\Controllers\Admin\NavgroupController@deleteunique');
    
    Route::get('/navgroupmenu/{id}', 'App\Http\Controllers\Admin\NavgroupmenuController@indexchildrem');
    Route::get('/navgroupmenu/edit/{id}', 'App\Http\Controllers\Admin\NavgroupmenuController@edit');
    Route::get('/navgroupmenu/insert/{id}', 'App\Http\Controllers\Admin\NavgroupmenuController@newinsertChildrem');
    Route::get('/navgroupmenu/lixeira/{id}', 'App\Http\Controllers\Admin\NavgroupmenuController@lixeira');
    Route::get('/navgroupmenu/orderList/{order}/{collumn}/{father}', 'App\Http\Controllers\Admin\NavgroupmenuController@orderListChildrem');
    Route::get('/navgroupmenu/updatestatus/{id}/{status}', 'App\Http\Controllers\Admin\NavgroupmenuController@updateStatus');
    Route::post('/navgroupmenu/create', 'App\Http\Controllers\Admin\NavgroupmenuController@createChildream');
    Route::post('/navgroupmenu/toedit/{id}', 'App\Http\Controllers\Admin\NavgroupmenuController@toedit');
    Route::post('/navgroupmenu/delete', 'App\Http\Controllers\Admin\NavgroupmenuController@delete');
    Route::post('/navgroupmenu/delete/{id}', 'App\Http\Controllers\Admin\NavgroupmenuController@deleteunique');
    
    Route::get('/navmenuchildren/{id}', 'App\Http\Controllers\Admin\NavgroupmenuchildrenController@indexchildrem');
    Route::get('/navmenuchildren/edit/{id}', 'App\Http\Controllers\Admin\NavgroupmenuchildrenController@edit');
    Route::get('/navmenuchildren/insert/{id}', 'App\Http\Controllers\Admin\NavgroupmenuchildrenController@newinsertChildrem');
    Route::get('/navmenuchildren/lixeira/{id}', 'App\Http\Controllers\Admin\NavgroupmenuchildrenController@lixeira');
    Route::get('/navmenuchildren/orderList/{order}/{collumn}/{father}', 'App\Http\Controllers\Admin\NavgroupmenuchildrenController@orderListChildrem');
    Route::get('/navmenuchildren/updatestatus/{id}/{status}', 'App\Http\Controllers\Admin\NavgroupmenuchildrenController@updateStatus');
    Route::post('/navmenuchildren/create', 'App\Http\Controllers\Admin\NavgroupmenuchildrenController@createChildream');
    Route::post('/navmenuchildren/toedit/{id}', 'App\Http\Controllers\Admin\NavgroupmenuchildrenController@toedit');
    Route::post('/navmenuchildren/delete', 'App\Http\Controllers\Admin\NavgroupmenuchildrenController@delete');
    Route::post('/navmenuchildren/delete/{id}', 'App\Http\Controllers\Admin\NavgroupmenuchildrenController@deleteunique');
    
    Route::get('/navmenustyle/{id}', 'App\Http\Controllers\Admin\NavgroupmenustyleController@indexchildrem');
    Route::get('/navmenustyle/edit/{id}', 'App\Http\Controllers\Admin\NavgroupmenustyleController@edit');
    Route::get('/navmenustyle/insert/{id}', 'App\Http\Controllers\Admin\NavgroupmenustyleController@newinsertChildrem');
    Route::get('/navmenustyle/lixeira/{id}', 'App\Http\Controllers\Admin\NavgroupmenustyleController@lixeira');
    Route::get('/navmenustyle/orderList/{order}/{collumn}/{father}', 'App\Http\Controllers\Admin\NavgroupmenustyleController@orderListChildrem');
    Route::get('/navmenustyle/updatestatus/{id}/{status}', 'App\Http\Controllers\Admin\NavgroupmenustyleController@updateStatus');
    Route::post('/navmenustyle/create', 'App\Http\Controllers\Admin\NavgroupmenustyleController@createChildream');
    Route::post('/navmenustyle/toedit/{id}', 'App\Http\Controllers\Admin\NavgroupmenustyleController@toedit');
    Route::post('/navmenustyle/delete', 'App\Http\Controllers\Admin\NavgroupmenustyleController@delete');
    Route::post('/navmenustyle/delete/{id}', 'App\Http\Controllers\Admin\NavgroupmenustyleController@deleteunique');
    
    Route::get('/navgroupmenustylecollumn/{id}', 'App\Http\Controllers\Admin\NavgroupmenustylecollumnController@loadcollumn');
    Route::get('/navgroupmenustylecollumn/edit/{id}', 'App\Http\Controllers\Admin\NavgroupmenustylecollumnController@editcollumn');
    Route::post('/navgroupmenustylecollumn/remove', 'App\Http\Controllers\Admin\NavgroupmenustylecollumnController@deletecollumn');
    Route::post('/navgroupmenustylecollumn/toedit', 'App\Http\Controllers\Admin\NavgroupmenustylecollumnController@updatecollumn');
    Route::post('/navgroupmenustylecollumn/insert', 'App\Http\Controllers\Admin\NavgroupmenustylecollumnController@insertcollumn');
    Route::post('/navgroupmenu/create', 'App\Http\Controllers\Admin\NavgroupmenuController@create');
    Route::post('/navgroupmenu/delete', 'App\Http\Controllers\Admin\NavgroupmenuController@delete');
    Route::post('/navgroupmenu/delete/{id}', 'App\Http\Controllers\Admin\NavgroupmenuController@deleteunique');
    
    Route::get('/thumb/{id}', 'App\Http\Controllers\Admin\NavgroupmenuthumbController@indexchildrem');
    Route::get('/thumb/edit/{id}', 'App\Http\Controllers\Admin\NavgroupmenuthumbController@edit');
    Route::get('/thumb/insert/{id}', 'App\Http\Controllers\Admin\NavgroupmenuthumbController@newinsertChildrem');
    Route::get('/thumb/lixeira/{id}', 'App\Http\Controllers\Admin\NavgroupmenuthumbController@lixeira');
    Route::get('/thumb/orderList/{order}/{collumn}/{father}', 'App\Http\Controllers\Admin\NavgroupmenuthumbController@orderListChildrem');
    Route::get('/thumb/updatestatus/{id}/{status}', 'App\Http\Controllers\Admin\NavgroupmenuthumbController@updateStatus');
    Route::post('/thumb/create', 'App\Http\Controllers\Admin\NavgroupmenuthumbController@createChildream');
    Route::post('/thumb/toedit/{id}', 'App\Http\Controllers\Admin\NavgroupmenuthumbController@toedit');
    Route::post('/thumb/delete', 'App\Http\Controllers\Admin\NavgroupmenuthumbController@delete');
    Route::post('/thumb/delete/{id}', 'App\Http\Controllers\Admin\NavgroupmenuthumbController@deleteunique');
    
    Route::get('/upload/delete/{id}', 'App\Http\Controllers\Admin\UploadController@deleteUpload');
    Route::get('/upload/{page}/{id}', 'App\Http\Controllers\Admin\UploadController@uploadindex');
    Route::post('/upload/{page}/{id}/save', 'App\Http\Controllers\Admin\UploadController@save');
    
    Route::get('/usuarios', 'App\Http\Controllers\Admin\UsuariosController@index');
    Route::get('/usuarios/insert', 'App\Http\Controllers\Admin\UsuariosController@newinsert');
    Route::get('/usuarios/lixeira', 'App\Http\Controllers\Admin\UsuariosController@lixeira');
    Route::get('/usuarios/edit/{id}', 'App\Http\Controllers\Admin\UsuariosController@edit');
    Route::get('/usuarios/orderList/{order}/{collumn}', 'App\Http\Controllers\Admin\UsuariosController@orderList');
    Route::get('/usuarios/updatestatus/{id}/{status}', 'App\Http\Controllers\Admin\UsuariosController@updateStatus');
    Route::post('/usuarios/create', 'App\Http\Controllers\Admin\UsuariosController@create');
    Route::post('/usuarios/toedit/{id}', 'App\Http\Controllers\Admin\UsuariosController@toedit');
    Route::post('/usuarios/delete', 'App\Http\Controllers\Admin\UsuariosController@delete');
    Route::post('/usuarios/delete/{id}', 'App\Http\Controllers\Admin\UsuariosController@deleteunique');
    
    Route::get('/usuariopassword/{id}', 'App\Http\Controllers\Admin\UsuariopasswordController@edit');
    Route::post('/usuariopassword/toedit/{id}', 'App\Http\Controllers\Admin\UsuariopasswordController@toedit');
    
    Route::get('/permissoes/{id}', 'App\Http\Controllers\Admin\PermissoesController@loadPermission');
    Route::post('/permissoes/update', 'App\Http\Controllers\Admin\PermissoesController@updatepermissoes');
    Route::post('/permissoes/getUserClone', 'App\Http\Controllers\Admin\PermissoesController@getuserclone');
    Route::post('/permissoes/cloneUser', 'App\Http\Controllers\Admin\PermissoesController@cloneUser');
    
    Route::get('/configurationmail', 'App\Http\Controllers\Admin\ConfigurationmailController@index');
    Route::get('/configurationmail/edit/{id}', 'App\Http\Controllers\Admin\ConfigurationmailController@edit');
    Route::get('/configurationmail/insert', 'App\Http\Controllers\Admin\ConfigurationmailController@newinsert');
    Route::get('/configurationmail/lixeira', 'App\Http\Controllers\Admin\ConfigurationmailController@lixeira');
    Route::get('/configurationmail/orderList/{order}/{collumn}', 'App\Http\Controllers\Admin\ConfigurationmailController@orderList');
    Route::get('/configurationmail/updatestatus/{id}/{status}', 'App\Http\Controllers\Admin\ConfigurationmailController@updateStatus');
    Route::post('/configurationmail/create', 'App\Http\Controllers\Admin\ConfigurationmailController@create');
    Route::post('/configurationmail/toedit/{id}', 'App\Http\Controllers\Admin\ConfigurationmailController@toedit');
    Route::post('/configurationmail/delete', 'App\Http\Controllers\Admin\ConfigurationmailController@delete');
    Route::post('/configurationmail/delete/{id}', 'App\Http\Controllers\Admin\ConfigurationmailController@deleteunique');
    
    Route::get('/configuration', 'App\Http\Controllers\Admin\ConfigurationController@index');
    Route::get('/configuration/edit/{id}', 'App\Http\Controllers\Admin\ConfigurationController@edit');
    Route::get('/configuration/insert', 'App\Http\Controllers\Admin\ConfigurationController@newinsert');
    Route::get('/configuration/lixeira', 'App\Http\Controllers\Admin\ConfigurationController@lixeira');
    Route::get('/configuration/orderList/{order}/{collumn}', 'App\Http\Controllers\Admin\ConfigurationController@orderList');
    Route::get('/configuration/updatestatus/{id}/{status}', 'App\Http\Controllers\Admin\ConfigurationController@updateStatus');
    Route::post('/configuration/create', 'App\Http\Controllers\Admin\ConfigurationController@create');
    Route::post('/configuration/toedit/{id}', 'App\Http\Controllers\Admin\ConfigurationController@toedit');
    Route::post('/configuration/delete', 'App\Http\Controllers\Admin\ConfigurationController@delete');
    Route::post('/configuration/delete/{id}', 'App\Http\Controllers\Admin\ConfigurationController@deleteunique');
    
    Route::get('/countries', 'App\Http\Controllers\Admin\CountriesController@index');
    Route::get('/countries/edit/{id}', 'App\Http\Controllers\Admin\CountriesController@edit');
    Route::get('/countries/insert', 'App\Http\Controllers\Admin\CountriesController@newinsert');
    Route::get('/countries/lixeira', 'App\Http\Controllers\Admin\CountriesController@lixeira');
    Route::get('/countries/orderList/{order}/{collumn}', 'App\Http\Controllers\Admin\CountriesController@orderList');
    Route::get('/countries/updatestatus/{id}/{status}', 'App\Http\Controllers\Admin\CountriesController@updateStatus');
    Route::post('/countries/create', 'App\Http\Controllers\Admin\CountriesController@create');
    Route::post('/countries/toedit/{id}', 'App\Http\Controllers\Admin\CountriesController@toedit');
    Route::post('/countries/delete', 'App\Http\Controllers\Admin\CountriesController@delete');
    Route::post('/countries/delete/{id}', 'App\Http\Controllers\Admin\CountriesController@deleteunique');
    
    Route::get('/countriesstates', 'App\Http\Controllers\Admin\CountriesstatesController@index');
    Route::get('/countriesstates/edit/{id}', 'App\Http\Controllers\Admin\CountriesstatesController@edit');
    Route::get('/countriesstates/insert', 'App\Http\Controllers\Admin\CountriesstatesController@newinsert');
    Route::get('/countriesstates/lixeira', 'App\Http\Controllers\Admin\CountriesstatesController@lixeira');
    Route::get('/countriesstates/orderList/{order}/{collumn}', 'App\Http\Controllers\Admin\CountriesstatesController@orderList');
    Route::get('/countriesstates/updatestatus/{id}/{status}', 'App\Http\Controllers\Admin\CountriesstatesController@updateStatus');
    Route::post('/countriesstates/create', 'App\Http\Controllers\Admin\CountriesstatesController@create');
    Route::post('/countriesstates/toedit/{id}', 'App\Http\Controllers\Admin\CountriesstatesController@toedit');
    Route::post('/countriesstates/delete', 'App\Http\Controllers\Admin\CountriesstatesController@delete');
    Route::post('/countriesstates/delete/{id}', 'App\Http\Controllers\Admin\CountriesstatesController@deleteunique');
    
    Route::get('/countriesstatescities/{id}', 'App\Http\Controllers\Admin\CountriesstatescitiesController@indexchildrem');
    Route::get('/countriesstatescities/edit/{id}', 'App\Http\Controllers\Admin\CountriesstatescitiesController@edit');
    Route::get('/countriesstatescities/insert/{id}', 'App\Http\Controllers\Admin\CountriesstatescitiesController@newinsertChildrem');
    Route::get('/countriesstatescities/lixeira/{id}', 'App\Http\Controllers\Admin\CountriesstatescitiesController@lixeira');
    Route::get('/countriesstatescities/orderList/{order}/{collumn}/{father}','App\Http\Controllers\Admin\CountriesstatescitiesController@orderListChildrem');
    Route::get('/countriesstatescities/updatestatus/{id}/{status}','App\Http\Controllers\Admin\CountriesstatescitiesController@updateStatus');
    Route::post('/countriesstatescities/create', 'App\Http\Controllers\Admin\CountriesstatescitiesController@createChildream');
    Route::post('/countriesstatescities/toedit/{id}', 'App\Http\Controllers\Admin\CountriesstatescitiesController@toedit');
    Route::post('/countriesstatescities/delete', 'App\Http\Controllers\Admin\CountriesstatescitiesController@delete');
    Route::post('/countriesstatescities/delete/{id}', 'App\Http\Controllers\Admin\CountriesstatescitiesController@deleteunique');
});