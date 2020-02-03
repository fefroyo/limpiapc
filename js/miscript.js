// BUSCAR

$(function () {
    $('a[href="#search"]').on('click', function(event) {
        event.preventDefault();
        $('#search').addClass('open');
        $('#search > form > input[type="search"]').focus();
    });
    
    $('#search, #search button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });
    
    $('form').submit(function(event) {
        event.preventDefault();
        return false;
    })
});
        //jQuery to collapse the navbar on scroll


$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});


$(document).ready(function() {
  // navigation click actions 
  $('.scroll-link').on('click', function(event){
    event.preventDefault();
    var sectionID = $(this).attr("data-id");
    scrollToID('#' + sectionID, 750);
  });
  // scroll to top action
  $('.scroll-top').on('click', function(event) {
    event.preventDefault();
    $('html, body').animate({scrollTop:0}, 'slow');     
  });
  // mobile nav toggle
  $('#nav-toggle').on('click', function (event) {
    event.preventDefault();
    $('#main-nav').toggleClass("open");
  });
});

// scroll function
function scrollToID(id, speed){
  var offSet = 50;
  var targetOffset = $(id).offset().top - offSet;
  var mainNav = $('#main-nav');
  $('html,body').animate({scrollTop:targetOffset}, speed);
  if (mainNav.hasClass("open")) {
    mainNav.css("height", "1px").removeClass("in").addClass("collapse");
    mainNav.removeClass("open");
  }
}
if (typeof console === "undefined") {
    console = {
        log: function() { }
    };
}



// $(document).ready(function() {
     
//         $("#owl-mislide").owlCarousel({

//       navigation : true, // Show next and prev buttons
//       navigationText: [
//       "<span class='fa fa-angle-left fa-4x'></span>",
//       "<span class='fa fa-angle-right fa-4x'></span>"
//       ],
//       slideSpeed : 300,
//       paginationSpeed : 400,
//       singleItem:true,

//         });
     
//     });

    $(document).ready(function() {
     
        $("#owl-limpieza").owlCarousel(
        {
          items : 6,
          
          // dots : false,
          loop : true,
        }
          );
     
    });

    $(document).ready(function() {
     
        $("#owl-pograms").owlCarousel(
          {
            items : 1,
            
            // nav : true, // Show next and prev buttons - navigation - navigationText
            navigation : true,
            navigationText: [
            // navText: [
                "<span class='fa fa-angle-left fa-4x'></span>",
                "<span class='fa fa-angle-right fa-4x'></span>"
              ],
            
            // slideSpeed : 300,
            // paginationSpeed : 400,
            singleItem:true,
            loop:true,

            // autoplay : true, // autoPlay -owl1
            // autoplayHoverPause : true,
            dots : false,
            pagination : false,
            

          }
        );
            // owl.on('mousewheel', '.owl-stage', function (e) {
            // if (e.deltaY>0) {
            //     owl.trigger('next.owl');
            // } else {
            //     owl.trigger('prev.owl');
            // }
            // e.preventDefault();
            // });

     
    });



