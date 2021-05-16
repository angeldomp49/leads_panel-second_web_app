<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $leads = Lead::all();
        $stylesheets = [
            asset("assets/plugins/bootstrap/css/bootstrap.min.css"),
            asset("assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"),
            asset("assets/plugins/dropify/css/dropify.min.css"),
            asset("assets/css/style.min.css")
        ];
    
        $scripts = [
            asset("assets/bundles/lib.vendor.bundle.js",),
            asset("assets/bundles/sweetalert.bundle.js"),
            asset("assets/plugins/dropify/js/dropify.min.js"),
            asset("assets/js/core.js"),
            asset("assets/js/page/dialogs.js")
        ];

        return view('index', [
            'stylesheets' => $stylesheets,
            'scripts' => $scripts,
            'leads' => $leads
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('create', [
            'content' => NULL
        ]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('lead.edit', ['lead'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lead = Lead::find($id);

        $stylesheets = [
            asset("assets/plugins/bootstrap/css/bootstrap.min.css"),
            asset("assets/plugins/summernote/dist/summernote.css"),
            asset("assets/plugins/summernote/dist/summernote.css"),
            asset("assets/css/style.min.css")
        ];
    
        $scripts = [
            asset("assets/bundles/lib.vendor.bundle.js"),
            asset("assets/bundles/fullcalendar.bundle.js"),
            asset("assets/bundles/knobjs.bundle.js"),
            asset("assets/js/core.js"),
            asset("university/assets/js/page/calendar.js"),
            asset("university/assets/js/chart/knobjs.js")
        ];

        return view('edit', [
            'stylesheets' => $stylesheets,
            'scripts' => $scripts,
            'lead' => $lead
        ]);
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
    }
}
