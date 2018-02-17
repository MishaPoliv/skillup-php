$(document).ready(function() {
   $('.btn-slide').click(function () {
     $('#panel').slideToggle('slow');
      $('.btn-slide').toggleClass('active');

   });

   $('.delete').click(function(){
       $(this).parent().animate({opacity: 'hide'}, 'slow');
       $(this).parent().animate({height: '50 px'}, 'normal');
       $(this).parent().animate({width: '50 px'}, 'normal');

   });

   $('.js-ajax').click(function (event) {
      event.preventDefault(); //отмена "действия по умолчанию объекта"
   //   $('#content').load($(this).attr('href'));  или 2 ниже строки
      $.get($(this).attr('href'), function (data) {
          $('#content').html(data);
      });
   });

});

