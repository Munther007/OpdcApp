
@extends('layouts.appPage')

@section('content')

    <div class="container" >
            <div class="panel-heading">
                <div class="panel-title">
                    <h3 class="text-center mb-5">سجل الهاتف الخاص بشركة توزيع المنتجات</h3>
                </div>
            </div>

            <div class="table-responsive ">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>أسم التشكيل</th>
                        <th>رقم الهاتف</th>
                        <th>البريد الالكتروني</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($phones as $phone)
                        <tr>
                            <td> {{$phone->pose}} / {{$phone->department}} / {{$phone->section}} / {{$phone->unit}}</td>
                            <td> {{$phone->phone}}</td>
                            <td>{{$phone->email}}</td>

                            <td><a href="#" ng-click="removeContact()"><span class="glyphicon glyphicon-trash mt-5"></span>&nbsp;</a></td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>

            </div>
{{--        <div class="panel-footer mt-3">--}}
{{--            <form class="form-inline">--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" class="form-control ng-model" placeholder="الأسم">--}}
{{--                </div>--}}
{{--                <div class="form-group mr-4">--}}
{{--                    <input type="tel" class="form-control" placeholder="رقم الهاتف"  >--}}
{{--                </div>--}}
{{--                <div class="form-group mr-4">--}}
{{--                    <input type="email" id="email" name="email" class="form-control" placeholder="البريد الالكتروني">--}}
{{--                </div>--}}
{{--                <button class="btn btn-primary mr-4">--}}
{{--                    <span class ="glyphicon glyphicon-thumbs-up"></span> أضافة جهة أتصال</button>--}}
{{--            </form>--}}
{{--        </div>--}}
        </div>




@endsection




