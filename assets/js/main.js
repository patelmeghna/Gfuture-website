function mobileMenu() {
  var menu = document.querySelector(".hamburger_menu");

  menu.classList.toggle("open");
}



// ================================= begin::loader =============================
$(window).on("load", function () {
  $(".loader-wrap").fadeOut(3000);
});
// ================================= end::loader =============================

// ================================= begin::scroll reveal =============================
// window.addEventListener("scroll", reveal);

// function reveal() {
//   var reveal = document.querySelectorAll('.reveal');

//   for (var i = 0; i < reveal.length; i++) {

//     var windowheight = window.innerHeight;
//     var revealtop = reveal[i].getBoundingClientRect().top;
//     var revealpoint = 150;

//     if (revealtop < windowheight - windowheight) {
//       reveal[i].classList.add('active');
//     } else {
//       reveal[i].classList.remove('active');
//     }
//   }
// }
// ================================= end::scroll reveal =============================
