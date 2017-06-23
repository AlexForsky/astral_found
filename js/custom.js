//для базового МО
$('.menu_baz').find('li.baz').click(function() {
  $('.menu_baz .active').removeClass('active');
  $(this).addClass('active');
  var prise = $(this).data('prise-baz');
  var priseDop = $(this).data('prise-baz-dop');
  $('.data-price-baz_text').text(prise);
  $('.data-price-baz_text_dop').text(priseDop);
})

//для оптимального МО
$('.menu_opt').find('li.opt').click(function() {
  $('.menu_opt .active').removeClass('active');
  $(this).addClass('active');
  var prise = $(this).data('prise-opt');
  var priseDop = $(this).data('prise-opt-dop');
  $('.data-price-opt_text').text(prise);
  $('.data-price-opt_text_dop').text(priseDop);
})

//для ГК МО
$('.menu_group').find('li.group').click(function() {
  $('.menu_group .active').removeClass('active');
  $(this).addClass('active');
  var prise = $(this).data('prise-group');
  $('.data-price-group_text').text(prise);
 })








