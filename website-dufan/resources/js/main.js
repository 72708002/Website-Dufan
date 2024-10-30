let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
	menu.classList.toggle('bx-x');
	navbar.classList.toggle('active');
}
window.onscroll = () => {
	menu.classList.remove('bx-x');
	navbar.classList.remove('active');
}
function PasswordReset() {
  	$('form.reset-password-form').on('submit', function(e) {
      e.preventDefault();
      $('.reset-form')
      .removeClass('d-block')
      .addClass('d-none');
	    $('.reset-confirmation').addClass('d-block');
		});
	}

	window.addEventListener('load', function() {
    PasswordReset();
	});
