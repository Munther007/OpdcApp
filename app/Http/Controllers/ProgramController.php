<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Traits\uploadFileTrait;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class ProgramController extends Controller
{
    use uploadFileTrait;
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $programs = Program::all();
        return view('programs.index' , compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('programs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $program = Program::create([
            'name' => $request->name ,
            'desc' => $request->desc ,
            'image' => $this->uploadProgramImage($request , 'programs.images'),
            'file' => $this->uploadProgramFile($request , 'programs.files') ,
//            'category_id' => $request->category_id ,
            'user_id' => Auth::user()->id ,
        ]);
        $program->save();
        return redirect(route('programs.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Program $program
     * @return Factory|View
     */
    public function show($id)
    {
        $program = Program::find($id);
        return view('programs.program' , compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Program $program
     * @return Factory|View
     */
    public function edit(Program $program)
    {
        return view('programs.edit' , compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Program $program
     * @return RedirectResponse|Redirector
     */
    public function update(Request $request, Program $program)
    {
        $program->update([
           'name' => $request->name,
            'image' => $this->uploadProgramImage($request, 'programs'),
            'file' => $this->uploadProgramFile($request, 'programs.files'),
            'desc' => $request->desc
        ]);
        $program->save();
        return redirect(route('programs.index') , compact('program'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Program $program
     * @return RedirectResponse
     */
    public function destroy(Program $program)
    {
        $program->delete();
        return back();
    }
}
