<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use Session;
class adminController extends Controller
{
    //
    public function addProduct( Request $request) {
        return view('category.add_category');
    }
    public function addCategory(Request $request) {
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
            'img'       => Session('imgName')
        ];
        DB::table('products')->insert($data);
        $request->session()->put('success','Successfully');
        $request->session()->put('imgName',null);
        $request->session()->forget('errorImage');
        $request->session()->put('errors',null);
        return redirect()->back();
    }
}
