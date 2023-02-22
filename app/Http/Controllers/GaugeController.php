<?php

namespace App\Http\Controllers;

use App\Models\Gauge;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;

class GaugeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sl = 1;
        $gauges = Gauge::all();
        return view('frontend.modules.gauge.index', compact('gauges', 'sl'));
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
    public function store(Request $request, FlasherInterface $flasher)
    {
        //
        $request->validate([
            'gauge_name' => 'required|numeric',
        ]);
        // Getting values from the blade template form
        // $gauge = new Gauge([
        //     'gauge_name' => $request->post('gauge_name'),
        // ]);
        // $gauge->save();
        Gauge::create($request->all());
        $flasher->addSuccess('Gauges created successfully!');
        return redirect('/gauge');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gauge  $gauge
     * @return \Illuminate\Http\Response
     */
    public function show(Gauge $gauge)
    {
        return view('frontend.modules.gauge.show', compact('gauge'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gauge  $gauge
     * @return \Illuminate\Http\Response
     */
    public function edit(Gauge $gauge)
    {
        return view('frontend.modules.gauge.edit', compact('gauge'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gauge  $gauge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gauge $gauge, FlasherInterface $flasher)
    {
        $request->validate([
            'gauge_name' => 'required|numeric',
        ]);
        // $gauge->update($request->all());
        $gauge->fill($request->post())->save();
        $flasher->addSuccess('Gauges updated successfully!');
        return redirect()->route('gauge.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gauge  $gauge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gauge $gauge, FlasherInterface $flasher)
    {
        $gauge->delete();
        $flasher->addSuccess('Gauges has been deleted successfully!');
        return redirect()->route('gauge.index');
    }
}
