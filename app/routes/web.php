<?php

use Illuminate\Http\Request;
use App\Events\TriggerPayments;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\NotificationPaymentHandler;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\packlane\EDPrepackbuiler;
use App\Http\Controllers\Livewire\HistoriesCustomers;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::get('search', function(Request $request) {
    
        $articles = NotificationPaymentHandler::search($request->q)->get();
    
        return $articles;
    });
    

Route::post('/KOP-notification-handler', function (Request $request) {
        event(new TriggerPayments($request->all()));
                $data = [
                        'transaction_time' => $request->transaction_time,
                        'transaction_status' => $request->transaction_status,
                        'transaction_id' => $request->transaction_id,
                        'store' => $request->store,
                        'status_message' => $request->status_message,
                        'status_code' => $request->status_code,
                        'signature_key' => $request->signature_key,
                        'payment_type' => $request->payment_type,
                        'payment_code' => $request->payment_code,
                        'order_id' => $request->order_id,
                        'merchant_id' => $request->merchant_id,
                        'gross_amount' => $request->gross_amount,
                        'currency' => $request->currency,
                        'approval_code' => $request->approval_code,
                        'settlement_time' => $request->settlement_time,
                        'fraud_status' => $request->fraud_status,
                        'biller_code' => $request->biller_code,
                        'bill_key' => $request->bill_key,
                        'va_numbers' => $request->va_numbers,
                        'payment_amounts' => $request->payment_amounts
                        ];
                NotificationPaymentHandler::create($data);
        return 308;
});

