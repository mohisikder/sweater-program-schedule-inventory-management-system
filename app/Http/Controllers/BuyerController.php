<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sl = 1;
        $buyers = Buyer::all();
        return view('frontend.modules.buyer.index', compact('buyers', 'sl'));
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
        $request->validate([
            'buyer_name' => 'required',
            'buyer_email' => 'required|email',
            'buyer_contact' => 'required|numeric',
            'buyer_country' => 'required',
            'buyer_city' => 'required',
            'buyer_address' => 'required',
        ]);
        // Getting values from the blade template form
        // $buyer = new buyer([
        //     'buyer_name' => $request->post('buyer_name'),
        // ]);
        // $buyer->save();
        Buyer::create($request->all());
        $flasher->addSuccess('Buyer has been saved successfully!');
        // return redirect()->route('buyer.index')->with('success', 'New Buyer Create successfully.');
        return redirect()->route('buyer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function show(Buyer $buyer)
    {
        return view('frontend.modules.buyer.show', compact('buyer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function edit(Buyer $buyer)
    {
        return view('frontend.modules.buyer.edit', compact('buyer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buyer $buyer, FlasherInterface $flasher)
    {
        // $request->validate([
        //     'buyer_name' => 'required',
        //     'buyer_email' => 'required|email|unique',
        //     'buyer_contact' => 'required|numeric',
        //     'buyer_country' => 'required',
        //     'buyer_city' => 'required',
        //     'buyer_address' => 'required',
        // ]);
        $buyer->fill($request->post())->save();

        $flasher->addSuccess('Buyer updated successfully!');
        // return redirect()->route('buyer.index')->with('success', 'buyers updated successfully.');
        return redirect()->route('buyer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buyer $buyer, FlasherInterface $flasher)
    {
        $buyer->delete();
        $flasher->addSuccess('Buyer has been deleted successfully');
        return redirect()->route('buyer.index');
    }
}