<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class DatabaseController extends Controller
{
    public function Categories(){
    $cats=DB::table('menu')->where('type', 'cat')->get();
        return view('pages.categories', compact('cats'));
}

    public function Items($id){
    $items=DB::table('menu')->where('catID', $id)->get();
        return view('pages.items', compact('items'));
    }
}
