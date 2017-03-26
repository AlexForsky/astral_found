$('.menu_baz').find('li.baz').click(function() {
  $('.menu_baz .active').removeClass('active');
  $(this).addClass('active');
  console.log($(this).data('prise'));
  var prise = $(this).data('prise-baz');
  var priseDop = $(this).data('prise-baz-dop');
  console.log(prise);
  $('.data-price-baz_text').text(prise);
  $('.data-price-baz_text_dop').text(priseDop);
})