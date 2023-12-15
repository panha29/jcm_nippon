<?php

namespace App\Http\Controllers;

use App\Models\MatexModel;
use App\Models\MatexPremiumModel;
use App\Models\SuperEasyWashModel;
use App\Models\WeatherBondModel;
use App\Models\WeatherGardModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ColorPricingController extends Controller
{
    public function matex_save(Request $request){
        $data = new MatexModel();
        if($request->file('color_image')){
            $file= $request->file('color_image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('img/color_pricing'), $filename);
            $data['color_image']= $filename;
        }
        $data -> color_name = $request -> color_name;
        $data -> color_tag = $request -> color_tag;
        $data -> color_1l	 = $request -> color_1l	;
        $data -> color_5l	 = $request -> color_5l	;
        $data -> color_18l	 = $request -> color_18l	;
        $data -> save();
        return redirect('/Admin/ColorPricing/Matex');
    }

    public function matexpremium_save(Request $request){
        $data = new MatexPremiumModel();
        if($request->file('color_image')){
            $file= $request->file('color_image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('img/color_pricing'), $filename);
            $data['color_image']= $filename;
        }
        $data -> color_name = $request -> color_name;
        $data -> color_tag = $request -> color_tag;
        $data -> color_1l	 = $request -> color_1l	;
        $data -> color_5l	 = $request -> color_5l	;
        $data -> color_18l	 = $request -> color_18l	;
        $data -> save();
        return redirect('/Admin/ColorPricing/Premium-Matex');
    }

    public function weathergard_save(Request $request){
        $data = new WeatherGardModel();
        if($request->file('color_image')){
            $file= $request->file('color_image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('img/color_pricing'), $filename);
            $data['color_image']= $filename;
        }
        $data -> color_name = $request -> color_name;
        $data -> color_tag = $request -> color_tag;
        $data -> color_1l	 = $request -> color_1l	;
        $data -> color_5l	 = $request -> color_5l	;
        $data -> color_15l	 = $request -> color_15l	;
        $data -> save();
        return redirect('/Admin/ColorPricing/WeatherGard');
    }

    public function weatherbond_save(Request $request){
        $data = new WeatherBondModel();
        if($request->file('color_image')){
            $file= $request->file('color_image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('img/color_pricing'), $filename);
            $data['color_image']= $filename;
        }
        $data -> color_name = $request -> color_name;
        $data -> color_tag = $request -> color_tag;
        $data -> color_1l	 = $request -> color_1l	;
        $data -> color_5l	 = $request -> color_5l	;
        $data -> color_18l	 = $request -> color_18l	;
        $data -> save();
        return redirect('/Admin/ColorPricing/WeatherBond');
    }

    public function supereasywash_save(Request $request){
        $data = new SuperEasyWashModel();
        if($request->file('color_image')){
            $file= $request->file('color_image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('img/color_pricing'), $filename);
            $data['color_image']= $filename;
        }
        $data -> color_name = $request -> color_name;
        $data -> color_tag = $request -> color_tag;
        $data -> color_1l	 = $request -> color_1l	;
        $data -> color_5l	 = $request -> color_5l	;
        $data -> color_18l	 = $request -> color_18l	;
        $data -> save();
        return redirect('/Admin/ColorPricing/SuperEasyWash');
    }

    function colorprice_index(){
        $ma = DB::table('colorprice_matex')->get();
        $wb = DB::table('colorprice_matexpremium')->get();
        $wg = DB::table('colorprice_weatherbond')->get();
        $nsew = DB::table('colorprice_weathergard')->get();
        $mpm = DB::table('colorprice_supereasywash')->get();
        return view('admin_dashboard.color_pricing.index', compact('ma','wb','wg','mpm','nsew'));
    }


}
