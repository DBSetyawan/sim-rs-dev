<?php

namespace App\Http\Controllers\packlane;

use Exception;
use Carbon\Carbon;
use App\Models\VmAPIs;
use App\Models\Message;
use App\Models\NewsAPI;
use App\Models\PostsAPI;
use App\Models\Assetsuser;
use App\Models\CareersAPI;
use App\Models\CProfilesAPI;
use App\Models\SenderMaster;
use Illuminate\Http\Request;
use App\Events\MessageCreated;
use App\Jobs\SendMoreFilesTRC;
use App\Models\CoolClientAPIs;
use App\Events\TriggerPayments;
use App\Models\APIsAchievement;
use App\Jobs\SendSingleFilesTRC;
use App\Models\APIsAboutCOmpany;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\App;
use App\Helpers\GoogleTranslateAPIs;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
use App\Lib\Repositories\CollectionPlannerInterface;
use App\Lib\Repositories\StoredDocumentOneInterface;
use App\Lib\Repositories\StoredDocumentTWOInterface;
use App\Lib\Repositories\StoredDocumentFOURInterface;
use App\Lib\Repositories\StoredDocumentTHREEInterface;
use App\Lib\Repositories\StoredSingleDocumentInterface;

class EDPrepackbuiler extends Controller
{

    private $__callMODULESc1;
    private $__callMODULESc2;
    private $__callMODULESc3;
    private $__callMODULESc4;
    private $__callMODULEScCollection;
    private $__callMODULESSingleComponent;

    public function __construct(StoredDocumentTHREEInterface $StoredImageData3,
        StoredDocumentTWOInterface $StoredImageData2,
        StoredDocumentOneInterface $StoredImageData1,
        StoredDocumentFOURInterface $StoredImageData4,
        StoredSingleDocumentInterface $SingleComponentOrders,
        CollectionPlannerInterface $CollectionPlan
    )
        {

            $this->__callMODULESc1 = $StoredImageData1;
            $this->__callMODULESc2 = $StoredImageData2;
            $this->__callMODULESc3 = $StoredImageData3;
            $this->__callMODULESc4 = $StoredImageData4;
            $this->__callMODULEScCollection = $CollectionPlan;
            $this->__callMODULESSingleComponent = $SingleComponentOrders;
            \Midtrans\Config::$serverKey = Config::get('app.midtrans_server_key');
            \Midtrans\Config::$isProduction = Config::get('app.midtrans_production');;
            \Midtrans\Config::$isSanitized = true;
            \Midtrans\Config::$is3ds = true;
            $this->date = gmdate('Y-m-d\TH:i:s\Z');
            $this->datenow = date('d/m/Y');

        }

        public function start_payment()
        {
            // $program = DB::table('programs')->where('id',$id)->first();
            // if(!$program){
            //     return abort(404);
            // }
            $midtrans_client_key = Config::get('app.midtrans_client_key');
            // $donasi_minimum = DB::table('settings')->where('key','site.donasi_minimum')->first()->value;
            return view('payments.starting',compact('midtrans_client_key'));
        }
        
    
    
        public function get_snap_token(Request $request){
    
            $transaction_details = array(
                'order_id'      => '001'.uniqid(),
                'gross_amount'  => 200000
            );
    
            $items = [
                array(
                    'id'        => 'item1',
                    'price'     => 100000,
                    'quantity'  => 1,
                    'name'      => 'Adidas f50'
                ),
                array(
                    'id'        => 'item2',
                    'price'     => 50000,
                    'quantity'  => 2,
                    'name'      => 'Nike N90'
                )
            ];
    
            $billing_address = array(
                'first_name'    => "Daniel",
                'last_name'     => "Setyawan",
                'address'       => "Karet Belakang 15A, Setiabudi.",
                'city'          => "Jakarta",
                'postal_code'   => "51161",
                'phone'         => "081322311801",
                'country_code'  => 'IDN'
                );
    
            $shipping_address = array(
                'first_name'    => "Matheww",
                'last_name'     => "Anderson",
                'address'       => "Bakerstreet 221B.",
                'city'          => "Jakarta",
                'postal_code'   => "51162",
                'phone'         => "081322311801",
                'country_code'  => 'IDN'
                );
    
            $customer_details = array(
                'first_name'      => "Daniel",
                'last_name'       => "Setyawan",
                'email'           => "danielsetyawan@krisanthium.com",
                'phone'           => "081322311801",
                'billing_address' => $billing_address,
                'shipping_address'=> $shipping_address
                );
    
            $credit_card['secure'] = true;
            //ser save_card true to enable oneclick or 2click
            //$credit_card['save_card'] = true;
    
            $time = time();
            $custom_expiry = array(
                'start_time' => date("Y-m-d H:i:s O",$time),
                'unit'       => 'hour', 
                'duration'   => 2
            );
            
            $transaction_data = array(
                'transaction_details'=> $transaction_details,
                'item_details'       => $items,
                'customer_details'   => $customer_details,
                'credit_card'        => $credit_card,
                'expiry'             => $custom_expiry
            );
        
            try
            {
                $snap_token = \Midtrans\Snap::getSnapToken($transaction_data);

                //return redirect($vtweb_url);
                return $snap_token;
            } 
            catch (Exception $e) 
            {   
                return $e->getMessage;
            }
        }

    public function finish(Request $request)
    {
        $result = $request->input('result_data');
        $result = json_decode($result);
        echo $result->status_message . '<br>';
        echo 'RESULT <br><pre>';
        var_dump($result);
        echo '</pre>' ;
    }

    public function index()
    {
        $messages = Message::with(['user'])->get();

        return response()->json($messages);
    }

    public function store(Request $request)
    {
        $message = $request->user()->message()->create([
            'body' => $request->body
        ]);

        broadcast(new MessageCreated($message))->toOthers();

        return response()->json($message);
    }
    
    public function product_boxes(){
        return view('product.product-boxes');
    }

    public function folding_carton(){
        return view('calculations-vs.folding-carton');
    }

    public function packlane_plus(){
        return view('packlane-plus.packlane_plus');
    }

    public function request_quote(){

        return view('packlane-plus.request_quote');
    }

    public function shiplane(){

        return view('shiplane.shiplane');
    }

    public function inspirations(){

        return view('inspirations.inspirations');
    }

    public function customers(){

        return view('customer.customers');
    }

    public function company(){

        return view('companies.company');
    }

    public function APIcareers(){
        $CAPI = new CareersAPI();
        $CAPI->setConnection('KOP_backend');

        $tb = $CAPI->get();

        return response()->json(['data' => $tb]);
    }

    public function APIposts(){

        $CAPI = new PostsAPI();
        $CAPI->setConnection('KOP_backend');

        $tb = $CAPI->get();

        return response()->json(['data' => $tb]);


    }

    public function TranslatorGoogleAPIs(Request $request){

        if(session()->get('applocale') == "gb"){

            $lc = 'en';
        } else {
            $lc = 'id';

        }

        $source = 'id';
        $target = $lc;
        $text = $request->marks;
        
        $apiG = new GoogleTranslateAPIs;
        $result = $apiG->terjemahin_to_google_api($source, $target, $text);

        return response()->json(['rest_translate' => $result]);

    }

    public function TranslatorGoogleAPIsdefaultEN(Request $request){

        if(session()->get('applocale') == "gb"){

            $lc = 'en';
        } else {
            $lc = 'id';

        }

        $source = 'en';
        $target = $lc;
        $text = $request->marks;
        
        $apiG = new GoogleTranslateAPIs;
        $result = $apiG->terjemahin_to_google_api($source, $target, $text);

        return response()->json(['rest_translate' => $result]);

    }
    
    public function APInewsdetail(Request $request){
        $CAPI = new NewsAPI();
        $CAPI->setConnection('KOP_backend');
        $tb = $CAPI->findOrFail($request->id);

        if(session()->get('applocale') == "gb"){

            $lc = 'en';
        } else {
            $lc = 'id';

        }

        $source = 'id';
        $target = $lc;
        $text = $tb->detail_content;
        
        $apiG = new GoogleTranslateAPIs;
        $result = $apiG->terjemahin_to_google_api($source, $target, $text);

        return response()->json(['data' => $tb, 'detail_content' => $result,
                                 'sessionlocale' => session()->get('applocale'),
                                    'locales' => $lc]
                                );
    }
    
    public function APIsAboutCompany(){

        $CAPI = new APIsAboutCOmpany();
        $CAPI->setConnection('KOP_backend');

        $tb = $CAPI->first();

        return response()->json(['data' => $tb]);
    }

    public function APICOOLCLIENT(){
        $CAPI = new CoolClientAPIs();
        $CAPI->setConnection('KOP_backend');

        $tb = $CAPI->get();

        return response()->json(['data' => $tb]);
    }

    public function APIVM(){

        $CAPI = new VmAPIs();
        $CAPI->setConnection('KOP_backend');

        $tb = $CAPI->first();

        return response()->json(['data' => $tb]);
    }

    public function APICompanyProfiles(){
        $CAPI = new CProfilesAPI();
        $CAPI->setConnection('KOP_backend');
        
        if(session()->get('applocale') == "gb"){

            $lc = 'en';
        } else {
            $lc = 'id';

        }

        $tb = $CAPI->first();

        $source = 'id';
        $target = $lc;
        $text = $tb->detail_content;
        
        $apiG = new GoogleTranslateAPIs;
        $result = $apiG->terjemahin_to_google_api($source, $target, $text);

        return response()->json(['data' => $tb, 'detail' => $result,
                                 'sessionlocale' => session()->get('applocale'),
                                    'locales' => $lc]
                                );
    }
    
    public function APIsAchievement(Request $r){
        $CAPI = new APIsAchievement();
        $CAPI->setConnection('KOP_backend');
        $tb = $CAPI->get();

        return response()->json(['data' => $tb]);
    }

    public function APInews(Request $r){
        $CAPI = new NewsAPI();
        $CAPI->setConnection('KOP_backend');

        $tb = isset($r->set_limit) 
        ? $CAPI->limit($r->set_limit)->get()
        : $CAPI->get();

        return response()->json(['data' => $tb]);
    }

    public function kop_careers(){

        return view('layouts.careers');
    }

    public function vm(){

        return view('companies.vm');
    }

    public function ca_certificates(){

        return view('companies.ca_certificates');
    }

    public function partnership(){

        return view('companies.partnership');
    }

    public function ourteam(){

        return view('companies.ourteam');
    }

    public function wbad(){

        return view('companies.wbad');
    }

    public function careers(){

        return view('companies.careers');
    }

    public function prf_scs(){

        return view('companies.ct_us');
    }
    
    public function masterUsers(){
        
        return view('master-email-users.usr');
    }

    public function UpdatemasterUsers(Request $rq){

        $validator = Validator::make($rq->all(), [
            'email' => 'required|email'
         ]);

         if ($validator->fails()) {
            return new JsonResponse(['success' => false, 'message' => $validator->errors()], 422);
        }  
            else {
            
                $getEmail = SenderMaster::first();
                SenderMaster::where('email_smarketing', '=', $getEmail->email_smarketing)
                    ->update(
                        ['email_smarketing' => $rq->email]
                    );

                return new JsonResponse(
                    [
                        'status' => true, 
                        'message' => "ok."
                    ], 
                200
            );
        }

    }

    public function membos(){

        return view('companies.membos');
    }

    public function coolclients() {
        return view('companies.cool_client');
    }

    public function weofferyou(){

        return view('companies.weofferyour');
    }

    public function uv(){

        return view('companies.uvspot');
    }

    public function gmg(){

        return view('companies.gmg');
    }

    public function outProduct() {
        return view('companies.outproduct');
    }

    public function accounts() {
        return view('auth.profile.content-profile');
    }

    public function readmore201926thjuly(){
        return view('companies.readmore26july2019');
    }

    public function news() {
        return view('companies.news-bg');
    }

    public function hembos(){

        return view('companies.hembos');
    }

     public function plotter(){

        return view('packlane-plus.plootermckp');
    }

    public function one_stop_service(){

        return view('mailer-boxes.one_stop');
    }

    public function blogs(){

        return view('blogs.blog');
    }

    public function faq(){

        return view('FAQ.faq');
    }

    public function mailerbox(){

        return view('mailer-boxes.mailer-box');
    }

    public function mailerbox_xs(){

        return view('packing-style.mailer-box.mailer');
    }

    public function categories_faq(){

        return view('FAQ.categories-id');
    }
    
    public function general_information(){

        return view('FAQ.general_information-info');
    }

    public function contact_us(){

        return view('FAQ.contact-us');
    }

