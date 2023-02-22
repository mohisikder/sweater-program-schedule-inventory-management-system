<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Buyer;
use App\Models\Gauge;
use App\Models\StyleDetails;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;

class StyleDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('frontend.modules.journal.style-details');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agents = Agent::all();
        $buyers = Buyer::all();
        $gauges = Gauge::all();
        return view('frontend.modules.journal.styling.create', compact('gauges', 'buyers', 'agents'));
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
            'style_name' => 'required',
            'style_quantity' => 'required',
            'style_file_no' => 'required',
            'buyer_id' => 'required',
            'agent_id' => 'required',
            'yarn_details' => 'required',
            'gauge_id' => 'required',
            'style_weight' => 'required',
        ]);

        // dd($request->all());
        StyleDetails::create($request->all());
        $flasher->addSuccess('Style has been saved successfully!');
        return redirect()->route('buyer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StyleDetails  $styleDetails
     * @return \Illuminate\Http\Response
     */
    public function show(StyleDetails $styleDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StyleDetails  $styleDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(StyleDetails $styleDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StyleDetails  $styleDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StyleDetails $styleDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StyleDetails  $styleDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(StyleDetails $styleDetails)
    {
        //
    }
}