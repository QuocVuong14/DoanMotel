const aboutBox = document.querySelector(".section_about_box");
const more = document.querySelector(".section_about_more");

more.addEventListener("click", () => {
  aboutBox.style.height = "100%";
  more.style.display = "none";
});
//slick
// $(".post-slider").slick({
//   infinite: true,
//   slidesToShow: 1,
//   slidesToScroll: 1,
// });

$('.menu__icon').click(function(){
  $('.menu__overlay').show();
  $('.menu__mobile__wrap').addClass('active');
});
$('.menu__overlay').click(function(){
  // $('.menu__overlay').show();
  $('.menu__mobile__wrap').removeClass('active');
  $(this).hide();
});