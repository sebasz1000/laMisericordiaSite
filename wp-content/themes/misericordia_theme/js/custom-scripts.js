jQuery(document).ready(function($) {

  
     var servicioLink = document.getElementsByClassName('primary-menu-servicios')[0].getElementsByTagName('a')[0];
            var servicioIcon = document.createElement('ion-icon');
             servicioIcon.setAttribute('name','heart');
            servicioLink.appendChild(servicioIcon);
             var contratacionesLink = document.getElementsByClassName('primary-menu-contrataciones')[0].getElementsByTagName('a')[0];
            var contratacionesIcon = document.createElement('ion-icon');
             contratacionesIcon.setAttribute('name','people');
            contratacionesLink.appendChild(contratacionesIcon);
             var contactanosoLink = document.getElementsByClassName('primary-menu-contactanos')[0].getElementsByTagName('a')[0];
            var  contactanosIcon = document.createElement('ion-icon');
             contactanosIcon.setAttribute('name','call');
            contactanosoLink.appendChild(contactanosIcon);
  
  
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
function checkOffset(elementID) {
    if($(elementID).offset().top + $(elementID).height() 
                                           >= $('#footer').offset().top - 4)
        $(elementID).css('position', 'absolute');
    if($(document).scrollTop() + window.innerHeight < $('#footer').offset().top)
        $(elementID).css('position', 'fixed'); // restore when you scroll up
}

$(document).scroll(function() {
    checkOffset('#poll');
});
  
$(document).scroll(function() {
    checkOffset('#extra-links');
});
  
});