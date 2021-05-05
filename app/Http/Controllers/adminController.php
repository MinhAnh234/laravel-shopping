<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use Session;
class adminController extends Controller
{
    //
    public function addProduct( ) {
        $id=null;
        return view('category.add_category')->with('id',$id);;
    }
    public function addCategory(Request $request) {
        if($request->id==null) {
        $validator = Validator::make($request->all(), [
            'name'      => 'required',
            'price'     => 'required|integer',
            'category'  => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            $request->session()->put('errors',$errors->all());
            return redirect()->back();
           
        }
        if (Session('imgName')==null){
            $request->session()->put('errorImage','Image is required');
            return redirect()->back();
        } else

        $data=[
            'name'      => $request->name,
            'price'     => $request->price,
            'category'  => $request->category,
            'img'       => Session('imgName'),
            'Sale_id'   => $request->Sale_id
        ];
        DB::table('products')->insert($data);
        $request->session()->put('success','Successfully');
        $request->session()->put('imgName',null);
        $request->session()->forget('errorImage');
        $request->session()->put('errors',null);
        return redirect()->back();
    }
        else {
            $data=null;
            $idUpdate = (int)($request->id);
            if($request->name!=null){
                $data['name']= $request->name;
            }
            if($request->Sale_id!=null){
                $data['Sale_id']= $request->Sale_id;
            }
            if($request->price!=null){
                $data['price']= $request->price;
            }
            if($request->category!=null){
                $data['category']= $request->category;
            }
            if(Session('imgName')!=null){
                $data['img']=Session('imgName') ;
            }
            if($data!=null) {
                DB::table('products')
                ->where('id', $idUpdate)
                ->update($data);
                return redirect()->back();
            }
           
        }
    }

    
        public function managerProducts() {
            $products=products::paginate(10);
            return view('managerProducts')->with('products',$products);
        }
        public function deleteProduct($id) {
            $product = products::find($id);
            $product->delete();
            return redirect() ->back();
        }
        public function updateProduct($id){
            return view('category.add_category')->with('id',$id);
        }
}
