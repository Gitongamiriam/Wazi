<?php

namespace App\Http\Controllers;

use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Content;

class PagesController extends Controller
{
# schedule page
public function available(){
    return view('pages.availability');
}
#craete page

public function create_content(){

    return view('pages.createc');

}

public function contentpic(Request $request){
 

    
    return view('pages.content');
}


public function storeContentpic(request $request){
    $file = $request['file'];
    if ($file) {
        // get file name with extension
        $fileNameWithExt = $file->getClientOriginalName();

        // get file name alone
        $fileNm = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        // get file extension
        $ext = $file->getClientOriginalExtension();
        
        // file name to store
        $fileName = $fileNm.'_'.time().'.'.$ext;
        
        $files = $request->file->storeAs('public/textCont', $fileName);
        // print($request->video->store('public/videoCont'));
        // $urrl = Storage::url($image);
        
        
    }else{
    //     print("please select a video");
    };

    // create the new image
    $textCont = new Text;
    $textCont->title = $request['title'];
    $textCont->content = $request['Content'];
    $textCont->fileName =  $fileName;
    $textCont->save();


    return redirect('pages.content');
}


 
    
   



    public function index(){
        $title = "Here Am home";
        return view('pages.home')->with('title',$title);
    }    
    

}









