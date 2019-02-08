$(document).ready(function () {
    new WOW().init();
    plyr.setup();
    
        //carousel
    
    $('.carousel').slick({
        dots: true,
        autoplay: true,
      centerMode: true,
      centerPadding: '60px',
      slidesToShow: 5,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 4
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        }
      ]
    });
});
    //map
     var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 50.8894934, lng: 5.5272793},
          zoom: 11
        });
      }

    //lightbox
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });

    //carousel

   