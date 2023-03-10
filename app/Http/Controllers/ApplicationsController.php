<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use App\Http\Requests\StoreApplicationsRequest;
use App\Http\Requests\UpdateApplicationsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class ApplicationsController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreApplicationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApplicationsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Applications  $applications
     * @return \Illuminate\Http\Response
     */
    public function show(Applications $applications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Applications  $applications
     * @return \Illuminate\Http\Response
     */
    public function edit(Applications $applications)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApplicationsRequest  $request
     * @param  \App\Models\Applications  $applications
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApplicationsRequest $request, Applications $applications)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Applications  $applications
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applications $applications)
    {
        //
    }

    function getData(Request $request)
    {
        $fullname = $request->input('fullname');
        $phone =  $request->input('phone');
        $email = $request->input('email');
        $password = $request->input('password');

        $isInsertSuccess = Applications::insert([
            'fullname' => $fullname,
            'phone' => $phone,
            'email' => $email,
            'password' => Hash::make($password),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        if ($isInsertSuccess) return redirect()->route('application_login')->withSuccess('Registration was successful');
        else return Redirect::back()->withErrors(['error' => 'Registration was not successful']);
    }
}
