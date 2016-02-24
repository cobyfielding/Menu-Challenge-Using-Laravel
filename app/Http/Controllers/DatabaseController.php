<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class DatabaseController extends Controller
{

//    Queries the Database getting all items where the type is equal to CAT
//    then returns the items into an array to be sorted on the categories page

        public function Categories(){
    $cats=DB::table('catsSubcats')->where('type', 'cat')->get();
        return view('pages.categories', compact('cats'));
}

//    This function takes the ID that was passed through the URL
//     and uses it to query the database selecting the items
//     where the CAT_ID is equal to the ID. The function then
//     sends the items as an array to the items page

    public function Items($id){
        if($id == 4 or $id == 12){
            $items=DB::table('catsSubcats')->where('catID', $id)->get();
            return view('pages.items', compact('items'));
        }
        else {
            $items = DB::table('items')->where('catID', $id)->get();
            return view('pages.items', compact('items'));
        }

    }


//  Added a function to delete items selected
//  will delete either just an item, a subcategory
//  with corresponding items, or a category and all
//  subcats and items.
//  the $id passed through the route is run through and if/else
//  loop in order to make sure everything that should be deleted
//  is deleted.
    public function Delete($id){
            DB::table('catsSubcats')->where('id', $id)->delete();
            return view('pages.delete');



    }
    public function DeleteItems($id){
            DB::table('items')->where('id', $id)->delete();
            return view('pages.delete');
    }
}











