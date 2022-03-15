@extends('layout.aboutuslayout')
@section('tittle', 'تغير كلمة المرور الخاصة بك ')


@section('content')

<div class="mainDiv">
  <div class="cardStyle">
                    
            
    <form action="{{route('changePasswordPost.admin')}}" method="post" name="signupForm" id="signupForm">
    @csrf
   
      <img src="{{asset('assets/img/logo.jpeg')}}" id="signupLogo"/>
      
      <h2 class="formTitle">
          تغير كلمة المرور الخاصة بك 
      </h2>
      @if (session('error'))
         <div class="alert alert-danger" style="width: 80%; margin: 15px auto;">
            {{ session('error') }}
        </div>
        @endif
        @if (session('success'))
                        <div class="alert alert-success"style="width: 80%; margin: 15px auto;"> 
                            {{ session('success') }}
                        </div>
                    @endif
      <div class="inputDiv">
      <label class="inputLabel" for="">كلمة المرور الحالية</label>
      <input type="password" id="password" name="currentpassword" value="{{old('password')}}">
      @error('currentpassword')
        <div class="alert-danger">{{ $message }}</div>
      @enderror
      
    </div>
    <div class="inputDiv">
      <label class="inputLabel" for="password">كلمة المرور الجديدة</label>
      <input type="password" id="password" name="newpassword">

      @error('newpassword')
        <div class="alert-danger">{{ $message }}</div>
      @enderror
     
      
    </div>
      
    <div class="inputDiv">
      <label class="inputLabel" for="confirmPassword">تأكيد كلمة المرور المطلوبة</label>
      <input type="password" id="confirmPassword" name="newpasswordconfirmation">

      @error('newpasswordconfirmation')
        <div class="alert-danger">{{ $message }}</div>
      @enderror
      
    </div>
    
    <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit" style="width: auto;
display: flex;
margin: 10px auto; background-color:#68003b;">حفظ التغير</button>
    </div>
      
  </form>
  </div>
</div>

@endsection
