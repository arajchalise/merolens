<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AutoCompleteController extends Controller
{

    public function index(Request $request, $query)
    {
       
          $data = DB::select( DB::raw("SELECT * FROM products WHERE name LIKE '%$query%'") );

            return $data;
        
    }

    public function fetch(Request $request)
    {
        if($request->get('q')){
            $q = $request->get('q');
            $data = DB::select( DB::raw("SELECT * FROM products WHERE name LIKE '%$q%' OR brand_name LIKE '%$q%'") );
            $op = "<table class='table'>";
            foreach ($data as $row) {
                $op .= '<tr><td><a href="/product/'.$row->id.'" style="color: #fff">'.$row->name.'</a></td></tr>';
            }
            $op .= "</table>";
            return $op;
           
        }
    }
}
