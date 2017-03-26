$('.menu_baz').find('li.baz').click(function() {
  $('.menu_baz .active').removeClass('active');
  $(this).addClass('active');
  console.log($(this).data('prise'));
  var prise = $(this).data('prise-baz');
  console.log(prise);
  $('.data-price-baz_text').text(prise);
})