Route::post('/snap-finish-notification-handler', 'packlane\EDPrepackbuiler@finish')->name('payment.finish');
Route::post('/render-api-careers', 'packlane\EDPrepackbuiler@APIcareers')->name('careers.api.secret');
Route::post('/rest-api-default-end', 'packlane\EDPrepackbuiler@TranslatorGoogleAPIsdefaultEN')->name('rest.api.key.lang.end');
Route::post('/render-api-company-profiles', 'packlane\EDPrepackbuiler@APICompanyProfiles')->name('cmpf.profiles.api.secret');
Route::post('/render-api-vm', 'packlane\EDPrepackbuiler@APIVM')->name('cmpf.vm.api.secret');
Route::post('/render-api-cool-client', 'packlane\EDPrepackbuiler@APICOOLCLIENT')->name('cool.client.vm.api.secret');
Route::post('/render-api-about-company', 'packlane\EDPrepackbuiler@APIsAboutCompany')->name('cmpf.about.company.api.secret');
Route::post('/render-api-news', 'packlane\EDPrepackbuiler@APInews')->name('news.api.secret');
Route::post('/render-api-google-translate', 'packlane\EDPrepackbuiler@TranslatorGoogleAPIs')->name('translate.to.google');
Route::post('/render-api-detail-news', 'packlane\EDPrepackbuiler@APInewsdetail')->name('news.api.secret.detail');
Route::post('/render-api-detail-achievement', 'packlane\EDPrepackbuiler@APIsAchievement')->name('achievement.api.secret.detail');
Route::post('/render-api-post', 'packlane\EDPrepackbuiler@APIposts')->name('posts.api.secret');
Route::get('dashboard', 'packlane\EDPrepackbuiler@dashboard')->name('dashboard');
Route::get('detailDataComponent/{compUIDs}', 'packlane\EDPrepackbuiler@detailDataComponent')->name('detailDataComponent');
Route::get('design-a-box', 'packlane\EDPrepackbuiler@welcomesdesignabox')->name('welcomesdesignabox');
Route::post('design-a-send-orders', 'packlane\EDPrepackbuiler@orders')->name('orders.mkt');
Route::post('design-a-send-orders-p2', 'packlane\EDPrepackbuiler@orders_prt2')->name('orders.mkt.prt2');
Route::post('design-a-send-orders-p3', 'packlane\EDPrepackbuiler@orders_prt3')->name('orders.mkt.prt3');
Route::post('design-a-send-orders-p4', 'packlane\EDPrepackbuiler@orders_prt4')->name('orders.mkt.prt4');
Route::post('design-a-send-orders-nodoc', 'packlane\EDPrepackbuiler@orders_nofile')->name('orders.nonfile.mkt');
Route::post('design-a-send-orders-LastComponentIndex', 'packlane\EDPrepackbuiler@LastComponentIndex')->name('orders.nonfile.LastComponentIndex');
Route::post('order_customers-mkt-prf', 'packlane\EDPrepackbuiler@order_customers')->name('orders.order_customers.to.mkt');
Route::post('order_customers-mkt-only', 'packlane\EDPrepackbuiler@order_customers_only')->name('orders.order_customers.to.mkt.only');
Route::get('order-customers', 'packlane\EDPrepackbuiler@order_customers')->name('orders.order_customers.to.get.mkt');
Route::post('design-a-send-orders-nodoc-prt2', 'packlane\EDPrepackbuiler@orders_nofile_prt2')->name('orders.nonfile.mkt.prt2');
Route::post('design-a-send-orders-nodoc-prt3', 'packlane\EDPrepackbuiler@orders_nofile_prt3')->name('orders.nonfile.mkt.prt3');
Route::post('design-a-send-orders-nodoc-prt4', 'packlane\EDPrepackbuiler@orders_nofile_prt4')->name('orders.nonfile.mkt.prt4');
Route::post('/store-file-orders', 'packlane\EDPrepackbuiler@storedImageData')->name('uploadf');
Route::post('/store-file-orders-prt-2', 'packlane\EDPrepackbuiler@storedImageData_dp2')->name('uploadf_2');
Route::post('/store-file-orders-prt-3', 'packlane\EDPrepackbuiler@storedImageData_dp3')->name('uploadf_3');
Route::post('/store-file-orders-prt-4', 'packlane\EDPrepackbuiler@storedImageData_dp4')->name('uploadf_4');
Route::post('/getterComponentBrowserFileID', 'packlane\EDPrepackbuiler@getterComponentBrowserFileID')->name('getterComponentBrowserFileID');
Route::post('/getterComponent', 'packlane\EDPrepackbuiler@getterComponent')->name('getterComponent');
Route::post('/update-files', 'packlane\EDPrepackbuiler@updateDCP1')->name('updateFiles');
Route::post('/update-files-c2', 'packlane\EDPrepackbuiler@updateDCP2')->name('updateFiles2');
Route::post('/uploadDynamiCombinationSingleComponent', 'packlane\EDPrepackbuiler@uploadDynamiCombinationSingleComponent')->name('uploadDynamiCombinationSingleComponent');
Route::post('/uploadDynamiCombination', 'packlane\EDPrepackbuiler@uploadDynamiCombination')->name('uploadDynamiCombination');
Route::post('/uploadDynamiCombination-cr2', 'packlane\EDPrepackbuiler@uploadDynamiCombination2')->name('uploadDynamiCombination2');
Route::post('/uploadDynamiCombination-cr3', 'packlane\EDPrepackbuiler@uploadDynamiCombination3')->name('uploadDynamiCombination3');
Route::post('/uploadDynamiCombination-cr4', 'packlane\EDPrepackbuiler@uploadDynamiCombination4')->name('uploadDynamiCombination4');
Route::post('/update-without-files-cr1', 'packlane\EDPrepackbuiler@UpdatedWithoutFile')->name('WithoutUpdateFiles');
Route::post('/update-without-files-cr2', 'packlane\EDPrepackbuiler@UpdatedWithoutFile2')->name('UpdatedWithoutFile2');
Route::post('/update-without-files-cr3', 'packlane\EDPrepackbuiler@UpdatedWithoutFile3')->name('UpdatedWithoutFile3');
Route::post('/update-without-files-cr4', 'packlane\EDPrepackbuiler@UpdatedWithoutFile4')->name('UpdatedWithoutFile4');
Route::get('/store-file-wraps', 'packlane\EDPrepackbuiler@wrap_tb')->name('rtp');
Route::get('/generateAutoLoginLink/{r}/{u}/{secret_hash}', 'packlane\EDPrepackbuiler@generateAutoLoginLink')->name('generateAutoLoginLink');

