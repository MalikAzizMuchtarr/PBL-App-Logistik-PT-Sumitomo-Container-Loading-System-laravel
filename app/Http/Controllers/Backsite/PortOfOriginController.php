<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;

//use library
use Illuminate\Support\Facades\storage;
use Symfony\Component\HttpFoundation\Response;

//request
use App\Http\Requests\Consultation\StoreConsultationRequest;
use App\Http\Requests\Consultation\UpdateConsultationRequest;
use App\Http\Requests\PortOfOrigin\StorePortOfOriginRequest;
use App\Http\Requests\PortOfOrigin\UpdatePortOfOriginRequest;
// use everything here
use Gate;
use Auth;

//models
use App\Models\MasterData\PortOfOrigin;

class PortOfOriginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $port_of_origin = PortOfOrigin::orderBy('created_at', 'desc')->get();

        return view('pages.backsite.master-data.port-of-origin.index', compact('consultation'));
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
    public function store(StorePortOfOriginRequest $request)
    {
        // get all request from frontsite
        $data = $request->all();

        // store to database
        $port_of_origin = PortOfOrigin::create($data);

        alert()->success('Success Message', 'Successfully added new port of origin');
        return redirect()->route('backsite.port-of-origin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PortOfOrigin $port_of_origin)
    {
        return view('pages.backsite.master-data.port-of-origin.show', compact('port_of_origin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PortOfOrigin $port_of_origin)
    {
        return view('pages.backsite.master-data.port-of-origin.edit', compact('port_of_origin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePortOfOriginRequest $request, PortOfOrigin $port_of_origin)
    {
                 // get all request from frontsite
                 $data = $request->all();

                 // update to database
                 $port_of_origin->update($data);
         
                 alert()->success('Success Message', 'Successfully updated port of origin');
                 return redirect()->route('backsite.port-of-orign.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( PortOfOrigin $port_of_origin)
    {
        $port_of_origin->forceDelete();

        alert()->success('Success Message', 'Successfully deleted port of origin');
        return back();
    }
}
