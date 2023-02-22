<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sl = 1;
        $agents = Agent::all();
        return view('frontend.modules.agent.index', compact('agents', 'sl'));
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
            'agent_name' => 'required',
            'agent_email' => 'required|email',
            'agent_contact' => 'required|numeric',
            'agent_country' => 'required',
            'agent_city' => 'required',
            'agent_address' => 'required',
        ]);
        // Getting values from the blade template form
        // $agent = new agent([
        //     'agent_name' => $request->post('agent_name'),
        // ]);
        // $agent->save();
        Agent::create($request->all());
        return redirect()->route('agent.index')->with('success', 'Agent Create successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(Agent $agent)
    {
        return view('frontend.modules.agent.show', compact('agent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        return view('frontend.modules.agent.edit', compact('agent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agent $agent)
    {
        $agent->fill($request->post())->save();
        return redirect()->route('agent.index')->with('success', 'Agent updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        $agent->delete();
        return redirect()->route('agent.index')->with('success', 'Agent has been deleted successfully');
    }
}
