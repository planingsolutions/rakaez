
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

                            <form action="{{route('adminpanal.socialmediaUpdate', $data->id)}}" method="post" enctype="multipart/form-data" >
                                @csrf
                                <div class="card border-primary rounded-0" style="border-color: #00000052 !important; width: 74vw;">
                                    <div class="card-header p-0">
                                        <div class="bg-info text-white text-center py-2" style="background-color:#42c2a1 !important;">
                                            <h3> تغير النصوص <i class="fas fa-file-alt"></i></h3>
                                        </div>
                                    </div>
                                    <div class="card-body p-3"style="direction: rtl; text-align:right;">
                                        <div class="card-body p-3"style="direction: rtl; text-align:right;">
                                            
                                            <div class="form-group">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                                    </div >
                                                    <input type="file" class="form-control" accept=".png" name="img" value="{{$data->logo}}" title="هذا الحقل يقبل فقط .png ">      
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                                </div>
                                                <input type="text" class="form-control" name="facebook" value="{{$data->facebook}}" placeholder="برجاء ادخال رابط فيسبوك الخاص بك">
                                                
                                            </div>
                                            @error('facebook')
                                                    <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                                </div >
                                                <input type="text" class="form-control"  name="instgram" value="{{$data->instgram}}" placeholder="برجاء ادخال رابط الانستجرام الخاص بك">
                                                
                                            </div>
                                            @error('instgram')
                                                    <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                                </div>
                                                <input type="text" class="form-control" name="twitter" value="{{$data->twitter}}" placeholder="برجاء ادخال رابط التويتر الخاص بك">
                                                
                                            </div>
                                            @error('twitter')
                                                    <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                                </div>
                                                <input type="text" class="form-control" name="phonenumber" value="{{$data->phonenumber}}" placeholder="  برجاء أدخال رقم الواتس-أب الخاص بك">
                                                
                                            </div>
                                            @error('phonenumber')
                                                    <div class="alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                        </div>
                                            <div class="text-center">
                                                <input type="submit" value="حفظ التغير" class="btn btn-info btn-block rounded-0 py-2 " style="background-color: #42c2a1 !important; box-shadow: 0 0 5px; border-color: none !important;">
                                            </div>
                                        </div>  
                                        
                                    </div>  


                                </div>
                            </form>
                            <!--Form with header-->


                        </div>
            </div>
        </div>


@endsection
