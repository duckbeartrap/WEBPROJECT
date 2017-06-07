$(document).ready(

function() {
  var pull    = $('#pull');
    menu    = $('ul');
    menuHeight  = menu.height();
 
  $(pull).on('click', function(e) {
    e.preventDefault();
    menu.slideToggle();
  });
});