/*
|--------------------------------------------------------------------------
| product boxes
|--------------------------------------------------------------------------
|
*/
Route::get('/products/product-boxes', 'packlane\EDPrepackbuiler@product_boxes')->name('product_boxes');

Route::get('my_tickets', 'packlane\TicketssController@userTickets')->name('my_tickets');
Route::get('tickets/{ticket_id}', 'packlane\TicketssController@show')->name('show.tickets');
Route::get('new-ticket-form', 'packlane\TicketssController@create')->name('new.form.tickets');
Route::post('new-ticket', 'packlane\TicketssController@store')->name('store.new.tickets');
Route::post('comment', 'packlane\CommentsController@postComment')->name('comment.post');

Route::group(['middleware' => ['auth','is_verify_email']], function () {

        Route::get('tickets', 'packlane\TicketssController@index')->name('index.tickets');
        Route::post('close_ticket/{ticket_id}', 'packlane\TicketssController@close')->name('close_ticket.tickets');

        Route::get('products/customer/building-box', 'packlane\EDPrepackbuiler@designbox')->name('dsbox');
        Route::get('search-component-customers', '\App\Http\Livewire\SearchComponentCustomers');

        Route::get('/KOP/payment/get-snap','packlane\EDPrepackbuiler@get_snap_token')->name('payment.get_snaptoken');
        Route::get('/payments','packlane\EDPrepackbuiler@start_payment')->name('payment.start_payment');
        
        /**
         */
        Route::get('/krisanthium-offset-request->q/master-users', 'packlane\EDPrepackbuiler@masterUsers')->name('mst.evt.id');
        Route::post('/krisanthium-offset-printing/master-update-email', 'packlane\EDPrepackbuiler@UpdatemasterUsers')->name('mst.updt.id');

        /*
        |--------------------------------------------------------------------------
        | folding cartons
        |--------------------------------------------------------------------------
        |
        */
        Route::get('/products/folding_carton/quantity=250&sub_type=standard', 'packlane\EDPrepackbuiler@folding_carton')->name('folding_carton');
        Route::get('/chat/customer-service/id', 'packlane\EDPrepackbuiler@chat')->name('chat.id');
        Route::get('/message', 'packlane\EDPrepackbuiler@index')->name('message');
        Route::post('/message/store', 'packlane\EDPrepackbuiler@store')->name('message.store');

        /*
        |--------------------------------------------------------------------------
        | Panel checkout orders
        |--------------------------------------------------------------------------
        |
        */
        Route::get('/krisanthium-offset-printing/history', 'packlane\EDPrepackbuiler@checkout')->name('chekcout.customers');
        Route::get('/krisanthium-offset-printing/detail-component', 'packlane\EDPrepackbuiler@detailShowComponent')->name('detail.orders.customers');
        Route::get('/', 'packlane\EDPrepackbuiler@TablesHistoriesCustomers')->name('tb.orders.customers');
        Route::get('search-component-customers', '\App\Http\Livewire\SearchComponentCustomers');

        /*
        |--------------------------------------------------------------------------
        | Account profiles
        |--------------------------------------------------------------------------
        |
        */
        Route::get('/krisanthium-offset-printing/my-accounts', 'packlane\EDPrepackbuiler@accounts')->name('accounts.id');


});

/*
|--------------------------------------------------------------------------
| packlane plus product and services
|--------------------------------------------------------------------------
|
*/
Route::get('/products/krisanthium-offset-printing', 'packlane\EDPrepackbuiler@packlane_plus')->name('packlane_plus');

/*
|--------------------------------------------------------------------------
| shiplane package
|--------------------------------------------------------------------------
|
*/
Route::get('/products/shiplane', 'packlane\EDPrepackbuiler@shiplane')->name('shiplane');

