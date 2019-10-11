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

// Routes For ADMIN LTE Alpha START........//

/** Dashboard Routes */
Route::get('dashboard','Dashboard\DashboardController@index');
Route::get('dashboard2','Dashboard\DashboardController@index2');
Route::get('dashboard3','Dashboard\DashboardController@index3');

/** Layout Routes */
Route::get('layout/top-nav','Dashboard\LayoutController@topNav');
Route::get('layout/boxed','Dashboard\LayoutController@boxed');
Route::get('layout/fixed','Dashboard\LayoutController@fixed');
Route::get('layout/sidebar-collapse','Dashboard\LayoutController@sidebarCollapse');

/** Widget Routes */
Route::get('widgets','Dashboard\WidgetController@index');

/** Chart Routes */
Route::get('chart/chartjs', 'Dashboard\ChartController@chartjs');
//Route::get('chart/morris','ChartController@morris');
Route::get('chart/flot','Dashboard\ChartController@flot');
Route::get('chart/inline-chart','Dashboard\ChartController@inlineChart');

/** UI Element Routes */
Route::get('ui/general','Dashboard\UIElementsController@general');
Route::get('ui/icons','Dashboard\UIElementsController@icons');
Route::get('ui/buttons','Dashboard\UIElementsController@buttons');
Route::get('ui/sliders','Dashboard\UIElementsController@sliders');
Route::get('ui/timeline','Dashboard\UIElementsController@timeline');
Route::get('ui/modals','Dashboard\UIElementsController@modals');

/** Form Routes */
Route::get('form/general','Dashboard\FormController@general');
Route::post('form/general','Dashboard\FormController@general');
Route::get('form/advance','Dashboard\FormController@advance');
Route::get('form/editor','Dashboard\FormController@editor');

/** Table Routes */
Route::get('table/simple','Dashboard\TableController@simple');
Route::get('table/data','Dashboard\TableController@data');

/** Calendar Routes */
Route::get('calendar','Dashboard\CalendarController@index');

/** Mail Box Routes */
Route::get('mailbox/inbox','Dashboard\MailBoxController@inbox');
Route::get('mailbox/compose','Dashboard\MailBoxController@compose');
Route::get('mailbox/read','Dashboard\MailBoxController@read');

/** Page Routes */
Route::get('page/invoice','Dashboard\PageController@invoice');
Route::get('page/profile','Dashboard\PageController@profile');
Route::get('page/login','Dashboard\PageController@login');
Route::get('page/register','Dashboard\PageController@register');
Route::get('page/reset','Dashboard\PageController@reset');
Route::get('page/lockscreen','Dashboard\PageController@lockscreen');
Route::get('page/invoice-print','Dashboard\PageController@invoicePrint');

/** Extra Routes */
Route::get('extra/404', 'Dashboard\ExtraController@error404');
Route::get('extra/500','Dashboard\ExtraController@error500');
Route::get('extra/blank','Dashboard\ExtraController@blank');
Route::get('extra/pace','Dashboard\ExtraController@pace');
Route::get('extra/pace','Dashboard\ExtraController@starter');

// Routes For ADMIN LTE Alpha END........//



//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'FrontController@index');

Route::get('attendance','AttendanceController@index')->name('custom.view');
Route::get('attendance/dashboard','AttendanceController@dashBoard')->name('attendance.dashboard');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
