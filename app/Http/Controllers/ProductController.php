<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function save(request $request){
        $product = new Product();
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $product['image']= $filename;
        }
        $product -> name = $request-> name;
        $product -> type = $request-> type;
        $product -> code = $request-> code;
        $product -> price = $request-> price;
        $product -> pdvalue = $request-> pdvalue;
        $product -> save();
        return redirect('Admin/Products/List');
    }

    public function index(){
        $product = Product::latest()->paginate(15);
        return view('admin-view.products.list', compact('product'));
    }

    function edit($id){
        $data = Product::find($id);
        return view('admin-view.products/edit-product',compact('data'));
    }

    public function delete($id){
        Product::destroy($id);
        return redirect('Admin/Products/List');
    }
    public function update(Request $request){
        $data = Product::find($request->id);
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
        }
        $data -> name = $request-> name;
        $data -> type = $request-> type;
        $data -> code = $request-> code;
        $data -> price = $request-> price;
        $data -> save();
        return redirect('Admin/Products/List');
    }
}
