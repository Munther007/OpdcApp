<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Traits\uploadFileTrait;
use Illuminate\Http\Request;
use function Ramsey\Uuid\Lazy\compareTo;

class CourseController extends Controller
{
    use uploadFileTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
       $courses = Course::all();
       return view('courses.index' , compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $course = Course::create([
           'location' => $request->location ,
           'image' => $this->uploadCourse($request, 'courses'),
        ]);
        $course->save();

        return redirect(route('courses.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.course' , compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Course $course)
    {
        return view('courses.edit' , compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Course $course)
    {
       $course->update([
          'location' => $request->location ,
          'image' => $this->uploadCourse($request, 'courses')
       ]);
       $course->save();
       return redirect(route('courses.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
