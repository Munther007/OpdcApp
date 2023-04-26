@extends('layouts.appPage')

@section('content')

    <div class="container mt-5 mb-10" >
        <div class="row mb-6 justify-content-center">
            @foreach($books as $book)
                <div class="col-3 m-2 mb-10 ml-2">
                    <div class="card" style="width: 18rem;">
                        <div style="text-align: center;">
                            <br>
                            <img src="data:image/png;base64, {{base64_encode(QrCode::size(150)->color(0, 0, 0)->format('png')->merge(public_path('logo1.png') , 0.3 , true)->generate($book->random_code))}}" alt="">

                            {{--   <img src="{{asset("images/logo1.png")}}" style="height: 100px; width: 100px; margin-top: 5%" alt="Card image cap">--}}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">العنوان</div>
                                <div class="col">
                                    <h6 class="card-title" style="text-align: right"> {{$book->title}}</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">الرقم</div>
                                <div class="col">
                                    <p class="card-text" style="text-align: right">{{$book->number}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">التاريخ</div>
                                <div class="col">
                                    <p class="card-text" style="text-align: right">{{$book->date}}</p>
                                </div>
                            </div>

                        </div>

                        <div class="card-body">
                            <a href="{{route("book.show" , $book->id)}}" class="card-link ml-3">عرض</a>
                            <a href="{{route("book.edit" , $book->id)}}" class="card-link">تعديل</a>
                            <a href="#" class="card-link">تحميل</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
