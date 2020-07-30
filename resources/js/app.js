require('./bootstrap');

var $ = require( "jquery" );


$(document).ready(
  function(){



    $("#faq").on("click", function(){
       $(this).find('p').toggle();
    });



  }
);
