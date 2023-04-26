<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $phones = Phone::all();
        return view('phones.index' , compact('phones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('phones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $phone = Phone::create([
            'pose' => $request->pose ,
            'department' => $request->department ,
            'section' => $request->section ,
            'unit' => $request->unit ,
            'phone' => $request->phone ,
            'email' => $request->email
        ]);

        $phone->save();
        return redirect()->route('phones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Phone $phone
     * @return Factory|View
     */
    public function show(Phone $phone)
    {
        return view('phones.phone' , compact('phone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Phone $phone
     * @return \Illuminate\Http\Response
     */
    public function edit(Phone $phone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Phone $phone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phone $phone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Phone $phone
     * @return RedirectResponse
     */
    public function destroy(Phone $phone)
    {
        $phone->delete();
        return back();
    }
}
