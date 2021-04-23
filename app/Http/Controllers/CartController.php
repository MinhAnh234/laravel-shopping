<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\DB;
use Session;
class CartController extends Controller
{
    //
    public function index(Request $request) {
       $products= DB::table('products')->paginate(6);
       if(Session('Cart')) {
       $Cart = Session('Cart');

       return view('index')->with('products',$products)
                           ->with('Cart',$Cart);
        } else {
        $Cart =null;
        return view('index')->with('products',$products)
                            ->with('Cart',$Cart);
     }

    }
    public function AddCart(Request $request,$id){
        $product=DB::table('products')->where('id',$id)->first();
        if($product !=null) {
           $oldCart = Session('Cart')? Session('Cart'):null;
           $newCart = new Cart($oldCart);
           $newCart->addCart($product,$id);
           $request->session()->put('Cart',$newCart);
           return view('cart')->with('newCart',$newCart);
        }
        $newCart = new Cart( Session('Cart'));
        return view('cart')->with('newCart',$newCart);

    }
    public function destroyCart(Request $request,$id){
        $Cart = Session('Cart');
        $Cart->destroyCart($id);
        $request->session()->put('Cart',$Cart);
        $newCart=Session('Cart');
        return view('cart')->with('newCart',$newCart);
    }
    public function viewCart() {
        $Cart = Session('Cart')? Session('Cart'):null;
        return view('list')->with('Cart',$Cart);
    }
    public function updateCart(Request $request,$id,$count,$totalPrice) {
        $Cart = Session('Cart');
        $Cart->updateCart($id,$count,$totalPrice);
        $request->session()->put('Cart',$Cart);
        return view('update')->with('Cart',$Cart);
    }
    public function searchProduct(Request $request) {
        $keywords=$request->keywords;
        $products= DB::table('products')->where('name','like','%'.$keywords.'%')->paginate(6);
        if(Session('Cart')) {
            $Cart = Session('Cart');

            return view('index')->with('products',$products)
                                ->with('Cart',$Cart);
             } else {
             $Cart =null;
             return view('index')->with('products',$products)
                                 ->with('Cart',$Cart);
          }

    }
    function upload(Request $request)
    {
     $this->validate($request, [
      'select_file'  => 'required|mimes:jpg,png,gif|max:2048'
     ]);

     $image = $request->file('select_file');

     $new_name = rand() . '.' . $image->getClientOriginalExtension();

     $image->move(public_path('images'), $new_name);
     return back()->with('success', 'Image Uploaded Successfully')->with('path', $new_name);
    }
}
