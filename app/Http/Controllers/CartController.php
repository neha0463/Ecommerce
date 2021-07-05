<?php

namespace App\Http\Controllers;
use App\Models\App\Ecom;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // public function cart(){
    //   return view('cart');
    // }
       
                         public function addcart(Request $request){
        $id = $request->id;
       $cart = session()->get('cart');
          if(!cart){
           $cart   = [
            $product->id=>[
                'Product_Name' => $product->product_Name,
                'rs' => $product->rs,
                'product_details' => $product->product_details,
                'quentity' => $product->quentity,
                'image' => $product->image
             ]   

           ];
           session()->put('cart', $cart);
            return redirect()->route('cart')->with("succfully", "addcart");
          }
          if(isset($cart[$product->id])){
              $cart[$product->id]['quentity']++;
              session()->put('cart', $cart);
              return redirect()->route('cart')->with("succfully", "addcart");
          }
          $cart[$product->id] =[
            'Product_Name' => $product->product_Name,
            'rs' => $product->rs,
            'product_details' => $product->product_details,
            'quentity' => $product->quentity,
            'image' => $product->image
          ];
          session()->put('cart', $cart);
          return redirect()->route('cart')->with("succfully", "addcart");
    }
}