/*
|--------------------------------------------------------------------------
| Inspirations
|--------------------------------------------------------------------------
|
*/
Route::get('/products/inspirations', 'packlane\EDPrepackbuiler@inspirations')->name('inspirations');

/*
|--------------------------------------------------------------------------
| customers
|--------------------------------------------------------------------------
|
*/
Route::get('/products/customer', 'packlane\EDPrepackbuiler@customers')->name('customers');

/*
|--------------------------------------------------------------------------
| request quotes
|--------------------------------------------------------------------------
|
*/
Route::get('/products/krisanthium-offset-printing/request_quote', 'packlane\EDPrepackbuiler@request_quote')->name('request_quote');

/*
|--------------------------------------------------------------------------
| request company profile
|--------------------------------------------------------------------------
|
*/
Route::get('/krisanthium-offset-printing/company-profile', 'packlane\EDPrepackbuiler@company')->name('company');

/*
|--------------------------------------------------------------------------
| request careers
|--------------------------------------------------------------------------
|
*/
Route::get('/krisanthium-offset-printing/kop/careers', 'packlane\EDPrepackbuiler@kop_careers')->name('careers');

/*
|--------------------------------------------------------------------------
| request Vision and mission
|--------------------------------------------------------------------------
|
*/
Route::get('/krisanthium-offset-printing/vission-mission', 'packlane\EDPrepackbuiler@vm')->name('cvm.id');

/*
|--------------------------------------------------------------------------
| request Vision and mission
|--------------------------------------------------------------------------
|
*/
Route::get('/krisanthium-offset-printing/contact-us', 'packlane\EDPrepackbuiler@prf_scs')->name('prf_scs.id');

/*
|--------------------------------------------------------------------------
| request Company Archivement & Certificates
|--------------------------------------------------------------------------
|
*/
Route::get('/krisanthium-offset-printing/company-archivement-certificates', 'packlane\EDPrepackbuiler@ca_certificates')->name('ca_certificates.id');

/*
|--------------------------------------------------------------------------
| request Company Archivement & Certificates
|--------------------------------------------------------------------------
|
*/
Route::get('/krisanthium-offset-printing/careers', 'packlane\EDPrepackbuiler@careers')->name('careers.id');

/*
|--------------------------------------------------------------------------
| request Company Archivement & Certificates
|--------------------------------------------------------------------------
|
*/
Route::get('/krisanthium-offset-printing/partnership', 'packlane\EDPrepackbuiler@partnership')->name('partnership.id');

/*
|--------------------------------------------------------------------------
| request Company Archivement & Certificates
|--------------------------------------------------------------------------
|
*/
Route::get('/krisanthium-offset-printing/our-team', 'packlane\EDPrepackbuiler@ourteam')->name('ourteam.id');

/*
|--------------------------------------------------------------------------
| request Company Archivement & Certificates
|--------------------------------------------------------------------------
|
*/
Route::get('/krisanthium-offset-printing/we-offer-you', 'packlane\EDPrepackbuiler@weofferyou')->name('woy.id');

/*
|--------------------------------------------------------------------------
| request Company Archivement & Certificates
|--------------------------------------------------------------------------
|
*/
Route::get('/krisanthium-offset-printing/plotter-mock-up', 'packlane\EDPrepackbuiler@plotter')->name('plotter.id');

/*
|--------------------------------------------------------------------------
| request Company Archivement & Certificates
|--------------------------------------------------------------------------
|
*/
Route::get('/krisanthium-offset-printing/gmg-color-printing', 'packlane\EDPrepackbuiler@gmg')->name('gmg.id');

/*
|--------------------------------------------------------------------------
| request Company Archivement & Certificates
|--------------------------------------------------------------------------
|
*/
Route::get('/krisanthium-offset-printing/UV-spot', 'packlane\EDPrepackbuiler@uv')->name('uv.id');

