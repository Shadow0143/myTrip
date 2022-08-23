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
Route::get('/packages/book-stay-darjeeling-tea-bunglow', [App\Http\Controllers\HomeController::class, 'packagesDetails'])->name('packagesDetails');
// Route::get('search/', [App\Http\Controllers\HomeController::class, 'packageSearch'])->name('search');
Route::get('/testimonial', [App\Http\Controllers\HomeController::class, 'testimonialShow'])->name('testimonialShow');
Route::get('/home/terms-conditions', [App\Http\Controllers\HomeController::class, 'termCondition'])->name('termCondition');
Route::get('/home/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy');
Route::get('/invoice-pdf/{invoiceLink}', [App\Http\Controllers\HomeController::class, 'invoicePdf'])->name('invoicePdf');
Route::post('/subscriber', [App\Http\Controllers\HomeController::class, 'subscriber'])->name('subscriber');

Route::get('razorpay-payment', [App\Http\Controllers\Admin\RazorpayPaymentController::class, 'index']);
Route::post('razorpay-payment/order-save', [App\Http\Controllers\Admin\RazorpayPaymentController::class, 'paymentOrderSave'])->name('razorpayPaymentOrderSave');
Route::get('payment/CreateOrder', [App\Http\Controllers\Admin\RazorpayPaymentController::class, 'paymentCreateOrder'])->name('razorpay.payment.create.order');
Route::post('razorpay-payment', [App\Http\Controllers\Admin\RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    Route::get('/setting', [App\Http\Controllers\Admin\DashboardController::class, 'setting'])->name('setting');
    Route::post('/submitsetting', [App\Http\Controllers\Admin\DashboardController::class, 'submit_setting'])->name('submit_setting');

	Route::get('/pages', [App\Http\Controllers\Admin\PagesController::class, 'index'])->name('pages');
    Route::get('/pages-add', [App\Http\Controllers\Admin\PagesController::class, 'addPages'])->name('addPages');
    Route::post('/post-pages', [App\Http\Controllers\Admin\PagesController::class, 'postPages'])->name('postPages');
    Route::get('/pages-edit/{id?}', [App\Http\Controllers\Admin\PagesController::class, 'editPages'])->name('editPages');
    Route::post('/update-pages', [App\Http\Controllers\Admin\PagesController::class, 'updatePages'])->name('updatePages');
    Route::get('/pages-destroy/{id?}', [App\Http\Controllers\Admin\PagesController::class, 'destroyPages'])->name('destroyPages');
	//Route::post('/contact', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('storeContactForm'); 
    Route::get('/banner', [App\Http\Controllers\Admin\BannerController::class, 'index'])->name('banner');
	Route::get('/banner-add', [App\Http\Controllers\Admin\BannerController::class, 'addBanner'])->name('addBanner');
    Route::post('/post-banner', [App\Http\Controllers\Admin\BannerController::class, 'postBanner'])->name('postBanner');
	Route::get('/banner-edit/{id?}', [App\Http\Controllers\Admin\BannerController::class, 'editBanner'])->name('editBanner');
    Route::post('/update-banner', [App\Http\Controllers\Admin\BannerController::class, 'updateBanner'])->name('updateBanner');
	Route::get('/destroy-banner/{id?}', [App\Http\Controllers\Admin\BannerController::class, 'destroyBanner'])->name('destroyBanner');
	
	Route::get('/bannercontain', [App\Http\Controllers\Admin\BannerContainController::class, 'index'])->name('bannerContain');
	Route::get('/bannercontain-add', [App\Http\Controllers\Admin\BannerContainController::class, 'addBannerContain'])->name('addBannerContain');
    Route::post('/post-bannercontain', [App\Http\Controllers\Admin\BannerContainController::class, 'postBannerContain'])->name('postBannerContain');
	Route::get('/bannercontain-edit/{id?}', [App\Http\Controllers\Admin\BannerContainController::class, 'editBannerContain'])->name('editBannerContain');
    Route::post('/update-bannercontain', [App\Http\Controllers\Admin\BannerContainController::class, 'updateBannerContain'])->name('updateBannerContain');
    Route::get('/destroy-bannercontain/{id?}', [App\Http\Controllers\Admin\BannerContainController::class, 'destroyBannerContain'])->name('destroyBannerContain');
    
	//----------------------------
    Route::get('/export-lead', [App\Http\Controllers\Admin\Leadb2cController::class, 'exportLeads'])->name('exportLeads');
    //-----------------------------

    Route::get('/leadb2c', [App\Http\Controllers\Admin\Leadb2cController::class, 'index'])->name('leadb2c');
    Route::get('/search', [App\Http\Controllers\Admin\Leadb2cController::class, 'searchLead'])->name('searchLead');
    Route::get('/lead-details-edit/{id}', [App\Http\Controllers\Admin\Leadb2cController::class, 'leadsDetailsEdit'])->name('leadsDetailsEdit');
    Route::get('/lead-details-edit', [App\Http\Controllers\Admin\Leadb2cController::class, 'leadsDetailsUpdate'])->name('leadsDetailsUpdate');
    Route::post('/leadb2c', [App\Http\Controllers\Admin\Leadb2cController::class, 'updateLeadb2c'])->name('updateLeadb2c');
    Route::get('/lead-entry', [App\Http\Controllers\Admin\LeadentryController::class, 'leadEntry'])->name('leadEntry');
    Route::get('/email/{id}', [App\Http\Controllers\Admin\EmailController::class, 'email'])->name('email');
    Route::get('/fitch-email-data', [App\Http\Controllers\Admin\EmailController::class, 'emailDadta'])->name('emailDadta');
    Route::post('/send-email', [App\Http\Controllers\Admin\EmailController::class, 'sendEmail'])->name('sendEmail');
    Route::post('/lead-entry', [App\Http\Controllers\Admin\LeadentryController::class, 'leadEntrySave'])->name('leadEntrySave');
    Route::get('/search-by-enq-id', [App\Http\Controllers\Admin\SearchByEnqIdController::class, 'searchByEnq'])->name('searchByEnq');
    Route::get('/booking-details', [App\Http\Controllers\Admin\BookingDetailsController::class, 'bookingDeatils'])->name('bookingDeatils');
    Route::post('/booking-details', [App\Http\Controllers\Admin\BookingDetailsController::class, 'fetchBookingDetails'])->name('fetchBookingDetails');
    Route::get('/search', [App\Http\Controllers\Admin\SearchByEnqIdController::class, 'productSearching'])->name('search');
    Route::get('/searchByContactNo', [App\Http\Controllers\Admin\SearchByEnqIdController::class, 'searchByContactNo'])->name('searchByContactNo');
    Route::get('/searchByEmail', [App\Http\Controllers\Admin\SearchByEnqIdController::class, 'searchByEmail'])->name('searchByEmail');
    Route::get('/add-payment-email', [App\Http\Controllers\Admin\SearchByEnqIdController::class, 'addPaymentEmail'])->name('addPaymentEmail');
    Route::get('/invoice-email', [App\Http\Controllers\Admin\SearchByEnqIdController::class, 'invoiceEmail'])->name('invoiceEmail');
    Route::post('/invoice-email-send', [App\Http\Controllers\Admin\SearchByEnqIdController::class, 'invoiceEmailSend'])->name('invoiceEmailSend');
    Route::post('/add-payment-email', [App\Http\Controllers\Admin\SearchByEnqIdController::class, 'addPaymentEmailSave'])->name('addPaymentEmailSave');
    Route::post('/search-by-enq-id', [App\Http\Controllers\Admin\SearchByEnqIdController::class, 'submitValues'])->name('submitValues');
    Route::get('/add-hotel', [App\Http\Controllers\Admin\BookingDetailsController::class, 'addHotel'])->name('addHotel');
    Route::post('/add-hotel', [App\Http\Controllers\Admin\BookingDetailsController::class, 'addHotelSave'])->name('addHotelSave');
    Route::get('/add-transportation', [App\Http\Controllers\Admin\BookingDetailsController::class, 'addTransportation'])->name('addTransportation');
    Route::post('/add-transportation', [App\Http\Controllers\Admin\BookingDetailsController::class, 'addTransportationSave'])->name('addTransportationSave');
    Route::post('/leadb2c/save', [App\Http\Controllers\Admin\Leadb2cController::class, 'saveComment'])->name('saveComment');
    Route::post('/leadb2c/show', [App\Http\Controllers\Admin\Leadb2cController::class, 'fatchComment'])->name('fatchComment');
    Route::post('/leadb2c/fetch-user-email', [App\Http\Controllers\Admin\Leadb2cController::class, 'fatchUserEmail'])->name('fatchUserEmail');
    Route::get('/add-suppliment', [App\Http\Controllers\Admin\BookingDetailsController::class, 'addSupplement'])->name('addSupplement');
    Route::post('/add-suppliment', [App\Http\Controllers\Admin\BookingDetailsController::class, 'addSupplementSave'])->name('addSupplementSave');
    Route::get('/gentle-payment-reminder', [App\Http\Controllers\Admin\BookingDetailsController::class, 'paymentReminder'])->name('paymentReminder');
    Route::get('/send-invoice-booking-details', [App\Http\Controllers\Admin\BookingDetailsController::class, 'sendInvoice'])->name('sendInvoice');
    Route::post('/send-invoice-booking-details', [App\Http\Controllers\Admin\BookingDetailsController::class, 'saveInvoice'])->name('saveInvoice');
    Route::get('/gentle-payment-reminder', [App\Http\Controllers\Admin\BookingDetailsController::class, 'gentleReminder'])->name('gentleReminder');
    Route::get('/final-payment-reminder', [App\Http\Controllers\Admin\BookingDetailsController::class, 'finalReminder'])->name('finalReminder');

    Route::get('/tour', [App\Http\Controllers\Admin\PackageController::class, 'domesticTour'])->name('domesticTour');
    Route::get('/tour-form', [App\Http\Controllers\Admin\PackageController::class, 'packageForm'])->name('packageForm');
    Route::get('/gallery',[App\Http\Controllers\Admin\GalleryController::class,'galleryView'])->name('galleryView');

    Route::post('/update-tour-category',[App\Http\Controllers\Admin\PackageController::class,'updateTourCategory'])->name('updateTourCategory');

    Route::post('/addTourCategory',[App\Http\Controllers\Admin\PackageController::class,'addTourCategory'])->name('addTourCategory');
    Route::post('/fatch-tour-category',[App\Http\Controllers\Admin\PackageController::class,'fatchTourCategory'])->name('fatchTourCategory');
    Route::post('/fatch-package',[App\Http\Controllers\Admin\PackageController::class,'fatchPackage'])->name('fatchPackage');
    Route::post('/tour',[App\Http\Controllers\Admin\PackageController::class,'updateCategoryStatus'])->name('updateCategoryStatus');

    Route::post('/fatch-package',[App\Http\Controllers\Admin\PackageController::class,'fatchPackage'])->name('fatchPackage');
    Route::get('/package', [App\Http\Controllers\Admin\PackageController::class, 'packageView'])->name('packageView');
    Route::post('/packageSave', [App\Http\Controllers\Admin\PackageController::class, 'packageSaves'])->name('packageSaves');
    Route::post('/package',[App\Http\Controllers\Admin\PackageController::class,'updatePackageStatus'])->name('updatePackageStatus');
    Route::post('/package-update',[App\Http\Controllers\Admin\PackageController::class,'updatePackage'])->name('updatePackage');

    Route::get('/package-section', [App\Http\Controllers\Admin\PackageController::class, 'packageSectionView'])->name('packageSectionView');
    Route::post('package-section-save', [App\Http\Controllers\Admin\PackageController::class, 'packageSectionSave'])->name('packageSectionSave');
    Route::post('/package-section',[App\Http\Controllers\Admin\PackageController::class,'updateSectionStatus'])->name('updateSectionStatus');
    Route::post('/fatch-package-section',[App\Http\Controllers\Admin\PackageController::class,'fatchPackageSection'])->name('fatchPackageSection');
    Route::post('/update-package-section',[App\Http\Controllers\Admin\PackageController::class,'updatePackageSection'])->name('updatePackageSection');

    Route::get('/package-sub-section', [App\Http\Controllers\Admin\PackageController::class, 'packageSubSectionView'])->name('packageSubSectionView');
    Route::post('/package-sub-section-save', [App\Http\Controllers\Admin\PackageController::class, 'packageSubSectionSave'])->name('packageSubSectionSave');
    Route::post('/package-sub-section',[App\Http\Controllers\Admin\PackageController::class,'updateSubSectionStatus'])->name('updateSubSectionStatus');
    Route::post('/fatch-package-sub-section',[App\Http\Controllers\Admin\PackageController::class,'fatchPackageSubSection'])->name('fatchPackageSubSection');
    Route::post('/update-package-sub-section',[App\Http\Controllers\Admin\PackageController::class,'updateSubSection'])->name('updateSubSection');

    Route::get('/package-sub-sub-section', [App\Http\Controllers\Admin\PackageController::class, 'packageSubSubSectionView'])->name('packageSubSubSectionView');
    Route::post('/package-sub-sub-section-save', [App\Http\Controllers\Admin\PackageController::class, 'packageSubSubSectionSave'])->name('packageSubSubSectionSave');
    Route::post('/package-sub-sub-section',[App\Http\Controllers\Admin\PackageController::class,'updateSubSubSectionStatus'])->name('updateSubSubSectionStatus');
    Route::post('/fatch-package-sub-sub-section',[App\Http\Controllers\Admin\PackageController::class,'fatchPackageSubSubSection'])->name('fatchPackageSubSubSection');
    Route::post('/update-package-sub-sub-section',[App\Http\Controllers\Admin\PackageController::class,'updateSubSubSection'])->name('updateSubSubSection');

    Route::get('/testimonial', [App\Http\Controllers\Admin\TestimonialController::class, 'testimonialView'])->name('testimonialView');
    Route::post('/testimonial-save', [App\Http\Controllers\Admin\TestimonialController::class, 'testimonialSaves'])->name('testimonialSaves');
    Route::post('/testimonial',[App\Http\Controllers\Admin\TestimonialController::class,'updateTestimonialStatus'])->name('updateTestimonialStatus');
    Route::post('/testimonial-update',[App\Http\Controllers\Admin\TestimonialController::class,'updateTestimonial'])->name('updateTestimonial');
    Route::post('/fatch-testimonial',[App\Http\Controllers\Admin\TestimonialController::class,'fatchTestimonial'])->name('fatchTestimonial');

    Route::get('/features', [App\Http\Controllers\Admin\FeaturesController::class, 'featuresView'])->name('featuresView');
    Route::post('/features-save', [App\Http\Controllers\Admin\FeaturesController::class, 'featuresSaves'])->name('featuresSaves');
    Route::post('/features',[App\Http\Controllers\Admin\FeaturesController::class,'updateFeaturesStatus'])->name('updateFeaturesStatus');
    Route::post('/features-update',[App\Http\Controllers\Admin\FeaturesController::class,'updateFeatures'])->name('updateFeatures');
    Route::post('/fatch-features',[App\Http\Controllers\Admin\FeaturesController::class,'fatchFeatures'])->name('fatchFeatures');

    Route::get('/specialoffer', [App\Http\Controllers\Admin\SpecialofferController::class, 'specialofferView'])->name('specialofferView');
    Route::post('/specialoffer-save', [App\Http\Controllers\Admin\SpecialofferController::class, 'specialofferSaves'])->name('specialofferSaves');
    Route::post('/specialoffer',[App\Http\Controllers\Admin\SpecialofferController::class,'updateSpecialofferStatus'])->name('updateSpecialofferStatus');
    Route::post('/specialoffer-update',[App\Http\Controllers\Admin\SpecialofferController::class,'updateSpecialoffer'])->name('updateSpecialoffer');
    Route::post('/fatch-specialoffer',[App\Http\Controllers\Admin\SpecialofferController::class,'fatchSpecialoffer'])->name('fatchSpecialoffer');

    Route::get('/subscriber', [App\Http\Controllers\Admin\DashboardController::class, 'subscriberView'])->name('subscriberView');

    Route::get('/user', [App\Http\Controllers\Admin\UserController::class, 'userView'])->name('userView');
    Route::post('/user-save', [App\Http\Controllers\Admin\UserController::class, 'userSaves'])->name('userSaves');
    // Route::post('/admin/testimonial',[App\Http\Controllers\Admin\UserController::class,'updateTestimonialStatus'])->name('updateTestimonialStatus');
    Route::post('/user-update',[App\Http\Controllers\Admin\UserController::class,'updateUser'])->name('updateUser');
    Route::post('/fatch-user',[App\Http\Controllers\Admin\UserController::class,'fatchUser'])->name('fatchUser');
    Route::post('/send-quotation', [App\Http\Controllers\Admin\EmailController::class, 'saveQuotation'])->name('saveQuotation');
    Route::get('/quotation-pdf/{quotationLink}', [App\Http\Controllers\Admin\EmailController::class, 'quotationPdf'])->name('quotationPdf');
});