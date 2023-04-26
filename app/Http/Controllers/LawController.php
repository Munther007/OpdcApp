<?php

namespace App\Http\Controllers;

use App\Models\Law;
use App\Traits\uploadFileTrait;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LawController extends Controller
{
    use uploadFileTrait;
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $laws = Law::all();
        return view('laws.index' , compact('laws'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('laws.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $random_code = Str::length(10);
        $law = Law::create([
           'title' => $request->title,
           'description' => $request ->description,
           'file' => $this->uploadFileLaw($request, 'files'),
           'random_code' => $random_code
        ]);
        $law->save();
        return redirect(route('laws.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Law $law
     * @return Factory|View
     */
    public function show($id)
    {
        $law = Law::find($id);
        return view('laws.law' , compact('law'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Law $law
     * @return Factory|View
     */
    public function edit(Law $law)
    {
        return view('laws.edit' , compact('law'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Law $law
     * @return RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Law $law)
    {
        $law->update([
            'title' => $request->title,
            'description' => $request ->description,
            'file' => $this->uploadFileLaw($request, 'files'),
        ]);
        $law->save();
        return redirect(route('laws.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Law $law
     * @return RedirectResponse
     */
    public function destroy(Law $law)
    {
        $law->delete();
        return back();
    }
}
