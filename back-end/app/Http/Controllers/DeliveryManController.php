<?php

namespace App\Http\Controllers;
use App\Models\Delivery_man;
use Illuminate\Http\Request;

class DeliveryManController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $delivery=Delivery_man::all();
       return view('Delivery.show', compact('delivery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $delivery=Delivery_man::all();
       return view('Delivery.create', compact('delivery'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Delivery_man::create([
            'name'=>$request->name,
            'image'=>$request->image,
            'salary_type'=>$request->salary_type,
            'Nat_id'=>$request->Nat_id

        ]
        );
        return response('added successfully');
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
        $delivery=Delivery_man::where('id',$id)->first();
        return view('Delivery.edit', compact('delivery'));
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
        $delivery=Delivery_man::findorfail($id);
        $delivery->update([
            'name' => $delivery->name,
            'image' => $delivery->image,
            'salary_type' => $delivery->salary_type,
            'Nat_id' => $delivery->Nat_id,
        ]); 
        return redirect()->route('delivery.index');
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
        Delivery_man::findorfail($id)->delete();
       return redirect()->route('delivery.index');
    }
}
