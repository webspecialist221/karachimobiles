<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products;
use App\Models\ProductsFeature;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = DB::table('products')->select('products.*','products.id as pid','product_features.*','product_features.id as pfid')->join('product_features','product_features.product_id','=','products.id')->get();
        return view('admin/list_products',['products' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin/products',['categories' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file;
        if (!empty($file)) {
            $destinationPath = 'products'; // upload path
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $fileName = $destinationPath.'/'.rand(11111,99999).'.'.$extension;
            $moved = $file->move($destinationPath, $fileName);
        }
        $product = Products::create([
            'cat_id' => $request->cat_id,
            'name' => $request->name,
            'description' => $request->description,
            'img' => $fileName,
            'price' => $request->price,
            'three_g' => $request->three_g,
            'four_g' => $request->four_g,
            'wifi' => $request->wifi,
            'camera' => $request->camera,
            'bluetooth' => $request->bluetooth,
            'fm_radio' => $request->fm_radio,
            'meta_keyword' => $request->meta_keyword,
            'meta_description' => $request->meta_description,

            ]);
        $product_id = $product->id;
        $product_feature = ProductsFeature::create([
            'product_id' => $product_id,
            'dimensions_length' => $request->dimensions_length,
            'dimensions_width' => $request->dimensions_width,
            'dimensions_depth' => $request->dimensions_depth,
            'weight' => $request->weight,
            'color' => $request->color,
            'display_size' => $request->size,
            'ringtones' => $request->ringtone,
            'ram' => $request->ram,
            'ram_unit' => $request->ram_unit,
            'connectivity' => $request->connectivity,
            'primary_camera' => $request->primary_camera,
            'secondary_camera' => $request->secondary_camera,
            'os_name' => $request->os,
            'os_version' => $request->os_type,
            'processor' => $request->processor,
            'battery' => $request->battery,
            'frequency' => $request->frequency,
            'browser' => $request->browser,
            'colors' => $request->colors,
            'entertainment' => $request->entertainment,
            'other_features' => $request->other,
            'messaging' => $request->messaging,
            'technology' => $request->technology,
            'sim' => $request->sim,
            'resolution' => $request->resolution,
            'status' => $request->status
            ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = DB::table('products')->select('categories.*','categories.id as cid','products.*','products.id as pid','product_features.*','product_features.id as pfid')->join('product_features','product_features.product_id','=','products.id')->join('categories','categories.id','=','products.cat_id')->where('products.id','=',$id)->get();
        $category = Category::all();
        return view('admin/edit_products',['product' => $product,'categories' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $product = Products::find($id);
        $product->cat_id = $request->cat_id;
        $product->name = $request->name;
        $product->description = $request->description;
        if(!empty($request->file)){
            $file = $request->file;
            $destinationPath = 'products'; // upload path
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $fileName = $destinationPath.'/'.rand(11111,99999).'.'.$extension;
            $moved = $file->move($destinationPath, $fileName);
            $product->img = $fileName;
        }
        $product->price = $request->price;
        $product->three_g = $request->three_g;
        $product->four_g = $request->four_g;
        $product->wifi = $request->wifi;
        $product->camera = $request->camera;
        $product->bluetooth = $request->bluetooth;
        $product->fm_radio = $request->fm_radio;
        $product->meta_keyword = $request->meta_keyword;
        $product->meta_description = $request->meta_description;
        $product->save();

        $product_feature = ProductsFeature::find($request->product_feature_id);
        $product_feature->product_id = $id;
        $product_feature->dimensions_length = $request->dimensions_length;
        $product_feature->dimensions_width = $request->dimensions_width;
        $product_feature->dimensions_depth = $request->dimensions_depth;
        $product_feature->weight = $request->weight;
        $product_feature->color = $request->color;
        $product_feature->display_size = $request->size;
        $product_feature->ringtones = $request->ringtone;
        $product_feature->ram = $request->ram;
        $product_feature->ram_unit = $request->ram_unit;
        $product_feature->connectivity = $request->connectivity;
        $product_feature->primary_camera = $request->primary_camera;
        $product_feature->secondary_camera = $request->secondary_camera;
        $product_feature->os_name = $request->os;
        $product_feature->os_version = $request->os_type;
        $product_feature->processor = $request->processor;
        $product_feature->battery = $request->battery;
        $product_feature->frequency = $request->frequency;
        $product_feature->browser = $request->browser;
        $product_feature->colors = $request->colors;
        $product_feature->entertainment = $request->entertainment;
        $product_feature->other_features = $request->other;
        $product_feature->messaging = $request->messaging;
        $product_feature->technology = $request->technology;
        $product_feature->resolution = $request->resolution;
        $product_feature->sim = $request->sim;
        $product_feature->status = $request->status;
        $product_feature->save();

        return redirect('admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Products::destroy($id);
    }
}
