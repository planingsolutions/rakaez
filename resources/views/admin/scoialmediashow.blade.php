@extends('layout.headerchangelayout')
@section('tittle', 'لوحة التحكم')


@section('content')


<div class="main-content">

    <div class="container">
    @if(Session::has('succ'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('succ') }}
            </div>
        @endif
        @if(Session::has('fail'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('fail') }}
            </div>
        @endif
    <table id="files_list" class="table table-striped dt-responsive  " style="text-align: right !important;" >

            <thead class="thead_dark">
                <tr>
                    <th class="th_text" style="width: 131px !important;">الصورة </th> 
                    <th class="th_text">رابط الفيسبوك</th>
                    <th class="th_text">رابط الانستجرام</th>
                    <th class="th_text">رابط التويتر </th>
                    <th class="th_text">رقم الخاص بالواتس-أب</th>
                    <th class="th_text"> تعديل</th>
                </tr>
            </thead>
            <tbody >
                @foreach ($data as $val)
                    <tr style="width: 63px !important;">
                        <td class="img1" style="text-align: center;">
                                <img src="{{asset('public/public/'.$val->logo)}} " style="width: 30%;"/> 
                            </td>                        <td class="facebook">{{$val->facebook}}</td>
                        <td class="instgram">{{$val->instgram}}</td>
                        <td class="email">{{$val->twitter}}</td>
                        <td class="email">{{$val->phonenumber}}</td>
                        <td><a href="{{route('adminpanal.socialmediarEdit', $val->id)}}" class="btn btn-outline-success" style="width: -moz-available;">تعديل</a> </td>                    
                    </tr>      
                @endforeach
            </tbody>
        </table>
</div>

@endsection
