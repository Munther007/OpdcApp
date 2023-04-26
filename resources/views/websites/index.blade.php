
@extends('layouts.appPage')

@section('content')

    <div class="container" style="margin-bottom: 200px" >
            <div class="panel-heading">
                <div class="panel-title">
                    <h3 class="text-center mb-5">سجل المواقع الحكومية الرسمية</h3>
                </div>
            </div>

            <div class="table-responsive ">
                <table class="table table-striped" style="margin-bottom: 200px">
                    <thead>
                    <tr>
                        <th>أسم الجهة الحكومية</th>
                        <th>الموقع الألكتروني</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($websites as $website)
                        <tr>
                            <td> {{$website->name}} </td>
                            <td> {{$website->link}}</td>
                            <td><a href="#" ng-click="removeContact()"><span class="glyphicon glyphicon-trash mt-5"></span>&nbsp;</a></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

@endsection




