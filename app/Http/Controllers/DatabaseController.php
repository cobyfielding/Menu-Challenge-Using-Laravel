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
    $cats=DB::table('menu')->where('type', 'cat')->get();
        return view('pages.categories', compact('cats'));
}

//    This function takes the ID that was passed through the URL
//     and uses it to query the database selecting the items
//     where the CAT_ID is equal to the ID. The function then
//     sends the items as an array to the items page

    public function Items($id){
    $items=DB::table('menu')->where('catID', $id)->get();
        return view('pages.items', compact('items'));
    }
}
