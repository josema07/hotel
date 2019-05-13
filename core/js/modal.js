var modal = document.querySelector('#miModal');
var flex = document.querySelector('#flex');
var abrir = document.querySelector('.abrir');
var close = document.querySelector('.close');

abrir.addEventListener('click', function() {
		modal.style.display = 'block';
});

close.addEventListener('click', function() {
	modal.style.display = 'none';
	console.log('hola');
});