<?php

namespace App\Http\Controllers;

use App\Models\Model\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OfferController extends Controller
{
    //
    public  function getoffers()
    {
        return Offer::all();
    }
    public  function Create()
    {

        return view('Offer.Create');
    }
    public function  store(Request $request)
    {
 $validator = Validator::make($request->all(),[
     'name'=>'required|string',
     'price'=>'required|numeric',
 ],
     [
         'name.required'=>'الحقل مطلوب',
         'name.string'=>'الحقل نص',
         'price.required'=>'الحقل مطلوب',
         'price.numeric'=>'الحقل رقم'
     ]
 );
//dd($validator);
 if($validator->fails())
     return redirect()->back()->withInput($request->all())->withErrors($validator->errors());

        Offer::create(['name'=>$request->name, 'price'=>$request->price,'pic'=>'sssss']);
        return redirect()->back();
    }
}

