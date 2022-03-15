<div class="header">
            <div class="header-left">
                <a href="#" class="logo">
                    <img src=" {{asset('assets/img/logo.jpeg')}} " alt="Logo">
                    <span> <a href="#" style="color: black;">شركة ركائز الأرض المحدودة</a></span>
                </a>
            </div>

            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fe fe-text-align-left"></i>
            </a>

            <a class="mobile_btn" id="mobile_btn">
                <i class="fa fa-bars"></i>
            </a>


            <ul class="nav user-menu">
                <form method="GET" action="{{route('adminpanal.logout')}}">
                    <div class="form-group" route>
                        <button class="btn btn-primary " type="submit" style="margin: 10px !important;" >تسجيل الخروج</button>
                    </div>
                </form>


            </ul>
</div>