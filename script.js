$( document ).ready(function() {
    console.log( "Suck it Trebek!" );

    $('a[href^="#"]').on('click', function(e){
      e.preventDefault();

      var target = this.hash;
      var $target = $(target);


       $("html, body").stop().animate({ scrollLeft: $(target).offset().left, scrollTop: $(target).offset().top }, 1200);
    });

});

// $(document).ready(function() {
//
//
//   $('a[href^="#"]').on('click', function(e){
//        e.preventDefault();
//
//        var target = $(this).attr("href");
//
//        $("html, body").stop().animate({ scrollLeft: $(target).offset().left, scrollTop: $(target).offset().top }, 1200);
//     });
//
// });
