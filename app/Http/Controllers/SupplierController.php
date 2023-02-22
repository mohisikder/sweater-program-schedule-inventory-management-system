<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sl = 1;
        $suppliers = Supplier::all();
        return view('frontend.modules.supplier.index', compact('suppliers', 'sl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'supplier_name' => 'required',
            'contact_person' => 'required',
            'designation' => 'required',
            'contact' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);
        // Getting values from the blade template form
        // $supplier = new supplier([
        //     'supplier_name' => $request->post('supplier_name'),
        // ]);
        // $supplier->save();
        Supplier::create($request->all());
        return redirect()->route('supplier.index')->with('success', 'Supplier Create successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        return view('frontend.modules.supplier.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        return view('frontend.modules.supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $supplier->fill($request->post())->save();
        return redirect()->route('supplier.index')->with('success', 'Supplier updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('supplier.index')->with('success', 'Supplier has been deleted successfully');
    }
}