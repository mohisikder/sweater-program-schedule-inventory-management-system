<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Buyer;
use App\Models\Gauge;
use App\Models\StyleDetails;
use Illuminate\Http\Request;

class journalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = Agent::all();
        $buyers = Buyer::all();
        $gauges = Gauge::all();
        return view('frontend.modules.journal.index', compact('gauges', 'buyers', 'agents'));
    }


    //01 Styling Details
    public function styleAdd()
    {
        $agents = Agent::all();
        $buyers = Buyer::all();
        $gauges = Gauge::all();
        return view('frontend.modules.journal.styling.style-details', compact('gauges', 'buyers', 'agents'));
    }
    public function styleEdit()
    {
        $agents = Agent::all();
        $buyers = Buyer::all();
        $gauges = Gauge::all();
        return view('frontend.modules.journal.styling.edit-style-details', compact('gauges', 'buyers', 'agents'));
    }

    // public function styleStore(Request $request)
    // {
    //     // Validate the form data
    //     $validatedData = $request->validate([
    //         'style_name' => 'required',
    //         'style_quantity' => 'required|numeric',
    //         'style_file_no' => 'required',
    //         'style_buyer' => 'required',
    //         'style_agent' => 'required',
    //         'yarn_details' => 'required',
    //         'gauge' => 'required',
    //         'weight' => 'required|numeric',
    //     ]);

    //     // Create a new Style model and populate it with the form data
    //     $style = new StyleDetails();
    //     $style->name = $validatedData['style_name'];
    //     $style->quantity = $validatedData['style_quantity'];
    //     $style->file_no = $validatedData['style_file_no'];
    //     $style->yarn_details = $validatedData['yarn_details'];
    //     $style->weight = $validatedData['weight'];

    //     // Get the foreign key references for the buyer, agent, and gauge
    //     $buyer = Buyer::where('buyer_name', $validatedData['style_buyer'])->firstOrFail();
    //     $style->buyer_id = $buyer->id;

    //     $agent = Agent::where('agent_name', $validatedData['style_agent'])->firstOrFail();
    //     $style->agent_id = $agent->id;

    //     $gauge = Gauge::where('gauge_name', $validatedData['gauge'])->firstOrFail();
    //     $style->gauge_id = $gauge->id;

    //     // Save the new Style model to the database
    //     // $style->save();

    //     // Redirect back to the form with a success message
    //     //return redirect()->back()->with('success', 'Style has been added successfully!');
    // }
    // 1.1 PO Breakdown
    // public function poAdd()
    // {
    //     return view('frontend.modules.journal.po.po-breakdown');
    // }
    //02 Lab Dip Status
    public function labdipAdd()
    {
        return view('frontend.modules.journal.labdip.lab-dip-status');
    }
    //03 Fit/Proto Sample
    public function protoSampleAdd()
    {
        return view('frontend.modules.journal.protosample.protosample');
    }
    //04 P.P Sample Status
    public function ppSampleAdd()
    {
        return view('frontend.modules.journal.ppsample.ppsample');
    }
    // 05 Print/Embroidery Status
    public function printAdd()
    {
        return view('frontend.modules.journal.printembroidery.print');
    }
    public function embroideryAdd()
    {
        return view('frontend.modules.journal.printembroidery.embroidery');
    }
    public function handEmbroideryAdd()
    {
        return view('frontend.modules.journal.printembroidery.handembroidery');
    }
    public function otherEmbellishmentAdd()
    {
        return view('frontend.modules.journal.printembroidery.embellishment');
    }
    //06 Accessories Approval Status
    public function accessoriesIndex()
    {
        return view('frontend.modules.journal.accessoriesapproval.index');
    }
    public function accessoriesAdd()
    {
        return view('frontend.modules.journal.accessoriesapproval.create');
    }


    // ----------------------------------------------------------------------------------
    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     $agents = Agent::all();
    //     $buyers = Buyer::all();
    //     $gauges = Gauge::all();
    //     return view('frontend.modules.journal.create', compact('gauges', 'buyers', 'agents'));
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    //     return "Show journal data by id wise";
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}