<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\ProductsFeature;
use App\Models\Category;
use DB;
use Mail;

class ProductController extends Controller
{
    public function index()
    {
    	$slider = DB::table('products')->select('products.*','products.id as pid','product_features.*','product_features.id as pfid')->join('product_features','product_features.product_id','=','products.id')->limit(20)->orderBy('products.id','desc')->get();
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
    		 'products' => $products,
             'title' => "Mobile phone prices - Pakistan's daily updated mobile phone prices Pakistan Karachi Mobile"
    		]);
    }

    public function allProducts($id)
    {
        $productData = Products::where('cat_id','=',$id)->orderBy('products.id','desc')->paginate(24)->toArray();
        // dd($productData);
        $cat = Category::find($id);
    	$categories = Category::all();
    	$products = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->limit(50)->get();
    	return view('front/allproducts',['categories' => $categories,
							    		 'products' => $products,
                                         'productData' => $productData,
                                         'cat_id' => $id,
                                         'cat_name' => $cat->title,
                                          'title' => $cat->title.' Mobiles'
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
						    		'relateds' => $related,
                                    'title' => $productData->name
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
                                         'productData' => $productData,
                                         'title' => 'Latest Mobile Phones'
                                        ]);
    }

    public function viewed()
    {
        $productData = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->orderBy('products.id','desc')->limit(24)->get();

        $categories = Category::all();
        $products = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->limit(20)->orderBy('products.id','desc')->get();
        return view('front/viewed',['categories' => $categories,
                                         'products' => $products,
                                         'productData' => $productData,
                                         'title' => 'Most Viewed Mobile Phones'
                                        ]);
    }

    public function about()
    {
        $categories = Category::all();
        $products = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->limit(20)->orderBy('products.id','desc')->get();
        return view('front/about',['categories' => $categories,
                                         'products' => $products,
                                         'title' => 'About Us'
                                        ]);
    }

    public function disclaimer()
    {
        $categories = Category::all();
        $products = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->limit(20)->orderBy('products.id','desc')->get();
        return view('front/disclaimer',['categories' => $categories,
                                         'products' => $products,
                                         'title' => 'Disclaimer'
                                        ]);
    }

    public function advertising()
    {
        $categories = Category::all();
        $products = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->limit(20)->orderBy('products.id','desc')->get();
        return view('front/advertising',['categories' => $categories,
                                         'products' => $products,
                                         'title' => 'Advertise With Us'
                                        ]);
    }

    public function contact()
    {
        $categories = Category::all();
        $products = DB::table('products')->select('products.*','products.id as pid')->join('categories','categories.id','=','products.cat_id','left')->limit(20)->orderBy('products.id','desc')->get();
        return view('front/contact',['categories' => $categories,
                                         'products' => $products,
                                         'title' => 'Contact Us'
                                        ]);
    }

    public function contactus(Request $request)
    {
        // dd($request->all());
        $name = $request->name;
        $email = $request->email;
        $from = $request->email;
        $subject = $request->subject;
        $messageBody = $request->message;
        // dd($message);
        $anwser = $request->anwser;
        if($anwser == 8){
            Mail::send('emails.email',['messageBody' => $messageBody],
                        function ($message) use ($email) {
                            $message->from('latestmobileprice@gmail.com', 'Karachi Mobile');
                            $message->replyTo($email);
                            $message->sender($email);
                            $message->subject("Karachi Mobile User Feed Back");
                            $message->to('latestmobileprice@gmail.com');
                        }
                    );
                return redirect('contact');
            }else{
                return redirect('contact');
            }
    }
}
