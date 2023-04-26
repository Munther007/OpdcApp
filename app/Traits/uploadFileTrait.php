<?php


namespace App\Traits;


use Illuminate\Http\Request;

trait uploadFileTrait
{

    public function uploadFile (Request $request , $folderName ) {
        $file = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->store('books' . $file , 'opdc' );
        return $path ;
    }

    public function uploadCourse (Request $request , $folderName ) {
        $file = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->store('courses/' . $file , 'opdc' );
        return $path ;
    }

    public function uploadProgramImage (Request $request , $folderName ) {
        $file = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->store('programs/' . $file , 'opdc' );
        return $path ;
    }

    public function uploadProgramFile(Request $request , $folderName ) {
        $file = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->store('programs/' . $file , 'opdc' );
        return $path ;
    }

    public function uploadPostImage (Request $request , $folderName ) {
        $file = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->store('posts/'.$file , 'opdc' );
        return $path ;
    }

    public function uploadFileLaw (Request $request , $folderName ) {
        $file = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->store('lawsFiles/' . $file , 'opdc' );
        return $path ;
    }

}
