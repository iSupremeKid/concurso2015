jQuery(document).ready(function ($) {

	$('#tabs').responsiveTabs({
		rotate: false,
		startCollapsed: 'accordion',
		collapsible: 'accordion',
		animation: 'slide',
		setHash: false
	});
	$("#cssmenu").menumaker({
		title: "Menu",
		format: "dropdown"
	});
	$('#demoLightbox').lightbox({'show':false});
	$('.bxslider').bxSlider({
		mode:'fade',
		speed:500,
		pager:false,
		controls:false,
		auto:true,
		pause:2500
	});
	$('#myModal').on('hide.bs.modal', function (e) {
		$('#formContacto').find('.deleted').val('');
	});
	
	$( "#enviarContacto" ).click(function() {


	});

	
});
	
(function($) {

	$.fn.menumaker = function(options) {
		
		var cssmenu = $(this), settings = $.extend({
			title: "Menu",
			format: "dropdown",
			breakpoint: 750,
		}, options);

		return this.each(function() {
			cssmenu.find('li ul').parent().addClass('has-sub');
			if (settings.format != 'select') {
				cssmenu.prepend('<div id="menu-button">' + settings.title + '</div>');
				$(this).find("#menu-button").on('click', function(){
					$(this).toggleClass('menu-opened');
					var mainmenu = $(this).next('ul');
					if (mainmenu.hasClass('open')) { 
						mainmenu.hide().removeClass('open');
					}
					else {
						mainmenu.show().addClass('open');
						if (settings.format === "dropdown") {
							mainmenu.find('ul').show();
						}
					}
				});

				multiTg = function() {
					cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
					cssmenu.find('.submenu-button').on('click', function() {
						$(this).toggleClass('submenu-opened');
						if ($(this).siblings('ul').hasClass('open')) {
							$(this).siblings('ul').removeClass('open').hide();
						}
						else {
							$(this).siblings('ul').addClass('open').show();
						}
					});
				};

				if (settings.format === 'multitoggle') multiTg();
				else cssmenu.addClass('dropdown');
			}

			else if (settings.format === 'select')
			{
				cssmenu.append('<select style="width: 100%"/>').addClass('select-list');
				var selectList = cssmenu.find('select');
				selectList.append('<option>' + settings.title + '</option>', {
					"selected": "selected",
					"value": ""});
				cssmenu.find('a').each(function() {
					var element = $(this), indentation = "";
					for (i = 1; i < element.parents('ul').length; i++)
					{
						indentation += '-';
					}
					selectList.append('<option value="' + $(this).attr('href') + '">' + indentation + element.text() + '</option');
				});
				selectList.on('change', function() {
					window.location = $(this).find("option:selected").val();
				});
			}

			if (settings.sticky === true) cssmenu.css('position', 'fixed');

			resizeFix = function() {
				if ($(window).width() > settings.breakpoint) {
					cssmenu.find('ul').show();
					cssmenu.removeClass('small-screen');
					if (settings.format === 'select') {
						cssmenu.find('select').hide();
					}
					else {
						cssmenu.find("#menu-button").removeClass("menu-opened");
					}
				}

				if ($(window).width() <= settings.breakpoint) {
					cssmenu.find('ul').hide().removeClass('open');
					cssmenu.addClass('small-screen');
					if (settings.format === 'select') {
						cssmenu.find('select').show();
					}
				}
			};
			resizeFix();
			return $(window).on('resize', resizeFix);

		});
};
})(jQuery);