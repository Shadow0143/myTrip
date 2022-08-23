<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tourCategory;
use App\Models\package;
use App\Models\section;
use App\Models\subSection;
use Illuminate\Support\Facades\Auth;
use App\Models\subSubSection;
class PackageController extends Controller
{
    public function domesticTour(Request $request){
        if(Auth::user()->role_id == 1){
        $key = $request->category;
        $tourCategory= tourCategory::all()->where('category',$key);
        return view('admin/domestic-tour')->with('data',$tourCategory);
        } else {
            return redirect('/dashboard');
        }
    }
    public function addTourCategory(Request $request){
        $image = "";
        if($request->file('image')) {
            $file = $request->file('image');
            $image = time().'.'.$request->file('image')->extension();
            $location = 'package';
            $file->move($location,$image);
        }
        $tourCategory= new tourCategory;
        $tourCategory->category = $request->category;
        $tourCategory->title = $request->title;
        $tourCategory->description = $request->description;
        $tourCategory->image = $image;
        $tourCategory->sequence= $request->sequence;
        $tourCategory->save();         
        return back();
    }
    public function fatchTourCategory(Request $request){   
        $key = $request->id;
        $tourCategorys= tourCategory::all()->where('id','!=',$key);
        $tourCategory= tourCategory::find($key);
        return response()->json([ 'categorys'=>$tourCategorys, 'data'=>$tourCategory]);
    }
    public function updateTourCategory(Request $request){ 
        $image = "";
        if($request->file('imageUpdate')) {
            $file = $request->file('imageUpdate');
            $image = time().'.'.$request->file('imageUpdate')->extension();
            $location = 'package';
            $file->move($location,$image);
        }
        tourCategory::where("id", $request->idUpdate)->update([
            'title' => $request->titleUpdate,
            'category' => $request->categoryUpdate,
            'description' => $request->descriptionUpdate,
            'image' => $image,
            'sequence' => $request->sequenceUpdate,
        ]);
        return back();
    }
    public function updateCategoryStatus(Request $request){
        if($request->type=='status'){
            tourCategory::where('id', $request->id)->update([
                'status' => $request->value
            ]);
            return response()->json([
                'status' => true,
                'msg' =>"Status update Success full"
            ]);
        } else {
            return response()->json([
                'status' => false,
                'msg' =>"Update failed"
            ]);
        }
    }
    public function packageView(Request $request){
        if(Auth::user()->role_id == 1){
        $key = $request->categoryId;
        $package= package::where('categoryId',$key)->orderBy('sequence', 'ASC')->get();
        return view('admin/package')->with('data',$package);
        } else {
            return redirect('admin/dashboard');
        }
    }
    public function packageSaves(Request $request){
        $image = "";
        if($request->file('image')) {
            $file = $request->file('image');
            $image = time().'.'.$request->file('image')->extension();
            $location = 'package';
            $file->move($location,$image);
        }
        if($request->file('backgroundImage')) {
            $file = $request->file('backgroundImage');
            $backgroundImage = time().'bg.'.$request->file('backgroundImage')->extension();
            $location = 'package';
            $file->move($location,$backgroundImage);
        }
        $package= new package;
        $package->categoryId = $request->categoryId;
        $package->title = $request->title;
        $package->subTitle = $request->subTitle;
        $package->shortDescription = $request->shortDescription;
        $package->longDescription = $request->longDescription;
        $package->duration = $request->duration;
        $package->bestTimeToVisit = $request->bestTimeToVisit;
        $package->whatYouWillGet = $request->whatYouWillGet;
        $package->importantInformation = $request->importantInformation;
        $package->attraction = $request->attraction;
        $package->price = $request->price;
        $package->numberOfPerson = $request->numberOfPerson;
        $package->image = $image;
        $package->backgroundImage = $backgroundImage;
        $package->sequence = $request->sequence;
        $package->slug = $request->slug;
        $package->metaTitle = $request->metaTitle;
        $package->metaDiscription = $request->metaDescription;
        $package->save();
        return back();
    }
    public function updatePackageStatus(Request $request){
        if($request->type=='status'){
            package::where('id', $request->id)->update([
                'status' => $request->value
            ]);
            return response()->json([
                'status' => true,
                'msg' =>"Status update Success full"
            ]);
        } else {
            return response()->json([
                'status' => false,
                'msg' =>"Update failed"
            ]);
        }
    }
    public function fatchPackage(Request $request){   
        $key = $request->id;
        $package= package::all()->where('id','!=',$key);
        $package= package::find($key);
        return response()->json([ 'categorys'=>$package, 'data'=>$package]);
    }
    public function updatePackage(Request $request){
        if($request->file('imageUpdate')!='' && $request->file('imageUpdate')!= null) {
            $file = $request->file('imageUpdate');
            $image = time().'.'.$request->file('imageUpdate')->extension();
            $location = 'package';
            $file->move($location,$image);
        }  else {
            $image = $request->imageUpdateOld;
        }       
        if($request->file('backgroundImageUpdate')!='' && $request->file('backgroundImageUpdate')!= null) {
            $file = $request->file('backgroundImageUpdate');
            $backgroundImage = time().'bg.'.$request->file('backgroundImageUpdate')->extension();
            $location = 'package';
            $file->move($location,$backgroundImage);
        } else {
            $backgroundImage = $request->backgroundImageUpdateOld;
        }
        package::where("id", $request->idUpdate)->update([
            'title' => $request->titleUpdate,
            'subTitle' => $request->subTitleUpdate,
            'shortDescription' => $request->shortDescriptionUpdate,
            'longDescription' => $request->longDescriptionUpdate,
            'duration' => $request->durationUpdate,
            'bestTimeToVisit' => $request->bestTimeToVisitUpdate,
            'whatYouWillGet' => $request->whatYouWillGetUpdate,
            'importantInformation' => $request->importantInformationUpdate,
            'attraction' => $request->attractionUpdate,
            'price' => $request->priceUpdate,
            'numberOfPerson' => $request->numberOfPersonUpdate,
            'image' => $image,
            'backgroundImage' => $backgroundImage,
            'sequence' => $request->sequenceUpdate,
            'slug' => $request->slugUpdate,
            'metaTitle' => $request->metaTitleUpdate,
            'metaDiscription' => $request->metaDiscriptionUpdate,
        ]);
        return back();
    }
    public function packageSectionView(Request $request){
        if(Auth::user()->role_id == 1){
        $key = $request->packageId;
        $section= section::where('packageId',$key)->orderBy('sequence', 'ASC')->get();
        return view('admin/package-section')->with('data',$section);
        } else {
            return redirect('admin/dashboard');
        }
    }
    public function packageSectionSave(Request $request){
        $image = "";
        $backgroundImage = "";
        if($request->file('image')) {
            $file = $request->file('image');
            $image = time().'.'.$request->file('image')->extension();
            $location = 'package';
            $file->move($location,$image);
        }
        if($request->file('backgroundImage')) {
            $file = $request->file('backgroundImage');
            $backgroundImage = time().'bg.'.$request->file('backgroundImage')->extension();
            $location = 'package';
            $file->move($location,$backgroundImage);
        }
        $section= new section;
        $section->packageId = $request->packageId;
        $section->title = $request->title;
        $section->subTitle = $request->subTitle;
        $section->shortDescription = $request->shortDescription;
        $section->longDescription = $request->longDescription;
        $section->image = $image;
        $section->backgroundImage = $backgroundImage;
        $section->sequence = $request->sequence;
        $section->sectionName = $request->sectionName;
        $section->save();
        return back();
    }
    public function updateSectionStatus(Request $request){
        if($request->type=='status'){
            section::where('id', $request->id)->update([
                'status' => $request->value
            ]);
            return response()->json([
                'status' => true,
                'msg' =>"Status update Success full"
            ]);
        } else {
            return response()->json([
                'status' => false,
                'msg' =>"Update failed"
            ]);
        }
    }
    public function fatchPackageSection(Request $request){   
        $key = $request->id;
        $section= section::all()->where('id','!=',$key);
        $section= section::find($key);
        return response()->json([ 'categorys'=>$section, 'data'=>$section]);
    }
    public function updatePackageSection(Request $request){  
        $image = "";
        $backgroundImage = "";
        if($request->file('imageUpdate')) {
            $file = $request->file('imageUpdate');
            $image = time().'.'.$request->file('imageUpdate')->extension();
            $location = 'package';
            $file->move($location,$image);
        } else {
            $image = $request->imageUpdateOld;
        } 
        if($request->file('backgroundImageUpdate')) {
            $file = $request->file('backgroundImageUpdate');
            $backgroundImage = time().'bg.'.$request->file('backgroundImageUpdate')->extension();
            $location = 'package';
            $file->move($location,$backgroundImage);
        } else {
            $backgroundImage = $request->backgroundImageUpdateOld;
        } 
        section::where("id", $request->idUpdate)->update([
            'title' => $request->titleUpdate,
            'subTitle' => $request->subTitleUpdate,
            'shortDescription' => $request->shortDescriptionUpdate,
            'longDescription' => $request->longDescriptionUpdate,
            'image' => $image,
            'backgroundImage' => $backgroundImage,
            'sequence' => $request->sequenceUpdate,
        ]);
        return back();
    }
    public function packageSubSectionView(Request $request){
        if(Auth::user()->role_id == 1){
        $key = $request->sectionId;
        $subSection= subSection::where('sectionId',$key)->orderBy('sequence', 'ASC')->get();
        return view('admin/package-sub-section')->with('data',$subSection);
        } else {
            return redirect('admin/dashboard');
        }
    }
    public function packageSubSectionSave(Request $request){
        $image = "";
        $backgroundImage = "";
        if($request->file('image')) {
            $file = $request->file('image');
            $image = time().'.'.$request->file('image')->extension();
            $location = 'package';
            $file->move($location,$image);
        }
        if($request->file('backgroundImage')) {
            $file = $request->file('backgroundImage');
            $backgroundImage = time().'bg.'.$request->file('backgroundImage')->extension();
            $location = 'package';
            $file->move($location,$backgroundImage);
        }
        $subSection= new subSection;
        $subSection->sectionId = $request->sectionId;
        $subSection->title = $request->title;
        $subSection->subTitle = $request->subTitle;
        $subSection->shortDescription = $request->shortDescription;
        $subSection->longDescription = $request->longDescription;
        $subSection->image = $image;
        $subSection->backgroundImage = $backgroundImage;
        $subSection->sequence = $request->sequence;
        $subSection->save();
        return back();
    }
    public function updateSubSectionStatus(Request $request){
        if($request->type=='status'){
            subSection::where('id', $request->id)->update([
                'status' => $request->value
            ]);
            return response()->json([
                'status' => true,
                'msg' =>"Status update Success full"
            ]);
        } else {
            return response()->json([
                'status' => false,
                'msg' =>"Update failed"
            ]);
        }
    }
    public function fatchPackageSubSection(Request $request){   
        $key = $request->id;
        $subSection= subSection::all()->where('id','!=',$key);
        $subSection= subSection::find($key);
        return response()->json([ 'categorys'=>$subSection, 'data'=>$subSection]);
    }
    public function updateSubSection(Request $request){  
        $image = "";
        $backgroundImage = "";
        if($request->file('imageUpdate')) {
            $file = $request->file('imageUpdate');
            $image = time().'.'.$request->file('imageUpdate')->extension();
            $location = 'package';
            $file->move($location,$image);
        } else {
            $image = $request->imageUpdateOld;
        } 
        if($request->file('backgroundImageUpdate')) {
            $file = $request->file('backgroundImageUpdate');
            $backgroundImage = time().'bg.'.$request->file('backgroundImageUpdate')->extension();
            $location = 'package';
            $file->move($location,$backgroundImage);
        } else {
            $backgroundImage = $request->backgroundImageUpdateOld;
        } 
        subSection::where("id", $request->idUpdate)->update([
            'title' => $request->titleUpdate,
            'subTitle' => $request->subTitleUpdate,
            'shortDescription' => $request->shortDescriptionUpdate,
            'longDescription' => $request->longDescriptionUpdate,
            'image' => $image,
            'backgroundImage' => $backgroundImage,
            'sequence' => $request->sequenceUpdate,
        ]);
        return back();
    }
     public function packageSubSubSectionView(Request $request){
        if(Auth::user()->role_id == 1){
        $key = $request->subSectionId;
        $subSubSection= subSubSection::where('subSectionId',$key)->orderBy('sequence', 'ASC')->get();;
        return view('admin/package-sub-sub-section')->with('data',$subSubSection);
        } else {
            return redirect('admin/dashboard');
        }
    }
    public function packageSubSubSectionSave(Request $request){
        $image = "";
        $backgroundImage = "";
        if($request->file('image')) {
            $file = $request->file('image');
            $image = time().'.'.$request->file('image')->extension();
            $location = 'package';
            $file->move($location,$image);
        }
        if($request->file('backgroundImage')) {
            $file = $request->file('backgroundImage');
            $backgroundImage = time().'bg.'.$request->file('backgroundImage')->extension();
            $location = 'package';
            $file->move($location,$backgroundImage);
        }
        $subSubSection= new subSubSection;
        $subSubSection->subSectionId = $request->subSectionId;
        $subSubSection->title = $request->title;
        $subSubSection->subTitle = $request->subTitle;
        $subSubSection->shortDescription = $request->shortDescription;
        $subSubSection->longDescription = $request->longDescription;
        $subSubSection->image = $image;
        $subSubSection->backgroundImage = $backgroundImage;
        $subSubSection->sequence = $request->sequence;
        $subSubSection->save();
        return back();
    }
    public function updateSubSubSectionStatus(Request $request){
        if($request->type=='status'){
            subSubSection::where('id', $request->id)->update([
                'status' => $request->value
            ]);
            return response()->json([
                'status' => true,
                'msg' =>"Status update Success full"
            ]);
        } else {
            return response()->json([
                'status' => false,
                'msg' =>"Update failed"
            ]);
        }
    }
    public function fatchPackageSubSubSection(Request $request){   
        $key = $request->id;
        $subSubSection= subSubSection::all()->where('id','!=',$key);
        $subSubSection= subSubSection::find($key);
        return response()->json([ 'categorys'=>$subSubSection, 'data'=>$subSubSection]);
    }
    public function updateSubSubSection(Request $request){  
        $image = "";
        $backgroundImage = "";
        if($request->file('imageUpdate')) {
            $file = $request->file('imageUpdate');
            $image = time().'.'.$request->file('imageUpdate')->extension();
            $location = 'package';
            $file->move($location,$image);
        } else {
            $image = $request->imageUpdateOld;
        } 
        if($request->file('backgroundImageUpdate')) {
            $file = $request->file('backgroundImageUpdate');
            $backgroundImage = time().'bg.'.$request->file('backgroundImageUpdate')->extension();
            $location = 'package';
            $file->move($location,$backgroundImage);
        } else {
            $backgroundImage = $request->backgroundImageUpdateOld;
        } 
        subSubSection::where("id", $request->idUpdate)->update([
            'title' => $request->titleUpdate,
            'subTitle' => $request->subTitleUpdate,
            'shortDescription' => $request->shortDescriptionUpdate,
            'longDescription' => $request->longDescriptionUpdate,
            'image' => $image,
            'backgroundImage' => $backgroundImage,
            'sequence' => $request->sequenceUpdate,
        ]);
        return back();
    }
    public function createPackage(Request $request){
        $package= new package;
        $package->categoryId = $request->categoryId;
        $package->title = $request->title;
        $package->shortDescription = $request->shortDescription;
        $package->longDescription = $request->longDescription;
        $package->duration = $request->duration;
        $package->bestTimeToVisit = $request->bestTimeToVisit;
        $package->whatYouWillGet = $request->whatYouWillGet;
        $package->importantInformation = $request->importantInformation;
        $package->attraction = $request->attraction;
        $package->price = $request->price;
        $package->image = $request->image;
        $package->sequence = $request->sequence;
        $package->metaTitle = $request->metaTitle;
        $package->metaDiscription = $request->metaDiscription;
        $package->save();
        return back();
    }
}