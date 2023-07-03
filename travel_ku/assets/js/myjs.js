const swiper = new Swiper('#banner .swiper',  {
    pagination : {
      el : '.swiper-pagination',
      type : 'bullets',
      paginationClickable: true,
    },
    // Optional parameters
    loop: true,
    autoplay: {
      delay:4000,
    },
  })
  const myswiper = new Swiper('#showcase .swiper', {
    // Optional 
    loop: true,
    slidesPerView: 3,
    SlidesSpace:30,
    autoplay: {
      delay:1000,
    },
  });

  const myswiper2 = new Swiper('#listing .swiper', {
    loop: true,
    slidesPerView : 4,
    SlidesSpace : 20,
  });
$(document).ready(function(){
  $(window).on("load", function (){
      $(".preloader").addClass("loaded");
  })

  $(window).scroll(function(){
    if($(this).scrollTop() > 50){
        $(".navbar").removeClass("sticky-top");
        $(".navbar").addClass("fixed-top");
        $(".navbar").addClass("bg-first");
        $(".navbar").addClass("shadow-sm");
    }else{
        $(".navbar").removeClass("fixed-top");
        $(".navbar").removeClass("bg-first");
        $(".navbar").removeClass("shadow-sm");
    }
})

})