/*
|--------------------------------------------------------------------------
| request Company Archivement & Certificates
|--------------------------------------------------------------------------
|
*/
Route::get('/krisanthium-offset-printing/micro-emboss', 'packlane\EDPrepackbuiler@membos')->name('membos.id');

/*
|--------------------------------------------------------------------------
| request Company Archivement & Certificates
|--------------------------------------------------------------------------
|
*/
Route::get('/krisanthium-offset-printing/hotprint-embos', 'packlane\EDPrepackbuiler@hembos')->name('hembos.id');

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'packlane\LanguageController@switchLang']);

/*
|--------------------------------------------------------------------------
| request Company Out customer
|--------------------------------------------------------------------------
|
*/
Route::get('/krisanthium-offset-printing/ourCustomer', 'packlane\EDPrepackbuiler@coolclients')->name('coolclients.id');

/*
|--------------------------------------------------------------------------
| request Company readmore201926thjuly
|--------------------------------------------------------------------------
|
*/
Route::get('/krisanthium-offset-printing/readmore/{id}', 'packlane\EDPrepackbuiler@readmore201926thjuly')->name('news.posts.id');

/*
|--------------------------------------------------------------------------
| request Company Archivement & Certificates
|--------------------------------------------------------------------------
|
*/
Route::get('/krisanthium-offset-printing/latest/post', 'packlane\EDPrepackbuiler@news')->name('news.id');

/*
|--------------------------------------------------------------------------
| request Company our product
|--------------------------------------------------------------------------
|
*/
Route::get('/krisanthium-offset-printing/OurProduct', 'packlane\EDPrepackbuiler@outproduct')->name('ourproduct.id');

/*
|--------------------------------------------------------------------------
| request Company Archivement & Certificates
|--------------------------------------------------------------------------
|
*/
Route::get('/krisanthium-offset-printing/we-build-a-design', 'packlane\EDPrepackbuiler@wbad')->name('wbad.id');

/*
|--------------------------------------------------------------------------
| request Company Archivement & Certificates
|--------------------------------------------------------------------------
|
*/
Route::get('/krisanthium-offset-printing/one-stop-service', 'packlane\EDPrepackbuiler@one_stop_service')->name('oss.id');

/*
|--------------------------------------------------------------------------
| blog products
|--------------------------------------------------------------------------
|
*/
Route::get('/products/blog', 'packlane\EDPrepackbuiler@blogs')->name('blogs');

/*
|--------------------------------------------------------------------------
| FAQ
|--------------------------------------------------------------------------
|
*/
Route::get('/hc/id', 'packlane\EDPrepackbuiler@faq')->name('faq');

/*
|--------------------------------------------------------------------------
| caregories faq att
|--------------------------------------------------------------------------
|
*/
Route::get('/hc/id/categories/360003091432-FAQs', 'packlane\EDPrepackbuiler@categories_faq')->name('categories.id');

/*
|--------------------------------------------------------------------------
| General information
|--------------------------------------------------------------------------
|
*/
Route::get('/hc/id/sections/360013252471-General-Information', 'packlane\EDPrepackbuiler@general_information')->name('general_information.id');


/*
|--------------------------------------------------------------------------
| Contact_us
|--------------------------------------------------------------------------
|
*/
Route::get('/hc/id/articles/360059617952-Contact-Us', 'packlane\EDPrepackbuiler@contact_us')->name('contact_us.id');

/*
|--------------------------------------------------------------------------
| Box material Options Docs
|--------------------------------------------------------------------------
|
*/
Route::get('/hc/id/sections/360008717751-Box-Options-Materials', 'packlane\EDPrepackbuiler@materialbox_options')->name('materialbox_options.id');


/*
|--------------------------------------------------------------------------
| Box material Options Docs
|--------------------------------------------------------------------------
|
*/
Route::get('/hc/id/articles/360055759312-Does-Packlane-offer-color-matching', 'packlane\EDPrepackbuiler@color_matchingWhy')->name('color_matchingWhy.id');

