
$(function ($) {
   if(!Modernizr.touch){ 
     $.okvideo({ source: 'F5fgvvoHXBA', //set video source here, either YouTube or Vimeo
                 adproof: true,
                 highdef:true,
                 hd:true, 
                  });
          } else {
         $('.hero').removeClass('hero-video'); //If on mobile, reverts back to background set in the "hero" class    
      } 
});
