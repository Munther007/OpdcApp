
@extends('layouts.appPage')

@section('content')

    <div class="container mt-1 mb-10" style="text-align: center;">
        <div class="row mb-6 justify-content-center" >

            <div class="col-3 m-1 mb-10" >
                <div class="card" style="width: 18rem;">
                    <center>
                        <img src="{{asset('img/'. $program->image)}}" style="height: 100px; width: 100px; margin-top: 5%" alt="Card image cap">
                    </center>
                    <div class="card-body" >
                        <h5 class="card-title"> {{$program->name}}</h5>
                        <p class="card-text">{{$program->desc}}</p>
                    </div>

                    <div class="card-body">
                        <a href="{{route("programs.edit" , $program->id)}}" class="card-link">تعديل</a>
                        <a href="" class="card-link">تحميل</a>
                        <a href="{{route("programs.destroy" , $program->id)}}" class="card-link">حذف</a>

                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
