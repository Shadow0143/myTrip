<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/aboutus', [App\Http\Controllers\PageContoller::class, 'index'])->name('index');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contactUs'])->name('contactUs');
Route::get('/weekend-holiday', [App\Http\Controllers\HomeController::class, 'weekendHoliday'])->name('weekendHoliday');
Route::get('/international-packages', [App\Http\Controllers\HomeController::class, 'internationalPackages'])->name('internationalPackages');
Route::get('/tea-tourism', [App\Http\Controllers\HomeController::class, 'teaTourism'])->name('teaTourism');
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
	Route::get('/admin/pages', [App\Http\Controllers\Admin\PagesController::class, 'index'])->name('pages');
    Route::get('/admin/pages-add', [App\Http\Controllers\Admin\PagesController::class, 'addPages'])->name('addPages');
    Route::post('/admin/post-pages', [App\Http\Controllers\Admin\PagesController::class, 'postPages'])->name('postPages');
    Route::get('/admin/pages-edit/{id?}', [App\Http\Controllers\Admin\PagesController::class, 'editPages'])->name('editPages');
    Route::post('/admin/update-pages', [App\Http\Controllers\Admin\PagesController::class, 'updatePages'])->name('updatePages');
    Route::get('/admin/pages-destroy/{id?}', [App\Http\Controllers\Admin\PagesController::class, 'destroyPages'])->name('destroyPages');
    Route::get('/admin/banner', [App\Http\Controllers\Admin\BannerController::class, 'index'])->name('banner');
	Route::get('/admin/banner-add', [App\Http\Controllers\Admin\BannerController::class, 'addBanner'])->name('addBanner');
    Route::post('/admin/post-banner', [App\Http\Controllers\Admin\BannerController::class, 'postBanner'])->name('postBanner');
	Route::get('/admin/banner-edit/{id?}', [App\Http\Controllers\Admin\BannerController::class, 'editBanner'])->name('editBanner');
    Route::post('/admin/update-banner', [App\Http\Controllers\Admin\BannerController::class, 'updateBanner'])->name('updateBanner');
    Route::get('/admin/destroy/{id?}', [App\Http\Controllers\Admin\BannerController::class, 'destroyBanner'])->name('destroyBanner');
    Route::get('/admin/leadb2c', [App\Http\Controllers\Admin\Leadb2cController::class, 'index'])->name('leadb2c');
    Route::post('/admin/leadb2c', [App\Http\Controllers\Admin\Leadb2cController::class, 'updateLeadb2c'])->name('updateLeadb2c');
    Route::get('/admin/lead-entry', [App\Http\Controllers\Admin\LeadentryController::class, 'leadEntry'])->name('leadEntry');
    Route::get('/admin/email', [App\Http\Controllers\Admin\EmailController::class, 'email'])->name('email');
    Route::post('/admin/lead-entry', [App\Http\Controllers\Admin\LeadentryController::class, 'leadEntrySave'])->name('leadEntrySave');
    Route::get('/admin/search-by-enq-id', [App\Http\Controllers\Admin\SearchByEnqIdController::class, 'searchByEnq'])->name('searchByEnq');
    Route::get('/admin/booking-details', [App\Http\Controllers\Admin\BookingDetailsController::class, 'bookingDetails'])->name('bookingDetails');
    Route::get('/search', [App\Http\Controllers\Admin\SearchByEnqIdController::class, 'productSearching'])->name('search');
    Route::get('/searchByContactNo', [App\Http\Controllers\Admin\SearchByEnqIdController::class, 'searchByContactNo'])->name('searchByContactNo');
    Route::get('/searchByEmail', [App\Http\Controllers\Admin\SearchByEnqIdController::class, 'searchByEmail'])->name('searchByEmail');
    Route::get('/admin/add-payment-email', [App\Http\Controllers\Admin\SearchByEnqIdController::class, 'addPaymentEmail'])->name('addPaymentEmail');
    Route::get('/admin/invoice-email', [App\Http\Controllers\Admin\SearchByEnqIdController::class, 'invoiceEmail'])->name('invoiceEmail');
});
