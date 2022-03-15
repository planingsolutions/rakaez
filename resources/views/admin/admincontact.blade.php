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
    <table id="files_list" class="table table-striped dt-responsive  " >

        <!-- <table id="files_list" class="table table-striped table-bordered nowrap" style="width:100%"> -->
            <thead class="thead_dark">
                <tr>
                    <th class="th_text">الاسم </th>
                    <th class="th_text"> رقم الهاتف</th>
                    <th class="th_text"> البريد الالكتروني</th>
                    <th class="th_text"> الاستفسارات </th>
                    <th class="th_text"> تاريخ الانشاء</th>
                    <th class="th_text"> تاريخ التعديل</th>
                    <th class="th_text"> حذف</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $data as $item)
                    <tr>
                        <td class="firstname">{{$item-> name}}</td>
                        <td class="phone">{{$item-> phonenumber }}</td>
                        <td class="email">{{$item-> email }}</td>
                        <td class="comments">{{$item-> message }}</td>
                        <td class="created">{{$item-> created_at }}</td>
                        <td class="updated">{{$item-> updated_at }}</td>
                        <td><a href="{{route('adminpanal.delete', $item->email)}}" class="btn btn-danger" onclick="return confirm('هل تريد حذف هذا الحقل؟');">حذف</a> </td>                  
                    </tr>      
                @endforeach
            </tbody>
        </table>
</div>

@endsection
