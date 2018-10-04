$(document).ready(function(){
  //slide out drawer
  $(".burger").click(function(){
    $(".menu").toggleClass("active");
  });
  $(".close").click(function(){
    $(".menu").removeClass("active");
  })

  //smooooooth scrollinnnn'
  $(document).on('click', 'a[href*="#"]:not([href="#"])', function(e) {
    $(".menu").removeClass("active");
    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 500);
            e.preventDefault();
        }
    }
});
  //change nav color on scroll
  $(function () {
  $(document).scroll(function () {
    var $nav = $("nav");
    var $mainNav= $(".main-nav");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    $mainNav.toggleClass('nav-scrolled', $(this).scrollTop() > $nav.height());
  });
});
});
