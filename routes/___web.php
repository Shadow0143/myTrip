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
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact/save', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contactSave');
Route::get('/packages/{slug}', [App\Http\Controllers\HomeController::class, 'packagesDetails'])->name('packages-details');
Route::post('/call-back-save', [App\Http\Controllers\ContactController::class, 'getCallBack'])->name('getCallBack');
Route::get('/packages', [App\Http\Controllers\HomeController::class, 'packages'])->name('packages');
Route::get('/testimonial', [App\Http\Controllers\HomeController::class, 'testimonialShow'])->name('testimonialShow');
Route::get('/home/terms-conditions', [App\Http\Controllers\HomeController::class, 'termCondition'])->name('termCondition');
Route::get('/home/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy');

Route::get('razorpay-payment', [App\Http\Controllers\Admin\RazorpayPaymentController::class, 'index']);
Route::post('razorpay-payment/order-save', [App\Http\Controllers\Admin\RazorpayPaymentController::class, 'paymentOrderSave'])->name('razorpayPaymentOrderSave');
Route::get('payment/CreateOrder', [App\Http\Controllers\Admin\RazorpayPaymentController::class, 'paymentCreateOrder'])->name('razorpay.payment.create.order');
Route::post('razorpay-payment', [App\Http\Controllers\Admin\RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    Route::get('/admin/setting', [App\Http\Controllers\Admin\DashboardController::class, 'setting'])->name('setting');
    Route::post('/submitsetting', [App\Http\Controllers\Admin\DashboardController::class, 'submit_setting'])->name('submit_setting');

	Route::get('/admin/pages', [App\Http\Controllers\Admin\PagesController::class, 'index'])->name('pages');
    Route::get('/admin/pages-add', [App\Http\Controllers\Admin\PagesController::class, 'addPages'])->name('addPages');
    Route::post('/admin/post-pages', [App\Http\Controllers\Admin\PagesController::class, 'postPages'])->name('postPages');
    Route::get('/admin/pages-edit/{id?}', [App\Http\Controllers\Admin\PagesController::class, 'editPages'])->name('editPages');
    Route::post('/admin/update-pages', [App\Http\Controllers\Admin\PagesController::class, 'updatePages'])->name('updatePages');
    Route::get('/admin/pages-destroy/{id?}', [App\Http\Controllers\Admin\PagesController::class, 'destroyPages'])->name('destroyPages');
	//Route::post('/contact', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('storeContactForm'); 
    Route::get('/admin/banner', [App\Http\Controllers\Admin\BannerController::class, 'index'])->name('banner');
	Route::get('/admin/banner-add', [App\Http\Controllers\Admin\BannerController::class, 'addBanner'])->name('addBanner');
    Route::post('/admin/post-banner', [App\Http\Controllers\Admin\BannerController::class, 'postBanner'])->name('postBanner');
	Route::get('/admin/banner-edit/{id?}', [App\Http\Controllers\Admin\BannerController::class, 'editBanner'])->name('editBanner');
    Route::post('/admin/update-banner', [App\Http\Controllers\Admin\BannerController::class, 'updateBanner'])->name('updateBanner');
	Route::get('/admin/destroy-banner/{id?}', [App\Http\Controllers\Admin\BannerController::class, 'destroyBanner'])->name('destroyBanner');
	
	Route::get('/admin/bannercontain', [App\Http\Controllers\Admin\BannerContainController::class, 'index'])->name('bannerContain');
	Route::get('/admin/bannercontain-add', [App\Http\Controllers\Admin\BannerContainController::class, 'addBannerContain'])->name('addBannerContain');
    Route::post('/admin/post-bannercontain', [App\Http\Controllers\Admin\BannerContainController::class, 'postBannerContain'])->name('postBannerContain');
	Route::get('/admin/bannercontain-edit/{id?}', [App\Http\Controllers\Admin\BannerContainController::class, 'editBannerContain'])->name('editBannerContain');
    Route::post('/admin/update-bannercontain', [App\Http\Controllers\Admin\BannerContainController::class, 'updateBannerContain'])->name('updateBannerContain');
    Route::get('/admin/destroy-bannercontain/{id?}', [App\Http\Controllers\Admin\BannerContainController::class, 'destroyBannerContain'])->name('destroyBannerContain');

	
    Route::get('/admin/leadb2c', [App\Http\Controllers\Admin\Leadb2cController::class, 'index'])->name('leadb2c');
    Route::get('/admin/search', [App\Http\Controllers\Admin\Leadb2cController::class, 'searchLead'])->name('searchLead');
    Route::get('/admin/lead-details-edit/{id}', [App\Http\Controllers\Admin\Leadb2cController::class, 'leadsDetailsEdit'])->name('leadsDetailsEdit');
    Route::post('/admin/leadb2c', [App\Http\Controllers\Admin\Leadb2cController::class, 'updateLeadb2c'])->name('updateLeadb2c');
    Route::get('/admin/lead-entry', [App\Http\Controllers\Admin\LeadentryController::class, 'leadEntry'])->name('leadEntry');
    Route::get('/admin/email/{id}', [App\Http\Controllers\Admin\EmailController::class, 'email'])->name('email');
    Route::post('/admin/send-email', [App\Http\Controllers\Admin\EmailController::class, 'sendEmail'])->name('sendEmail');
    Route::post('/admin/lead-entry', [App\Http\Controllers\Admin\LeadentryController::class, 'leadEntrySave'])->name('leadEntrySave');
    Route::get('/admin/search-by-enq-id', [App\Http\Controllers\Admin\SearchByEnqIdController::class, 'searchByEnq'])->name('searchByEnq');
    Route::get('/admin/booking-details', [App\Http\Controllers\Admin\BookingDetailsController::class, 'bookingDeatils'])->name('bookingDeatils');
    Route::post('/admin/booking-details', [App\Http\Controllers\Admin\BookingDetailsController::class, 'fetchBookingDetails'])->name('fetchBookingDetails');
    Route::get('/search', [App\Http\Controllers\Admin\SearchByEnqIdController::class, 'productSearching'])->name('search');
    Route::get('/searchByContactNo', [App\Http\Controllers\Admin\SearchByEnqIdController::class, 'searchByContactNo'])->name('searchByContactNo');
    Route::get('/searchByEmail', [App\Http\Controllers\Admin\SearchByEnqIdController::class, 'searchByEmail'])->name('searchByEmail');
    Route::get('/admin/add-payment-email', [App\Http\Controllers\Admin\SearchByEnqIdController::class, 'addPaymentEmail'])->name('addPaymentEmail');
    Route::get('/admin/invoice-email', [App\Http\Controllers\Admin\SearchByEnqIdController::class, 'invoiceEmail'])->name('invoiceEmail');
    Route::post('/admin/add-payment-email', [App\Http\Controllers\Admin\SearchByEnqIdController::class, 'addPaymentEmailSave'])->name('addPaymentEmailSave');
    Route::post('/admin/search-by-enq-id', [App\Http\Controllers\Admin\SearchByEnqIdController::class, 'submitValues'])->name('submitValues');
    Route::get('/admin/add-hotel', [App\Http\Controllers\Admin\BookingDetailsController::class, 'addHotel'])->name('addHotel');
    Route::post('/admin/add-hotel', [App\Http\Controllers\Admin\BookingDetailsController::class, 'addHotelSave'])->name('addHotelSave');
    Route::get('/admin/add-transportation', [App\Http\Controllers\Admin\BookingDetailsController::class, 'addTransportation'])->name('addTransportation');
    Route::post('/admin/add-transportation', [App\Http\Controllers\Admin\BookingDetailsController::class, 'addTransportationSave'])->name('addTransportationSave');
    Route::post('/admin/leadb2c/save', [App\Http\Controllers\Admin\Leadb2cController::class, 'saveComment'])->name('saveComment');
    Route::post('/admin/leadb2c/show', [App\Http\Controllers\Admin\Leadb2cController::class, 'fatchComment'])->name('fatchComment');
    Route::get('/admin/add-suppliment', [App\Http\Controllers\Admin\BookingDetailsController::class, 'addSupplement'])->name('addSupplement');
    Route::post('/admin/add-suppliment', [App\Http\Controllers\Admin\BookingDetailsController::class, 'addSupplementSave'])->name('addSupplementSave');
    Route::get('/admin/gentle-payment-reminder', [App\Http\Controllers\Admin\BookingDetailsController::class, 'paymentReminder'])->name('paymentReminder');
    Route::get('/admin/send-invoice-booking-details', [App\Http\Controllers\Admin\BookingDetailsController::class, 'sendInvoice'])->name('sendInvoice');

    Route::get('/admin/tour', [App\Http\Controllers\Admin\PackageController::class, 'domesticTour'])->name('domesticTour');
    Route::get('/admin/tour-form', [App\Http\Controllers\Admin\PackageController::class, 'packageForm'])->name('packageForm');
    Route::get('/admin/gallery',[App\Http\Controllers\Admin\GalleryController::class,'galleryView'])->name('galleryView');

    Route::post('/admin/update-tour-category',[App\Http\Controllers\Admin\PackageController::class,'updateTourCategory'])->name('updateTourCategory');

    Route::post('/admin/addTourCategory',[App\Http\Controllers\Admin\PackageController::class,'addTourCategory'])->name('addTourCategory');
    Route::post('/admin/fatch-tour-category',[App\Http\Controllers\Admin\PackageController::class,'fatchTourCategory'])->name('fatchTourCategory');
    Route::post('/admin/fatch-package',[App\Http\Controllers\Admin\PackageController::class,'fatchPackage'])->name('fatchPackage');
    Route::post('/admin/tour',[App\Http\Controllers\Admin\PackageController::class,'updateCategoryStatus'])->name('updateCategoryStatus');

    Route::post('/admin/fatch-package',[App\Http\Controllers\Admin\PackageController::class,'fatchPackage'])->name('fatchPackage');
    Route::get('/admin/package', [App\Http\Controllers\Admin\PackageController::class, 'packageView'])->name('packageView');
    Route::post('/packageSave', [App\Http\Controllers\Admin\PackageController::class, 'packageSaves'])->name('packageSaves');
    Route::post('/admin/package',[App\Http\Controllers\Admin\PackageController::class,'updatePackageStatus'])->name('updatePackageStatus');
    Route::post('/admin/package-update',[App\Http\Controllers\Admin\PackageController::class,'updatePackage'])->name('updatePackage');

    Route::get('/admin/package-section', [App\Http\Controllers\Admin\PackageController::class, 'packageSectionView'])->name('packageSectionView');
    Route::post('package-section-save', [App\Http\Controllers\Admin\PackageController::class, 'packageSectionSave'])->name('packageSectionSave');
    Route::post('/admin/package-section',[App\Http\Controllers\Admin\PackageController::class,'updateSectionStatus'])->name('updateSectionStatus');
    Route::post('/admin/fatch-package-section',[App\Http\Controllers\Admin\PackageController::class,'fatchPackageSection'])->name('fatchPackageSection');
    Route::post('/admin/update-package-section',[App\Http\Controllers\Admin\PackageController::class,'updatePackageSection'])->name('updatePackageSection');

    Route::get('/admin/package-sub-section', [App\Http\Controllers\Admin\PackageController::class, 'packageSubSectionView'])->name('packageSubSectionView');
    Route::post('/package-sub-section-save', [App\Http\Controllers\Admin\PackageController::class, 'packageSubSectionSave'])->name('packageSubSectionSave');
    Route::post('/admin/package-sub-section',[App\Http\Controllers\Admin\PackageController::class,'updateSubSectionStatus'])->name('updateSubSectionStatus');
    Route::post('/admin/fatch-package-sub-section',[App\Http\Controllers\Admin\PackageController::class,'fatchPackageSubSection'])->name('fatchPackageSubSection');
    Route::post('/admin/update-package-sub-section',[App\Http\Controllers\Admin\PackageController::class,'updateSubSection'])->name('updateSubSection');

    Route::get('/admin/package-sub-sub-section', [App\Http\Controllers\Admin\PackageController::class, 'packageSubSubSectionView'])->name('packageSubSubSectionView');
    Route::post('/package-sub-sub-section-save', [App\Http\Controllers\Admin\PackageController::class, 'packageSubSubSectionSave'])->name('packageSubSubSectionSave');
    Route::post('/admin/package-sub-sub-section',[App\Http\Controllers\Admin\PackageController::class,'updateSubSubSectionStatus'])->name('updateSubSubSectionStatus');
    Route::post('/admin/fatch-package-sub-sub-section',[App\Http\Controllers\Admin\PackageController::class,'fatchPackageSubSubSection'])->name('fatchPackageSubSubSection');
    Route::post('/admin/update-package-sub-sub-section',[App\Http\Controllers\Admin\PackageController::class,'updateSubSubSection'])->name('updateSubSubSection');

    Route::get('/admin/testimonial', [App\Http\Controllers\Admin\TestimonialController::class, 'testimonialView'])->name('testimonialView');
    Route::post('/testimonial-save', [App\Http\Controllers\Admin\TestimonialController::class, 'testimonialSaves'])->name('testimonialSaves');
    Route::post('/admin/testimonial',[App\Http\Controllers\Admin\TestimonialController::class,'updateTestimonialStatus'])->name('updateTestimonialStatus');
    Route::post('/admin/testimonial-update',[App\Http\Controllers\Admin\TestimonialController::class,'updateTestimonial'])->name('updateTestimonial');
    Route::post('/admin/fatch-testimonial',[App\Http\Controllers\Admin\TestimonialController::class,'fatchTestimonial'])->name('fatchTestimonial');
});