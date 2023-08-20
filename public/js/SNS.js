
$('.accordion-icon').click(function () {
  $(this).toggleClass('active');
  $(this).next().toggle();
  $('.accordion-content').toggleClass('active');
});


$('.edit-icon').on('click', function () {
  console.log(modal);
  $(modal).fadeIn();
  return false;
});
