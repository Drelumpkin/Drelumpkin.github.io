// This script will make the about me section disappear and reappear on a toggle
$(document).ready(() => {
	$( '.toggle-button').on('click', () => {
		$('.button').toggleClass('');
	});
})