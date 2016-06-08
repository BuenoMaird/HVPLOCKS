$(document).ready(function(){

$(window).on('resize', function(){
    var menu = $('#nav');
    var mobile_menu = $('#mobile_nav')

    var w = $(window).width();
    if(w >= 1080 ) {
        menu.show();
        mobile_menu.hide();
    }else{
        menu.hide();
        mobile_menu.show();
    };
});

$('#mobile_nav').on('click', function(){

   var menu = $('#nav')
   var mobile_menu = $('#mobile_nav')

    if ( menu.css('display') == 'none' ){
        mobile_menu.text('Close');
    }else{
      mobile_menu.text('Menu')
    }

   menu.toggle('fast', 'linear');

})


var mobileMenu = function(){
  var w = $(window).width();
  var menu = $('#nav');
  var mobile_menu = $('#mobile_nav');

  if( w <= '1080'){
    menu.hide()
    mobile_menu.show();

  }else{
    menu.show()
    mobile_menu.hide();
  }
}

mobileMenu()
});