$('.prav_form').find('li').click(function() {
  $('.prav_form .active').removeClass('active');
  $(this).addClass('active');
  console.log($(this).data('prise'));
  var prise = $(this).data('prise');
  console.log(prise);
  $('.data-price-text').text(prise);
})