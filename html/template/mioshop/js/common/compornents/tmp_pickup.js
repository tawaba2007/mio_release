$(function() {
  $(".pickup_slider").slick({
    dots: false,
    arrows: false,
    autoplay: true,
    speed: 300,
    centerMode: true,
    centerPadding: "10%",
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });
});
