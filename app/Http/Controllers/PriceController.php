<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('price.index')->with('prices', Price::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('price.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'price'=>'required',
            'services'=>'required',
            'price_status'=>'required',
            'price_icon'=>'required'
        ]);

        $price = new Price;
        $price->price = $request->price;
        $price->services = $request->services;
        $price->price_status = $request->price_status;
        $price->price_icon = $request->price_icon;
        $price->save();
        return redirect()->back();
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
        $price = Price::find($id);
        return view('price.edit')->with('prices', $price);        
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
        $this->validate($request, [
            'price'=>'required',
            'services'=>'required',
            'price_status'=>'required',
            'price_icon'=>'required'
        ]);


        $price = Price::find($id);
        $price->price = $request->price;
        $price->services = $request->services;
        $price->price_status = $request->price_status;
        $price->price_icon = $request->price_icon;
        $price->save();
        return redirect()->route('prices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $price = Price::find($id);
        $price->delete();
        return redirect()->back();
    }
}
