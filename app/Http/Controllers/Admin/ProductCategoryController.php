<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductCategoryController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name'=> 'required|min:3|max:255|string',
            // 'slug'=> 'required|min:3|max:255|string',
            'status'=> 'required|boolean'
        ],
        [
            'name.required'=> 'Ten Category la du lieu bat buoc!',
            'name.min'=> ' Category can toi thieu 3 ky tu!',
            // 'slug.required'=> 'Slug la du lieu bat buoc!',
            // 'slug.min'=> ' Category can toi thieu 3 ky tu!',
            'status.required'=> 'stasus la du lieu bat buoc!',
            'status.boolean'=> 'stasus la du lieu bat buoc!'
        ]);

        //SQL RAW
        // $check = DB::insert('insert into product_category (name,slug,status) values (?,?,?)',
        // [$request->name,$request->slug,$request->status]);

        //Query Builder
        $check = DB::table('product_category')->insert([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
            'status'=>$request->status
        ]);

        //lay id tu database vua tao
        // $lastId = DB::table('product_category')->insertGetId([
        //     'name'=>$request->name,
        //     'slug'=>$request->slug,
        //     'status'=>$request->status
        // ]);

        //do choi moi slug

        $msg = $check ? 'Create Product Category Success' : 'Create Product Category Failed !' ;

        return redirect()->route('admin.product_category.list')->with('message',$msg);
    }

    public function getSlug(Request $request){
        $slug = Str::slug($request->name);
        return response()->json(['slug' => $slug]);
    }
}
