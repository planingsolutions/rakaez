
    <div class="header-fixed">
    <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">

                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            @foreach($footer as $foo)
                <a href="{{url('')}}" class="navbar-brand logo">
                <img src="{{asset('public/public/'.$foo->logo)}}" class="img-fluid" alt="Logo">
                <span>شركة ركائز الأرض المحدودة</span>
                </a>
            @endforeach

        </div>
        <div class="main-menu-wrapper">
            <div class="menu-header">
            @foreach($footer as $foo)

                <a href="{{url('')}}" class="menu-logo">
                    <img src="{{asset('public/public/'.$foo->logo)}}" class="img-fluid" alt="Logo">
                    <span>شركة ركائز الأرض المحدودة</span>
                </a>
                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                    <i class="fas fa-times"></i>
                </a>
                @endforeach

            </div>
            <ul class="main-nav">
                <li class="active">
                    <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
                </li>
                <li>
                    <a class="nav-link" href="#aboutus">من نحن</a>
                </li>

                <li>
                    <a class="nav-link" href="#services">خدماتنا</a>
                </li>

                <li>
                    <a class="nav-link" href="#portfolio">مشاريعنا</a>
                </li>

                <li>
                    <a class="nav-link" href="#Categories">أعمالنا السابقة</a>
                </li>
                <li></li>


        </div>
        <ul class="nav header-navbar-rht">
            <li class="nav-item">
                <button type="submit" class="btn clbtn" style="background-color: #6c0145 !important;
                            transition: .5s ease-out;
                            height:110% !important;
                            padding: 3px 40px;
                            border-radius: 150px 0 150px 0px;
                        ">
                    <a href="#contactus" style="color: white; text-decoration: none; font-size: 1.1rem;"> اطلب الان </a></button>
            </li>
        </ul>
    </nav>
</div>
