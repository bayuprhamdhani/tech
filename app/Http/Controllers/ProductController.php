<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Role;
use App\Models\Status;
use App\Models\Product_Type;
use Illuminate\Http\Request;
use Hash;

class ProductController extends Controller
{
    public function index(){
        //$status = Status::All();
        $product = Product::All();
        $ruangans = "Cek data";

    return view('product.index', compact('product', /*'status'*/));
    }

    public function create(){
        $product__types = Product_Type::All();
        //$status = Status::All();
        return view('product/create', compact('product__types', /*'status'*/));
    }

    public function store(Request $request)
    {  
        // dd($request);
        $request->validate([
            'Product_Name' => 'required',
            'Qty' => 'required',
            'Selling_Price' => 'required',
            'Buying_Price' => 'required',
            'Product_Type_ID' => 'required',
            //'Product_Status' => 'required',
        ]);
           
        $data = $request->all();
        // dd($data);
        $check = Product::create([
            'Product_Name' => $data['Product_Name'],
            'Qty' => $data['Qty'],
            'Selling_Price' =>$data['Selling_Price'],
            'Buying_Price' =>$data['Buying_Price'],
            'Product_Type_ID' =>$data['Product_Type_ID'],
            //'Product_Status' =>$data['Product_Status'],
        ]);
         
        return redirect()->route('product.index')->withSuccess('Great! You have Successfully loggedin');
    }

    public function edit(Product $product)
    {
        $product__types = Product_Type::All();
        //$status = Status::All();
        return view('product.edit', compact('product__types', 'product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'Product_Name' => 'required',
            'Qty' => 'required',
            'Selling_Price' => 'required',
            'Buying_Price' => 'required',
            'Product_Type_ID' => 'required',
            //'Product_Status' => 'required',
        ]);
        $product->Product_Name = $request->Product_Name;
        $product->Qty = $request->Qty;
        $product->Selling_Price = $request->Selling_Price;
        $product->Buying_Price = $request->Buying_Price;
        $product->Product_Type_ID = $request->Product_Type_ID;
        //$product->Product_Status = $request->Product_Status;
        $product->save();

        return redirect()->route('product.index')->withSuccess('Great! You have Successfully loggedin');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success','user has been deleted successfully');
    }

}