@extends('layout.site')
@section('tittle', 'شركة ركائز')

@section('content')

<section >

        <div id="carouselExampleCaptions" class="carousel slide parent" data-bs-ride="carousel" >

            <div class="carousel-indicators" >
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner inner" style="height:auto; max-height: 100%; line-height: 270px;">
                @foreach($post as $post)
                    <div class="carousel-item {{$post->pargraph1}}">
                        <img src="{{asset('public/public/'.$post->img)}}" class="w-100" alt="pict1">
                    </div>
                @endforeach 
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

            @foreach($footer as $foo)

                <div class="child">
                    <div>
                            <a href="{{$foo->facebook }}" target="_blank"><i class="fab fa-facebook"></i> </a>
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

</section>


<!-- Start Section About Us -->
<div class="container my-5 aboutUs" id="aboutus" style="padding-top: 90px;">
    @foreach($dataa as $da)
    <div class="edit-s">
        <div class="line"></div>
        <h1 style="margin-bottom: 2rem; text-align: justify;"> نبذة عن شركتنا</h1>
        <p>
            {{$da->pargraph1}}
        </p>
    </div>
    <div class="row my-5 ediitt">
        <div class="col-lg-4 col-md-12 col-sm-12 py-3">
            <div class="edit-grid">
                <div class="edit-h4" style="box-shadow: -1px 5px #c8ad5f">
                    <i class="fas fa-low-vision"></i>
                    <h4>الرؤية</h4>
                </div>
                <div class="edit-p">
                    <p> 
                    {{$da->pargraph2}}                 
                   </p>
                </div>
            </div>
        </div>
        <div class=" col-lg-4 col-md-12 col-sm-12 py-3 ms-auto">
            <div class="edit-grid">
                <div class="edit-h4" style="box-shadow: -1px 5px #c8ad5f;">
                    <i class="fas fa-book-reader"></i>
                    <h4>الرسالة</h4>
                </div>
                <div class="edit-p">
                    <p> 
                    {{$da->pargraph3}}
                    </p>
                </div>
            </div>
        </div>
        <div class=" col-lg-4 col-md-12 col-sm-12 py-3">
            <div class="edit-grid">
                <div class="edit-h4" style="box-shadow: -1px 5px #c8ad5f">
                    <i class="fas fa-trophy"></i>
                    <h4>أهدافنا</h4>
                </div>
                <div class="edit-p">
                    <p> 
                    {{$da->pargraph4}}
                    </p>
                </div>
            </div>
        </div>
        
    @endforeach
    </div>
</div>
<!-- End Section About Us -->


<!-- Start Section Services -->

<div class="container aboutUs" id="services" style="padding-top: 90px;">
    <div class="row">

    <div class="edit-s">
        <div class="line"></div>
        <h1 style="margin-bottom: 2rem; text-align: justify;"> خدماتنا...</h1>
    
    </div>
    @foreach($service as $serv)
        <div class="col-md-6">
            <div class="edit-imgs my-3">
                <img src="{{asset('public/public/'.$serv->img)}}" alt="Logo Home" width="70%vw" height="20%vh">
            </div>
        </div>
        <div class="col-md-6 d-flex flex-column gap-5">
            <div class="edit-dot">
                <h1>{{$serv->pargraph1}}</h1>
                <div class="edit-dot2">
                    <p>
                    {{$serv->pargraph2}}
                    </p>
                </div>
            </div>
        </div>
