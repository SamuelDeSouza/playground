<?php


/*
| -----------------------------------------------------------------------
| Rotas Painel Administrativo 
| -----------------------------------------------------------------------
*/

Route::get('/admin', function () { return redirect('admin/home'); });

Route::group(['prefix' => 'admin',  'middleware' => 'auth.admin'], function () {
    
    Route::get('/{model}/search/{id_father?}', 'Admin\SearchController@search')->name('admin.search');
    
    Route::get('/home', 'Admin\HomeController@dashboard');
    Route::get('/error/{errortype}', 'Admin\ErrorController@errorList');
    
    Route::get('/navgroup', 'Admin\NavgroupController@index');
    Route::get('/navgroup/edit/{id}', 'Admin\NavgroupController@edit');
    Route::get('/navgroup/insert', 'Admin\NavgroupController@newinsert');
    Route::get('/navgroup/lixeira', 'Admin\NavgroupController@lixeira');
    Route::get('/navgroup/orderList/{order}/{collumn}', 'Admin\NavgroupController@orderList');
    Route::get('/navgroup/updatestatus/{id}/{status}', 'Admin\NavgroupController@updateStatus');
    Route::post('/navgroup/create', 'Admin\NavgroupController@create');
    Route::post('/navgroup/toedit/{id}', 'Admin\NavgroupController@toedit');
    Route::post('/navgroup/delete', 'Admin\NavgroupController@delete');
    Route::post('/navgroup/delete/{id}', 'Admin\NavgroupController@deleteunique');
    
    Route::get('/navgroupmenu/{id}', 'Admin\NavgroupmenuController@indexchildrem');
    Route::get('/navgroupmenu/edit/{id}', 'Admin\NavgroupmenuController@edit');
    Route::get('/navgroupmenu/insert/{id}', 'Admin\NavgroupmenuController@newinsertChildrem');
    Route::get('/navgroupmenu/lixeira/{id}', 'Admin\NavgroupmenuController@lixeira');
    Route::get('/navgroupmenu/orderList/{order}/{collumn}/{father}', 'Admin\NavgroupmenuController@orderListChildrem');
    Route::get('/navgroupmenu/updatestatus/{id}/{status}', 'Admin\NavgroupmenuController@updateStatus');
    Route::post('/navgroupmenu/create', 'Admin\NavgroupmenuController@createChildream');
    Route::post('/navgroupmenu/toedit/{id}', 'Admin\NavgroupmenuController@toedit');
    Route::post('/navgroupmenu/delete', 'Admin\NavgroupmenuController@delete');
    Route::post('/navgroupmenu/delete/{id}', 'Admin\NavgroupmenuController@deleteunique');
    
    Route::get('/navmenuchildren/{id}', 'Admin\NavgroupmenuchildrenController@indexchildrem');
    Route::get('/navmenuchildren/edit/{id}', 'Admin\NavgroupmenuchildrenController@edit');
    Route::get('/navmenuchildren/insert/{id}', 'Admin\NavgroupmenuchildrenController@newinsertChildrem');
    Route::get('/navmenuchildren/lixeira/{id}', 'Admin\NavgroupmenuchildrenController@lixeira');
    Route::get('/navmenuchildren/orderList/{order}/{collumn}/{father}', 'Admin\NavgroupmenuchildrenController@orderListChildrem');
    Route::get('/navmenuchildren/updatestatus/{id}/{status}', 'Admin\NavgroupmenuchildrenController@updateStatus');
    Route::post('/navmenuchildren/create', 'Admin\NavgroupmenuchildrenController@createChildream');
    Route::post('/navmenuchildren/toedit/{id}', 'Admin\NavgroupmenuchildrenController@toedit');
    Route::post('/navmenuchildren/delete', 'Admin\NavgroupmenuchildrenController@delete');
    Route::post('/navmenuchildren/delete/{id}', 'Admin\NavgroupmenuchildrenController@deleteunique');
    
    Route::get('/navmenustyle/{id}', 'Admin\NavgroupmenustyleController@indexchildrem');
    Route::get('/navmenustyle/edit/{id}', 'Admin\NavgroupmenustyleController@edit');
    Route::get('/navmenustyle/insert/{id}', 'Admin\NavgroupmenustyleController@newinsertChildrem');
    Route::get('/navmenustyle/lixeira/{id}', 'Admin\NavgroupmenustyleController@lixeira');
    Route::get('/navmenustyle/orderList/{order}/{collumn}/{father}', 'Admin\NavgroupmenustyleController@orderListChildrem');
    Route::get('/navmenustyle/updatestatus/{id}/{status}', 'Admin\NavgroupmenustyleController@updateStatus');
    Route::post('/navmenustyle/create', 'Admin\NavgroupmenustyleController@createChildream');
    Route::post('/navmenustyle/toedit/{id}', 'Admin\NavgroupmenustyleController@toedit');
    Route::post('/navmenustyle/delete', 'Admin\NavgroupmenustyleController@delete');
    Route::post('/navmenustyle/delete/{id}', 'Admin\NavgroupmenustyleController@deleteunique');
    
    Route::get('/navgroupmenustylecollumn/{id}', 'Admin\NavgroupmenustylecollumnController@loadcollumn');
    Route::get('/navgroupmenustylecollumn/edit/{id}', 'Admin\NavgroupmenustylecollumnController@editcollumn');
    Route::post('/navgroupmenustylecollumn/remove', 'Admin\NavgroupmenustylecollumnController@deletecollumn');
    Route::post('/navgroupmenustylecollumn/toedit', 'Admin\NavgroupmenustylecollumnController@updatecollumn');
    Route::post('/navgroupmenustylecollumn/insert', 'Admin\NavgroupmenustylecollumnController@insertcollumn');
    Route::post('/navgroupmenu/create', 'Admin\NavgroupmenuController@create');
    Route::post('/navgroupmenu/delete', 'Admin\NavgroupmenuController@delete');
    Route::post('/navgroupmenu/delete/{id}', 'Admin\NavgroupmenuController@deleteunique');
    
    Route::get('/thumb/{id}', 'Admin\NavgroupmenuthumbController@indexchildrem');
    Route::get('/thumb/edit/{id}', 'Admin\NavgroupmenuthumbController@edit');
    Route::get('/thumb/insert/{id}', 'Admin\NavgroupmenuthumbController@newinsertChildrem');
    Route::get('/thumb/lixeira/{id}', 'Admin\NavgroupmenuthumbController@lixeira');
    Route::get('/thumb/orderList/{order}/{collumn}/{father}', 'Admin\NavgroupmenuthumbController@orderListChildrem');
    Route::get('/thumb/updatestatus/{id}/{status}', 'Admin\NavgroupmenuthumbController@updateStatus');
    Route::post('/thumb/create', 'Admin\NavgroupmenuthumbController@createChildream');
    Route::post('/thumb/toedit/{id}', 'Admin\NavgroupmenuthumbController@toedit');
    Route::post('/thumb/delete', 'Admin\NavgroupmenuthumbController@delete');
    Route::post('/thumb/delete/{id}', 'Admin\NavgroupmenuthumbController@deleteunique');
    
    Route::get('/upload/delete/{id}', 'Admin\UploadController@deleteUpload');
    Route::get('/upload/{page}/{id}', 'Admin\UploadController@uploadindex');
    Route::post('/upload/{page}/{id}/save', 'Admin\UploadController@save');
    
    Route::get('/usuarios', 'Admin\UsuariosController@index');
    Route::get('/usuarios/insert', 'Admin\UsuariosController@newinsert');
    Route::get('/usuarios/lixeira', 'Admin\UsuariosController@lixeira');
    Route::get('/usuarios/edit/{id}', 'Admin\UsuariosController@edit');
    Route::get('/usuarios/orderList/{order}/{collumn}', 'Admin\UsuariosController@orderList');
    Route::get('/usuarios/updatestatus/{id}/{status}', 'Admin\UsuariosController@updateStatus');
    Route::post('/usuarios/create', 'Admin\UsuariosController@create');
    Route::post('/usuarios/toedit/{id}', 'Admin\UsuariosController@toedit');
    Route::post('/usuarios/delete', 'Admin\UsuariosController@delete');
    Route::post('/usuarios/delete/{id}', 'Admin\UsuariosController@deleteunique');
    
    Route::get('/usuariopassword/{id}', 'Admin\UsuariopasswordController@edit');
    Route::post('/usuariopassword/toedit/{id}', 'Admin\UsuariopasswordController@toedit');
    
    Route::get('/permissoes/{id}', 'Admin\PermissoesController@loadPermission');
    Route::post('/permissoes/update', 'Admin\PermissoesController@updatepermissoes');
    Route::post('/permissoes/getUserClone', 'Admin\PermissoesController@getuserclone');
    Route::post('/permissoes/cloneUser', 'Admin\PermissoesController@cloneUser');
    
    Route::get('/configurationmail', 'Admin\ConfigurationmailController@index');
    Route::get('/configurationmail/edit/{id}', 'Admin\ConfigurationmailController@edit');
    Route::get('/configurationmail/insert', 'Admin\ConfigurationmailController@newinsert');
    Route::get('/configurationmail/lixeira', 'Admin\ConfigurationmailController@lixeira');
    Route::get('/configurationmail/orderList/{order}/{collumn}', 'Admin\ConfigurationmailController@orderList');
    Route::get('/configurationmail/updatestatus/{id}/{status}', 'Admin\ConfigurationmailController@updateStatus');
    Route::post('/configurationmail/create', 'Admin\ConfigurationmailController@create');
    Route::post('/configurationmail/toedit/{id}', 'Admin\ConfigurationmailController@toedit');
    Route::post('/configurationmail/delete', 'Admin\ConfigurationmailController@delete');
    Route::post('/configurationmail/delete/{id}', 'Admin\ConfigurationmailController@deleteunique');
    
    Route::get('/configuration', 'Admin\ConfigurationController@index');
    Route::get('/configuration/edit/{id}', 'Admin\ConfigurationController@edit');
    Route::get('/configuration/insert', 'Admin\ConfigurationController@newinsert');
    Route::get('/configuration/lixeira', 'Admin\ConfigurationController@lixeira');
    Route::get('/configuration/orderList/{order}/{collumn}', 'Admin\ConfigurationController@orderList');
    Route::get('/configuration/updatestatus/{id}/{status}', 'Admin\ConfigurationController@updateStatus');
    Route::post('/configuration/create', 'Admin\ConfigurationController@create');
    Route::post('/configuration/toedit/{id}', 'Admin\ConfigurationController@toedit');
    Route::post('/configuration/delete', 'Admin\ConfigurationController@delete');
    Route::post('/configuration/delete/{id}', 'Admin\ConfigurationController@deleteunique');
    
    Route::get('/countries', 'Admin\CountriesController@index');
    Route::get('/countries/edit/{id}', 'Admin\CountriesController@edit');
    Route::get('/countries/insert', 'Admin\CountriesController@newinsert');
    Route::get('/countries/lixeira', 'Admin\CountriesController@lixeira');
    Route::get('/countries/orderList/{order}/{collumn}', 'Admin\CountriesController@orderList');
    Route::get('/countries/updatestatus/{id}/{status}', 'Admin\CountriesController@updateStatus');
    Route::post('/countries/create', 'Admin\CountriesController@create');
    Route::post('/countries/toedit/{id}', 'Admin\CountriesController@toedit');
    Route::post('/countries/delete', 'Admin\CountriesController@delete');
    Route::post('/countries/delete/{id}', 'Admin\CountriesController@deleteunique');
    
    Route::get('/countriesstates', 'Admin\CountriesstatesController@index');
    Route::get('/countriesstates/edit/{id}', 'Admin\CountriesstatesController@edit');
    Route::get('/countriesstates/insert', 'Admin\CountriesstatesController@newinsert');
    Route::get('/countriesstates/lixeira', 'Admin\CountriesstatesController@lixeira');
    Route::get('/countriesstates/orderList/{order}/{collumn}', 'Admin\CountriesstatesController@orderList');
    Route::get('/countriesstates/updatestatus/{id}/{status}', 'Admin\CountriesstatesController@updateStatus');
    Route::post('/countriesstates/create', 'Admin\CountriesstatesController@create');
    Route::post('/countriesstates/toedit/{id}', 'Admin\CountriesstatesController@toedit');
    Route::post('/countriesstates/delete', 'Admin\CountriesstatesController@delete');
    Route::post('/countriesstates/delete/{id}', 'Admin\CountriesstatesController@deleteunique');
    
    Route::get('/countriesstatescities/{id}', 'Admin\CountriesstatescitiesController@indexchildrem');
    Route::get('/countriesstatescities/edit/{id}', 'Admin\CountriesstatescitiesController@edit');
    Route::get('/countriesstatescities/insert/{id}', 'Admin\CountriesstatescitiesController@newinsertChildrem');
    Route::get('/countriesstatescities/lixeira/{id}', 'Admin\CountriesstatescitiesController@lixeira');
    Route::get('/countriesstatescities/orderList/{order}/{collumn}/{father}','Admin\CountriesstatescitiesController@orderListChildrem');
    Route::get('/countriesstatescities/updatestatus/{id}/{status}','Admin\CountriesstatescitiesController@updateStatus');
    Route::post('/countriesstatescities/create', 'Admin\CountriesstatescitiesController@createChildream');
    Route::post('/countriesstatescities/toedit/{id}', 'Admin\CountriesstatescitiesController@toedit');
    Route::post('/countriesstatescities/delete', 'Admin\CountriesstatescitiesController@delete');
    Route::post('/countriesstatescities/delete/{id}', 'Admin\CountriesstatescitiesController@deleteunique');
});