/*
|--------------------------------------------------------------------------
| Box material Options Docs
|--------------------------------------------------------------------------
|
*/
Route::get('/hc/id/articles/360045053492-How-do-you-assemble-a-mailer-box', 'packlane\EDPrepackbuiler@assembleWhy')->name('assemble.id');

/*
|--------------------------------------------------------------------------
| Box material Options Docs
|--------------------------------------------------------------------------
|
*/
Route::get('/hc/id/articles/360042334952-What-is-Econoflex', 'packlane\EDPrepackbuiler@econoflixWhy')->name('econoflix.id');

/*
|--------------------------------------------------------------------------
| Box material Options Docs
|--------------------------------------------------------------------------
|
*/
Route::get('/hc/id/articles/360042334932-What-is-HDPrint', 'packlane\EDPrepackbuiler@HDprint')->name('HDprint.id');

/*
|--------------------------------------------------------------------------
| Box material Options Docs
|--------------------------------------------------------------------------
|
*/
Route::get('/hc/id/articles/360042764931-Can-I-add-a-glossy-coating-to-my-boxes', 'packlane\EDPrepackbuiler@glossy_coating')->name('glossy_coating.id');

/*
|--------------------------------------------------------------------------
| Printed Boxes Docs
|--------------------------------------------------------------------------
|
*/
Route::get('/hc/id/articles/360042764911-What-type-of-tape-or-glue-should-I-use-on-my-printed-boxes', 'packlane\EDPrepackbuiler@printed_myBoxes')->name('printed_myBoxes.id');

/*
|--------------------------------------------------------------------------
| Box materials artcl Docs
|--------------------------------------------------------------------------
|
*/
Route::get('/hc/id/articles/360008717751-Box-Options-Material', 'packlane\EDPrepackbuiler@AppendAtriclesBoxArticles')->name('AppendAtriclesBoxArticles.id');

/*
|--------------------------------------------------------------------------
| Recycled Materials Sustainable Docs
|--------------------------------------------------------------------------
|
*/
Route::get('/hc/id/articles/360042764891-Do-you-use-sustainable-recycledmaterials', 'packlane\EDPrepackbuiler@sustainable')->name('sustainable.id');

/*
|--------------------------------------------------------------------------
| placing orders Docs
|--------------------------------------------------------------------------
|
*/
Route::get('/hc/id/sections/360008604152-Placing-an-Order', 'packlane\EDPrepackbuiler@placing_order_prices')->name('placing_order_prices.id');

/*
|--------------------------------------------------------------------------
| Change password Docs
|--------------------------------------------------------------------------
|
*/
Route::get('/hc/id/articles/360045060052-How-do-I-reset-or-change-my-password', 'packlane\EDPrepackbuiler@reset_password')->name('change_password.id');

/*
|--------------------------------------------------------------------------
| Customize Box Sizes Docs
|--------------------------------------------------------------------------
|
*/
Route::get('/hc/id/articles/360045498671-Can-I-order-a-sample-of-my-custom-size-or-design', 'packlane\EDPrepackbuiler@customize_size')->name('customize_size.id');

/*
|--------------------------------------------------------------------------
| Re Orders Docs
|--------------------------------------------------------------------------
|
*/
Route::get('/hc/id/articles/360045059792-How-do-I-reorder', 'packlane\EDPrepackbuiler@reOrders')->name('rd.id');

/*
|--------------------------------------------------------------------------
| Re Redesign Docs
|--------------------------------------------------------------------------
|
*/
Route::get('/hc/id/articles/360045059692-How-do-I-order-on-the-website-and-design-on-the-3D-tool', 'packlane\EDPrepackbuiler@Redesign')->name('redesign.id');

/*
|--------------------------------------------------------------------------
| Selling do Docs
|--------------------------------------------------------------------------
|
*/
Route::get('/hc/id/articles/360045498271-Do-you-sell-inserts', 'packlane\EDPrepackbuiler@sellingdo')->name('selling.id');

/*
|--------------------------------------------------------------------------
| quote orders do Docs
|--------------------------------------------------------------------------
|
*/