@endforeach
    @foreach($service1 as $serv)
        <div class="col-md-6 d-flex flex-column gap-5">
            <div class="edit-dot" style="margin-top: 11vh !important;">
                <h1>{{$serv->pargraph1}}</h1>
                <div class="edit-dot2">
                    <p>
                    {{$serv->pargraph2}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="edit-imgs my-3">
                <img src="{{asset('public/public/'.$serv->img)}}" alt="Logo Home" width="70%vw" height="20%vh">
            </div>
        </div>
    @endforeach
    @foreach($service2 as $serv)
        <div class="col-md-6">
            <div class="edit-imgs my-3">
                <img src="{{asset('public/public/'.$serv->img)}}" alt="Logo Home" width="70%vw" height="20%vh">
            </div>
        </div>
        <div class="col-md-6 d-flex flex-column gap-5">
            <div class="edit-dot">
                <h1>{{$serv->pargraph1}}</h1>
                <div class="edit-dot2">
                    <p>
                        {{$serv->pargraph2}}
                    </p>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
<!-- End Section Services -->

<!-- Start Section Project -->
<section id="portfolio" class="portfolio-area portfolio-four pb-100 aboutUs" style="direction: rtl;">
        <div class="container">
            <div class="edit-s">
                <div class="line"></div>
                <h1 style="margin-bottom: 2rem; text-align: justify;"> مشاريعنا...</h1>  
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-3 ">
                    <div class="portfolio-menu text-center">
                        <ul>
                            <!-- <li data-filter="* " class="active">الكل</li> -->
                            <li data-filter=".branding-4" class="active">النخيل 1</li>
                            <li data-filter=".marketing-4">النخيل 2</li>
                            <li data-filter=".planning-4">النخيل 3-4</li>
                            <li data-filter=".research-4">النخيل 5</li>
                            <li data-filter=".project5">النخيل 6</li>
                        </ul>
                    </div>
                    <!-- portfolio menu -->
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12 col-md-9" style="position: relative !important;">

                    <div class="row no-gutters grid mt-50 ">
                        @foreach($project1 as $project1)

                        <div class="col-lg-4 col-sm-6 single_facilities branding-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{asset('public/public/'.$project1->img)}}" alt=" ">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center ">
                                        <div class="portfolio-content ">
                                            <div class="portfolio-icon ">
                                                <a class="image-popup" href="{{asset('public/public/'.$project1->img)}}"><i class="lni lni-zoom-in "></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single portfolio -->

                        </div>
                        @endforeach 
                        @foreach($project2 as $project2)

                        <div class="col-lg-4 col-sm-6 marketing-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{asset('public/public/'.$project2->img)}}" alt=" ">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center ">
                                        <div class="portfolio-content ">
                                            <div class="portfolio-icon ">
                                                <a class="image-popup" href="{{asset('public/public/'.$project2->img)}}"><i class="lni lni-zoom-in "></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single portfolio -->

                        </div> 
                        @endforeach 
                        @foreach($project3 as $project3)

                        <div class="col-lg-4 col-sm-6 planning-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{asset('public/public/'.$project3->img)}}" alt=" ">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center ">
                                        <div class="portfolio-content ">
                                            <div class="portfolio-icon ">
                                                <a class="image-popup" href="{{asset('public/public/'.$project3->img)}}"><i class="lni lni-zoom-in "></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single portfolio -->

                        </div> 
                        @endforeach
                        @foreach($project4 as $project4)

                        <div class="col-lg-4 col-sm-6 research-4">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{asset('public/public/'.$project4->img)}}" alt=" ">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center ">
                                        <div class="portfolio-content ">
                                            <div class="portfolio-icon ">
                                                <a class="image-popup" href="{{asset('public/public/'.$project4->img)}}"><i class="lni lni-zoom-in "></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single portfolio -->

                        </div> 
                        @endforeach
                        @foreach($project5 as $project5)

                        <div class="col-lg-4 col-sm-6 project5">
                            <div class="single-portfolio">
                                <div class="portfolio-image">
                                    <img src="{{asset('public/public/'.$project5->img)}}" alt=" ">
                                    <div class="portfolio-overlay d-flex align-items-center justify-content-center ">
                                        <div class="portfolio-content ">
                                            <div class="portfolio-icon ">
                                                <a class="image-popup" href="{{asset('public/public/'.$project5->img)}}"><i class="lni lni-zoom-in "></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single portfolio -->

                        </div> 
                        @endforeach 

                    </div>   
                </div>
                <!-- row -->
            </div>
            <!-- container -->
    </section>

<!-- End Section Project -->

<!-- Start Section News -->

<div class="container aboutUs my-5" id="Categories" style="padding-top: 90px;">
    <div class="row">
    <div class="edit-s">
                <div class="line"></div>
                <h1 style="margin-bottom: 2rem; text-align: justify;"> أعمالنا السابقة...</h1>  
            </div>
        
        <div class="gallery">
            @foreach($categories as $cat)
            <figure class="gallery__item {{$cat->pargraph1}} ">
                <img src="{{asset('public/public/'.$cat->img)}}" class="gallery__img " alt="Image 1 ">

            </figure>
            @endforeach
        </div>
    </div>
</div>
@endsection