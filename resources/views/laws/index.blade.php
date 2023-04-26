@extends('layouts.appPage')

@section('content')

    <div class="container mt-5 mb-10">
        <div class="row mb-6 justify-content-center">
            @foreach($laws as $law)
               <div class="col-3 m-2 mb-10">
                   <div class="card" style="width: 18rem;">
                       <center>
                           <img src="{{asset("images/logo1.png")}}" style="height: 100px; width: 100px; margin-top: 5%" alt="Card image cap">
                       </center>
                       <div class="card-body">
                           <h5 class="card-title"> {{$law->title}}</h5>
                           <p class="card-text">{{$law->description}}</p>
                       </div>
                       <ul class="list-group list-group-flush">
                           <li class="list-group-item"> {{$law->file}}</li>
                       </ul>
                       <div class="card-body">
                           <a href="{{route('laws.show' , $law->id)}}" class="card-link ml-3">عرض</a>
                           <a href="{{route("law.edit" , $law->id)}}" class="card-link">تعديل</a>
                           <a href="#" class="card-link">تحميل</a>
                       </div>
                   </div>
               </div>
            @endforeach
        </div>
    </div>


    @endsection
