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
public function contentpic(Request $request){


        

        return view('pages.content');
    }

public function storeImages(Request $request){
        // $fileName = '';
        // this->validate($request, [
        //     'image' => 'max:2000'
        // ]);

        $image = $request['image'];
        if ($image) {
            // get file name with extension
            $fileNameWithExt = $image->getClientOriginalName();

            // get file name alone
            $file = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // get file extension
            $ext = $image->getClientOriginalExtension();
            
            // file name to store
            $fileName = $file.'_'.time().'.'.$ext;
            
            $image = $request->image->storeAs('public/imageCont', $fileName);
            // $urrl = Storage::url($image);
            
        }else{
            // $fileName = "noimage.png";
            print("please select an image");
        }
        
        // create the new image
        $imgCont = new Image;
        $imgCont->title = $request['title'];
        $imgCont->description = $request['description'];
        $imgCont->imageName =  $fileName;
        $imgCont->save();

        // *****to be enabled once running******
        return redirect('images');
    }




public function deleteImageContent($id){
        // get the image name
        $imageContent = Image::select('image')->where('id',$id)->first();

        // get path
        $image_path = 'imageCont/';

        // deleting from the folder
        if(file_exists($image_path.$imageContent->image)){
            unlink($image_path.$imageContent->image);
        };

        // deleting from the db
        Image::where('id',$id)->update(['image'=>'']);

    }

    
    public function index(){
        $title = "Here Am home";
        return view('pages.home')->with('title',$title);
    }    
    

}









