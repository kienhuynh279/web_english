<script src={{ asset('dist/js/jquery-3.2.1.min.js') }}></script>
<script src={{ asset('dist/js/popper.js') }}></script>
<script src={{ asset('dist/js/bootstrap.min.js') }}></script>
<script src={{ asset('dist/vendors/nice-select/js/jquery.nice-select.min.js') }}></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src={{ asset('dist/js/owl-carousel-thumb.min.js') }}></script>
<script src={{ asset('dist/js/jquery.ajaxchimp.min.js') }}></script>
<script src={{ asset('dist/js/mail-script.js') }}></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src={{ asset('dist/js/gmaps.min.js') }}></script>
<script src={{ asset('dist/js/theme.js') }}></script>

<script>
    $(document).ready(function () {
        $('.dropdown-submenu a.test').on("click", function (e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });

    $('#rating').owlCarousel({
        loop: true,
        nav: true,
        items: 1,
        dots: true,
        autoplay: true,
        animateIn: 'flipInX',
        animateOut: 'fadeOut',
        navText:['<i class="fa fa-chevron-left p-3"></i>','<i class="fa fa-chevron-right p-3"></i>'],
        autoplayTimeout: 5000,
        autoplayHoverPause:true,
    });

    $('#tips').owlCarousel({
        loop: true,
        nav: true,
        items: 1,
        dots: true,
        autoplay: true,
        animateIn: 'flipInX',
        animateOut: 'fadeOut',
        navText:['<i class="fa fa-chevron-left p-3"></i>','<i class="fa fa-chevron-right p-3"></i>'],
        autoplayTimeout: 5000,
        autoplayHoverPause:true,
    });
</script>
