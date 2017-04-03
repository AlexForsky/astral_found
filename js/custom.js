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


//для базового Москва
$('.menu_baz_m').find('li.baz_m').click(function() {
  $('.menu_baz_m .active').removeClass('active');
  $(this).addClass('active');
  var prise = $(this).data('prise-baz_m');
  var priseDop = $(this).data('prise-baz_m-dop');
  $('.data-price-baz_m_text').text(prise);
  $('.data-price-baz_m_text_dop').text(priseDop);
})

//для оптимального Москва
$('.menu_opt_m').find('li.opt_m').click(function() {
  $('.menu_opt_m .active').removeClass('active');
  $(this).addClass('active');
  var prise = $(this).data('prise-opt_m');
  var priseDop = $(this).data('prise-opt_m-dop');
  $('.data-price-opt_m_text').text(prise);
  $('.data-price-opt_m_text_dop').text(priseDop);
})

//для ГК Москва
$('.menu_group_m').find('li.group_m').click(function() {
  $('.menu_group_m .active').removeClass('active');
  $(this).addClass('active');
  var prise = $(this).data('prise-group_m');
  $('.data-price-group_m_text').text(prise);
 })


//обработчик меню тарифов
$('.tarif__menu').find('li.tarif__menu-item').click(function() {
  $('.accordion-item .is-active').removeClass('is-active');
  
 })

