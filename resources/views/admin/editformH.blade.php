@extends('layout.headerchangelayout')
@section('tittle', 'لوحة التحكم')


@section('content')

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
            <div class="row justify-content-center" style="margin-top: 10px;">
                <div class="col-12" style="margin:5%">

                            <form action="{{route('adminpanal.updateheader', $data->id)}}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <div class="card border-primary rounded-0" style="border-color: #00000052 !important; width: 74vw;">
                                    <div class="card-header p-0">
                                        <div class="bg-info text-white text-center py-2" style="background-color:#42c2a1 !important;">
                                            <h3> تغير النصوص <i class="fas fa-file-alt"></i></h3>
                                        </div>
                                    </div>
                                    <div class="card-body p-3"style="direction: rtl; text-align:right;">
                                        <div class="form-group">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                                </div >
                                                <input type="file" class="form-control" name="img" value="{{$data->img}}" >      
                                            </div>

                                            @error('img')
                                                <div class="alert-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                        <div class="text-center"> 
                                            <input type="submit" value="حفظ التغير" class="btn btn-info btn-block rounded-0 py-2 " style="background-color: #42c2a1 !important; box-shadow: 0 0 5px; border-color: none !important;">
                                        </div>
                                    </div>  


                                </div>
                            </form>
                            <!--Form with header-->


                        </div>
            </div>
        </div>


@endsection
