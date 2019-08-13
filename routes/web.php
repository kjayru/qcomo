<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','Auth\LoginController@showLoginForm');
Route::get('/api/franquicias','AdminController@apiFranquicia')->name('api.franquicias');
Route::get('/api/clients/{client}','AdminController@apiCliente')->name('api.clientes');
Route::get('/api/clasificaciones','ClassificationsController2@index')->name('api.clasificaciones');

Auth::routes();
Route::group(['prefix' => 'admin'], function () {

    Route::get('/','Admin\DashboardController@index')->name('dashboard.index');

    Route::get('/roles','Admin\RoleController@index')->name('roles.index')
    ->middleware('permission:roles.index');


    Route::post('roles/store','Admin\RoleController@store')->name('roles.store')
    ->middleware('permission:roles.create');

    
    Route::get('roles/create','Admin\RoleController@create')->name('roles.create')
    ->middleware('permission:roles.create');

    Route::put('roles/{role}','Admin\RoleController@update')->name('roles.update')
    ->middleware('permission:roles.edit');

    Route::get('roles/{role}','Admin\RoleController@show')->name('roles.show')
    ->middleware('permission:roles.show');

    Route::delete('roles/{role}','Admin\RoleController@destroy')->name('roles.destroy')
    ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit','Admin\RoleController@edit')->name('roles.edit')
    ->middleware('permission:roles.edit');


    //clients

    Route::get('clients','Admin\ClientController@index')->name('clients.index')
    ->middleware('permission:clients.index');

    Route::get('clientsByClass','Admin\ClientController@index')->name('clients.class.index')
    ->middleware('permission:clients.index');

    Route::post('clients/store','Admin\ClientController@store')->name('clients.store')
    ->middleware('permission:clients.create');

    Route::get('clients/{client}/edit','Admin\ClientController@edit')->name('clients.edit')
    ->middleware('permission:clients.edit');

    Route::put('clients/{client}','Admin\ClientController@update')->name('clients.update')
    ->middleware('permission:clients.edit');

    Route::get('clients/{client}','Admin\ClientController@show')->name('clients.show')
    /*->middleware('permission:clients.show')*/;

    Route::delete('clients/{client}','Admin\ClientController@destroy')->name('clients.destroy')
    ->middleware('permission:clients.destroy');

    Route::post('clients/foto','Admin\ClientController@foto')->name('clients.foto')
    ->middleware('permission:clients.create');

    Route::put('clients/foto/{client}','Admin\ClientController@fotoupdate')->name('clients.fotoupdate')
    ->middleware('permission:clients.edit');


    Route::post('clients/service','Admin\ClientController@service')->name('clients.service')
    ->middleware('permission:clients.create');

    Route::put('clients/service/{client}','Admin\ClientController@serviceUpdate')->name('clients.serviceUpdate')
    ->middleware('permission:clients.edit');


    Route::post('clients/configuration','Admin\ClientController@configuration')->name('clients.configuration')
    ->middleware('permission:clients.create');

    Route::put('clients/configuration/{client}','Admin\ClientController@configurationUpdate')->name('clients.configurationUpdate')
    ->middleware('permission:clients.edit');

    Route::put('clients-estado/{franchise}','Admin\ClientController@cambioestado')->name('clients.estado')
    ->middleware('permission:clients.edit');

    //franchise
    Route::post('franchisees/store','Admin\FranchiseController@store')->name('franchisees.store')
    ->middleware('permission:franchisees.create');

    Route::get('franchisees','Admin\FranchiseController@index')->name('franchisees.index') ;

    Route::get('franchisees/create','Admin\FranchiseController@create')->name('franchisees.create')
    ->middleware('permission:franchisees.create');

    Route::put('franchisees/{franchise}','Admin\FranchiseController@update')->name('franchisees.update')
    ->middleware('permission:franchisees.edit');

    Route::get('franchisees/{franchise}','Admin\FranchiseController@show')->name('franchisees.show')
    ->middleware('permission:franchisees.show');

    Route::delete('franchisees/{franchise}','Admin\FranchiseController@destroy')->name('franchisees.destroy')
    ->middleware('permission:franchisees.destroy');

    Route::get('franchisees/{franchise}/edit','Admin\FranchiseController@edit')->name('franchisees.edit')
    ->middleware('permission:franchisees.edit');


    Route::put('franchisees-estado/{franchise}','Admin\FranchiseController@cambioestado')->name('franchisees.estado')
    ->middleware('permission:franchisees.edit');
    
    //mozos

    Route::get('mozos','Admin\MozoController@index')->name('mozos.index')
    ->middleware('permission:mozos.index');

    Route::post('mozos/store','Admin\MozoController@store')->name('mozos.store')
    ->middleware('permission:mozos.create');

    Route::get('mozos/create','Admin\MozoController@create')->name('mozos.create')
    ->middleware('permission:mozos.create');

    Route::put('mozos/{mozo}','Admin\MozoController@update')->name('mozos.update')
    ->middleware('permission:mozos.edit');

    Route::get('mozos/{mozo}','Admin\MozoController@show')->name('mozos.show')
    ->middleware('permission:mozos.show');

    Route::delete('mozos/{mozo}','Admin\MozoController@destroy')->name('mozos.destroy')
    ->middleware('permission:mozos.destroy');

    Route::get('mozos/{mozo}/edit','Admin\MozoController@edit')->name('mozos.edit')
    ->middleware('permission:mozos.edit');

        //mesas

    Route::get('mesas','Admin\MesaController@index')->name('mesas.index')
    ->middleware('permission:mesas.index');

    Route::post('mesas/store','Admin\MesaController@store')->name('mesas.store')
    ->middleware('permission:mesas.create');

    Route::get('mesas/create','Admin\MesaController@create')->name('mesas.create')
    ->middleware('permission:mesas.create');

    Route::put('mesas/{mesa}','Admin\MesaController@update')->name('mesas.update')
    ->middleware('permission:mesas.edit');

    Route::get('mesas/{mesa}','Admin\MesaController@show')->name('mesas.show')
    ->middleware('permission:mesas.show');

    Route::delete('mesas/{mesa}','Admin\MesaController@destroy')->name('mesas.destroy')
    ->middleware('permission:mesas.destroy');

    Route::get('mesas/{mesa}/edit','Admin\MesaController@edit')->name('mesas.edit')
    ->middleware('permission:mesas.edit');

    Route::get('mesas/enabled/{sector_id}/{dia}/{h0}/{hf}','Admin\MesaController@enabled')->name('mesas.enable')
    ->middleware('permission:mesas.edit');

    //lacarta
    Route::get('lacartas','Admin\MenuClientController@index')->name('lacartas.index')
    ->middleware('permission:lacartas.index');

    Route::post('lacartas/store','Admin\MenuClientController@store')->name('lacartas.store')
    ->middleware('permission:lacartas.create');

    Route::get('lacartas/create','Admin\MenuClientController@create')->name('lacartas.create')
    ->middleware('permission:lacartas.create');

    Route::put('lacartas/{lacarta}','Admin\MenuClientController@update')->name('lacartas.update')
    ->middleware('permission:lacartas.edit');

    Route::get('lacartas/{lacarta}','Admin\MenuClientController@show')->name('lacartas.show')
    ->middleware('permission:lacartas.show');

    Route::delete('lacartas/{lacarta}','Admin\MenuClientController@destroy')->name('lacartas.destroy')
    ->middleware('permission:lacartas.destroy');

    Route::get('lacartas/{lacarta}/edit','Admin\MenuClientController@edit')->name('lacartas.edit')
    ->middleware('permission:lacartas.edit');


    Route::get('replicate','Admin\MenuClientController@replicate')->name('lacartas.edit')
    ->middleware('permission:lacartas.edit');

    //ingredient
    Route::get('ingredients','Admin\IngredientClientController@index')->name('ingredients.index')
    ->middleware('permission:ingredients.index');

    Route::post('ingredients/store','Admin\IngredientClientController@store')->name('ingredients.store')
    ->middleware('permission:ingredients.create');

    Route::get('ingredients/create','Admin\IngredientClientController@create')->name('ingredients.create')
    ->middleware('permission:ingredients.create');

    Route::put('ingredients/{ingredient}','Admin\IngredientClientController@update')->name('ingredients.update')
    ->middleware('permission:ingredients.edit');

    Route::get('ingredients/{ingredient}','Admin\IngredientClientController@show')->name('ingredients.show')
    ->middleware('permission:ingredients.show');

    Route::delete('ingredients/{ingredient}','Admin\IngredientClientController@destroy')->name('ingredients.destroy')
    ->middleware('permission:ingredients.destroy');

    Route::get('ingredients/{ingredient}/edit','Admin\IngredientClientController@edit')->name('ingredients.edit')
    ->middleware('permission:ingredients.edit');

    //categories
    Route::get('categories','Admin\CategoryController@index')->name('categories.index')
    ->middleware('permission:categories.index');

    Route::post('categories/store','Admin\CategoryController@store')->name('categories.store')
    ->middleware('permission:categories.create');

    Route::get('categories/create','Admin\CategoryController@create')->name('categories.create')
    ->middleware('permission:categories.create');

    Route::put('categories/{ingredient}','Admin\CategoryController@update')->name('categories.update')
    ->middleware('permission:categories.edit');

    Route::get('categories/{ingredient}','Admin\CategoryController@show')->name('categories.show')
    ->middleware('permission:categories.show');

    Route::delete('categories/{ingredient}','Admin\CategoryController@destroy')->name('categories.destroy')
    ->middleware('permission:categories.destroy');

    Route::get('categories/{ingredient}/edit','Admin\CategoryController@edit')->name('categories.edit')
    ->middleware('permission:categories.edit');


     //salsas
     Route::get('salsas','Admin\SalsaController@index')->name('salsas.index')
     ->middleware('permission:salsas.index');
 
     Route::post('salsas/store','Admin\SalsaController@store')->name('salsas.store')
     ->middleware('permission:salsas.create');
 
     Route::get('salsas/create','Admin\SalsaController@create')->name('salsas.create')
     ->middleware('permission:salsas.create');
 
     Route::put('salsas/{ingredient}','Admin\SalsaController@update')->name('salsas.update')
     ->middleware('permission:salsas.edit');
 
     Route::get('salsas/{ingredient}','Admin\SalsaController@show')->name('salsas.show')
     ->middleware('permission:salsas.show');
 
     Route::delete('salsas/{ingredient}','Admin\SalsaController@destroy')->name('salsas.destroy')
     ->middleware('permission:salsas.destroy');
 
     Route::get('salsas/{ingredient}/edit','Admin\SalsaController@edit')->name('salsas.edit')
     ->middleware('permission:salsas.edit');

    //publicidad

     Route::get('/publicidad','Admin\PublicidadController@index')->name('publisheds.index')
     ->middleware('permission:publisheds.index');

     Route::post('publicidad/store','Admin\PublicidadController@store')->name('publisheds.store')
     ->middleware('permission:publisheds.create');
 
     Route::get('publicidad/create','Admin\PublicidadController@create')->name('publisheds.create')
     ->middleware('permission:publisheds.create');
 
     Route::put('publicidad/{ingredient}','Admin\PublicidadController@update')->name('publisheds.update')
     ->middleware('permission:publisheds.edit');
 
     Route::get('publicidad/{ingredient}','Admin\PublicidadController@show')->name('publisheds.show')
     ->middleware('permission:publisheds.show');
 
     Route::delete('publicidad/{ingredient}','Admin\PublicidadController@destroy')->name('publisheds.destroy')
     ->middleware('permission:publisheds.destroy');
 
     Route::get('publicidad/{ingredient}/edit','Admin\PublicidadController@edit')->name('publisheds.edit')
     ->middleware('permission:publisheds.edit');


    Route::get('/cuadro-de-comandos','Admin\CenterCommandController@index');
    //Route::get('/franquiciados','Admin\FranchiseController@index');
    Route::get('/clientes','Admin\ClientController@index');
    Route::get('/clientes/{id}','Admin\ClientController@show');
    Route::get('/mesas','Admin\MesaController@index');
    Route::get('/pedidos','Admin\OrderController@index')->name('backend.pedidos');
    Route::post('/pedidos/admin','Admin\OrderController@client')->name('backend.client');

    Route::post('/pedidos/buscar','Admin\OrderController@buscarPalabra')->name('backend.buscar');


    Route::get('/reservas','Admin\BookingController@index');
    Route::get('/marketing','Admin\MarketingController@index');
    Route::get('/mensaje-push','Admin\PushController@index');
    Route::get('/cupones','Admin\CouponController@index');
    Route::get('/estadistica-de-valoraciones','Admin\StatisticController@index');
    Route::get('/comentario-de-comensales','Admin\CommentController@index');
   
    Route::get('/analitycs','Admin\AnalitycController@index');
 
    Route::get('/traducciones','Admin\TranslateController@index');
    Route::get('/traducciones/{id}/edit','Admin\TranslateController@edit'); 
    Route::put('/traducciones/{id}','Admin\TranslateController@update')->name('traducciones.update')/*->middleware('permission:classifications.edit')*/; 
    Route::post('/traducciones/store','Admin\TranslateController@store')->name('traducciones.store')/*->middleware('permission:classifications.create')*/; 

    Route::get('/getfranquiciado/{id}/edit','Admin\FranchiseController@edit');
    Route::get('/demotab','Admin\FranchiseController@demotab');

    Route::get('/getCiudad/{any}','Admin\FranchiseController@getCiudad');

    Route::get('/getcliente/{id}/edit','Admin\ClientController@edit');

    Route::get('/miposicionpuntos','Admin\MiPosicionPuntosController@index');
    Route::get('/productoscarta','Admin\ProductosCartaController@index');

    Route::get('/ayuda','Admin\AyudaController@index');
    Route::get('/configuraciones','Admin\ConfigurationController@index');
    Route::get('/precios','Admin\PreciosController@index');
    Route::post('/precios','Admin\PreciosController@client');

    Route::get('/codigoweb','Admin\CodigoWebController@index');
    Route::get('/mail_sms','Admin\MailSMSController@index');
    Route::get('/paquetes','Admin\PaquetesController@index');
    Route::get('/puntos','Admin\PuntosController@index');
    Route::get('/setting_impresora','Admin\SettingImpresoraController@index');
    Route::get('/tiposcomida','Admin\TiposComidaController@index');
    Route::get('/metodopago','Admin\MetodoPagoController@index');
    Route::get('/paisprovincialocalidad','Admin\PaisPLController@index');
    Route::get('/push_comercios','Admin\PushComerciosController@index');
    Route::get('/push_comensal','Admin\PushComensalController@index');
    
    Route::get('/clasificaciones','Admin\ClassificationsController@index');
    Route::get('/clasificaciones/{id}/edit','Admin\ClassificationsController@edit'); 
    Route::put('/clasificaciones/{classification}','Admin\ClassificationsController@update')->name('classifications.update')->middleware('permission:classifications.edit'); 
    Route::post('/clasificaciones/store','Admin\ClassificationsController@store')->name('classifications.store')->middleware('permission:classifications.create'); 

    Route::get('/clientes/portipo/{classificacion}','Admin\ClientController@portipo');
    
    Route::get('/users/activos','Admin\UserActivoController@activos');
    Route::get('/users/forautocomplete','Admin\UserController@autocomplete');

    Route::post('/reserva','Admin\BookingController@store')->name('booking.store');
    Route::post('/reserva/cancelar','Admin\BookingController@cancel')->name('booking.cancelar');

    Route::get('/sector/{client}','Admin\SectorController@fromClient')->name('sector.client');

    Route::post('/client_point','Admin\ClientPointController@store')->name('client_point.store');
    Route::post('/use_enabled_point','Admin\ClientPointController@update')->name('client_point.update');

    Route::get('/sales/buscar/{init}/{final}/{idestado}/{idtipo}/{idmozo}/{idmediopago}','Admin\OrderController@buscar')->name('sales.buscar');
    Route::get('/sales/detalle/{idsale}','Admin\OrderController@detalle')->name('sales.detalle');

    Route::get('/packages','Admin\PaquetesController@index');
    Route::get('/packages/{id}/edit','Admin\PaquetesController@edit'); 
    Route::get('/package/{client_id}/{package_id}','Admin\PaquetesController@clientPackage')->name('package.update');
    Route::put('/package/{classification}','Admin\PaquetesController@update')->name('packages.update')/*->middleware('permission:classifications.edit')*/; 
    Route::post('/package/store','Admin\PaquetesController@store')->name('packages.store')/*->middleware('permission:classifications.create')*/; 

    Route::get('/contact_system/{id}/edit','Admin\MailSMSController@edit'); 
    Route::put('/contact_system/{id}','Admin\MailSMSController@update')->name('packages.update')/*->middleware('permission:classifications.edit')*/; 
    Route::post('/contact_system/store','Admin\MailSMSController@store')->name('contact_system.store')/*->middleware('permission:classifications.create')*/; 

    Route::post('/payment','Admin\UserController@payment');
        
    Route::get('/status/success','Admin\DashboardController@success')->name('backend.success');
    Route::get('/status/failure','Admin\DashboardController@failure')->name('backend.failure');
    Route::get('/status/pending','Admin\DashboardController@pending')->name('backend.pending');
    Route::get('/status/exitoso','Admin\DashboardController@exitoso')->name('backend.exitoso');
    Route::get('/status/fallo','Admin\DashboardController@fallo')->name('backend.fallo');


});
