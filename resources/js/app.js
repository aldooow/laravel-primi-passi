require('./bootstrap');

var $ = require( "jquery" );


$(document).ready(
  function(){



    $("#faq h3").on("click", function(){
       $(this).siblings('p').toggle();
       $(this).find('i').toggleClass('hidden');

    });



  }
);
