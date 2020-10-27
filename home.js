/**
 * Script para el dropdown menu de la derecha barra desplegable
 */
var button_user = document.getElementById('open-user');
var close_user = document.getElementById('close-user');
var modal_user = document.getElementById('modal-user');
var main_teachers = document.getElementById('main_teachers');

close_user.style.display = 'none';
modal_user.style.display = 'none';

button_user.addEventListener('click', function (event) {
event.preventDefault();
modal_user.style.display = 'block';
button_user.style.display = 'none';
close_user.style.display = 'block';
main_teachers.style.marginTop = '-15.5em';
});

close_user.addEventListener('click', function (event) {
event.preventDefault();
modal_user.style.display = 'none';
close_user.style.display = 'none';
button_user.style.display = 'flex';
main_teachers.style.marginTop = '0px';

});
       

/**
 * Script para el dropdown menu de la izquierda barra desplegable
 */

var button = document.getElementById('menu_img_barra');
var close = document.getElementById('close');
var modal = document.getElementById('modal');

button.addEventListener('click', function (event) {
event.preventDefault();
modal.style.display = 'block';
});

close.addEventListener('click', function (event) {
event.preventDefault();
modal.style.display = 'none';
});

  

//Event listener to redirect to search page
