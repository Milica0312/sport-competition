/*$(document).ready(function() {
  $('a[href*=#]').bind('click', function(e) {
      e.preventDefault(); // prevent hard jump, the default behavior

      var target = $(this).attr("href"); // Set the target as variable

      // perform animated scrolling by getting top-position of target-element and set it as scroll target
      $('html, body').stop().animate({
          scrollTop: $(target).offset().top
      }, 600, function() {
          location.hash = target; //attach the hash (#jumptarget) to the pageurl
      });

      return false;
  });
});*/

$(window).scroll(function() {
  var scrollDistance = $(window).scrollTop();

  // Show/hide menu on scroll
  //if (scrollDistance >= 850) {
  //		$('nav').fadeIn("fast");
  //} else {
  //		$('nav').fadeOut("fast");
  //}

  // Assign active class to nav links while scolling
  $('.page-section').each(function(i) {
      if ($(this).position().top <= scrollDistance) {
          if(this.id == "section1"){
              $('.navigation #changinglogo').removeClass().addClass('section1bcg');
              document.getElementById("logo").src = "img/LOGO_BELI.png";
          }
          else if(this.id == "section2"){
                $('.navigation #changinglogo').removeClass().addClass('section2bcg');
                $('#burger span').removeClass().addClass('section2span');
                document.getElementById("logo").src = "img/LOGO_BELI.png";
          }
          else if(this.id == "section3"){
                $('.navigation #changinglogo').removeClass().addClass('section3bcg');
                $('#burger span').removeClass().addClass('sectionspancol');
                document.getElementById("logo").src = "img/LOGO_BOJA.png";
          }
          else if(this.id == "section4"){
                $('.navigation #changinglogo').removeClass().addClass('section4bcg');
                document.getElementById("logo").src = "img/LOGO_BELI.png";
          }
          else if(this.id == "section5"){
                $('.navigation #changinglogo').removeClass().addClass('section5bcg');
                document.getElementById("logo").src = "img/LOGO_BELI.png";
          }
          else if(this.id == "section6"){
                $('.navigation #changinglogo').removeClass().addClass('section6bcg');
                document.getElementById("logo").src = "img/LOGO_BELI.png";
          }
          else if(this.id == "section7"){
                $('.navigation #changinglogo').removeClass().addClass('section7bcg');
                document.getElementById("logo").src = "img/LOGO_BELI.png";
          }
          else{
          $('.navigation #changinglogo').addClass('sectionbcg');
            document.getElementById("logo").src = "img/LOGO_BOJA.png";
          }
          $('.navigation a.active').removeClass('active');
          $('.navigation a').eq(i).addClass('active');
      }
  });
}).scroll();
$(document).ready(function() {

  var scrollLink = $('.navigation__link');

  // Smooth scrolling
  scrollLink.click(function(e) {
    e.preventDefault();
    $('body,html').animate({
      scrollTop: $(this.hash).offset().top
    }, 1000 );
  });
});
/*progress bar*/
$(window).scroll(function(){
  $('.counter').css('width', ($(this).scrollTop() / ($('body').height() - $(window).height()))*100 + "%");

  });

  /*responsive navigation*/
  $(document).ready(function(){
    $("#burger-container").on('click', function(){
        $(this).toggleClass("open");
        $(".navigation").toggleClass("respopen");
    });
  });
/**/
