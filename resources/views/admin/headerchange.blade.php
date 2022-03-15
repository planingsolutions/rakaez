@extends('layout.headerchangelayout')
@section('tittle', 'لوحة التحكم')


@section('content')


<div class="main-content">

    <div class="container">
    @if(Session::has('succ'))
            <div class="alert alert-success" role="alert" style="width:74vw;">
                {{ Session::get('succ') }}
            </div>
        @endif
        @if(Session::has('fail'))
            <div class="alert alert-danger" role="alert" style="width:74vw;">
                {{ Session::get('fail') }}
            </div>
        @endif
    <table id="files_list" class="table table-striped dt-responsive  " style="text-align: right !important" >

            <thead class="thead_dark" style="direction: rtl;">
                <tr>
                    <th class="th_text">رقم الحقل</th>
                    <th class="th_text" style="width: 131px !important;">  الصورة  </th>
                    
                    <th class="th_text"> تاريخ التعديل</th>
                    <th class="th_text"> تعديل</th>                    
                </tr>
            </thead>
            <tbody>
                @foreach ($post as $item)
                    <tr>
                        <td class="section">{{$item->id}}</td>
                        <td class="img" style="text-align: center;">
                            <img src="{{asset('public/public/'.$item->img)}} " style="width: 30%;"/> 
                        </td>
                        
                        <td class="update">{{$item->updated_at}}</td>
                        <td><a href="{{route('adminpanal.editheader',$item->id)}}" class="btn btn-outline-success" style="width: -moz-available;">تعديل</a> </td>                    
                    </tr>      
                @endforeach
            </tbody>
        </table>
</div>

@endsection
