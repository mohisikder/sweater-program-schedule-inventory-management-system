<?php

namespace App\Http\Controllers;

use App\Models\Pobreakdown;
use App\Models\StyleDetails;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;

class PobreakdownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $styleDetails = StyleDetails::all();
        return view('frontend.modules.journal.po.create', compact('styleDetails'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, FlasherInterface $flasher)
    {
        $request->validate([
            'po_number' => 'required',
            'po_qty' => 'required',
            'po_delivery_date' => 'required',
        ]);
        // dd($request->all());
        Pobreakdown::create($request->all());
        $flasher->addSuccess('PO has been saved successfully!');
        return redirect()->route('buyer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pobreakdown  $pobreakdown
     * @return \Illuminate\Http\Response
     */
    public function show(Pobreakdown $pobreakdown)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pobreakdown  $pobreakdown
     * @return \Illuminate\Http\Response
     */
    public function edit(Pobreakdown $pobreakdown)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pobreakdown  $pobreakdown
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pobreakdown $pobreakdown)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pobreakdown  $pobreakdown
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pobreakdown $pobreakdown)
    {
        //
    }
}
