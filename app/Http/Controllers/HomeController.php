<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function category() {
        $sub_categories = DB::table('sub_categories')->first();
        $main_category = DB::table('categories')->get();
        return view('home', ['sub_categories' => $sub_categories, 'main_category' => $main_category]);
    }
    

    public function get_causes_against_category($id) {
        $data = DB::table('sub_categories as sub_cat')->selectRaw('(Select image from categories where id = sub_cat.category_id) as cat_image,  (Select title from categories where id = sub_cat.category_id) as cat_title')->whereRaw('category_id IN ('.$id.')')->get();
       echo json_encode($data);
   }
}
