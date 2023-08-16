
$('.accordion-icon').click(function () {
  $(this).toggleClass('active');
  $(this).next().toggle();
  $('.accordion-content').toggleClass('active');
});