/*
|--------------------------------------------------------------------------
| Minimum order Docs
request->q
|
*/
Route::get('/hc/id/articles/360045496511-What-is-your-minimum-order-quantity', 'packlane\EDPrepackbuiler@minimum_orders')->name('minimum_orders.id');

/*
|--------------------------------------------------------------------------
| Bulk special orders Docs
|--------------------------------------------------------------------------
|
*/
Route::get('/hc/id/articles/360045056492-Bulk-and-Special-Order-Quotes', 'packlane\EDPrepackbuiler@bulk_special_orders')->name('bulk_special_orders.id');

/*
|--------------------------------------------------------------------------
| Order more than Docs
|--------------------------------------------------------------------------
|
*/
Route::get('/hc/id/ticles/360045495811-How-do-I-order-more-than-one-design', 'packlane\EDPrepackbuiler@ordermore_than')->name('ordermore_than.id');

/*
|--------------------------------------------------------------------------
| Order more than Docs
|--------------------------------------------------------------------------
|
*/
Route::get('/hc/id/ticles/360045494811-Where-do-I-upload-my-dieline-template-How-do-I-order-with-a-2D-dieline', 'packlane\EDPrepackbuiler@formUploadFile2D')->name('formUploadFile2D.id');

/*
|--------------------------------------------------------------------------
| Mailer boxes than Docs
|--------------------------------------------------------------------------
|
*/
Route::get('/products/mailer-box', 'packlane\EDPrepackbuiler@mailerbox')->name('mailerbxs.id');
Route::get('/products/bulk-mailer-box', 'packlane\EDPrepackbuiler@bulkmailerboxs')->name('bulkmailerboxs.id');
Route::get('/products/bulk-mailer-box-quantity-request', 'packlane\EDPrepackbuiler@request->q')->name('qtys_view.id');

/*
|--------------------------------------------------------------------------
| Die line than Docs
|--------------------------------------------------------------------------
|
*/
Route::get('/dieline-upload', 'packlane\EDPrepackbuiler@dieline_design')->name('dieline_design.id');

Route::group(['middleware' => ['web']], function () {

        /*
        |--------------------------------------------------------------------------
        | Authentication Docs
        |--------------------------------------------------------------------------
        |
        */
        Route::get('/load-latest-messages', 'MessagesController@getLoadLatestMessages');
        Route::post('/send', 'MessagesController@postSendMessage');
        Route::get('/fetch-old-messages', 'MessagesController@getOldMessages');
        Route::get('/auth/redirect', [AuthController::class, 'redirectToProvider'])->name('G_redirect');
        Route::get('/auth/google/callback', [AuthController::class, 'handleProviderCallback'])->name('G_HandleProviderCallback');
        Route::get('/auth/login', 'packlane\EDPrepackbuiler@auth_user')->name('auth_user.id');
        Route::post('/auth/login/process', 'AuthController@login')->name('post.auth.id');
        Route::post('/auth/login/forgot/password', 'AuthController@fp_KOP')->name('post.fp.id');
        Route::get('/reload-captcha', [AuthController::class, 'reloadCaptcha'])->name('recaptcha');
        Route::get('forget-password/reset-form', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
        Route::post('forget-password/redirects/reset-func', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
        Route::get('reset-password-account/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
        Route::post('reset-password-email', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

        /*
        |--------------------------------------------------------------------------
        | Authentication register Docs
        |--------------------------------------------------------------------------
        |
        */
        Route::get('/common/id/register', 'AuthController@showFormRegister')->name('rgstr.id');

        /*
        |--------------------------------------------------------------------------
        | Authentication register Docs
        |--------------------------------------------------------------------------
        |
        */

        Route::get('login', 'AuthController@login')->name('login');
        Route::post('sign-out', 'AuthController@logout')->name('logouts');
        Route::post('/common/id/register/process', 'AuthController@register')->name('prg.id');
        Route::get('account/verify/{token}', 'AuthController@verifyAccount')->name('user.verify'); 
        
});
