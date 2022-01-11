<?php

namespace App\Http\Controllers;

use App\Models\Hajji;
use App\Models\Package;
use Exception;
use Illuminate\Http\Request;

class HajjiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hajjis = Hajji::Where('hajji_status',0)->get();
        return view('pre-register-hajjis.index',compact('hajjis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packages = Package::all();
        return view('pre-register-hajjis.create',compact('packages'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Hajji::create($request->all());
        $package_price = Package::find($request->package_id)->price;
        $hajji         = [
            'name'=>$request->name,
            'father_name'=>$request->father_name,
            'mother_name'=>$request->mother_name,
            'spouse_name'=>$request->spouse_name,
            'occupation'=>$request->occupation,
            'mobile_number'=>$request->mobile_number,
            'nid_number'=>$request->nid_number,
            'ng_number'=>$request->ng_number,
            'tracking_number'=>$request->tracking_number,
            'package_id'=>$request->package_id,
            'package_price'=>$package_price,
            'date_of_birth'=>$request->date_of_birth,
            'district'=>$request->district,
            'gender'=>$request->gender,
            'address'=>$request->address,
            'remarks'=>$request->remarks
        ];
        Hajji::create($hajji);
        
        return redirect()->route('pre-register-hajjis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hajji  $hajji
     * @return \Illuminate\Http\Response
     */
    public function show(Hajji $pre_register_hajji)
    {
        return view('pre-register-hajjis.show',['hajji'=>$pre_register_hajji]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hajji  $hajji
     * @return \Illuminate\Http\Response
     */
    public function edit(Hajji $pre_register_hajji)
    {
        $packages = Package::all();
        return view('pre-register-hajjis.edit',['hajji'=>$pre_register_hajji, 'packages'=>$packages]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hajji  $hajji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hajji $pre_register_hajji)
    {
        $package_price = Package::find($request->package_id)->price;
        $hajji = [
            'name'=>$request->name,
            'father_name'=>$request->father_name,
            'mother_name'=>$request->mother_name,
            'spouse_name'=>$request->spouse_name,
            'occupation'=>$request->occupation,
            'mobile_number'=>$request->mobile_number,
            'nid_number'=>$request->nid_number,
            'ng_number'=>$request->ng_number,
            'tracking_number'=>$request->tracking_number,
            'package_id'=>$request->package_id,
            'package_price'=>$package_price,
            'date_of_birth'=>$request->date_of_birth,
            'district'=>$request->district,
            'gender'=>$request->gender,
            'address'=>$request->address,
            'remarks'=>$request->remarks
        ];
        $pre_register_hajji->update($hajji);
        
        return redirect()->route('pre-register-hajjis.index');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hajji  $hajji
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hajji $pre_register_hajji)
    {
        $pre_register_hajji->delete();
        return redirect()->route('pre-register-hajjis.index');
    }

public function change_status($id)
{
    try {
        $hajji = Hajji::find($id);
        $hajji->update(['hajji_status'=>1]);
        return redirect()->route('pre-register-hajjis.index');
    } catch (Exception $e) {
        return $e->getMessage();
    }
    
}


//On going Hajjis
    public function hajji_idex()
    {
        $hajjis = Hajji::Where('hajji_status',1)->get();
        return view('hajjis.index',compact('hajjis'));
    }
}
