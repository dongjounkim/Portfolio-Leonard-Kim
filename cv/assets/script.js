"use strict";
// $(document).ready(function(){
//   //smooth scrolling to a
//   $("a").on('click', function(event) {

//     if (this.hash !== "") {
//       event.preventDefault();

//       var hash = this.hash;
//       console.log(hash);

//       $('html, body').animate({
//         scrollTop: $(hash).offset().top
//       }, 500, function(){

//         window.location.hash = hash;
//       });
//     }
//   });
// });
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});