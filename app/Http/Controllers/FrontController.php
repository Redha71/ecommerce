<?php

namespace App\Http\Controllers;

use App\Model\Admin\Category;
use App\Model\Admin\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB ;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    public function index() {

     //   session()->forget('wishlist');
     //   Session::put('wishlist', $wishlist);
       $featured= DB::table('products')->where('status',1)->orderBy('id','DESC')->limit(12)->get();
       $trend= DB::table('products')->where('status',1)->where('trend',1)->orderBy('id','DESC')->limit(12)->get();
       $best= DB::table('products')->where('status',1)->where('best_rated',1)->orderBy('id','DESC')->limit(12)->get();
       $hot = DB::table('products')
            ->join('brands','products.brand_id','brands.id')
            ->select('products.*','brands.brand_name')
            ->where('products.status',1)->where('hot_deal',1)->orderBy('id','desc')->limit(3)
            ->get();
        $category= DB::table('categories')->get();
        $mid = DB::table('products')
            ->join('categories','products.category_id','categories.id')
            ->join('brands','products.brand_id','brands.id')
            ->select('products.*','brands.brand_name','categories.category_name')
            ->where('products.mid_slider',1)->orderBy('id','DESC')->limit(3)
            ->get();
        $buyget = DB::table('products')
            ->join('brands','products.brand_id','brands.id')
            ->select('products.*','brands.brand_name')
            ->where('status',1)->where('buyone_getone',1)->orderBy('id','DESC')->limit(6)->get();
        $cats = DB::table('categories')->skip(3)->first();
        $catid = $cats->id;

        $product = DB::table('products')->where('category_id',$catid)->where('status',1)->limit(10)->orderBy('id','DESC')->get();
        $cats1 = DB::table('categories')->skip(1)->first();
        $catid1 = $cats1->id;
        $brand=DB::table('brands')->get();
        $product1 = DB::table('products')->where('category_id',$catid1)->where('status',1)->limit(10)->orderBy('id','DESC')->get();
        return view('pages.index',compact('featured','trend','best','hot','category','mid','buyget','product','cats','product1','cats1','brand'));
    }
    public function StoreNewslater(Request $request){
    	$validateData = $request->validate([
     'email' => 'required|unique:newslaters|max:55',
    	]);

   $data = array();
   $data['email'] = $request->email;
   DB::table('newslaters')->insert($data);
   $notification=array(
            'messege'=>'Thanks for Subscribing',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);

    }
    public function testcode()
    {
        return view('testcode');
    }

}
