<?php

namespace App\Http\Controllers;

use App\Mail\WholesaleActivationRequest;
use App\Wholesale;
use Illuminate\Http\Request;

class WholesaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wholesales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //add validation
          $request->validate([
            'name' => 'required'
        ]);

        //save db
        $wholesale = auth()->user()->wholesale()->create([
            'name'        => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        //send mail to admin

        // $admins = User::whereHas('role', function ($q) {
        //     $q->where('name', 'admin');
        // })->get();

        //Mail::to($admins)->send(new WholesaleActivationRequest($wholesale));

        return redirect()->route('home')->withMessage('Create Wholesale account request sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wholesale  $wholesale
     * @return \Illuminate\Http\Response
     */
    public function show(Wholesale $wholesale)
    {
        dd($wholesale->wholeSaleOwner->name, 'welcome to your Wholesale Account', $wholesale->name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wholesale  $wholesale
     * @return \Illuminate\Http\Response
     */
    public function edit(Wholesale $wholesale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wholesale  $wholesale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wholesale $wholesale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wholesale  $wholesale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wholesale $wholesale)
    {
        //
    }
}
