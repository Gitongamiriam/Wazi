<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

#craete page
public function imgpic(Request $request){
    $name = $request['imageName'];
    $description = $request['description'];
    $image = $request['image'];
    $urrl = '';
    if ($image) {
        $image = $request->image->store('public/imageCont');
        print($request->image->store('public/imageCont'));
        $urrl = Storage::url($image);
     
    

    // if ($request->hasFile('imageCont')) {
    //     $request->file('imageCont');
    //     // return Storage::putFile('public',$request->file('imageCont'));
    //     $request->image->storeAs('public','imageCont');
    //     $url = Storage::url('imageCont');
    //     return "<img src=''".$url."/>";

    }else{
        return 'No file selected';
    }


       
      
        return view('pages.image');

     
        
}



public function deleteImageContent($id){
    // get the image name
    $imageContent = Table_Name::select('image')->where('id',$id)->first();

    // get path
    $image_path = 'imageCont/';

    // deleting from the folder
    if(file_exists($image_path.$imageContent->image)){
        unlink($image_path.$imageContent->image);
    };

    // deleting from the db
    tableName::where('id',$id)->update(['image'=>'']);

}
#craete page
public function mytext(Request $request){
 
    $description = $request['description'];
    $text = $request['text'];
    $urrl = '';
    // if ($text) {
    //     $text = $request->text->store('public/textCont');
    //     print($request->text->store('public/textCont'));
   
    //     $urrl = Storage::url($text);
      
    // }else{
    //     print("please select a text content");
    //     }    
 
 
 
    return view('pages.text');
}

public function deleteTextContent($id){
    // get the image name
    $textContent = Table_Name::select('text')->where('id',$id)->first();

    // get path
    $text_path = 'textCont/';

    // deleting from the folder
    if(file_exists($text_path.$textContent->text)){
        unlink($text_path.$textContent->text);
    };

    // deleting from the db
    tableName::where('id',$id)->update(['text'=>'']);

}

# home page
public function index(){
    $title = "Here Am home";
    return view('pages.home')->with('title',$title);
}

}



