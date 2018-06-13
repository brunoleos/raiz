<?php
Route::get('/', 'FrontController@index')->name('front.site');
Route::get('testel', 'FrontController@lg')->name('testelg');


// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Registration Routes..
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');
$this->post('register', 'Auth\RegisterController@register')->name('auth.register');


// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('user_actions', 'Admin\UserActionsController');
    Route::resource('escolas', 'Admin\EscolasController');
    Route::post('escolas_mass_destroy', ['uses' => 'Admin\EscolasController@massDestroy', 'as' => 'escolas.mass_destroy']);
    Route::post('escolas_restore/{id}', ['uses' => 'Admin\EscolasController@restore', 'as' => 'escolas.restore']);
    Route::delete('escolas_perma_del/{id}', ['uses' => 'Admin\EscolasController@perma_del', 'as' => 'escolas.perma_del']);
    Route::resource('professores', 'Admin\ProfessoresController');
    Route::post('professores_mass_destroy', ['uses' => 'Admin\ProfessoresController@massDestroy', 'as' => 'professores.mass_destroy']);
    Route::post('professores_restore/{id}', ['uses' => 'Admin\ProfessoresController@restore', 'as' => 'professores.restore']);
    Route::delete('professores_perma_del/{id}', ['uses' => 'Admin\ProfessoresController@perma_del', 'as' => 'professores.perma_del']);
    Route::resource('alunos', 'Admin\AlunosController');
    Route::post('alunos_mass_destroy', ['uses' => 'Admin\AlunosController@massDestroy', 'as' => 'alunos.mass_destroy']);
    Route::post('alunos_restore/{id}', ['uses' => 'Admin\AlunosController@restore', 'as' => 'alunos.restore']);
    Route::delete('alunos_perma_del/{id}', ['uses' => 'Admin\AlunosController@perma_del', 'as' => 'alunos.perma_del']);
    Route::resource('apps', 'Admin\AppsController');
    Route::post('apps_mass_destroy', ['uses' => 'Admin\AppsController@massDestroy', 'as' => 'apps.mass_destroy']);
    Route::post('apps_restore/{id}', ['uses' => 'Admin\AppsController@restore', 'as' => 'apps.restore']);
    Route::delete('apps_perma_del/{id}', ['uses' => 'Admin\AppsController@perma_del', 'as' => 'apps.perma_del']);
    Route::resource('slideshows', 'Admin\SlideshowsController');
    Route::post('slideshows_mass_destroy', ['uses' => 'Admin\SlideshowsController@massDestroy', 'as' => 'slideshows.mass_destroy']);
    Route::post('slideshows_restore/{id}', ['uses' => 'Admin\SlideshowsController@restore', 'as' => 'slideshows.restore']);
    Route::delete('slideshows_perma_del/{id}', ['uses' => 'Admin\SlideshowsController@perma_del', 'as' => 'slideshows.perma_del']);
    Route::resource('abouts', 'Admin\AboutsController');
    Route::post('abouts_mass_destroy', ['uses' => 'Admin\AboutsController@massDestroy', 'as' => 'abouts.mass_destroy']);
    Route::post('abouts_restore/{id}', ['uses' => 'Admin\AboutsController@restore', 'as' => 'abouts.restore']);
    Route::delete('abouts_perma_del/{id}', ['uses' => 'Admin\AboutsController@perma_del', 'as' => 'abouts.perma_del']);
    Route::resource('slidesets', 'Admin\SlidesetsController');
    Route::post('slidesets_mass_destroy', ['uses' => 'Admin\SlidesetsController@massDestroy', 'as' => 'slidesets.mass_destroy']);
    Route::post('slidesets_restore/{id}', ['uses' => 'Admin\SlidesetsController@restore', 'as' => 'slidesets.restore']);
    Route::delete('slidesets_perma_del/{id}', ['uses' => 'Admin\SlidesetsController@perma_del', 'as' => 'slidesets.perma_del']);
    Route::resource('metodologias', 'Admin\MetodologiasController');
    Route::post('metodologias_mass_destroy', ['uses' => 'Admin\MetodologiasController@massDestroy', 'as' => 'metodologias.mass_destroy']);
    Route::post('metodologias_restore/{id}', ['uses' => 'Admin\MetodologiasController@restore', 'as' => 'metodologias.restore']);
    Route::delete('metodologias_perma_del/{id}', ['uses' => 'Admin\MetodologiasController@perma_del', 'as' => 'metodologias.perma_del']);
    Route::resource('depoimentos', 'Admin\DepoimentosController');
    Route::post('depoimentos_mass_destroy', ['uses' => 'Admin\DepoimentosController@massDestroy', 'as' => 'depoimentos.mass_destroy']);

    Route::post('adddepsite', ['uses' => 'Admin\DepoimentosController@storesite', 'as' => 'depoimentos.addsite']);

    Route::post('depoimentos_restore/{id}', ['uses' => 'Admin\DepoimentosController@restore', 'as' => 'depoimentos.restore']);
    Route::delete('depoimentos_perma_del/{id}', ['uses' => 'Admin\DepoimentosController@perma_del', 'as' => 'depoimentos.perma_del']);
    Route::resource('familias', 'Admin\FamiliasController');
    Route::post('familias_mass_destroy', ['uses' => 'Admin\FamiliasController@massDestroy', 'as' => 'familias.mass_destroy']);
    Route::post('familias_restore/{id}', ['uses' => 'Admin\FamiliasController@restore', 'as' => 'familias.restore']);
    Route::delete('familias_perma_del/{id}', ['uses' => 'Admin\FamiliasController@perma_del', 'as' => 'familias.perma_del']);
    Route::resource('jogos', 'Admin\JogosController');
    Route::post('jogos_mass_destroy', ['uses' => 'Admin\JogosController@massDestroy', 'as' => 'jogos.mass_destroy']);
    Route::post('jogos_restore/{id}', ['uses' => 'Admin\JogosController@restore', 'as' => 'jogos.restore']);
    Route::delete('jogos_perma_del/{id}', ['uses' => 'Admin\JogosController@perma_del', 'as' => 'jogos.perma_del']);


    Route::post('csv_parse', 'Admin\CsvImportController@parse')->name('csv_parse');
    Route::post('csv_process', 'Admin\CsvImportController@process')->name('csv_process');

 
});
