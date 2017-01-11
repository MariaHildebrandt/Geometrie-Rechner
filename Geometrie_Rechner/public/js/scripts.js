/* Fade-In-Effekte für Auswahlboxen*/

$( "#click-to-fade" ).click(function () {
  if ( $( "#fade-boxes:first" ).is( ":hidden" )){
    $( "#fade-boxes" ).fadeIn( "slow" );
  }else{
    $( "#fade-boxes" ).fadeOut();
  }
  
});


/* Fade-In-Effekte für Eingabeformular in #/create.blade.php und Ergebnistabelle*/

if ( $( "#fade-calculator" ).is( ":hidden" )){
    $( "#fade-calculator" ).fadeIn( "slow" );
}
if ( $( "#fade-table" ).is( ":hidden" )){
    $( "#fade-table" ).fadeIn( "slow" );
}


