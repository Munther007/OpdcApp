
@extends('layouts.appPage')

@section('content')

    <div class="container" >
        <div class="panel-heading">
            <div class="panel-title">
                <h3 class="text-center mb-5">سجل المواقع الحكومية الرسمية</h3>
            </div>
        </div>

        <div class="table-responsive ">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>أسم الجهة الحكومية</th>
                    <th>الموقع الالكتروني</th>

                </tr>
                </thead>
                <tbody>

                    <tr>
                        <td> {{$website->name}}</td>
                        <td> {{$website->link}}</td>


                        <td><a href="#" ng-click="removeContact()"><span class="glyphicon glyphicon-trash mt-5"></span>&nbsp;</a></td>
                    </tr>
                </tbody>

            </table>

        </div>
    </div>




@endsection




