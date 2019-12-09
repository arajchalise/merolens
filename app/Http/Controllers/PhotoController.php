<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use DB;

class PhotoController extends Controller
{
    public function remove($id)
    {
        $photo = Photo::find($id);
        if(DB::table('photos')->where('id', '=', $id)->delete()){
            unlink('images/'.$photo->photo);
            return "OK";
        } 
    }
}
