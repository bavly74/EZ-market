<?php

namespace App\Http\Controllers;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $inventory =  Inventory::all();
       return view('Inventory.show', compact('inventory'));
       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $inventory =  Inventory::all();
        return view('Inventory.create', compact('inventory'));

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
        $inventory=new Inventory();
        $inventory->product_id = $request->product_id;
        $inventory->pro_name = $request->pro_name;
        $inventory->quantity = $request->quantity;
        $inventory->product_cost = $request->product_cost;
        $inventory->save();

        return redirect()->route('inventory.index');
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
        $inventory=Inventory::findorfail($id);
        return view('inventory.edit', compact('inventory'));
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
        $inventory=Inventory::findorfail($id);
        $inventory->pro_name = $request->pro_name;
        $inventory->quantity = $request->quantity;
        $inventory->product_cost = $request->product_cost;
        $inventory->save();
        return redirect()->route('inventory.index'); 


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
        $inventory=Inventory::findorfail($id)->delete();
        return redirect()->route('inventory.index'); 

    }
}
