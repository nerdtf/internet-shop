<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Http\Middleware\IsAdmin;
class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware(IsAdmin::class);
    }

    public function index(){
        $products = DB::table('products')->get();
        return view('admin.products.index')->with(compact('products'));
    }

    public function create(){

        return view('admin/products/create');
    }

    public function store(){
        $image = request()->file('image');

        $image->move(public_path().'/uploads', $image->getClientOriginalName());

        $this->validate(request(),[
            'title' => 'required|max:50',
            'slug' => 'required|unique:products,slug',
            'price' => 'required|min:4',
            'description' => 'required',
        ]);

        Product::create([
            'title' => request()->post('title'),
            'slug' => request()->post('slug'),
            'price' => request()->post('price'),
            'description' => request()->post('description'),
            'image' => $image->getClientOriginalName(),
        ]);

        request()->session()->flash('status', 'Product successfully created');

        return redirect('/admin/products');
    }

    public function edit(Product $product){

        return view('admin/products/edit')->with(compact('product'));
    }

    public function update(Product $product){
        $this->validate(request(),[
            'title' => 'required',
            'slug' => 'required',
            'price' => 'required',
            'description' => 'required',

        ]);
        $product->update(request()->post());

        request()->session()->flash('status', 'Product edited successfully');

        return redirect('admin/products');
    }

    public function delete(Product $product){
        return view('admin.products.delete')->with(compact('product'));
    }

    public function destroy(Product $product){
        $product->delete();
        request()->session()->flash('status', 'Product deleted successfully');
        return redirect('admin/products');
    }

    public function show(Product $product){
        return view('admin.products.show')->with(compact('product'));
    }
}
