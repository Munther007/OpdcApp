<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $messages = Contact::all();
        return view('messages.index' , compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $message = Contact::create([
            'name' => $request->name ,
            'office' => $request->office,
            'email' => $request->email,
            'number' => $request->phone ,
            'message' => $request->message
        ]);

        $message->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param Contact $contact
     * @return Factory|View
     */
    public function show(Contact $contact)
    {
        $message = Contact::find($contact);
        return view('messages.message' , compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Contact $contact
     * @return RedirectResponse
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back();
    }
}
