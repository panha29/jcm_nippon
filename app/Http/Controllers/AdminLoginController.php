<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use CategoriesMigration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminLoginController extends Controller
{
    function product_list(){
        return view('admin_dashboard.product.product_index');
    }
    public function category_index(){
        return view('admin_dashboard.categories.categories_index');
    }
    public function category_save(Request $request){
        $validator = Validator::make($request->all(),[
            'category_name'=>'required',
            'category_date'=>'required',
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>400,
                // 'errors'=>$validator->messages(),
            ]);
        }
        else
        {
            $category = new CategoriesMigration;
            $category -> category_name = $request -> input('category_name');
            $category -> category_date = $request -> input('category_date');
            $category -> save();
        }
    }
}
