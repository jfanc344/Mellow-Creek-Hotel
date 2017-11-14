$( document ).ready(
  function () {
           $( '#call_back_btn' ).click( function(){
             $.get( "../../controller/ajax_get.php" , {
                 name : $( '#name' ).val(),
                 Email : $( '#Email' ).val(),
                 feedback : $( '#feedback' ).val()
             } , function( data ){
               $( '#responseText' ).val( data );
             } );
           });
  }
);
$( document ).ready(
function () {
           $( '#deletereservation' ).click( function(){
             $.post( "../../Controller/ajax_post.php" , {
                 ajaxbookingID : $( '#ajaxbookingID' ).val()
             } , function(html){
                  location.reload();
              } );
           });
  });
