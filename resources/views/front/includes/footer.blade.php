
        <div id="back-up" class="back-up">
            <a href="#"><i class="fas fa-chevron-circle-up  logo-up" style="fill:#C8AD5F;"></i></a>
        </div>
        <div class="container-fluid">
            <div class="row text-center edit-icons d-flex justify-content-evenly ">
                
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 ">
                    <a class="nav-link"> <i class=" fas fa-mobile-alt " aria-hidden="true" onclick="fireSweetAlert()" ></i></a>
           
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 ">
                    <a href="# " class="nav-link"><i class="fab fa-font-awesome "aria-hidden="true" onclick="fireSweetAlert2()"></i></a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 ">
                    <a href="# " class="nav-link"><i class="fas fa-envelope " aria-hidden="true" onclick="fireSweetAlert3()"></i></a>
                </div>

                <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-2 ">
                    <a href="# " class="nav-link "><i class="far fa-comments "></i></a>
                    <p>Call Us On</p>
                </div> -->
                <!-- Email -->
                
                <div class="main-color" id="contactus">
        
                    <form action="{{route('message.contact-us')}}" method="GET" class="howcan" style="margin-top: 7rem !important;" style="box-shadow: 2px 2px 4px #c8ad5f;">
                    @csrf
                    <div>
                            <h2 style="color: white; margin-top: 11rem;"> أترك رسالتك للتواصل</h2>
                        </div>
                        @if(Session::has('success'))
                             <div class="alert alert-success" role="alert" style="width: 30vw; margin:0 33%;">
                                {{ Session::get('success') }}
                             </div>
                        @endif
                        @if(Session::has('fail'))
                            <div class="alert alert-danger" role="alert" >
                                {{ Session::get('fail') }}
                            </div>
                        @endif
                        <div class="form-group" style="margin-top: 2rem;">
                            <label for="الأسم">
                            <input class="form-control " type="text " name="name" value="{{old('name')}}"  placeholder="الاسم" style="box-shadow: 0px 1px 0px #c8ad5f;" >
                            @error('name')
                                <div class="alert-danger">{{ $message }}</div>
                            @enderror
                            <br>
                        </label>
                        </div>
                        <div class="form-group">
                            <label for="email">
                            <input class="form-control " type="text " name="email" value="{{old('email')}}" aria-describedby="emailHelp" placeholder="البريد الالكتروني" style="box-shadow: 0px 1px 0px #c8ad5f;">
                            @error('email')
                                <div class="alert-danger">{{ $message }}</div>
                            @enderror
                            <br>
                        </label>
                        </div>
                        <div class="form-group">
                            <label for="Name ">
                            <input class="form-control" type="text" name="phone" value="{{old('phone')}}" placeholder="رقم الهاتف" style="box-shadow: 0px 1px 0px #c8ad5f;">

                            @error('phone')
                                <div class="alert-danger">{{ $message }}</div>
                            @enderror 
                            <br>
                        </label>
                        </div>
                        <div class="form-group">
                            <label for="Name ">
                            <textarea class="form-control " name="text" placeholder="برجاء كتابة التعليق الخاص بك"></textarea>
                            @error('text')
                        <div class="alert-danger">{{ $message }}</div>
                        @enderror
                            </label>
                        </div>
                        <button type="submit" class="btn class1">التواصل معنا</button>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-2 ">
                            
                             @foreach($footer as $foo)
                            <div style="display: inline-flex; margin-right: 36rem; margin-top: 1rem; padding-top:10px;" class="socialmedia">
                                <div >
                                    <a href="{{$foo->facebook }}" target="_blank"><i class="fab fa-facebook"></i></a>
                                </div>
                                <div>
                                    <a href="{{$foo->instgram}}" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div>
                                <a href="{{$foo->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a>
                                </div>
                                <div>
                                <a href="https://api.whatsapp.com/send?phone={{$foo->phonenumber}}&text=احتاج بعض الاستفسارات" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            
                        </div>
                    @endforeach
                            

                        
                    </div>
                    
                    </form>
                    
                </div>
                
                
                <!-- End Email -->
            </div>
        </div>
</div>