    public function materialbox_options(){

        return view('FAQ.box-materials.box-materials-options');
    }

    public function bulkmailerboxs(){

        return view('mailer-boxes.bulk-m-box');

    }

    public function color_matchingWhy(){

        return view('FAQ.box-materials.color-matching');
    }

    public function assembleWhy(){

        return view('FAQ.box-materials.assemble');
    }

    public function econoflixWhy(){

        return view('FAQ.box-materials.econoflix');
    }

    public function checkout(){
        // $namemtr = array();
        // $vdata = Assetsuser::where('finished_status', '!=', 1)->where('order_to', '=', Auth::user()->id)->get();
        // foreach ($vdata as $key => $dft) {
        //     # code...
        //     $namemtr[] =  array_column($dft->design, 'value');
        // }
        
        // $flattened = collect($namemtr)->flatten();

        return view('myorders.history');
    }

    public function HDprint(){

        return view('FAQ.box-materials.HDprint');
    }
    
    public function glossy_coating(){

        return view('FAQ.box-materials.glossy-coating');
    }

    public function printed_myBoxes(){

        return view('FAQ.box-materials.my-print-boxes');
    }

    public function AppendAtriclesBoxArticles(){

        return view('FAQ.box-materials.AppendAtriclesBoxArticles');
    }

    public function sustainable(){

        return view('FAQ.box-materials.sustainable');
    }

    public function placing_order_prices(){

        return view('FAQ.placing-price.placing-prices');
    }

    public function reset_password(){

        return view('FAQ.placing-price.change-password');
    }
    
    public function wrap_tb(){
        return view('wrap-tb.tb');

    }

    public function customize_size(){

        return view('FAQ.placing-price.customize-size');
    }

    public function reOrders(){

        return view('FAQ.placing-price.re-orders');
    }

    public function Redesign(){

        return view('FAQ.placing-price.redesign');
    }
    
    public function TablesHistoriesCustomers(){
        
        $midtrans_client_key = Config::get('app.midtrans_client_key');
 
        return view('tb-transaction.secret-modules', compact('midtrans_client_key'));

    }

    public function sellingdo(){

        return view('FAQ.placing-price.selling');
    }

    public function quote_orders(){

        return view('FAQ.placing-price.quote-order');
    }

    public function welcomesdesignabox(){

        return view('welcome');
    }

    public function minimum_orders(){

        return view('FAQ.placing-price.minimum-order');
    }

    public function bulk_special_orders(){

        return view('FAQ.placing-price.bulk-special-orders');
    }

    public function ordermore_than(){

        return view('FAQ.placing-price.order-more-than');
    }

    public function sellAllPlacingOrder(){

        return view('FAQ.placing-price.see-all-placing-roder');
    }

      public function formUploadFile2D(){

        return view('FAQ.placing-price.upload-file2D');
    }

    public function dieline_design(){

        return view('FAQ.placing-price.dieline-design');
    }
    
    public function auth_user(){

        return view('auth-user.login');
    }

    public function detailDataComponent(Request $request, $compUIDs){

        return view('myorders.detail-component', ['compUIDs' => $compUIDs]);
    }

    public function storedImageData_dp2(Request $request){

        return $this->__callMODULESc2->StoredDocumentComponentOrdersTWO($request, self::generateID(), self::genereteNextID());
      
    }

    public function storedImageData_dp4(Request $request){

        return $this->__callMODULESc4->StoredDocumentComponentOrdersFOUR($request, self::generateID(), self::genereteNextID());
                        
    }

    public function storedImageData_dp3(Request $request){
        
        return $this->__callMODULESc3->StoredDocumentComponentOrdersTHREE($request, self::generateID(), self::genereteNextID());
       
    }

    public function LastComponentIndex(){

        return $this->__callMODULEScCollection->CloneDesignPlan();
        
    }


    public function storedImageData(Request $request)
    {

        return $this->__callMODULESc1->StoredDocumentComponentOrdersOne($request, self::generateID(), self::genereteNextID());
   
    }

    public function uploadDynamiCombinationSingleComponent(Request $request){
        
        return $this->__callMODULESSingleComponent->StoredSingleDocumentComponentOrders($request, self::generateID(), self::genereteNextID());
       
    }

    public function uploadDynamiCombination(Request $request){
        
        $id = (Int) $request->id;

            $data = array();
    
            $validator = Validator::make($request->all(), [
                'filed' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
            ]);
                if(isset(Auth::user()->id)){
                    if($request->TotalFiles > 0)
                    {
                        for ($x = 0; $x < $request->TotalFiles; $x++) 
                        {
                            if ($request->hasFile('filed'.$x)) {

                                $file      = $request->file('filed'.$x);
                                $data['PATHS'][] =$request->file('filed'.$x)->getRealPath();
                                $data['GetOriginalName'][] =$request->file('filed'.$x)->getClientOriginalName();
                                $data['GetMimeType'][] =$request->file('filed'.$x)->getMimeType();

                                $name = time().'_'.$file->getClientOriginalName();
                                $mimes = $file->getMimeType();
                                $filename = time().'_'.$file->getClientOriginalName();
                                $extension = $file->getClientOriginalExtension();
                                $location = '/files/';
                                $file->move(public_path().$location, $filename);
                                $filepath = url('files/'.$filename);
                                $insert[$x]['name'] = $name;
                                $insert[$x]['store_path'] = $filepath;

                                $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

                                    if(!$dt[0]->isEmpty()){
                                         
                                            $loopsData = Assetsuser::where('id', $id)->get();

                                            foreach ($loopsData as $key => $value) {
                                                # code...
                                                $definitions[] = $value->design_plan;
                                                if (File::exists($value->filepath)) {
                                                    File::delete(public_path().$location.$value->alias);
                                                }
                                            }
                                        /** 
                                         * Progress to delete to processing data again.
                                         */
                                        $nullData = Assetsuser::whereIn('design_plan', [$request->design1])->delete();

                                        if($nullData > 0){

                                                $countComponent = collect($dt)->map(function ($rtDataC) {

                                                    $rtData = $this->MergedSameArrayValues($rtDataC, 'assets_uid');
                    
                                                    foreach ($rtData as $valuex => $value) {
                    
                                                        if(isset($value->design)){
                                                            for ($i=0; $i < count([$value->design]); $i++) { 
                                                                    $namemtr[] =  array_column($value->design[$i], 'value');
                                                            }
                                                        }
                                                    }
                    
                                                    return isset($namemtr) ? $namemtr : null;
                                    
                                                });

                                                $rty = collect($dt)->map(function ($exposeArrayComponents) {
                                    
                                                    foreach ($exposeArrayComponents as $value) {
                                                        # code...
                                                        $dkl[] = $value->design_plan;
                                                        $dtg[] = Assetsuser::whereIn('design_plan', [$dkl])->count();
                                        
                                                    }
                                        
                                                    $arrayOfValues = array();
                                                    foreach ($dkl as $a) {
                                        
                                                        @$arrayOfValues[$a]++;
                                        
                                                    }
                                                    return $arrayOfValues;
                                                
                                                });
                                    
                                                $fgj = array_merge([], isset($countComponent->toArray()[0]) ? $countComponent->toArray()[0] : []);
                                                $data = array_merge([], isset($rty->toArray()[0]) ? $rty->toArray()[0] : []);
                                          
                                                return new JsonResponse(
                                                    [
                                                        'success' => true, 
                                                        'message' => "success.",
                                                    ], 
                                                200
                                            );

                                        }

                                    } 

                                     else 
                                            {

                                                $loopsData = Assetsuser::where('id', $id)->get();

                                                foreach ($loopsData as $key => $value) {
                                                    # code...
                                                    $definitions[] = $value->design_plan;
                                                    if (File::exists($value->filepath)) {
                                                        File::delete(public_path().$location.$value->alias);
                                                    }
                                                }

                                                $nullData = Assetsuser::whereIn('design_plan', [$request->design1])->delete();

                                        if($nullData > 0){
                                        
                                            return new JsonResponse(
                                                [
                                                    'success' => true, 
                                                    'message' => "success.",
                                                ], 
                                            200
                                        );
    
                                    }
                                }

                            }

                        } 
                      
                }
                  else
                    
                    {
                        return new JsonResponse(
                            [
                                'success' => false, 
                                'message' => "please try again."
                            ], 
                        200
                    );
                }
            } 
                else {
    
                    return new JsonResponse(
                        [
                            'success' => false, 
                            'message' => "failed."
                        ], 
                200
            );
        }
    }

