<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Category;
use App\Product;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     if(Auth::user()->role == 'admin')
     {
        return view('admin.product');
     }
        {
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->role == 'admin')
     {
        $product = Product::all();
        return view('admin.display')->with('product', $product);
     }
        {
            return redirect('/');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->role == 'admin')
    {

        $this -> validate($request, [
            'name' => 'required',
            'description' => 'required',
            'listprice' => 'required',
            'price' => 'required',
            'category' => 'required',
            'cover_image' => 'image|nullable|max:1999'
    
           ]);
    
           if ($request->hasFile('image')) {
    
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameTostore = $filename.'_'.time().'.'.$extension;
            $path = $request ->file('image')->storeAs('public/productsimage', $fileNameTostore);
    
           }

           $product =new Product();
    
           $product->name = request('name');
           $product->description = request('description');
           $product->listprice = request('listprice');
           $product->price = request('price');
           $product->category_name = request('category');
           $product->product_image = $fileNameTostore;
           $product->save();
    
           return redirect('admin/create'); 
        }
        
        {
            return redirect('/');
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Product::find($id);
        $cat->delete();
        return redirect('admin/create');
    }
}
