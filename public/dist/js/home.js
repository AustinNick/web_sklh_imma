$(document).ready(function(){
  var Y;
  $(window).scroll(function(){
    Y = this.scrollY;
    if(this.scrollY > 20) {
      $(".navbar").addClass("sticky");
      $(".navbar .mn").css('color', "black");
      $(".goTop").fadeIn();
    }
    else {
      $(".navbar").removeClass("sticky");
      $(".navbar .mn").css('color', "#fff");
      $(".goTop").fadeOut();
    }
  });

  $(".goTop").click(function(){scroll(0,0)});

  $('.menu-toggler').click(function(){
    $(this).toggleClass("active");
    $(".navbar-menu").toggleClass("active");
  });

  $('.navbar-menu .mn')
  .mouseover(function() {
    var randomnum = (Math.floor(Math.random() * 3)).toString();

    if (randomnum == "0") {
      $(this).css('color', "#41ACFF");
    } else if (randomnum == "1") {
      $(this).css('color', "#FF3131");
    } else {
      $(this).css('color', "#FFC31C");
    }
  })
  .mouseout(function() {
    if (Y > 20) {
      $(this).css('color', "black");
    } else {
      $(this).css('color', "#fff");
    }
  });

  $('.icon')
  .mouseover(function() {
    var randomnum = (Math.floor(Math.random() * 3)).toString();

    if (randomnum == "0") {
      $(this).css('color', "#41ACFF");
    } else if (randomnum == "1") {
      $(this).css('color', "#FF3131");
    } else {
      $(this).css('color', "#FFC31C");
    }
  })
  .mouseout(function() {
    $(this).css('color', "#fff");
  });


  $(".berita-wrap").magnificPopup({
    delegate  : 'a',
    type      : 'image',
    gallery   : {enabled:true}
  });

  $(".time-line").magnificPopup({
    delegate  : 'a',
    type      : 'image',
    gallery   : {enabled:true}
  });
});