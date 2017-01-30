<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\ProductsFeature;
use App\Models\Category;
use DB;

class ProductController extends Controller
{
    public function index()
    {
    	$slider = DB::table('products')->select('products.*','products.id as pid','product_features.*','product_features.id as pfid')->join('product_features','product_features.product_id','=','products.id')->limit(50)->get();
    	$samsung = DB::table('products')->select('products.*','products.id as pid','product_features.*','product_features.id as pfid')->join('product_features','product_features.product_id','=','products.id')->join('categories','categories.id','=','products.cat_id','left')->where('categories.title','=','Samsung')->limit(7)->orderBy('products.id','desc')->get();
    	$iphones = DB::table('products')->select('products.*','products.id as pid','product_features.*','product_features.id as pfid')->join('product_features','product_features.product_id','=','products.id')->join('categories','categories.id','=','products.cat_id','left')->where('categories.title','=','Apple iphone')->limit(7)->orderBy('products.id','desc')->get();
    	$nokia = DB::table('products')->select('products.*','products.id as pid','product_features.*','product_features.id as pfid')->join('product_features','product_features.product_id','=','products.id')->join('categories','categories.id','=','products.cat_id','left')->where('categories.title','=','Nokia')->limit(7)->orderBy('products.id','desc')->get();
    	$qmobile = DB::table('products')->select('products.*','products.id as pid','product_features.*','product_features.id as pfid')->join('product_features','product_features.product_id','=','products.id')->join('categories','categories.id','=','products.cat_id','left')->where('categories.title','=','Qmobile')->limit(7)->orderBy('products.id','desc')->get();

    	$htc = DB::table('products')->select('products.*','products.id as pid','product_features.*','product_features.id as pfid')->join('product_features','product_features.product_id','=','products.id')->join('categories','categories.id','=','products.cat_id','left')->where('categories.title','=','HTC')->limit(7)->orderBy('products.id','desc')->get();

    	$categories = Category::all();
    	$products = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->limit(20)->orderBy('products.id','desc')->get();

    	return view('front/index',
    		['sliders' => $slider,
    		 'samsungs' => $samsung,
    		 'iphones' => $iphones,
    		 'nokias' => $nokia,
    		 'qmobiles' => $qmobile,
    		 'htcs' => $htc,
    		 'categories' => $categories,
    		 'products' => $products
    		]);
    }

    public function allProducts($id)
    {
        $productData = Products::where('cat_id','=',$id)->orderBy('products.id','desc')->get();
        $cat = Category::find($id);
    	$categories = Category::all();
    	$products = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->limit(50)->get();
    	return view('front/allproducts',['categories' => $categories,
							    		 'products' => $products,
                                         'productData' => $productData,
                                         'cat_id' => $id,
                                         'cat_name' => $cat->title
							    		]);
    }

    public function singles($pid,$cid)
    {
        $productData = DB::table('products')->select('categories.*','products.*','products.id as pid','product_features.*','product_features.id as pfid')->join('product_features','product_features.product_id','=','products.id')->join('categories','categories.id','=','products.cat_id','left')->where('products.id','=',$pid)->first();
        // dd($productData);
        $related = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->where('categories.id','=',$cid)->limit(6)->orderBy('products.id','desc')->get();
        // dd($productData); 
    	$categories = Category::all();
    	$products = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->limit(20)->orderBy('products.id','desc')->get();
    	return view('front/single',['categories' => $categories,
                                    'products' => $products,
                                    'data' => $productData,
						    		'relateds' => $related
						    		]);
    }

    public function search($field,$value)
    {
        $productData = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->where('products.'.$field,'=',$value)->get();
        $categories = Category::all();
        $products = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->limit(20)->orderBy('products.id','desc')->get();
        return view('front/search',['categories' => $categories,
                                         'products' => $products,
                                         'productData' => $productData
                                        ]);
    }

    public function filter($field,$value)
    {
        $productDatas = DB::table('products')->select('products.*','products.id as pid','product_features.*','product_features.id as pfid')->join('product_features','product_features.product_id','=','products.id')->join('categories','categories.id','=','products.cat_id','left');
        if($value < 13){

            $productData = $productDatas->where('product_features.'.$field,'=',$value)->get();
        }else{

            $productData = $productDatas->where('product_features.'.$field,'<=',$value)->get();
            // dd($productData);
            // dd($productData);
        }
        $categories = Category::all();
        $products = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->limit(20)->orderBy('products.id','desc')->get();
        return view('front/search',['categories' => $categories,
                                         'products' => $products,
                                         'productData' => $productData
                                        ]);
    }

    public function searchBy(Request $request)
    {
        $productData = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->where('products.name','LIKE',$request->searchBy)->get();
        $categories = Category::all();
        $products = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->limit(20)->orderBy('products.id','desc')->get();
        return view('front/search',['categories' => $categories,
                                         'products' => $products,
                                         'productData' => $productData
                                        ]);
    }

    public function latest()
    {
        $productData = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->orderBy('products.id','desc')->limit(24)->get();

        $categories = Category::all();
        $products = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->limit(20)->orderBy('products.id','desc')->get();
        return view('front/latest',['categories' => $categories,
                                         'products' => $products,
                                         'productData' => $productData
                                        ]);
    }

    public function viewed()
    {
        $productData = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->orderBy('products.id','desc')->limit(24)->get();

        $categories = Category::all();
        $products = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->limit(20)->orderBy('products.id','desc')->get();
        return view('front/viewed',['categories' => $categories,
                                         'products' => $products,
                                         'productData' => $productData
                                        ]);
    }

    public function about()
    {
        $categories = Category::all();
        $products = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->limit(20)->orderBy('products.id','desc')->get();
        return view('front/about',['categories' => $categories,
                                         'products' => $products
                                        ]);
    }

    public function disclaimer()
    {
        $categories = Category::all();
        $products = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->limit(20)->orderBy('products.id','desc')->get();
        return view('front/disclaimer',['categories' => $categories,
                                         'products' => $products
                                        ]);
    }

    public function advertising()
    {
        $categories = Category::all();
        $products = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->limit(20)->orderBy('products.id','desc')->get();
        return view('front/advertising',['categories' => $categories,
                                         'products' => $products
                                        ]);
    }

    public function contact()
    {
        $categories = Category::all();
        $products = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->limit(20)->orderBy('products.id','desc')->get();
        return view('front/contact',['categories' => $categories,
                                         'products' => $products
                                        ]);
    }
}
