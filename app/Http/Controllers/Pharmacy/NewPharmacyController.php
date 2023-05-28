<?php

namespace App\Http\Controllers\Pharmacy;

use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class NewPharmacyController extends Controller
{
    public function storeMedecine(Request $request){

        $request->validate([
            'name' => 'bail|required|max:255|unique:medicine',
            'incoming_stock' => 'bail|required|numeric',
            'price_pr_strip' => 'bail|required|numeric',
            'number_of_medicine' => 'bail|required|numeric',
            'description' => 'bail|required',
            'works' => 'bail|required',
            'image' => 'bail|mimes:jpeg,png,jpg|max:1000|required',
        ]);

        $imgpath = Storage::putFile('medicines',$request->image);
        Medicine::create([
            'medicine_category_id'=>$request->medicine_category_id,
            'pharmacy_id'=>$request->pharmacy_id,
            'name'=>$request->name,
            'image'=>$imgpath,
            'status'=>$request->status,
            'price_pr_strip'=>$request->price_pr_strip,
            'number_of_medicine'=>$request->number_of_medicine,
            'incoming_stock'=>$request->incoming_stock,
            'total_stock'=>$request->incoming_stock,
            'description'=>$request->description,
            'works'=>$request->works,
            'prescription_required'=>$request->prescription_required,
        ]);
        return back();
    }

    /*
    'medicine_category','name','image','pharmacy_id','medicine_category_id',
    'status','incoming_stock','total_stock','
    use_stock','description','works','
    price_pr_strip','number_of_medicine',
    'prescription_required','meta_info'
    */
}
