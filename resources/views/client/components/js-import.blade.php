
<script src={{ asset('dist/js/jquery-3.2.1.min.js') }}></script>
<script src={{ asset('dist/js/popper.js') }}></script>
<script src={{ asset('dist/js/bootstrap.min.js') }}></script>
<script src={{ asset('dist/vendors/nice-select/js/jquery.nice-select.min.js') }}></script>
<script src={{ asset('dist/js/owl.carousel.min.js') }}></script>
<script src={{ asset('dist/js/jquery.ajaxchimp.min.js') }}></script>
<script src={{ asset('dist/js/mail-script.js') }}></script>
<script src={{ asset('dist/js/gmaps.min.js') }}></script>
<script src={{ asset('dist/js/theme.js') }}></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
  integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

{{-- <script>
  $(window).load(function(){        
 $('.myModal').modal('show');
  }); 
</script> --}}

{{-- Script Comment--}}
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
  src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0&appId=3702010183197434&autoLogAppEvents=1"
  nonce="fA6Fqud9">
</script>
{{-- header --}}
<script>
  (new IntersectionObserver(function(e,o){
    if (e[0].intersectionRatio > 0){
        document.documentElement.removeAttribute('class');
    } else {
        document.documentElement.setAttribute('class','stuck');
    };
})).observe(document.querySelector('.trigger'));
</script>
 {{-- libary carousel --}}
<script>
  $("#owl-carousel").owlCarousel({
    navigation : true
  });
</script>
{{-- libary wow js --}}
<script>
  // Wow
var Wow = function() {
    // "use strict";

    // Handle Wow
    var handleWow = function() {
        var wow = new WOW({
            boxClass: 'wow', // animated element css class (default is wow)
            offset: 0, // distance to the element when triggering the animation (default is 0)
            mobile: false, // trigger animations on mobile devices (true is default)
            tablet: false // trigger animations on tablet devices (true is default)
        });
        wow.init();
    }

    return {
        init: function() {
            handleWow(); // initial setup for counter
        }
    }
}();

$(document).ready(function() {
    Wow.init();
});
</script>



<script>
  $(document).ready(function () {
        $('.dropdown-submenu a.test').on("click", function (e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });

    $(document).ready(() => {
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
    })

    $("document").ready(function() {
  $("a").css("color", "inherit");
  $("#header").css("color", "inherit");
  $("#signature").css("color", "inherit");
  $("#search-box").css("color", "inherit");
  $("#search-box").on("click", function() {
    this.id="search-box-active";
    $("#search-box-active").html("<form autocomplete=off><input type='text' id = 'input-field'></input></form>");
    $("#input-field").focus();
  });
  
  function getResults() {
    if($("#input-field").val().length>0) {
      searchPhrase = $("#input-field").val();
      APIurl = "https://en.wikipedia.org/w/api.php?action=query&list=search&srsearch=" + searchPhrase + "&srlimit=10&prop=info&format=json&callback=?"; //It is necessary to add the "callback" parameter (Same-Origin policy)
      $.ajax({
        type: "GET",
        url: APIurl,
        dataType: "json",
        success: function (x) {
          var results = "";
          for(var i=0; i<10; i++) {
            var titleLength = JSON.stringify(x.query.search[i].title).length;
            var snippetLength = JSON.stringify(x.query.search[i].snippet).length;
            results += "<a id='result-tile' href='http://en.wikipedia.org/?curid=" + JSON.stringify(x.query.search[i].pageid) + "' target=blank><span id='article-title'>" + JSON.stringify(x.query.search[i].title).slice(1, titleLength-1) + "</span><span id='snippet'>" + JSON.stringify(x.query.search[i].snippet).slice(0, snippetLength-1) + " (...)\"</span></a>";
            $("#results").html(results);
          };
        },
      });
    };
  }
  
  $("#search-icon").on("click", function() {
    getResults();
  });
  $("#search-box").submit(function(e) {
    e.preventDefault();
    getResults();
  });
})
</script>

