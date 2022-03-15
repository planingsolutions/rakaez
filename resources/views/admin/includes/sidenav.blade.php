<div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll" style="background-color:#36344d;">
                <div id="sidebar-menu" class="sidebar-menu" >
                    <ul style="color: white !important;"> 
                        <li class="menu-title" style="color:white !important;">
                            <span><i class="fe fe-home"></i>  القائمة الرئيسية </span>
                        </li>
                        <li> 
                            <a href="{{route('adminpanal.show')}}"></i>واجهة الموقع</a>
                        </li>
                        <li>
                        <a href="#" class="subdrop"> <span>من نحن</span><span class="menu-arrow"></span></a>
                                    <ul class="subb" style="width: max-content; padding-right:15px; ">
                                        <li ><a href="{{route('adminpanal.aboutshow')}}">العنوان الرئيسي</a></li>
                                        <li><a href="{{route('adminpanal.aboutshow2')}}">العناوين الفرعية</a></li>
                                    </ul>

                        </li>
                        
                                <li>
                                    <a href="{{route('adminpanal.serviveshow1')}}"> خدماتنا</a>
                                </li>
                                <li>
                                <a href="#" class="subdrop"> <span>مشاريعنا</span><span class="menu-arrow"></span></a>
                                    <ul class="subb" style="width: max-content; padding-right:15px; ">
                                        <li ><a href="{{route('adminpanal.projectoneshow')}}">مشروع النخيل 1</a></li>
                                        <li><a href="{{route('adminpanal.projecttwoshow')}}">مشروع النخيل 2</a></li>
                                        <li ><a href="{{route('adminpanal.projecthreeshow')}}">مشروع النخيل 3-4</a></li>
                                        <li ><a href="{{route('adminpanal.projectfourshow')}}">مشروع النخيل 5</a></li>
                                        <li ><a href="{{route('adminpanal.projectfiveshow')}}">مشروع النخيل 6</a></li>

                                    
                                    </ul>
                                
                                </li>
                                
                                <li>
                                    <a href="{{route('adminpanal.categoriesshow')}}"> أعمالنا السابقة</a>

                                </li>
                                <li>
                                    <a href="{{ route('adminpanal.contactinfo') }}">اسفسارات العملاء</a>
                                </li>
                                <li>
                                    <a href="{{url('/socialmediaShow')}}">مواقع التواصل</a>
                                </li>
                                <li class="submenu">
                                    <a href="" class="subdrop"> <span>أعدادات الموقع</span><span class="menu-arrow"></span></a>
                                    <ul class="subb" style="width: 100%; padding-right:35px; ">
                                         <li><a href="{{route('changePass.admin')}}">تغير كلمة المرور</a></li>

                                    </ul>
                                 </li>
                    </ul>
                </div>
            </div>
</div>


