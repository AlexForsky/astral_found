$('.menu_baz').find('li.baz').click(function() {
  $('.menu_baz .active').removeClass('active');
  $(this).addClass('active');
  var prise = $(this).data('prise-baz');
  var priseDop = $(this).data('prise-baz-dop');
  $('.data-price-baz_text').text(prise);
  $('.data-price-baz_text_dop').text(priseDop);
})

$('.menu_opt').find('li.opt').click(function() {
  $('.menu_opt .active').removeClass('active');
  $(this).addClass('active');
  var prise = $(this).data('prise-opt');
  var priseDop = $(this).data('prise-opt-dop');
  $('.data-price-opt_text').text(prise);
  $('.data-price-opt_text_dop').text(priseDop);
})