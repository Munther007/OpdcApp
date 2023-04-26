
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

                    <tr>
                        <td> {{$phone->pose}} / {{$phone->department}} / {{$phone->section}} / {{$phone->unit}}</td>
                        <td> {{$phone->phone}}</td>
                        <td>{{$phone->email}}</td>

                        <td><a href="#" ng-click="removeContact()"><span class="glyphicon glyphicon-trash mt-5"></span>&nbsp;</a></td>
                    </tr>
                </tbody>

            </table>

        </div>
    </div>




@endsection




