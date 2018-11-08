jQuery(document).ready(function($) {

  // appens icons for primary menu
  function appendIcon(className, ionIconName){
    if(document.getElementsByClassName(className)[0]){
        const menuItem = document.getElementsByClassName(className)[0].getElementsByTagName('a')[0];                   
        const icon = document.createElement('ion-icon');
        icon.setAttribute('name', ionIconName);
        menuItem.appendChild(icon);
    }
  }
  
  appendIcon('primary-menu-servicios','heart');
  appendIcon('primary-menu-contrataciones','people');
  appendIcon('primary-menu-contactanos','call');
  
  //appends dropdown-item class(for bootstrap dropdown menu styles) for secondary menu
  const secondaryMenu = document.getElementById('secondary-menu').getElementsByTagName('li');
  
  for(var i = 0; i < secondaryMenu.length; i++){
    secondaryMenu[i].classList.add('dropdown-item');
  }
  
  
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