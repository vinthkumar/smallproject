<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\projects;
use App\Models\resume;

class firstcontroll extends Controller
{
    public function first(){
        return view('welcome');
    }

    public function second(){
        return view('contact');
    }

    public function index(){
        return view('index');
    }


//     public function store(Request $request){
//     projects::create($request->all());
    
// }

public function save(Request $request){

    $projects = new projects;
    $projects -> name = $request -> name;
    $projects -> email = $request -> email;
    $projects -> message = $request -> message;
    // $projects -> image = $request -> image;

    $image = $request-> file('image');
    $new_image_name = date('y-md-d').time().".".$image->extension();
    
    $destination_path = public_path('/images');
    $image->move($destination_path,$new_image_name);

    $projects->image = "/images/".$new_image_name;

    $projects->save();

    return view('thanks');

    // return $projects::get(); - show the all form data

    // return $request; - show the form data 

}

public function store(Request $request){

    $resume = new resume;
    $resume -> name = $request -> name;
    $resume -> email = $request -> email;
    $resume -> message = $request -> message;


    $resume->save();

    return view('thanks');

}


}




