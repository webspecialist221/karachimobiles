<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use App\Models\HomeAd;
use App\Models\CompanyAd;
use App\Models\SingleAd;

class SettingController extends Controller
{
    
    public function genral_setting()
    {
        $generalSetting = GeneralSetting::all();
        return view('admin/general_setting',['generalSettings' => $generalSetting]);
    }

    public function store_genral_setting(Request $request)
    {
        $file = $request->file;
        if ($file->isValid()) {
            $destinationPath = 'settings'; // upload path
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $fileName = $destinationPath.'/'.rand(11111,99999).'.'.$extension;
            $moved = $file->move($destinationPath, $fileName);
            
            $setting = GeneralSetting::create([
                'logo_img' => $fileName,
                'header_ad' => $request->header_ad
                ]);
        }
        return back();
    }

    public function home_setting()
    {
        $homeAd = HomeAd::all();
        return view('admin/home_setting',['homeAds' => $homeAd]);
    }

    public function store_home_setting(Request $request)
    {
        HomeAd::create([
            'middle_ad' => $request->middle_ad,
            'footer_ad' => $request->footer_ad,
            ]);
        return back();
    }

    public function company_setting()
    {
        $companyAd = CompanyAd::all();
        return view('admin/company_setting',['companyAds' => $companyAd]);
    }

    public function store_company_setting(Request $request)
    {
        CompanyAd::create([
            'right_top_ad' => $request->right_top_ad,
            'right_bottom_ad' => $request->right_bottom_ad,
            ]);
        return back();
    }

    public function product_setting()
    {
        $singleAd = SingleAd::all();
        return view('admin/product_setting',['singleAds' => $singleAd]);
    }

    public function store_product_setting(Request $request)
    {
        SingleAd::create([
            'top_ad' => $request->top_ad,
            'middle_ad' => $request->middle_ad,
            'footer_ad' => $request->footer_ad,
            ]);
        return back();
    }
}
