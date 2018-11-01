jQuery(document).ready(function($) {

//For style of pool buttons
const votebtn = document.getElementsByClassName('Buttons')[0];
  if(votebtn != null){
votebtn.classList.add('btn');
votebtn.classList.add('btn-warning');
votebtn.classList.add('btn-block');
  }

  //toggle btn

  const pollForm = document.getElementById('polls_form_2');
  
  $('#poll-toggle-btn').click(function(){
    $('#polls-2').toggle();
    $('#icon-up').toggle();
     $('#icon-down').toggle();
  });
  


//keeps pool container fixed but over footer
function checkOffset() {
    if($('#poll').offset().top + $('#poll').height() 
                                           >= $('#footer').offset().top - 10)
        $('#poll').css('position', 'absolute');
    if($(document).scrollTop() + window.innerHeight < $('#footer').offset().top)
        $('#poll').css('position', 'fixed'); // restore when you scroll up
}

$(document).scroll(function() {
    checkOffset();
});
  
});