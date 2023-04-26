
@extends('layouts.appPage')

@section('content')

    <div class="container mt-1 mb-10" style="text-align: center">
        <div class="row mb-6 justify-content-center">

                <div class="col-3 m-1 mb-10">
                    <div class="card" style="width: 18rem;">
                        <center>
                            <img src="{{asset('img/' . $book->file)}}" style="height: 100px; width: 100px; margin-top: 5%" alt="Card image cap">
                        </center>
                        <div class="card-body" >
                            <h5 class="card-title"> {{$book->title}}</h5>
                            <p class="card-text">{{$book->number}}</p>
                            <p class="card-text">{{$book->date}}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"> {{$book->random_code}}</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link ml-3">طباعة</a>
                            <a href="{{route("book.edit" , $book->id)}}" class="card-link">تعديل</a>
{{--                            <a href="{{ route('book.download', $book->file)}}" class="card-link">تحميل</a>--}}
                            <a href="" class="card-link">تحميل</a>

                        </div>
                    </div>
                </div>

        </div>
    </div>


@endsection
