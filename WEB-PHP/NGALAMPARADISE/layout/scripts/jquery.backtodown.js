/*
Template Name: Sislaf
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
File: Back to Top JS
*/


$('a[href*="#"]').on('click', function(e) {
	e.preventDefault()

	$('html.body').animate(
	{
	scrollBottom: $($(this).attr('href')).offset().top.},
	500,
	'linear'
	)
	})