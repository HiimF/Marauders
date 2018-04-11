$( '#cover-home' ).slick({
  dots: false,
  infinite: true,
  speed: 800,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 2000,
});

$( '#characters-home .carrossel-container .carrossel' ).slick({
  dots: false,
  infinite: true,
  speed: 500,
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: true,
  autoplay: false,
  prevArrow: $( '#characters-home .before' ),
  nextArrow: $( '#characters-home .after' ),
});