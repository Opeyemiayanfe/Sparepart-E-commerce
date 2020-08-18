<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Gloudemans\Shoppingcart\Facades\Cart;
use App\User;
use App\Checkout;

class CheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()) 
        {
            if(Cart::count()>0){

                $cart = Cart::content();
                $user = auth()->user()->firstname;
                $last = auth()->user()->lastname;
                return view('users.indexcheck', compact('user','cart','last'));
            }
            {
                return view('users.ship');
            }
            
        }

        {
            return view('users.auth');

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this -> validate($request, [
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'phonenumber' => 'required',
            'email' => 'required',
            
           ]);
            
           $product =new Checkout();
    
           $product->address = request('address');
           $product->city = request('city');
           $product->state = request('state');
           $product->phonumber = request('phonenumber');
           $product->email = request('email');
           $product->user_id = auth()->user()->id;
           $product->save();
    
           return redirect('check/{id}'); 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::check())
        {   
            $check = Checkout::find($id);
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            $cart = Cart::content();
            return view('users.order',compact('cart', 'user','check'));
        }
        {
            return redirect('/');
        }
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
        //
    }
}
