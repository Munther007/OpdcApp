<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $websites = Website::all();
        return view('websites.index' , compact('websites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('websites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $website = Website::create([
            'name' => $request->name ,
            'link' => $request->link
        ]);

        $website->save();
        return redirect()->route('websites.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Website $website
     * @return Factory|View
     */
    public function show($id)
    {
        $website = Website::findOrFail($id);
        return view('websites.website' , compact('website'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Website $website
     * @return Factory|View
     */
    public function edit(Website $website)
    {
        return view('websites.edit' , compact('website'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Website $website
     * @return RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Website $website)
    {
        $website->update([
           'name' => $request->name ,
           'link' => $request->link
        ]);

        $website->save();
        return redirect(route('websites.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Website $website
     * @return RedirectResponse
     */
    public function destroy(Website $website)
    {
        $website->delete();
        return back();
    }
}
