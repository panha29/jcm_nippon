<?php

namespace App\Http\Controllers;

use App\Imports\MatexImport;
use App\Imports\MatexPremiumImport;
use App\Imports\SuperEasyWashImport;
use App\Imports\WeatherBondImport;
use App\Imports\WeatherGardImport;
use App\Models\MatexModel;
use App\Models\MatexPremiumModel;
use App\Models\SuperEasyWashModel;
use App\Models\WeatherBondModel;
use App\Models\WeatherGardModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel;

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
        $data -> color_1l	 = $request -> color_1l;
        $data -> color_5l	 = $request -> color_5l;
        $data -> color_18l	 = $request -> color_18l;
        $data -> save();

        return redirect('/Admin/ColorPricing/Matex');
    }

    public function import_ma(Request $request){
        Excel::import(new MatexImport, $request->file('file')->store('files'));
        return redirect('/Admin/ColorPricing/Matex');
    }

    public function import_mpm(Request $request){
        Excel::import(new MatexPremiumImport, $request->file('file')->store('files'));
        return redirect('/Admin/ColorPricing/Premium-Matex');
    }

    public function import_nsew(Request $request){
        Excel::import(new SuperEasyWashImport, $request->file('file')->store('files'));
        return redirect('/Admin/ColorPricing/SuperEasyWash');
    }

    public function import_wb(Request $request){
        Excel::import(new WeatherBondImport, $request->file('file')->store('files'));
        return redirect('/Admin/ColorPricing/WeatherBond');
    }

    public function import_wg(Request $request){
        Excel::import(new WeatherGardImport, $request->file('file')->store('files'));
        return redirect('/Admin/ColorPricing/WeatherGard');
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
        $data -> color_1l	 = $request -> color_1l;
        $data -> color_5l	 = $request -> color_5l;
        $data -> color_18l	 = $request -> color_18l;
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
        $data -> color_1l	 = $request -> color_1l;
        $data -> color_5l	 = $request -> color_5l;
        $data -> color_15l	 = $request -> color_15l;
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
        $data -> color_1l	 = $request -> color_1l;
        $data -> color_5l	 = $request -> color_5l;
        $data -> color_18l	 = $request -> color_18l;
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
        $data -> color_1l	 = $request -> color_1l;
        $data -> color_5l	 = $request -> color_5l;
        $data -> color_18l	 = $request -> color_18l;
        $data -> save();
        return redirect('/Admin/ColorPricing/SuperEasyWash');
    }




    public function ma_destroy($id){
        MatexModel::where('id',$id)->forceDelete();
        return redirect('/Admin/ColorPricing/Matex');
    }

    public function mpm_destroy($id){
        MatexPremiumModel::where('id',$id)->forceDelete();
        return redirect('/Admin/ColorPricing/Premium-Matex');
    }

    public function wg_destroy($id){
        WeatherGardModel::where('id',$id)->forceDelete();
        return redirect('/Admin/ColorPricing/WeatherGard');
    }

    public function wb_destroy($id){
        WeatherBondModel::where('id',$id)->forceDelete();
        return redirect('/Admin/ColorPricing/WeatherBond');
    }

    public function nsew_destroy($id){
        SuperEasyWashModel::where('id',$id)->forceDelete();
        return redirect('/Admin/ColorPricing/SuperEasyWash');
    }

    function colorprice_ma(){
        $ma = DB::table('colorprice_matex')->get();
        return view('admin_dashboard.color_pricing.ma', compact('ma'));
    }

    function colorprice_mpm(){
        $mpm = DB::table('colorprice_matexpremium')->get();
        return view('admin_dashboard.color_pricing.mpm', compact('mpm'));
    }
    function colorprice_wb(){
        $wb = DB::table('colorprice_weatherbond')->get();
        return view('admin_dashboard.color_pricing.wb', compact('wb'));
    }
    function colorprice_wg(){
        $wg = DB::table('colorprice_weathergard')->get();
        return view('admin_dashboard.color_pricing.wg', compact('wg'));
    }
    function colorprice_nsew(){
        $nsew = DB::table('colorprice_supereasywash')->get();
        return view('admin_dashboard.color_pricing.nsew', compact('nsew'));
    }
}
