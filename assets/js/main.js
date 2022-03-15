$('.header-fixed').append('<div class="sidebar-overlay"></div>');
$(document).on('click', '#mobile_btn', function() {
    $('main-wrapper').toggleClass('slide-nav');
    $('.sidebar-overlay').toggleClass('opened');
    $('html').addClass('menu-opened');
    return false;
});
$(document).on('click', '.sidebar-overlay', function() {
    $('html').removeClass('menu-opened');
    $(this).removeClass('opened');
    $('main-wrapper').removeClass('slide-nav');
});
$(document).on('click', '#menu_close', function() {
    $('html').removeClass('menu-opened');
    $('.sidebar-overlay').removeClass('opened');
    $('main-wrapper').removeClass('slide-nav');
});
let backUp = document.getElementById("back-up")

window.onscroll = function() {
    if (this.scrollY > 200) {
        backUp.classList.add("active")
    } else {
        backUp.classList.remove("active")
    }
}

function fireSweetAlert() {
    // Swal.fire(
    //     'phone',
    //     '',
    //     'success'
    // )
    Swal.fire({

        html: '<div><img src="assets/img/phone-call-icon.png" style="width: 33px;"></div><h1> للتواصل معنا</h1> <p> الهاتف:<span>0125444388</span></p> <p> الجوال:<span>0558539555-0540409996</span></p> ',
        showCancelButton: false,
        confirmButtonText: 'موافق',
    })
}

function fireSweetAlert2() {

    Swal.fire({

        html: '<div><img src="assets/img/index.png" style="width: 33px;"></div><h1>العنوان</h1> <p> مكة المكرمة 24226</span></p><a href="https://goo.gl/maps/B6vLcRaNsYLK8mPz5" target="_blank" style="color:red;"> عرض العنوان علي خريطة جوجل <p>',
        showCancelButton: false,
        confirmButtonText: 'موافق',
    })
}

function fireSweetAlert3() {

    Swal.fire({

        html: '<div><img src="assets/img/webmail-icon-20.png" style="width: 33px;"></div><h1> للتواصل معنا</h1> <p> الايميل:<span>rakaez1@hotmail.com</span></p> <p> تويتر:<span>rakaeez1@</span></p> ',
        showCancelButton: false,
        confirmButtonText: 'موافق',
    })
}


$('.container').imagesLoaded(function() {
    var $grid = $('.grid').isotope({
        // options
        transitionDuration: '1s',
    });

    // filter items on button click
    $('.portfolio-menu ul').on('click', 'li', function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
            filter: filterValue,
            direction: 'rtl',
        });

    });
     $(".no-gutters").imagesLoaded(function() {
        $(".no-gutters").isotope({
            itemSelector: ".single_facilities",
            layoutMode: 'masonry',
            percentPosition: true,
            filter: '.branding-4',

        });
    });


    //for menu active class
    $('.portfolio-menu ul li').on('click', function(event) {
        $(this).siblings('.active').removeClass('active');
        $(this).addClass('active');
        event.preventDefault();

    });
});


$('.image-popup').magnificPopup({
    type: 'image',
    gallery: {
        enabled: true
    }
});