@extends('layout.aboutuslayout')
@section('tittle', 'لوحة التحكم')


@section('content')


<div class="main-content" >

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
    <table id="files_list" class="table table-striped dt-responsive  " style="text-align: right !important" >
        
        <thead class="thead_dark">
                    <tr>
                        <th class="th_text">رقم الحقل</th>
                        <th class="th_text">البرجراف الاول</th>
                        <th class="th_text">البرجراف الثاني</th>
                        <th class="th_text">البرجراف الثالث</th>
                        <th class="th_text">تاريخ التعديل</th>
                        <th class="th_text">تعديل</th>
                    </tr>
        </thead>
        <tbody>
                    @foreach ($post as $val)
                        <tr>
                            <td class="id">{{$val->id}}</td>
                            <td class="pargraph2">{{$val->pargraph2}}</td>
                            <td class="pargraph3">{{$val->pargraph3}}</td>
                            <td class="pargraph4">{{$val->pargraph4}}</td>

                            <td class="update">{{$val->updated_at}}</td>
                            <td><a href="{{route('admainpanal.aboutusEdit2',$val->id)}}" class="btn btn-outline-success" style="width: -moz-available;">تعديل</a> </td>                    
                        </tr>      
                    @endforeach
        </tbody>
    </table>
    
    </div>
    
</div>
@endsection