    public function uploadDynamiCombination4(Request $request){
    
        $data = array();
        $id = (Int) $request->id;

        $file = Assetsuser::where('id', '=', $id)->first();

        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
        ]);
            if(isset(Auth::user()->id)){

                if($request->TotalFiles > 0)
                {
                        
                    for ($x = 0; $x < $request->TotalFiles; $x++) 
                    {
                        if ($request->hasFile('file'.$x)) {
                                  
                            $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

                            if(!$dt[0]->isEmpty()){

                                        $file      = $request->file('file'.$x);
                                        $data['PATHS'][] =$request->file('file'.$x)->getRealPath();
                                        $data['GetOriginalName'][] =$request->file('file'.$x)->getClientOriginalName();
                                        $data['GetMimeType'][] =$request->file('file'.$x)->getMimeType();
    
                                        $name = time().'_'.$file->getClientOriginalName();
                                        $mimes = $file->getMimeType();
                                        $filename = time().'_'.$file->getClientOriginalName();
                                        $extension = $file->getClientOriginalExtension();
                                        $location = '/files/';
                                        $file->move(public_path().$location, $filename);
                                        $filepath = url('files/'.$filename);
                                        $insert[$x]['name'] = $name;
                                        $insert[$x]['store_path'] = $filepath;
    
                                    $nullData = Assetsuser::whereIn('design_plan', [$request->design3])->delete();

                                    if($nullData > 0){

                                            $rty = collect($dt)->map(function ($exposeArrayComponents) {
                                
                                                foreach ($exposeArrayComponents as $value) {
                                                    # code...
                                                    $dkl[] = $value->design_plan;
                                                    $dtg[] = Assetsuser::whereIn('design_plan', [$dkl])->count();
                                    
                                                }
                                    
                                                $arrayOfValues = array();
                                                foreach ($dkl as $a) {
                                    
                                                    @$arrayOfValues[$a]++;
                                    
                                                }
                                                return $arrayOfValues;
                                            
                                            });
                                
                                            $data = array_merge([], isset($rty->toArray()[0]) ? $rty->toArray()[0] : []);
    
                                        }

                                    return new JsonResponse(
                                        [
                                            'success' => true, 
                                            'message' => "success.",
                                        ], 
                                    200
                                );
                    }
                        else { 

                                return new JsonResponse(
                                    [
                                        'success' => true, 
                                        'message' => "success.",
                                    ], 
                                200
                            );
                        }
                    }
                }
                        
            }
                else
                    {
                        return new JsonResponse(
                            [
                                'success' => false, 
                                'message' => "please try again."
                            ], 
                        200
                    );
                }
            } 
                else {

                return new JsonResponse(
                    [
                        'success' => false, 
                        'message' => "failed."
                    ], 
                    200
                );

            }
    }

    public function uploadDynamiCombination3(Request $request){
    
        $data = array();
        $id = (Int) $request->id;

        $file = Assetsuser::where('id', '=', $id)->first();

        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
        ]);
            if(isset(Auth::user()->id)){

                if($request->TotalFiles > 0)
                {
                    for ($x = 0; $x < $request->TotalFiles; $x++) 
                    {
                        if ($request->hasFile('file'.$x)) {
                               
                            $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

                                    if(!$dt[0]->isEmpty()){

                                        $file      = $request->file('file'.$x);
                                        $data['PATHS'][] =$request->file('file'.$x)->getRealPath();
                                        $data['GetOriginalName'][] =$request->file('file'.$x)->getClientOriginalName();
                                        $data['GetMimeType'][] =$request->file('file'.$x)->getMimeType();
    
                                        $name = time().'_'.$file->getClientOriginalName();
                                        $mimes = $file->getMimeType();
                                        $filename = time().'_'.$file->getClientOriginalName();
                                        $extension = $file->getClientOriginalExtension();
                                        $location = '/files/';
                                        $file->move(public_path().$location, $filename);
                                        $filepath = url('files/'.$filename);
                                        $insert[$x]['name'] = $name;
                                        $insert[$x]['store_path'] = $filepath;
                                        
                                        $nullData = Assetsuser::whereIn('design_plan', [$request->design3])->delete();

                                            if($nullData > 0){

                                                    $rty = collect($dt)->map(function ($exposeArrayComponents) {
                                        
                                                        foreach ($exposeArrayComponents as $value) {
                                                            # code...
                                                            $dkl[] = $value->design_plan;
                                                            $dtg[] = Assetsuser::whereIn('design_plan', [$dkl])->count();
                                            
                                                        }
                                            
                                                        $arrayOfValues = array();
                                                        foreach ($dkl as $a) {
                                            
                                                            @$arrayOfValues[$a]++;
                                            
                                                        }
                                                        return $arrayOfValues;
                                                    
                                                    });
                                    
                                                $data = array_merge([], isset($rty->toArray()[0]) ? $rty->toArray()[0] : []);
        
                                            }

                                            return new JsonResponse(
                                                [
                                                    'success' => true, 
                                                    'message' => "success.",
                                                ], 
                                            200
                                        );

                                    } 
                                        else {

                                            return new JsonResponse(
                                                [
                                                    'success' => true, 
                                                    'message' => "success.",
                                                ], 
                                            200
                                        );
                                }

                        }
                    }

            }
                else
                        {
                            return new JsonResponse(
                                [
                                    'success' => false, 
                                    'message' => "please try again."
                                ], 
                        200
                    );
                }
            } 
                else {

                return new JsonResponse(
                    [
                        'success' => false, 
                        'message' => "failed."
                    ], 
                    200
                );

            }
    }

    public function uploadDynamiCombination2(Request $request){

        $id = (Int) $request->id;

        $file = Assetsuser::where('id', '=', $id)->first();

            $data = array();

                $validator = Validator::make($request->all(), [
                    'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
                ]);
                    if(isset(Auth::user()->id)){

                        if($request->TotalFiles > 0)
                        {
                                
                        for ($x = 0; $x < $request->TotalFiles; $x++) 
                            {
                                if ($request->hasFile('file'.$x)) {
                                         
                                    $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

                                        if(!$dt[0]->isEmpty()){

                                            $file      = $request->file('file'.$x);
                                            $data['PATHS'][] =$request->file('file'.$x)->getRealPath();
                                            $data['GetOriginalName'][] =$request->file('file'.$x)->getClientOriginalName();
                                            $data['GetMimeType'][] =$request->file('file'.$x)->getMimeType();
    
                                            $name = time().'_'.$file->getClientOriginalName();
                                            $mimes = $file->getMimeType();
                                            $filename = time().'_'.$file->getClientOriginalName();
                                            $extension = $file->getClientOriginalExtension();
                                            $location = '/files/';
                                            $file->move(public_path().$location, $filename);
                                            $filepath = url('files/'.$filename);
                                            $insert[$x]['name'] = $name;
                                            $insert[$x]['store_path'] = $filepath;

                                            $nullData = Assetsuser::whereIn('design_plan', [$request->design2])->delete();

                                                if($nullData > 0){
        
                                                        $countComponent = collect($dt)->map(function ($rtDataC) {
        
                                                            $rtData = $this->MergedSameArrayValues($rtDataC, 'assets_uid');
                            
                                                            foreach ($rtData as $valuex => $value) {
                            
                                                                if(isset($value->design)){
                                                                    for ($i=0; $i < count([$value->design]); $i++) { 
                                                                            $namemtr[] =  array_column($value->design[$i], 'value');
                                                                    }
                                                                }
                                                            }
                            
                                                            return isset($namemtr) ? $namemtr : null;
                                            
                                                        });
        
                                                        $rty = collect($dt)->map(function ($exposeArrayComponents) {
                                            
                                                            foreach ($exposeArrayComponents as $value) {
                                                                # code...
                                                                $dkl[] = $value->design_plan;
                                                                $dtg[] = Assetsuser::whereIn('design_plan', [$dkl])->count();
                                                
                                                            }
                                                
                                                            $arrayOfValues = array();
                                                            foreach ($dkl as $a) {
                                                
                                                                @$arrayOfValues[$a]++;
                                                
                                                            }
                                                            return $arrayOfValues;
                                                        
                                                        });
                                            
                                                        $data = array_merge([], isset($rty->toArray()[0]) ? $rty->toArray()[0] : []);
            
                                                    }

                                                    return new JsonResponse(
                                                        [
                                                            'success' => true, 
                                                            'message' => "success.",
                                                        ], 
                                                    200
                                                );

                                            } 
                                                else {
                
                                                return new JsonResponse(
                                                        [
                                                            'success' => true, 
                                                            'message' => "success.",
                                                    ], 
                                                200
                                            );

                                    }
                                }
                            }
                    }
                    else
                        {
                            return new JsonResponse(
                                [
                                    'success' => false, 
                                    'message' => "please try again."
                                ], 
                                200
                            );
                        }
                } 
                    else {

                    return new JsonResponse(
                        [
                            'success' => false, 
                            'message' => "failed."
                        ], 
                        200
                    );
                                                                                                                                                        
                }
        }

    public function notificationHandler(Request $request)
    {

        event(new TriggerPayments($request->all()));
      
    }

    public function orders_nofile_prt2(Request $request){

        /**
         * jika tanpa dokument, hanya menyimpan data design, jenis kertas - jenis gsm - qty order
         */
        $validator = Validator::make($request->all(), [
            'size' => 'required',
            'quantity' => 'required',
            'design' => 'required',
            'material' => 'required',
            'component' => 'required',
            'jenis_kertas' => 'required',
            'jenis_kertas_gsm' => 'required',
        ]);

        if ($validator->fails()) {
            return new JsonResponse(['success' => false, 'message' => $validator->errors()], 422);
        }  

        $qty = $request->all()['quantity'];
        $material = $request->all()['material'];
        $component = $request->all()['component'];
        $size = $request->all()['size'];
        $jenis_kertas = $request->all()['jenis_kertas'];
        $design = $request->all()['design'];
        $jenis_kertas_gsm = $request->all()['jenis_kertas_gsm'];
        $emails = ['artexsdns@gmail.com'];
        // $definitionSingleComponent = $request->all()['definitionSingleComponent'];

        if(isset(Auth::user()->id)) {

            $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

            if(!$dt[0]->isEmpty()){

                $file= new Assetsuser();
                $file->assets_uid = self::generateID();
                $file->asset_grt = self::genereteNextID();
                $file->order_to = Auth::user()->id;
                $file->component = $component;
                $file->order_name = Auth::user()->name;
                $file->definition = $component;
                // $file->design_plan = isset($request->lastcomponent) ? "cp".$request->lastcomponent : $request->design2;
                $file->design_plan = isset($request->lastcomponent) ? "cp".$request->lastcomponent : $request->design2;
                $file->finished_status = 0;
                $file->qty = $request->quantity;
                $file->material = $request->material;
                $file->size = $request->size;
                $file->design = $design;
                $file->jenis_kertas = $request->jenis_kertas;
                $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();
    
                $countComponent = collect($dt)->map(function ($rtDataC) {
                    
                    $rtData = $this->MergedSameArrayValues($rtDataC, 'assets_uid');
                    foreach ($rtData as $value) {
                        # code...
                        $dkl[] = $value->design;
                    }
    
                    $searchsComponentDesign = isset($dkl) ? $dkl : [0];
    
                        for ($i=0; $i < count($searchsComponentDesign); $i++) { 
                            # code...
                            $namemtr[] =  array_column($dkl[$i], 'value');
                        }
                        
                    return $namemtr;
    
                });
    
                $rty = collect($dt)->map(function ($exposeArrayComponents) {
            
                    foreach ($exposeArrayComponents as $value) {
                        # code...
                        $dkl[] = $value->design_plan;
                        $dtg[] = Assetsuser::whereIn('design_plan', [$dkl])->count();
        
                    }
        
                    $arrayOfValues = array();
                    foreach ($dkl as $a) {
        
                        @$arrayOfValues[$a]++;
        
                    }
                    return $arrayOfValues;
                
                });
    
                $fgj = array_merge([], $countComponent->toArray()[0]);
                $data = array_merge([], $rty->toArray()[0]);
    
                $file->counter_component = count($fgj);
                $file->counter_plan = count($data);
                $file->save();
    
                /**
                 * @method save id per component
                 */
    
                    return new JsonResponse(
                        [
                            'success' => true, 
                            'message' => "success.",
                            'data' => $file->id

                        ], 
                        200
                    );
    
                } else {

                        $file= new Assetsuser();
                        $file->assets_uid = self::generateID();
                        $file->asset_grt = self::genereteNextID();
                        $file->order_to = Auth::user()->id;
                        $file->order_name = Auth::user()->name;
                        $file->component = $component;
                        $file->definition = $component;
                        $file->design_plan = isset($request->lastcomponent) ? "cp".$request->lastcomponent : $request->design2;
                        $file->finished_status = 0;
                        $file->qty = $request->quantity;
                        $file->material = $request->material;
                        $file->size = $request->size;
                        $file->design = $design;
                        $file->jenis_kertas = $request->jenis_kertas;
                        $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                        $file->save();

                    /**
                     * @method save id per component
                     */
                    return new JsonResponse(
                        [
                            'success' => true, 
                            'message' => "success.",
                            'data' => $file->id
                        ], 
                        200
                    );

                }
        
            } 
                else {

                    return new JsonResponse(
                        [
                            'success' => false, 
                            'message' => "failed."
                        ], 
                        200
                    );
        
            }

    }

    public function orders_nofile_prt3(Request $request){

        /**
       * jika tanpa dokument, hanya menyimpan data design, jenis kertas - jenis gsm - qty order
       */
      $validator = Validator::make($request->all(), [
          'size' => 'required',
          'quantity' => 'required',
          'component' => 'required',
          'design' => 'required',
          'material' => 'required',
          'jenis_kertas' => 'required',
          'jenis_kertas_gsm' => 'required',
      ]);

      if ($validator->fails()) {
          return new JsonResponse(['success' => false, 'message' => $validator->errors()], 422);
      }  

      $qty = $request->all()['quantity'];
      $material = $request->all()['material'];
      $size = $request->all()['size'];
      $jenis_kertas = $request->all()['jenis_kertas'];
      $design = $request->all()['design'];
      $component = $request->all()['component'];
    //   $definitionSingleComponent = $request->all()['definitionSingleComponent'];
      $jenis_kertas_gsm = $request->all()['jenis_kertas_gsm'];
      $emails = ['artexsdns@gmail.com'];

        if(isset(Auth::user()->id)) {

            $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

            if(!$dt[0]->isEmpty()){

                $file= new Assetsuser();
                $file->assets_uid = self::generateID();
                $file->asset_grt = self::genereteNextID();
                $file->order_to = Auth::user()->id;
                $file->order_name = Auth::user()->name;
                $file->finished_status = 0;
                $file->component = $component;
                $file->definition = $component;
                $file->design_plan = isset($request->lastcomponent) ? "cp".$request->lastcomponent : $request->design3;
                $file->qty = $request->quantity;
                $file->material = $request->material;
                $file->size = $request->size;
                $file->design = $design;
                $file->jenis_kertas = $request->jenis_kertas;
                $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();
    
                $countComponent = collect($dt)->map(function ($rtDataC) {
                    
                    $rtData = $this->MergedSameArrayValues($rtDataC, 'assets_uid');
                    foreach ($rtData as $value) {
                        # code...
                        $dkl[] = $value->design;
                    }
    
                    $searchsComponentDesign = isset($dkl) ? $dkl : [0];
    
                        for ($i=0; $i < count($searchsComponentDesign); $i++) { 
                            # code...
                            $namemtr[] =  array_column($dkl[$i], 'value');
                        }
                        
                    return $namemtr;
    
                });
    
                $rty = collect($dt)->map(function ($exposeArrayComponents) {
            
                    foreach ($exposeArrayComponents as $value) {
                        # code...
                        $dkl[] = $value->design_plan;
                        $dtg[] = Assetsuser::whereIn('design_plan', [$dkl])->count();
        
                    }
        
                    $arrayOfValues = array();
                    foreach ($dkl as $a) {
        
                        @$arrayOfValues[$a]++;
        
                    }
                    return $arrayOfValues;
                
                });
    
                $fgj = array_merge([], $countComponent->toArray()[0]);
                $data = array_merge([], $rty->toArray()[0]);
    
                $file->counter_component = count($fgj);
                $file->counter_plan = count($data);
                $file->save();
    
            /**
             * @method save id per component
             */
    
                return new JsonResponse(
                    [
                        'success' => true, 
                        'message' => "success.",
                        'data' => $file->id
                    ], 
                    200
                );

            } 
                else {

                    $file= new Assetsuser();
                    $file->assets_uid = self::generateID();
                    $file->asset_grt = self::genereteNextID();
                    $file->order_to = Auth::user()->id;
                    $file->order_name = Auth::user()->name;
                    $file->component = $component;
                    $file->definition = $component;
                    $file->design_plan = isset($request->lastcomponent) ? "cp".$request->lastcomponent : $request->design3;
                    $file->finished_status = 0;
                    $file->qty = $request->quantity;
                    $file->material = $request->material;
                    $file->size = $request->size;
                    $file->design = $design;
                    $file->jenis_kertas = $request->jenis_kertas;
                    $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                    $file->save();

                /**
                 * @method save id per component
                 */
                return new JsonResponse(
                    [
                        'success' => true, 
                        'message' => "success.",
                        'data' => $file->id
                    ], 
                    200
                );

            }
          
        } 
            else {

                return new JsonResponse(
                    [
                    'success' => false, 
                    'message' => "failed."
                ], 
                    200
                );
        
        }

    }

    public static function genereteNextID()
    {

        $named = Assetsuser::all()->last();
        $YM = Carbon::Now()->format('ymd');
    
        if($YM > substr(isset($named['assets_uid']) ? $named['assets_uid'] : "CMP-".$YM, 4, 6))
        {
            $id = 0;
            $jobs = (Int) $id + 1;
            $IDnextgenerate = $jobs;

        } 
            else
    
                {
                    
                    $id = isset(Assetsuser::latest()->first()->asset_grt) ? Assetsuser::latest()->first()->asset_grt : 0;
    
                    $jobs = (Int) $id + 1;
                    $IDnextgenerate = $jobs;
            
                }
        
            return $IDnextgenerate;

    }

    public static function generateID()
    {

    $named = Assetsuser::get()->last();
    $YM = Carbon::Now()->format('ymd');

    if($YM > substr(isset($named['assets_uid']) ? $named['assets_uid'] : "CMP-".$YM, 4, 6))
    {
        $id = 0; 
        // $id = DB::statement("ALTER TABLE Workorders_local AUTO_INCREMENT = $max");
        $jobs = (Int) $id + 1;
        $IDnextgenerate = $jobs;

        if ($id == 0) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '000', 2 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id == 1) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '000', 2 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id > 1 && $id < 9) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '000', 2 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id == 9) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '00', 3 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id == 10) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '000', 3 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id > 10 && $id < 99) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '00', 3 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id == 99) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '0', 4 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id == 100) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '0', 4 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id > 100 && $id < 999) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '0', 4 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id === 999) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '', 5 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id === 1000) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '', 5 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id > 1000 && $id < 9999) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '', 5 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id == 9999) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '', 6 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id == 10000) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '', 6 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id > 10000 && $id < 99999) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '', 6 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id == 99999) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '', 7 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id == 100000) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '', 7 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id > 100000 && $id < 999999) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '', 7 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id == 1000000) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '', 8 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id == 999999) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '', 8 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id > 1000000 && $id < 9999999) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '', 8 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id == 9999999) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '', 9 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id == 10000000) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '', 9 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id > 10000000 && $id < 99999999) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '', 9 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id == 99999999) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '', 10 - strlen($IDnextgenerate))) . $IDnextgenerate;
        } elseif ($id == 10000000) {
            $resultID = (str_repeat("CMP-" . $YM . '-' . '', 10 - strlen($IDnextgenerate))) . $IDnextgenerate;
        }

    } 
        else

            {
                
                $id = isset(Assetsuser::latest()->first()->asset_grt) ? Assetsuser::latest()->first()->asset_grt : 0;

                $jobs = (Int) $id + 1;
                $IDnextgenerate = $jobs;
        
                if ($id == 0) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '000', 2 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id == 1) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '000', 2 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id > 1 && $id < 9) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '000', 2 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id == 9) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '00', 3 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id == 10) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '000', 3 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id > 10 && $id < 99) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '00', 3 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id == 99) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '0', 4 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id == 100) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '0', 4 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id > 100 && $id < 999) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '0', 4 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id === 999) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '', 5 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id === 1000) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '', 5 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id > 1000 && $id < 9999) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '', 5 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id == 9999) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '', 6 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id == 10000) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '', 6 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id > 10000 && $id < 99999) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '', 6 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id == 99999) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '', 7 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id == 100000) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '', 7 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id > 100000 && $id < 999999) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '', 7 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id == 1000000) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '', 8 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id == 999999) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '', 8 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id > 1000000 && $id < 9999999) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '', 8 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id == 9999999) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '', 9 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id == 10000000) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '', 9 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id > 10000000 && $id < 99999999) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '', 9 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id == 99999999) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '', 10 - strlen($IDnextgenerate))) . $IDnextgenerate;
                } elseif ($id == 10000000) {
                    $resultID = (str_repeat("CMP-" . $YM . '-' . '', 10 - strlen($IDnextgenerate))) . $IDnextgenerate;
                }
            }
    
        return $resultID;

    }

    public function orders_nofile_prt4(Request $request){

    /**
     * jika tanpa dokument, hanya menyimpan data design, jenis kertas - jenis gsm - qty order
     */
    $validator = Validator::make($request->all(), [
        'size' => 'required',
        'quantity' => 'required',
        'design' => 'required',
        'component' => 'required',
        'material' => 'required',
        'jenis_kertas' => 'required',
        'jenis_kertas_gsm' => 'required',
    ]);

    if ($validator->fails()) {
        return new JsonResponse(['success' => false, 'message' => $validator->errors()], 422);
    }  

    $qty = $request->all()['quantity'];
    $material = $request->all()['material'];
    $size = $request->all()['size'];
    $component = $request->all()['component'];
    $jenis_kertas = $request->all()['jenis_kertas'];
    $design = $request->all()['design'];
    // $definitionSingleComponent = $request->all()['definitionSingleComponent'];
    $jenis_kertas_gsm = $request->all()['jenis_kertas_gsm'];
    $emails = ['artexsdns@gmail.com'];

        // Mail::to($emails)->send(new Ordersdocno($qty, $size, $material, $jenis_kertas, $jenis_kertas_gsm, $design));

        $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

        if(!$dt[0]->isEmpty()){

            $file= new Assetsuser();
            $file->assets_uid = self::generateID();
            $file->asset_grt = self::genereteNextID();
            $file->component = $component;
            $file->definition = $component;
            // $file->design_plan = isset($request->laslastinde) ? "cp".$request->laslastinde : $request->design4;
            $file->design_plan = isset($request->lastcomponent) ? "cp".$request->lastcomponent : $request->design4;
            $file->order_to = Auth::user()->id;
            $file->order_name = Auth::user()->name;
            $file->finished_status = 0;
            $file->qty = $request->quantity;
            $file->material = $request->material;
            $file->size = $request->size;
            $file->design = $design;
            $file->jenis_kertas = $request->jenis_kertas;
            $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
            $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();
    
            $countComponent = collect($dt)->map(function ($rtDataC) {
                
                $rtData = $this->MergedSameArrayValues($rtDataC, 'assets_uid');
                foreach ($rtData as $value) {
                    # code...
                    $dkl[] = $value->design;
                }
    
                $searchsComponentDesign = isset($dkl) ? $dkl : [0];
    
                    for ($i=0; $i < count($searchsComponentDesign); $i++) { 
                        # code...
                        $namemtr[] =  array_column($dkl[$i], 'value');
                    }
                    
                return $namemtr;
    
            });
    
            $rty = collect($dt)->map(function ($exposeArrayComponents) {
        
                foreach ($exposeArrayComponents as $value) {
                    # code...
                    $dkl[] = $value->design_plan;
                    $dtg[] = Assetsuser::whereIn('design_plan', [$dkl])->count();
    
                }
    
                $arrayOfValues = array();
                foreach ($dkl as $a) {
    
                    @$arrayOfValues[$a]++;
    
                }
                return $arrayOfValues;
            
            });
    
            $fgj = array_merge([], $countComponent->toArray()[0]);
            $data = array_merge([], $rty->toArray()[0]);
    
            $file->counter_component = count($fgj);
            $file->counter_plan = count($data);
            $file->save();
    
            return new JsonResponse(
                [
                    'success' => true, 
                    'message' => "success.",
                    'data' => $file->id
                ], 
                200
            );

        } else {

            $file= new Assetsuser();
            $file->assets_uid = self::generateID();
            $file->asset_grt = self::genereteNextID();
            $file->order_to = Auth::user()->id;
            $file->order_name = Auth::user()->name;
            $file->component = $component;
            $file->definition = $component;
            // $file->design_plan = isset($request->lastcomponent) ? "cp".$request->lastcomponent : $request->design4;
            $file->design_plan = isset($request->lastcomponent) ? "cp".$request->lastcomponent : $request->design4;
            $file->finished_status = 0;
            $file->qty = $request->quantity;
            $file->material = $request->material;
            $file->size = $request->size;
            $file->design = $design;
            $file->jenis_kertas = $request->jenis_kertas;
            $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
            $file->save();

            /**
             * @method save id per component
             */
            return new JsonResponse(
                [
                    'success' => true, 
                    'message' => "success.",
                    'data' => $file->id
                ], 
                200
            );


        }
       
    }

    public function detailShowComponent(Request $request){
        return $request->all();
    }

    public function getterComponentBrowserFileID(Request $r) {

        $data = Assetsuser::where('filepath', '=', $r->linkid)->first();

            return new JsonResponse(
                [
                    'success' => true, 
                    'message' => "success.",
                    'dfile' => $data
                ], 
            200
        );

    }

    public function getterComponent(Request $request) {

    /**
     * Component development test ID component UIDs
     */

    $id = (Int) $request->c;
    $designplans = Assetsuser::findOrFail($id); $designplan = $designplans['design_plan'];

    $data = Assetsuser::whereIn('design_plan', [$designplan])->get();

    $dataComponent = Assetsuser::whereIn('design_plan', [$designplan])->first();
        
    /**
     * Component 1 
     */
    // $data = Assetsuser::whereIn('order_to', [Auth::user()->id])->where('design_plan', '=' , 'cp1')->get();
    // $dataComponent1 = Assetsuser::where('design_plan', '=' , 'cp1')->whereIn('order_to', [Auth::user()->id])->first();

    /**
     * Component 2
     */
    // $data2 = Assetsuser::whereIn('order_to', [Auth::user()->id])->where('design_plan', '=' , 'cp2')->get();
    // $dataComponent2 = Assetsuser::where('design_plan', '=' , 'cp2')->whereIn('order_to', [Auth::user()->id])->first();

    /**
     * Component 3
     */
    // $data3 = Assetsuser::whereIn('order_to', [Auth::user()->id])->where('design_plan', '=' , 'cp3')->get();
    // $dataComponent3 = Assetsuser::where('design_plan', '=' , 'cp3')->whereIn('order_to', [Auth::user()->id])->first();

        /**
     * Component 4
     */
    // $data4 = Assetsuser::whereIn('order_to', [Auth::user()->id])->where('design_plan', '=' , 'cp4')->get();
    // $dataComponent4 = Assetsuser::where('design_plan', '=' , 'cp4')->whereIn('order_to', [Auth::user()->id])->first();

    return new JsonResponse(
                [
                    'success' => true, 
                    'message' => "success.",
                    'data' => $data,
                    'dataComponent' => $dataComponent
                ], 
            200
        );

    }
    
    public function orders_nofile(Request $request) {

        /**
         * jika tanpa dokument, hanya menyimpan data design, jenis kertas - jenis gsm - qty order
         */
         $validator = Validator::make($request->all(), [
            'size' => 'required',
            'quantity' => 'required',
            // 'definitionSingleComponent' => 'required',
            'design' => 'required',
            'material' => 'required',
            'jenis_kertas' => 'required',
            'componentcz' => 'required',
            'jenis_kertas_gsm' => 'required',
        ]);

        if ($validator->fails()) {
            return new JsonResponse(['success' => false, 'message' => $validator->errors()], 422);
        }  

        $qty = $request->all()['quantity'];
        $material = $request->all()['material'];
        $size = $request->all()['size'];
        $design1 = $request->all()['design1'];
        $component = $request->all()['componentcz'];
        // $definitionSingleComponent = $request->all()['definitionSingleComponent'];
        $jenis_kertas = $request->all()['jenis_kertas'];
        $design = $request->all()['design'];
        $jenis_kertas_gsm = $request->all()['jenis_kertas_gsm'];
        $emails = ['artexsdns@gmail.com'];

            // Mail::to($emails)->send(new Ordersdocno($qty, $size, $material, $jenis_kertas, $jenis_kertas_gsm, $design));
            
        if(isset(Auth::user()->id)) {
         
            $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

            if(!$dt[0]->isEmpty()){

                $file= new Assetsuser();
                $file->assets_uid = self::generateID();
                $file->asset_grt = self::genereteNextID();
                $file->order_to = Auth::user()->id;
                $file->component = $component;
                $file->definition = $component;
                $file->design_plan = isset($request->lastcomponent) ? "cp".$request->lastcomponent : $request->design1;
                $file->order_name = Auth::user()->name;
                $file->finished_status = 0;
                $file->qty = $request->quantity;
                $file->material = $request->material;
                $file->size = $request->size;
                $file->design = $design;
                $file->jenis_kertas = $request->jenis_kertas;
                $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                $countComponent = collect($dt)->map(function ($rtDataC) {
                
                    $rtData = $this->MergedSameArrayValues($rtDataC, 'assets_uid');
                    foreach ($rtData as $value) {
                        # code...
                        $dkl[] = $value->design;
                    }
    
                    $searchsComponentDesign = isset($dkl) ? $dkl : [0];
    
                        for ($i=0; $i < count($searchsComponentDesign); $i++) { 
                            # code...
                            $namemtr[] =  array_column($dkl[$i], 'value');
                        }
                        
                    return $namemtr;
    
                });
    
                $rty = collect($dt)->map(function ($exposeArrayComponents) {
            
                    foreach ($exposeArrayComponents as $value) {
                        # code...
                        $dkl[] = $value->design_plan;
                        $dtg[] = Assetsuser::whereIn('design_plan', [$dkl])->count();
        
                    }
        
                    $arrayOfValues = array();
                    foreach ($dkl as $a) {
        
                        @$arrayOfValues[$a]++;
        
                    }
                    return $arrayOfValues;
                
                });
    
                $fgj = array_merge([], $countComponent->toArray()[0]);
                $data = array_merge([], $rty->toArray()[0]);
    
                $file->counter_component = count($fgj);
                $file->counter_plan = count($data);
                $file->save();
    
                    /**
                     * @method save id per component
                     */
                    return new JsonResponse(
                        [
                            'success' => true, 
                            'message' => "success.",
                            'data' => $file->id
                        ], 
                        200
                    );
                

            } else {
            
                $file= new Assetsuser();
                $file->assets_uid = self::generateID();
                $file->asset_grt = self::genereteNextID();
                $file->order_to = Auth::user()->id;
                $file->component = $component;
                $file->definition = $component;
                $file->design_plan = isset($request->lastcomponent) ? "cp".$request->lastcomponent : $request->design1;
                $file->finished_status = 0;
                $file->order_name = Auth::user()->name;
                $file->qty = $request->quantity;
                $file->material = $request->material;
                $file->size = $request->size;
                $file->design = $design;
                $file->jenis_kertas = $request->jenis_kertas;
                $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                $file->save();

                /**
                 * @method save id per component
                 */
                return new JsonResponse(
                    [
                        'success' => true, 
                        'message' => "success.",
                        'data' => $file->id
                    ], 
                    200
                );

            }
          
        } 
            else {

                return new JsonResponse(
                    [
                        'success' => false, 
                        'message' => "failed."
                    ], 
                    200
                );
    
        }
       
    }

    public function UpdatedWithoutFile(Request $request) {

        $id = (Int) $request->id;

        $file = Assetsuser::where('id', '=', $id)->first();

                for ($x = 0; $x < $request->TotalFiles; $x++) {

                    if ($request->hasFile('file'.$x)) {
                      
                        $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

                        if(!$dt[0]->isEmpty()) {

                            $file     = $request->file('file'.$x);
                            $fileName = time().'_'.$request->file('file'.$x)->getClientOriginalName();
                            $mime     = $request->file('file'.$x)->getMimeType();
                            $location = '/files/';
                            $file->move(public_path().$location, $fileName);
                            $fileData[]  = $fileName;
                            $filepath    = url('files/'.$fileName);
        
                            if (File::exists($file->filepath)) {
                                File::delete(public_path().$location.$file->alias);
                            }
                            

                            Assetsuser::whereIn('design_plan', [$request->design1])->delete();

                            $file= new Assetsuser();
                            $file->assets_uid = self::generateID();
                            $file->asset_grt = self::genereteNextID();
                            $file->id_user = Auth::user()->id;
                            $file->component = $request->cmpcz;
                            $file->design_plan = $request->design1;
                            $file->filepath = $filepath;
                            $file->alias = $fileName;
                            $file->mime = $mime;
                            $file->order_to = Auth::user()->id;
                            $file->finished_status = 0;
                            $file->qty = $request->quantity;
                            $file->material = $request->material;
                            $file->size = $request->size;
                            $file->design = json_decode($request->FRMS, true);
                            $file->jenis_kertas = $request->jenis_kertas;
                            $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                            $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

                            $countComponent = collect($dt)->map(function ($rtDataC) {
                                
                                $rtData = $this->MergedSameArrayValues($rtDataC, 'assets_uid');
                                foreach ($rtData as $value) {
                                    # code...
                                    $dkl[] = $value->design;
                                }
                
                                $searchsComponentDesign = isset($dkl) ? $dkl : [0];
                
                                    for ($i=0; $i < count($searchsComponentDesign); $i++) { 
                                        # code...
                                        $namemtr[] =  array_column($dkl[$i], 'value');
                                    }
                                    
                                return $namemtr;
                
                            });
                
                            $rty = collect($dt)->map(function ($exposeArrayComponents) {
                        
                                foreach ($exposeArrayComponents as $value) {
                                    # code...
                                    $dkl[] = $value->design_plan;
                                    $dtg[] = Assetsuser::whereIn('design_plan', [$dkl])->count();
                    
                                }
                    
                                $arrayOfValues = array();
                                foreach ($dkl as $a) {
                    
                                    @$arrayOfValues[$a]++;
                    
                                }
                                return $arrayOfValues;
                            
                            });
                
                            $fgj = array_merge([], $countComponent->toArray()[0]);
                            $data = array_merge([], $rty->toArray()[0]);

                            $file->counter_component = count($fgj);
                            $file->counter_plan = count($data);
                            $file->save();
                            

                        } else {

                            $file     = $request->file('file'.$x);
                            $fileName = time().'_'.$request->file('file'.$x)->getClientOriginalName();
                            $mime     = $request->file('file'.$x)->getMimeType();
                            $location = '/files/';
                            $file->move(public_path().$location, $fileName);
                            $fileData[]  = $fileName;
                            $filepath    = url('files/'.$fileName);
    
                            if (File::exists($file->filepath)) {
                                File::delete(public_path().$location.$file->alias);
                            }
                            

                            Assetsuser::whereIn('design_plan', [$request->design1])->delete();

                            $file= new Assetsuser();
                            $file->assets_uid = self::generateID();
                            $file->asset_grt = self::genereteNextID();
                            $file->id_user = Auth::user()->id;
                            $file->component = $request->cmpcz;
                            $file->design_plan = $request->design1;
                            $file->order_to = Auth::user()->id;
                            $file->finished_status = 0;
                            $file->qty = $request->quantity;
                            $file->material = $request->material;
                            $file->size = $request->size;
                            $file->design = json_decode($request->FRMS, true);
                            $file->jenis_kertas = $request->jenis_kertas;
                            $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                            
                            $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

                            $countComponent = collect($dt)->map(function ($rtDataC) {
                                
                                $rtData = $this->MergedSameArrayValues($rtDataC, 'assets_uid');
                                foreach ($rtData as $value) {
                                    # code...
                                    $dkl[] = $value->design;
                                }
                
                                $searchsComponentDesign = isset($dkl) ? $dkl : [0];
                
                                    for ($i=0; $i < count($searchsComponentDesign); $i++) { 
                                        # code...
                                        $namemtr[] =  array_column($dkl[$i], 'value');
                                    }
                                    
                                return $namemtr;
                
                            });
                
                            $rty = collect($dt)->map(function ($exposeArrayComponents) {
                        
                                foreach ($exposeArrayComponents as $value) {
                                    # code...
                                    $dkl[] = $value->design_plan;
                                    $dtg[] = Assetsuser::whereIn('design_plan', [$dkl])->count();
                    
                                }
                    
                                $arrayOfValues = array();
                                foreach ($dkl as $a) {
                    
                                    @$arrayOfValues[$a]++;
                    
                                }
                                return $arrayOfValues;
                            
                            });
                
                            $fgj = array_merge([], $countComponent->toArray()[0]);
                            $data = array_merge([], $rty->toArray()[0]);

                            $file->counter_component = count($fgj);
                            $file->counter_plan = count($data);
                            $file->save();
                            

                        }
                      
                        return new JsonResponse(
                                [
                                    'success' => true, 
                                    'message' => "success."
                                ], 
                            200
                        );

                    }
                }  

                if (!$request->hasFile('file'.$x)) {

                    $dt[] = Assetsuser::whereIn('order_to', [Auth::user()->id])->get();

                    if(!$dt[0]->isEmpty()) {

                        Assetsuser::whereIn('design_plan', [$request->design1])->delete();

                        $file= new Assetsuser();
                        $file->assets_uid = self::generateID();
                        $file->asset_grt = self::genereteNextID();
                        $file->id_user = Auth::user()->id;
                        $file->component = $request->cmpcz;
                        $file->design_plan = $request->design1;
                        $file->order_to = Auth::user()->id;
                        $file->finished_status = 0;
                        $file->qty = $request->quantity;
                        $file->material = $request->material;
                        $file->size = $request->size;
                        $file->design = json_decode($request->FRMS, true);
                        $file->jenis_kertas = $request->jenis_kertas;
                        $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                        $file->save();

                    } 
                        else {

                        Assetsuser::whereIn('design_plan', [$request->design1])->delete();

                        $file= new Assetsuser();
                        $file->assets_uid = self::generateID();
                        $file->asset_grt = self::genereteNextID();
                        $file->id_user = Auth::user()->id;
                        $file->component = $request->cmpcz;
                        $file->design_plan = $request->design1;
                        $file->order_to = Auth::user()->id;
                        $file->finished_status = 0;
                        $file->qty = $request->quantity;
                        $file->material = $request->material;
                        $file->size = $request->size;
                        $file->design = json_decode($request->FRMS, true);
                        $file->jenis_kertas = $request->jenis_kertas;
                        $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                        $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();
                        $file->save();
                        
                    }

            return new JsonResponse(
                [
                    'success' => true, 
                    'message' => "success."
                ], 
                200
            );

        }
    
    }

    public function UpdatedWithoutFile4(Request $request) {

        $id = (Int) $request->id;

        $file = Assetsuser::where('id', '=', $id)->first();

                for ($x = 0; $x < $request->TotalFiles; $x++) {

                    if ($request->hasFile('file'.$x)) {
                      
                        $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

                        if(!$dt[0]->isEmpty()) {

                            $file     = $request->file('file'.$x);
                            $fileName = time().'_'.$request->file('file'.$x)->getClientOriginalName();
                            $mime     = $request->file('file'.$x)->getMimeType();
                            $location = '/files/';
                            $file->move(public_path().$location, $fileName);
                            $fileData[]  = $fileName;
                            $filepath    = url('files/'.$fileName);
        
                            if (File::exists($file->filepath)) {
                                File::delete(public_path().$location.$file->alias);
                            }
                            

                            Assetsuser::whereIn('design_plan', [$request->design4])->delete();

                            $file= new Assetsuser();
                            $file->assets_uid = self::generateID();
                            $file->asset_grt = self::genereteNextID();
                            $file->id_user = Auth::user()->id;
                            $file->component = $request->cmpcz;
                            $file->design_plan = $request->design4;
                            $file->filepath = $filepath;
                            $file->alias = $fileName;
                            $file->mime = $mime;
                            $file->order_to = Auth::user()->id;
                            $file->finished_status = 0;
                            $file->qty = $request->quantity;
                            $file->material = $request->material;
                            $file->size = $request->size;
                            $file->design = json_decode($request->FRMS, true);
                            $file->jenis_kertas = $request->jenis_kertas;
                            $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                            $file->save();
                            

                        } else {

                            $file     = $request->file('file'.$x);
                            $fileName = time().'_'.$request->file('file'.$x)->getClientOriginalName();
                            $mime     = $request->file('file'.$x)->getMimeType();
                            $location = '/files/';
                            $file->move(public_path().$location, $fileName);
                            $fileData[]  = $fileName;
                            $filepath    = url('files/'.$fileName);
    
                            if (File::exists($file->filepath)) {
                                File::delete(public_path().$location.$file->alias);
                            }
                            

                            Assetsuser::whereIn('design_plan', [$request->design4])->delete();

                            $file= new Assetsuser();
                            $file->assets_uid = self::generateID();
                            $file->asset_grt = self::genereteNextID();
                            $file->id_user = Auth::user()->id;
                            $file->component = $request->cmpcz;
                            $file->design_plan = $request->design4;
                            $file->order_to = Auth::user()->id;
                            $file->finished_status = 0;
                            $file->qty = $request->quantity;
                            $file->material = $request->material;
                            $file->size = $request->size;
                            $file->design = json_decode($request->FRMS, true);
                            $file->jenis_kertas = $request->jenis_kertas;
                            $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                            
                            $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

                            $countComponent = collect($dt)->map(function ($rtDataC) {
                                
                                $rtData = $this->MergedSameArrayValues($rtDataC, 'assets_uid');
                                foreach ($rtData as $value) {
                                    # code...
                                    $dkl[] = $value->design;
                                }
                
                                $searchsComponentDesign = isset($dkl) ? $dkl : [0];
                
                                    for ($i=0; $i < count($searchsComponentDesign); $i++) { 
                                        # code...
                                        $namemtr[] =  array_column($dkl[$i], 'value');
                                    }
                                    
                                return $namemtr;
                
                            });
                
                            $rty = collect($dt)->map(function ($exposeArrayComponents) {
                        
                                foreach ($exposeArrayComponents as $value) {
                                    # code...
                                    $dkl[] = $value->design_plan;
                                    $dtg[] = Assetsuser::whereIn('design_plan', [$dkl])->count();
                    
                                }
                    
                                $arrayOfValues = array();
                                foreach ($dkl as $a) {
                    
                                    @$arrayOfValues[$a]++;
                    
                                }
                                return $arrayOfValues;
                            
                            });
                
                            $fgj = array_merge([], $countComponent->toArray()[0]);
                            $data = array_merge([], $rty->toArray()[0]);

                            $file->counter_component = count($fgj);
                            $file->counter_plan = count($data);
                            $file->save();
                            

                        }
                      
                        return new JsonResponse(
                                [
                                    'success' => true, 
                                    'message' => "success."
                                ], 
                            200
                        );

                    }
                }  

                if (!$request->hasFile('file'.$x)) {

                    $dt[] = Assetsuser::whereIn('order_to', [Auth::user()->id])->get();

                    if(!$dt[0]->isEmpty()) {


                        Assetsuser::whereIn('design_plan', [$request->design4])->delete();

                        $file= new Assetsuser();
                        $file->assets_uid = self::generateID();
                        $file->asset_grt = self::genereteNextID();
                        $file->id_user = Auth::user()->id;
                        $file->component = $request->cmpcz;
                        $file->design_plan = $request->design4;
                        $file->order_to = Auth::user()->id;
                        $file->finished_status = 0;
                        $file->qty = $request->quantity;
                        $file->material = $request->material;
                        $file->size = $request->size;
                        $file->design = json_decode($request->FRMS, true);
                        $file->jenis_kertas = $request->jenis_kertas;
                        $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                        $file->save();
                        

                    } 
                        else {

                        Assetsuser::whereIn('design_plan', [$request->design4])->delete();

                        $file= new Assetsuser();
                        $file->assets_uid = self::generateID();
                        $file->asset_grt = self::genereteNextID();
                        $file->id_user = Auth::user()->id;
                        $file->component = $request->cmpcz;
                        $file->design_plan = $request->design4;
                        $file->order_to = Auth::user()->id;
                        $file->finished_status = 0;
                        $file->qty = $request->quantity;
                        $file->material = $request->material;
                        $file->size = $request->size;
                        $file->design = json_decode($request->FRMS, true);
                        $file->jenis_kertas = $request->jenis_kertas;
                        $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                        $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

                        $countComponent = collect($dt)->map(function ($rtDataC) {
                            
                            $rtData = $this->MergedSameArrayValues($rtDataC, 'assets_uid');
                            foreach ($rtData as $value) {
                                # code...
                                $dkl[] = $value->design;
                            }
            
                            $searchsComponentDesign = isset($dkl) ? $dkl : [0];
            
                                for ($i=0; $i < count($searchsComponentDesign); $i++) { 
                                    # code...
                                    $namemtr[] =  array_column($dkl[$i], 'value');
                                }
                                
                            return $namemtr;
            
                        });
            
                        $rty = collect($dt)->map(function ($exposeArrayComponents) {
                    
                            foreach ($exposeArrayComponents as $value) {
                                # code...
                                $dkl[] = $value->design_plan;
                                $dtg[] = Assetsuser::whereIn('design_plan', [$dkl])->count();
                
                            }
                
                            $arrayOfValues = array();
                            foreach ($dkl as $a) {
                
                                @$arrayOfValues[$a]++;
                
                            }
                            return $arrayOfValues;
                        
                        });
            
                        $fgj = array_merge([], $countComponent->toArray()[0]);
                        $data = array_merge([], $rty->toArray()[0]);

                        $file->counter_component = count($fgj);
                        $file->counter_plan = count($data);
                        $file->save();
                        
                        
                    }

            return new JsonResponse(
                [
                    'success' => true, 
                    'message' => "success."
                ], 
                200
            );

        }

    }

    protected function MergedSameArrayValues($array, $key) {
        $temp_array = array();
        $i = 0;
        $key_array = array();
            foreach($array as $val) {
                if (!in_array($val[$key], $key_array)) {
                    $key_array[$i] = $val[$key];
                    $temp_array[$i] = $val;
                }
                $i++;
            }

        return $temp_array;
    }

    public function UpdatedWithoutFile3(Request $request) {

        $id = (Int) $request->id;

        $file = Assetsuser::where('id', '=', $id)->first();

                for ($x = 0; $x < $request->TotalFiles; $x++) {

                    if ($request->hasFile('file'.$x)) {
                      
                        $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

                        if(!$dt[0]->isEmpty()) {

                            $file     = $request->file('file'.$x);
                            $fileName = time().'_'.$request->file('file'.$x)->getClientOriginalName();
                            $mime     = $request->file('file'.$x)->getMimeType();
                            $location = '/files/';
                            $file->move(public_path().$location, $fileName);
                            $fileData[]  = $fileName;
                            $filepath    = url('files/'.$fileName);
        
                            if (File::exists($file->filepath)) {
                                File::delete(public_path().$location.$file->alias);
                            }
                            

                            Assetsuser::whereIn('design_plan', [$request->design3])->delete();

                            $file= new Assetsuser();
                            $file->assets_uid = self::generateID();
                            $file->asset_grt = self::genereteNextID();
                            $file->id_user = Auth::user()->id;
                            $file->component = $request->cmpcz;
                            $file->design_plan = $request->design3;
                            $file->filepath = $filepath;
                            $file->alias = $fileName;
                            $file->mime = $mime;
                            $file->order_to = Auth::user()->id;
                            $file->finished_status = 0;
                            $file->qty = $request->quantity;
                            $file->material = $request->material;
                            $file->size = $request->size;
                            $file->design = json_decode($request->FRMS, true);
                            $file->jenis_kertas = $request->jenis_kertas;
                            $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                            $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

                            $countComponent = collect($dt)->map(function ($rtDataC) {
                                
                                $rtData = $this->MergedSameArrayValues($rtDataC, 'assets_uid');
                                foreach ($rtData as $value) {
                                    # code...
                                    $dkl[] = $value->design;
                                }
                
                                $searchsComponentDesign = isset($dkl) ? $dkl : [0];
                
                                    for ($i=0; $i < count($searchsComponentDesign); $i++) { 
                                        # code...
                                        $namemtr[] =  array_column($dkl[$i], 'value');
                                    }
                                    
                                return $namemtr;
                
                            });
                
                            $rty = collect($dt)->map(function ($exposeArrayComponents) {
                        
                                foreach ($exposeArrayComponents as $value) {
                                    # code...
                                    $dkl[] = $value->design_plan;
                                    $dtg[] = Assetsuser::whereIn('design_plan', [$dkl])->count();
                    
                                }
                    
                                $arrayOfValues = array();
                                foreach ($dkl as $a) {
                    
                                    @$arrayOfValues[$a]++;
                    
                                }
                                return $arrayOfValues;
                            
                            });
                
                            $fgj = array_merge([], $countComponent->toArray()[0]);
                            $data = array_merge([], $rty->toArray()[0]);

                            $file->counter_component = count($fgj);
                            $file->counter_plan = count($data);
                            $file->save();
                            

                        } else {

                            $file     = $request->file('file'.$x);
                            $fileName = time().'_'.$request->file('file'.$x)->getClientOriginalName();
                            $mime     = $request->file('file'.$x)->getMimeType();
                            $location = '/files/';
                            $file->move(public_path().$location, $fileName);
                            $fileData[]  = $fileName;
                            $filepath    = url('files/'.$fileName);
    
                            if (File::exists($file->filepath)) {
                                File::delete(public_path().$location.$file->alias);
                            }
                            

                            Assetsuser::whereIn('design_plan', [$request->design3])->delete();

                            $file= new Assetsuser();
                            $file->assets_uid = self::generateID();
                            $file->asset_grt = self::genereteNextID();
                            $file->id_user = Auth::user()->id;
                            $file->component = $request->cmpcz;
                            $file->design_plan = $request->design3;
                            $file->order_to = Auth::user()->id;
                            $file->finished_status = 0;
                            $file->qty = $request->quantity;
                            $file->material = $request->material;
                            $file->size = $request->size;
                            $file->design = json_decode($request->FRMS, true);
                            $file->jenis_kertas = $request->jenis_kertas;
                            $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                            
                            $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

                            $countComponent = collect($dt)->map(function ($rtDataC) {
                                
                                $rtData = $this->MergedSameArrayValues($rtDataC, 'assets_uid');
                                foreach ($rtData as $value) {
                                    # code...
                                    $dkl[] = $value->design;
                                }
                
                                $searchsComponentDesign = isset($dkl) ? $dkl : [0];
                
                                    for ($i=0; $i < count($searchsComponentDesign); $i++) { 
                                        # code...
                                        $namemtr[] =  array_column($dkl[$i], 'value');
                                    }
                                    
                                return $namemtr;
                
                            });
                
                            $rty = collect($dt)->map(function ($exposeArrayComponents) {
                        
                                foreach ($exposeArrayComponents as $value) {
                                    # code...
                                    $dkl[] = $value->design_plan;
                                    $dtg[] = Assetsuser::whereIn('design_plan', [$dkl])->count();
                    
                                }
                    
                                $arrayOfValues = array();
                                foreach ($dkl as $a) {
                    
                                    @$arrayOfValues[$a]++;
                    
                                }
                                return $arrayOfValues;
                            
                            });
                
                            $fgj = array_merge([], $countComponent->toArray()[0]);
                            $data = array_merge([], $rty->toArray()[0]);

                            $file->counter_component = count($fgj);
                            $file->counter_plan = count($data);
                            $file->save();
                            

                        }
                      
                        return new JsonResponse(
                                [
                                    'success' => true, 
                                    'message' => "success."
                                ], 
                            200
                        );

                    }
                }  

                if (!$request->hasFile('file'.$x)) {

                    $dt[] = Assetsuser::whereIn('order_to', [Auth::user()->id])->get();

                    if(!$dt[0]->isEmpty()) {


                        Assetsuser::whereIn('design_plan', [$request->design3])->delete();

                        $file= new Assetsuser();
                        $file->assets_uid = self::generateID();
                        $file->asset_grt = self::genereteNextID();
                        $file->id_user = Auth::user()->id;
                        $file->component = $request->cmpcz;
                        $file->design_plan = $request->design3;
                        $file->order_to = Auth::user()->id;
                        $file->finished_status = 0;
                        $file->qty = $request->quantity;
                        $file->material = $request->material;
                        $file->size = $request->size;
                        $file->design = json_decode($request->FRMS, true);
                        $file->jenis_kertas = $request->jenis_kertas;
                        $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                        $file->save();
                        

                    } 
                        else {

                        Assetsuser::whereIn('design_plan', [$request->design3])->delete();

                        $file= new Assetsuser();
                        $file->assets_uid = self::generateID();
                        $file->asset_grt = self::genereteNextID();
                        $file->id_user = Auth::user()->id;
                        $file->component = $request->cmpcz;
                        $file->design_plan = $request->design3;
                        $file->order_to = Auth::user()->id;
                        $file->finished_status = 0;
                        $file->qty = $request->quantity;
                        $file->material = $request->material;
                        $file->size = $request->size;
                        $file->design = json_decode($request->FRMS, true);
                        $file->jenis_kertas = $request->jenis_kertas;
                        $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                        $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

                        $countComponent = collect($dt)->map(function ($rtDataC) {
                            
                            $rtData = $this->MergedSameArrayValues($rtDataC, 'assets_uid');
                            foreach ($rtData as $value) {
                                # code...
                                $dkl[] = $value->design;
                            }
            
                            $searchsComponentDesign = isset($dkl) ? $dkl : [0];
            
                                for ($i=0; $i < count($searchsComponentDesign); $i++) { 
                                    # code...
                                    $namemtr[] =  array_column($dkl[$i], 'value');
                                }
                                
                            return $namemtr;
            
                        });
            
                        $rty = collect($dt)->map(function ($exposeArrayComponents) {
                    
                            foreach ($exposeArrayComponents as $value) {
                                # code...
                                $dkl[] = $value->design_plan;
                                $dtg[] = Assetsuser::whereIn('design_plan', [$dkl])->count();
                
                            }
                
                            $arrayOfValues = array();
                            foreach ($dkl as $a) {
                
                                @$arrayOfValues[$a]++;
                
                            }
                            return $arrayOfValues;
                        
                        });
            
                        $fgj = array_merge([], $countComponent->toArray()[0]);
                        $data = array_merge([], $rty->toArray()[0]);

                        $file->counter_component = count($fgj);
                        $file->counter_plan = count($data);
                        $file->save();
                        
                        
                    }

            return new JsonResponse(
                [
                    'success' => true, 
                    'message' => "success."
                ], 
                200
            );

        }

    }

    public function UpdatedWithoutFile2(Request $request) {

        $id = (Int) $request->id;

        $file = Assetsuser::where('id', '=', $id)->first();

                for ($x = 0; $x < $request->TotalFiles; $x++) {

                    if ($request->hasFile('file'.$x)) {
                      
                        $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

                        if(!$dt[0]->isEmpty()) {

                            $file     = $request->file('file'.$x);
                            $fileName = time().'_'.$request->file('file'.$x)->getClientOriginalName();
                            $mime     = $request->file('file'.$x)->getMimeType();
                            $location = '/files/';
                            $file->move(public_path().$location, $fileName);
                            $fileData[]  = $fileName;
                            $filepath    = url('files/'.$fileName);
        
                            if (File::exists($file->filepath)) {
                                File::delete(public_path().$location.$file->alias);
                            }
                            

                            Assetsuser::whereIn('design_plan', [$request->design2])->delete();

                            $file= new Assetsuser();
                            $file->assets_uid = self::generateID();
                            $file->asset_grt = self::genereteNextID();
                            $file->id_user = Auth::user()->id;
                            $file->component = $request->cmpcz;
                            $file->design_plan = $request->design2;
                            $file->filepath = $filepath;
                            $file->alias = $fileName;
                            $file->mime = $mime;
                            $file->order_to = Auth::user()->id;
                            $file->finished_status = 0;
                            $file->qty = $request->quantity;
                            $file->material = $request->material;
                            $file->size = $request->size;
                            $file->design = json_decode($request->FRMS, true);
                            $file->jenis_kertas = $request->jenis_kertas;
                            $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                            $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

                            $countComponent = collect($dt)->map(function ($rtDataC) {
                                
                                $rtData = $this->MergedSameArrayValues($rtDataC, 'assets_uid');
                                foreach ($rtData as $value) {
                                    # code...
                                    $dkl[] = $value->design;
                                }
                
                                $searchsComponentDesign = isset($dkl) ? $dkl : [0];
                
                                    for ($i=0; $i < count($searchsComponentDesign); $i++) { 
                                        # code...
                                        $namemtr[] =  array_column($dkl[$i], 'value');
                                    }
                                    
                                return $namemtr;
                
                            });
                
                            $rty = collect($dt)->map(function ($exposeArrayComponents) {
                        
                                foreach ($exposeArrayComponents as $value) {
                                    # code...
                                    $dkl[] = $value->design_plan;
                                    $dtg[] = Assetsuser::whereIn('design_plan', [$dkl])->count();
                    
                                }
                    
                                $arrayOfValues = array();
                                foreach ($dkl as $a) {
                    
                                    @$arrayOfValues[$a]++;
                    
                                }
                                return $arrayOfValues;
                            
                            });
                
                            $fgj = array_merge([], $countComponent->toArray()[0]);
                            $data = array_merge([], $rty->toArray()[0]);

                            $file->counter_component = count($fgj);
                            $file->counter_plan = count($data);
                            $file->save();
                            

                        } else {

                            $file     = $request->file('file'.$x);
                            $fileName = time().'_'.$request->file('file'.$x)->getClientOriginalName();
                            $mime     = $request->file('file'.$x)->getMimeType();
                            $location = '/files/';
                            $file->move(public_path().$location, $fileName);
                            $fileData[]  = $fileName;
                            $filepath    = url('files/'.$fileName);
    
                            if (File::exists($file->filepath)) {
                                File::delete(public_path().$location.$file->alias);
                            }
                            

                            Assetsuser::whereIn('design_plan', [$request->design2])->delete();

                            $file= new Assetsuser();
                            $file->assets_uid = self::generateID();
                            $file->asset_grt = self::genereteNextID();
                            $file->id_user = Auth::user()->id;
                            $file->component = $request->cmpcz;
                            $file->design_plan = $request->design2;
                            $file->order_to = Auth::user()->id;
                            $file->finished_status = 0;
                            $file->qty = $request->quantity;
                            $file->material = $request->material;
                            $file->size = $request->size;
                            $file->design = json_decode($request->FRMS, true);
                            $file->jenis_kertas = $request->jenis_kertas;
                            $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                            
                            $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

                            $countComponent = collect($dt)->map(function ($rtDataC) {
                                
                                $rtData = $this->MergedSameArrayValues($rtDataC, 'assets_uid');
                                foreach ($rtData as $value) {
                                    # code...
                                    $dkl[] = $value->design;
                                }
                
                                $searchsComponentDesign = isset($dkl) ? $dkl : [0];
                
                                    for ($i=0; $i < count($searchsComponentDesign); $i++) { 
                                        # code...
                                        $namemtr[] =  array_column($dkl[$i], 'value');
                                    }
                                    
                                return $namemtr;
                
                            });
                
                            $rty = collect($dt)->map(function ($exposeArrayComponents) {
                        
                                foreach ($exposeArrayComponents as $value) {
                                    # code...
                                    $dkl[] = $value->design_plan;
                                    $dtg[] = Assetsuser::whereIn('design_plan', [$dkl])->count();
                    
                                }
                    
                                $arrayOfValues = array();
                                foreach ($dkl as $a) {
                    
                                    @$arrayOfValues[$a]++;
                    
                                }
                                return $arrayOfValues;
                            
                            });
                
                            $fgj = array_merge([], $countComponent->toArray()[0]);
                            $data = array_merge([], $rty->toArray()[0]);

                            $file->counter_component = count($fgj);
                            $file->counter_plan = count($data);
                            $file->save();
                            

                        }
                      
                        return new JsonResponse(
                                [
                                    'success' => true, 
                                    'message' => "success."
                                ], 
                            200
                        );

                    }
                }  

                if (!$request->hasFile('file'.$x)) {

                    $dt[] = Assetsuser::whereIn('order_to', [Auth::user()->id])->get();

                    if(!$dt[0]->isEmpty()) {

                        Assetsuser::whereIn('design_plan', [$request->design2])->delete();

                        $file= new Assetsuser();
                        $file->assets_uid = self::generateID();
                        $file->asset_grt = self::genereteNextID();
                        $file->id_user = Auth::user()->id;
                        $file->component = $request->cmpcz;
                        $file->design_plan = $request->design2;
                        $file->order_to = Auth::user()->id;
                        $file->finished_status = 0;
                        $file->qty = $request->quantity;
                        $file->material = $request->material;
                        $file->size = $request->size;
                        $file->design = json_decode($request->FRMS, true);
                        $file->jenis_kertas = $request->jenis_kertas;
                        $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                        $file->save();
                        

                    } 
                        else {

                        Assetsuser::whereIn('design_plan', [$request->design2])->delete();

                        $file= new Assetsuser();
                        $file->assets_uid = self::generateID();
                        $file->asset_grt = self::genereteNextID();
                        $file->id_user = Auth::user()->id;
                        $file->component = $request->cmpcz;
                        $file->design_plan = $request->design2;
                        $file->order_to = Auth::user()->id;
                        $file->finished_status = 0;
                        $file->qty = $request->quantity;
                        $file->material = $request->material;
                        $file->size = $request->size;
                        $file->design = json_decode($request->FRMS, true);
                        $file->jenis_kertas = $request->jenis_kertas;
                        $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                        $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

                        $countComponent = collect($dt)->map(function ($rtDataC) {
                            
                            $rtData = $this->MergedSameArrayValues($rtDataC, 'assets_uid');
                            foreach ($rtData as $value) {
                                # code...
                                $dkl[] = $value->design;
                            }
            
                            $searchsComponentDesign = isset($dkl) ? $dkl : [0];
            
                                for ($i=0; $i < count($searchsComponentDesign); $i++) { 
                                    # code...
                                    $namemtr[] =  array_column($dkl[$i], 'value');
                                }
                                
                            return $namemtr;
            
                        });
            
                        $rty = collect($dt)->map(function ($exposeArrayComponents) {
                    
                            foreach ($exposeArrayComponents as $value) {
                                # code...
                                $dkl[] = $value->design_plan;
                                $dtg[] = Assetsuser::whereIn('design_plan', [$dkl])->count();
                
                            }
                
                            $arrayOfValues = array();
                            foreach ($dkl as $a) {
                
                                @$arrayOfValues[$a]++;
                
                            }
                            return $arrayOfValues;
                        
                        });
            
                        $fgj = array_merge([], $countComponent->toArray()[0]);
                        $data = array_merge([], $rty->toArray()[0]);

                        $file->counter_component = count($fgj);
                        $file->counter_plan = count($data);
                        $file->save();
                        
                        
                    }

            return new JsonResponse(
                [
                    'success' => true, 
                    'message' => "success."
                ], 
                200
            );

        }
    
    }

    public function updateDCP1(Request $request) {

        $id = $request->id;
        
        $c = Assetsuser::findOrFail($id);
        
        if($request->TotalFiles > 0) {
            
                for ($x = 0; $x < $request->TotalFiles; $x++) {

                    $file     = $request->file('file'.$x);
                    $fileName = time().'_'.$request->file('file'.$x)->getClientOriginalName();
                    $mime     = $request->file('file'.$x)->getMimeType();
                    $location = '/files/';
                    $file->move(public_path().$location, $fileName);
                    $fileData[]  = $fileName;
                    $filepath    = url('files/'.$fileName);

                    if (File::exists($c->filepath)) {
                        File::delete(public_path().$location.$c->alias);
                    }
                 
                        $c->filepath = $filepath;
                        $c->mime     = $mime;
                        $c->alias    = $fileName;
                        $c->id_user = Auth::user()->id;
                        $c->component = $request->component;
                        $c->order_to = Auth::user()->id;
                        $c->finished_status = 0;
                        $c->qty = $request->qty;
                        $c->material = $request->material;
                        $c->size = $request->size;
                        $c->design = json_decode($request->formDataDesign, true);
                        $c->jenis_kertas = $request->jenis_kertas;
                        $c->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                        $c->save();
                    }

                return new JsonResponse(
                    [
                        'success' => true, 
                        'message' => "success."
                    ], 
                    200
                );
            } 
                else {

                    $c->id_user = Auth::user()->id;
                    $c->order_to = Auth::user()->id;
                        $c->component = $request->component;
                        $c->material = $request->material;
                            $c->qty = $request->qty;
                            $c->finished_status = 0;
                            $c->size = $request->size;
                    $c->design = json_decode($request->formDataDesign, true);
                    $c->jenis_kertas = $request->jenis_kertas;
                    $c->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                    $c->save();

            return new JsonResponse(
                [
                    'success' => true, 
                    'message' => "success."
                ], 
                200
            );

        }
    
    }

    public function updateDCP2(Request $request) {

        $id = $request->id;
        
        $c = Assetsuser::findOrFail($id);
        
        if($request->TotalFiles > 0) {
            
                for ($x = 0; $x < $request->TotalFiles; $x++) {

                    $file     = $request->file('file'.$x);
                    $fileName = time().'_'.$request->file('file'.$x)->getClientOriginalName();
                    $mime     = $request->file('file'.$x)->getMimeType();
                    $location = '/files/';
                    $file->move(public_path().$location, $fileName);
                    $fileData[]  = $fileName;
                    $filepath    = url('files/'.$fileName);

                    if (File::exists($c->filepath)) {
                        File::delete(public_path().$location.$c->alias);
                    }
                 
                        $c->filepath = $filepath;
                        $c->mime     = $mime;
                        $c->alias    = $fileName;
                        $c->id_user = Auth::user()->id;
                        $c->component = $request->component;
                        $c->order_to = Auth::user()->id;
                        $c->finished_status = 0;
                        $c->qty = $request->qty;
                        $c->material = $request->material;
                        $c->size = $request->size;
                        $c->design = json_decode($request->formDataDesign, true);
                        $c->jenis_kertas = $request->jenis_kertas;
                        $c->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                        $c->save();
                    }


                return new JsonResponse(
                    [
                        'success' => true, 
                        'message' => "success."
                    ], 
                    200
                );
            } 
                else {

                    $c->id_user = Auth::user()->id;
                    $c->order_to = Auth::user()->id;
                        $c->component = $request->component;
                        $c->material = $request->material;
                            $c->qty = $request->qty;
                            $c->finished_status = 0;
                            $c->size = $request->size;
                    $c->design = json_decode($request->formDataDesign, true);
                    $c->jenis_kertas = $request->jenis_kertas;
                    $c->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                    $c->save();

            return new JsonResponse(
                [
                    'success' => true, 
                    'message' => "success."
                ], 
                200
            );

        }
    
    }

    /**
     * Progress deployment add features only single orders
     */
    public function order_customers_only(Request $request) {

        if(isset(Auth::user()->id)){

            $docs = new Assetsuser();
            $docs->assets_uid = self::generateID();
            $docs->asset_grt = self::genereteNextID();
            $docs->id_user = Auth::user()->id;
            $docs->component = isset($request->cmpz) ? $request->cmpz : NULL;
            $docs->order_to = Auth::user()->id;
            $docs->finished_status = 0;
            $docs->qty = $request->qty;
            $docs->material = $request->material;
            $docs->size = $request->size;
            $docs->jenis_kertas = $request->jenis_kertas;
            $docs->jenis_kertas_gsm = $request->jenis_kertas_gsm;
            $docs->save();

            if($docs == true) {

                $checkOrder = Assetsuser::where('order_to', '=', Auth::user()->id )->whereNotIn('finished_status', [1])->get();

                foreach ($checkOrder as $key => $QrData) {
                    # code...
                    $filenamed[] = $QrData->alias;
                    $qty[] = $QrData->qty;
                    $size[] = $QrData->size;
                    $material[] = $QrData->material;
                    $mime[] = $QrData->mime;
                    $component[] = $QrData->component;
                    $jenis_kertas[] = $QrData->jenis_kertas;
                    $jenis_kertas_gsm[] = $QrData->jenis_kertas_gsm;
                    $design[] = $QrData->design;
                    $designNOFILE[] = $QrData->design;

                }

            if(isset($qty)){

                dispatch(new SendSingleFilesTRC($component, $qty, $size, $material, $jenis_kertas, $jenis_kertas_gsm));
                Assetsuser::whereIn('material', [$material])->update(['finished_status' => 1]);

                return new JsonResponse(
                    [
                        'success' => true, 
                        'message' => "success."
                    ], 
                    200
                );

            } 
                else {

                    return new JsonResponse(
                        [
                            'success' => false, 
                            'message' => "File sebelumnya sudah pernah dikirim."
                            ], 
                            200
                        );
                }

            } else {
                return new JsonResponse(
                    [
                        'success' => false, 
                        'message' => "failed."
                    ], 
                    200
                );
            }

        }  else {

            return new JsonResponse(
                [
                    'success' => false, 
                    'message' => "failed."
                ], 
                200
            );
        }

    }
        public function order_customers(Request $request) {

        /**
         * jika tanpa dokument, hanya menyimpan data design, jenis kertas - jenis gsm - qty order
         */
        if(isset(Auth::user()->id)){

            $checkOrder = Assetsuser::where('order_to', '=', Auth::user()->id )->whereNotIn('finished_status', [1])->get();

            $emails = ['artexsdns@gmail.com'];

            foreach ($checkOrder as $key => $QrData) {
                # code...
                $filenamed[] = $QrData->alias;
                $filenamedcheck = $QrData->alias;
                $qty[] = $QrData->qty;
                $size[] = $QrData->size;
                $material[] = $QrData->material;
                $filepath = $QrData->filepath;
                $alias = $QrData->alias;
                $mime[] = $QrData->mime;
                $component[] = $QrData->component;
                $definition[] = $QrData->definition;
                $code[] = $QrData->code;
                $jenis_kertas[] = $QrData->jenis_kertas;
                $jenis_kertas_gsm[] = $QrData->jenis_kertas_gsm;
                $design[] = $QrData->design;
                $designNOFILE[] = $QrData->design;

                if(!is_null($filenamedcheck) || isset($filenamedcheck) || is_null($filepath) || isset($filepath)){
                   
                    Assetsuser::where('order_to', '=',Auth::user()->id)
                    ->whereNull('alias')
                    ->whereNull('filepath')
                    ->update([
                        'alias' => $filenamedcheck,
                        'filepath' => $filepath
                    ]);

                }

            }

        if(isset($qty)){

            if(is_null($alias)) {
        
                dispatch(new SendMoreFilesTRC($code, $component, $qty, $size, $material, $filenamed = [], $filepath = null, $alias = null, $mime = null, $jenis_kertas, $jenis_kertas_gsm, $designNOFILE));

            } 
                else {

                dispatch(new SendMoreFilesTRC($code, $component, $qty, $size, $material, $filenamed, $filepath, $alias, $mime, $jenis_kertas, $jenis_kertas_gsm, $design));

            }

            return new JsonResponse(
                [
                    'success' => true, 
                    'message' => "success."
                ], 
                200
            );

        } 
            else {

                    return new JsonResponse(
                    [
                        'success' => false, 
                        'message' => "File sebelumnya sudah pernah dikirim."
                    ], 
                    200
                );
            }

        } else {

            return new JsonResponse(
                [
                    'success' => false, 
                    'message' => "failed."
                ], 
                200
            );
        }

    }


    public static function EventEmitSendMail($components) {

        $desingPlans = Assetsuser::findOrFail($components)['design_plan'];

        if(isset($desingPlans)){

            $checkOrder = Assetsuser::whereIn('design_plan', [$desingPlans] )->whereNotIn('finished_status', [1])->get();

            foreach ($checkOrder as $key => $QrData) {
                # code...
                $filenamed[] = $QrData->alias;
                $filenamedcheck = $QrData->alias;
                $qty[] = $QrData->qty;
                $size[] = $QrData->size;
                $material[] = $QrData->material;
                $filepath = $QrData->filepath;
                $alias = $QrData->alias;
                $mime[] = $QrData->mime;
                $component[] = $QrData->component;
                $definition[] = $QrData->definition;
                $assets_uid[] = $QrData->assets_uid;
                $jenis_kertas[] = $QrData->jenis_kertas;
                $jenis_kertas_gsm[] = $QrData->jenis_kertas_gsm;
                $design[] = $QrData->design;
                $designNOFILE[] = $QrData->design;

                if(!is_null($filenamedcheck) || isset($filenamedcheck) || is_null($filepath) || isset($filepath)){
                   
                    Assetsuser::whereIn('design_plan', [$desingPlans])
                    ->whereNull('alias')
                    ->whereNull('filepath')
                    ->update([
                        'alias' => $filenamedcheck,
                        'filepath' => $filepath
                    ]);

                }

            }

        if(isset($qty)){

            if(is_null($alias)) {
        
                dispatch(new SendMoreFilesTRC($assets_uid, $component, $qty, $size, $material, $filenamed = [], $filepath = null, $alias = null, $mime = null, $jenis_kertas, $jenis_kertas_gsm, $designNOFILE));
             
                Assetsuser::whereIn('id', [$components])->update(['finished_status' => 1]);

            } 
                else {

                dispatch(new SendMoreFilesTRC($assets_uid, $component, $qty, $size, $material, $filenamed, $filepath, $alias, $mime, $jenis_kertas, $jenis_kertas_gsm, $design));
              
                Assetsuser::whereIn('id', [$components])->update(['finished_status' => 1]);

            }

            return new JsonResponse(
                [
                    'success' => true, 
                    'message' => "success."
                ], 
                200
            );

        } 
            else {

                    return new JsonResponse(
                    [
                        'success' => false, 
                        'message' => "File sebelumnya sudah pernah dikirim."
                    ], 
                    200
                );
            }

        } else {

            return new JsonResponse(
                [
                    'success' => false, 
                    'message' => "failed."
                ], 
                200
            );
        }

    }

    public function orders(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'size' => 'required',
            'quantity' => 'required',
            'filepaths' => 'required',
            'cmpcz' => 'required',
            'material' => 'required',
            'jenis_kertas' => 'required',
            'jenis_kertas_gsm' => 'required',
        ]);

        if ($validator->fails()) {
            return new JsonResponse(['success' => false, 'message' => $validator->errors()], 422);
        }  

        $qty = $request->all()['quantity'];
        $desing1 = $request->all()['design1'];
        $material = $request->all()['material'];
        $files = $request->all()['filepaths'];
        $filename = $request->all()['filename'];
        $original = $request->all()['originalnames'];
        $mime = $request->all()['mime'];
        $size = $request->all()['size'];
        $component = $request->all()['cmpcz'];
        $jenis_kertas = $request->all()['jenis_kertas'];
        $design = isset( $request->all()['design']) ? $request->all()['design'] : [];
        $jenis_kertas_gsm = $request->all()['jenis_kertas_gsm'];
        $emails = ['artexsdns@gmail.com'];  

            return new JsonResponse(
                [
                    'success' => true, 
                    'message' => "success.",
                    'data' => "success."
                ], 
                200
            );

    }

    public function orders_prt2(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'size' => 'required',
            'quantity' => 'required',
            // 'filepaths' => 'required',
            'component' => 'required',
            'material' => 'required',
            'jenis_kertas' => 'required',
            // 'jenis_kertas_gsm' => 'required',
        ]);

        if ($validator->fails()) {
            return new JsonResponse(['success' => false, 'message' => $validator->errors()], 422);
        }  

        // $qty = $request->all()['quantity'];
        // $material = $request->all()['material'];
        // // $files = $request->all()['filepaths'];
        // $component = $request->all()['component'];
        // $filename = $request->all()['filename'];
        // $original = $request->all()['originalnames'];
        // $mime = $request->all()['mime'];
        // $size = $request->all()['size'];
        // $jenis_kertas = $request->all()['jenis_kertas'];
        // $design = isset( $request->all()['design']) ? $request->all()['design'] : [];
        // // $jenis_kertas_gsm = $request->all()['jenis_kertas_gsm'];
        // $emails = ['artexsdns@gmail.com'];  

            return new JsonResponse(
                [
                    'success' => true, 
                    'message' => "success."
                ], 
                200
            );

    }

    public function orders_prt3(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'size' => 'required',
            'quantity' => 'required',
            // 'filepaths' => 'required',
            'component' => 'required',
            'material' => 'required',
            'jenis_kertas' => 'required',
            'jenis_kertas_gsm' => 'required',
        ]);

        if ($validator->fails()) {
            return new JsonResponse(['success' => false, 'message' => $validator->errors()], 422);
        }  


        return new JsonResponse(
            [
                'success' => true, 
                'message' => "success."
            ], 
            200
        );
    }

    public function orders_prt4(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'size' => 'required',
            'quantity' => 'required',
            // 'filepaths' => 'required',
            'material' => 'required',
            'jenis_kertas' => 'required',
            'jenis_kertas_gsm' => 'required',
        ]);

        if ($validator->fails()) {
            return new JsonResponse(['success' => false, 'message' => $validator->errors()], 422);
        }  

        $qty = $request->all()['quantity'];
        $material = $request->all()['material'];
        // $files = $request->all()['filepaths'];
        $filename = $request->all()['filename'];
        $original = $request->all()['originalnames'];
        $mime = $request->all()['mime'];
        $size = $request->all()['size'];
        $jenis_kertas = $request->all()['jenis_kertas'];
        $design = isset( $request->all()['design']) ? $request->all()['design'] : [];
        $jenis_kertas_gsm = $request->all()['jenis_kertas_gsm'];
        $emails = ['artexsdns@gmail.com'];  

            return new JsonResponse(
                [
                    'success' => true, 
                    'message' => "success."
                ], 
                200
            );

    }

    public function fp_KOP(){

        return view('auth-user.forgot-pw');
    }

    public function dashboard(){

        return view('about.dashboard');
    }

    public function designbox(){

        return view('layouts.design-box');
    }

    public function qtys_view(){

        return view('layouts.quantity');
    }
    
    public function chat(){

        return view('chat.chat');
    }

} 