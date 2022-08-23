<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Banner;
use App\Models\BannerContain;
use App\Models\package;
use App\Models\tourCategory;
use App\Models\testimonial;
use App\Models\Features;
use App\Models\Specialoffer;
use App\Models\Subscriber;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{ 
    public function index() {
        $bannerall = Banner::where('status', '1')->get();
        $bannercontain = BannerContain::where('status',1)->get();
        $similarPackages = DB::table('packages')->where('status','Active')->take(6)->get();
        $teaTourismPackages = DB::table('packages')->where('categoryId','37')->where('status','Active')->take(2)->get();
        $domesticTourismPackages = DB::table('packages')->where('categoryId','35')->where('status','Active')->take(9)->get();
        $internationalTourismPackages = DB::table('packages')->where('categoryId','38')->where('status','Active')->take(9)->get();
        $weekendTourismPackages = DB::table('packages')->where('categoryId','36')->where('status','Active')->take(9)->get();
        $teaTourismPackagesCollection = DB::table('packages')->where('categoryId','37')->where('status','Active')->take(9)->get();
        $testimonial= Testimonial::orderBy('sequence', 'ASC')->where('status','Active')->get();
        $features=Features::orderBy('sequence', 'ASC')->where('status','1')->get();
        $specialoffer=Specialoffer::orderBy('sequence', 'ASC')->where('status','1')->get();
		$client= Client::orderBy('sequence', 'ASC')->where('status','1')->get();
        return view('home')->with('bannerall',$bannerall)->with('bannercontain',$bannercontain)->with('packages',$similarPackages)->with('testimonial',$testimonial)->with('features',$features)->with('specialoffer',$specialoffer)->with('client',$client)->with('teaTourismPackages',$teaTourismPackages)->with('domesticTourismPackages',$domesticTourismPackages)->with('internationalTourismPackages',$internationalTourismPackages)->with('weekendTourismPackages',$weekendTourismPackages)->with('teaTourismPackagesCollection',$teaTourismPackagesCollection);    
    }
    public function aboutUs() {
        $testimonial= testimonial::orderBy('sequence', 'ASC')->where('status','Active')->get();
        $hearderData=Page::where('slug', 'aboutus')->get();
        if(!empty($hearderData)){
            $aboutAll=Page::where('status', '1')->get();
            return view('about-us')->with('hearderData', $hearderData)->with('aboutAll', $aboutAll)->with('testimonial',$testimonial);
        } else {
            return view('about-us')->with('hearderData', [])->with('aboutAll',[])->with('testimonial',$testimonial);
        }
    }
    public function contact(){
        return view('contact');
    }
    public function packagesDetails(Request $request){
        if($request->slug != 'book-stay-darjeeling-tea-bunglow'){
        $key = $request->slug;
        $packages = DB::table('packages')->where('status','Active')->where('slug',$key)->get();
        $testimonial= testimonial::orderBy('sequence', 'ASC')->where('status','Active')->get();
        $data = [];
        foreach($packages as $pac){
            $similarPackages = DB::table('packages')->where('status','Active')->where('categoryId',$pac->categoryId)->where('slug','!=',$key)->take(3)->get();
            $sections = DB::table('sections')->where('status','Active')->where('packageId',$pac->id)->orderBy('sequence', 'ASC')->get();
            $sub_section = [];
            foreach($sections as $sec){
                $sub_sections = DB::table('sub_sections')->where('status','Active')->where('sectionId',$sec->id)->orderBy('sequence', 'ASC')->get();
                $sub_sub_section = [];
                foreach($sub_sections as $subsec){
                    $sub_sub_sections = DB::table('sub_sub_sections')->where('status','Active')->where('subSectionId',$subsec->id)->orderBy('sequence', 'ASC')->get();
                    $subsec->sub_sub_section = $sub_sub_sections;
                    array_push($sub_sub_section, $subsec);
                }
                $sec->sub_sections = $sub_sub_section;
                array_push($sub_section, $sec);
            }
            $pac->section = $sub_section;
            array_push($data, $pac);
        }
        $array = json_decode(json_encode($data), true);
        return view('packages-details')->with('data',$array)->with('testimonial',$testimonial)->with('similarPackages',$similarPackages)
        ->with('similarPackages',$similarPackages);
    }else{
        $search = $request->search;
        $typeCheckbox = $request->value;
        if(!empty($typeCheckbox)){
            $packages = package::where('status','Active')->where('categoryId', '37')->paginate(21);
        }
        elseif(!empty($search)){
            $packages = package::where('status','Active')->where('title', 'LIKE', "%{$search}%")
        ->orWhere('whatYouWillGet', 'LIKE', "%{$search}%")->orWhere('subTitle', 'LIKE', "%{$search}%")->paginate(21);
        }else{
            $packages = package::where('status','Active')->where('categoryId', '37')->paginate(21);
        }
        return view('at-a-glance')->with('data',$packages);
    }
    }
    // public function atGlance(Request $request) {
    //     $search = $request->search;
    //     $typeCheckbox = $request->value;
    //     if(!empty($typeCheckbox)){
    //         $packages = package::where('status','Active')->where('categoryId', '37')->paginate(21);
    //     }
    //     elseif(!empty($search)){
    //         $packages = package::where('status','Active')->where('title', 'LIKE', "%{$search}%")
    //     ->orWhere('whatYouWillGet', 'LIKE', "%{$search}%")->orWhere('subTitle', 'LIKE', "%{$search}%")->paginate(21);
    //     }else{
    //         $packages = package::where('status','Active')->where('categoryId', '37')->paginate(21);
    //     }
    //     return view('at-a-glance')->with('data',$packages);
    // }
    public function packages(Request $request) {
        $search = $request->search;
        $typeCheckbox = $request->value;
        if(!empty($typeCheckbox)){
            $packages = package::where('status','Active')->where('categoryId', $typeCheckbox)->paginate(21);
        }
        elseif(!empty($search)){
            $packages = package::where('status','Active')->where('title', 'LIKE', "%{$search}%")
        ->orWhere('whatYouWillGet', 'LIKE', "%{$search}%")->orWhere('subTitle', 'LIKE', "%{$search}%")->paginate(21);
        }else{
            $packages = package::where('status','Active')->paginate(21);
        }
        return view('packages')->with('data',$packages);
    }
    public function termCondition(){
        return view('term-condition');
    }
    public function privacy(){
        return view('privacy');
    }
    public function subscriber(Request $request) {
        try {
            $subscriber= Subscriber::where('subscriber_email',$request->subscriberEmail)->get();
            if(count($subscriber) == 0){
                $Subscriber = new Subscriber;
                $Subscriber->subscriber_email = $request->subscriberEmail;
                $Subscriber->save();
                $data =[
                    'subject'=>'Thanks for Subscribing Meilleur Holidays.',
                    'to'=>$request->subscriberEmail,
                    'body'=>'Thanks for Subscribing Meilleur Holidays.'
                ];
                Mail::send('admin.mailTemplate', $data, function($message) use ($data) {
                    $message->to($data['to']);
                    $message->subject($data['subject']);
                    $message->from('susanta.das@bluehorse.in','Susanta');
                });
                return response()->json(['code' => 200, 'msg' => 'Sent successfully']);
            } else {
                return response()->json(['code' => 500, 'msg' => 'E-mail id already exist']);
            }
        } catch (\Exception $e) {
            return response()->json(['code' => 500, 'msg' => $e->getMessage()]);
        }
    }
}