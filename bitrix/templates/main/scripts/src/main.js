$(document).ready(function(){
	
	function circlePosition(){
	$('#main-bottom .main-items img').each(function(){
				var imgWidth = $(this).width();
				var CirclePosition = imgWidth - 270;
				var result = Math.ceil(CirclePosition / 2);
				$(this).parent().find('.circle-description').css({'left': result});
			});	
	}
	
	function imgSize() { 
		
		var width = 980; 
		var imgSize = 714;  
		var bodyWidth = $('html').width();  
		var multiplier = bodyWidth / width;  
		if ($('html').width() >= width) imgSize = Math.floor(imgSize * multiplier); 
		circlePosition();
		if(bodyWidth <= 1183){
			$('#main-bottom .main-items img').height(imgSize);
		}else{
			$('#main-bottom .main-items img').css({'height': '100%'});
		}
		
	}
	
	function topMenu(){
		$('#top-menu li').hover(function () {
				clearTimeout($.data(this,'timer'));
				$('ul',this).stop(true,true).slideDown(300);
			}, function () {
				$.data(this,'timer', setTimeout($.proxy(function() {
				$('ul',this).stop(true,true).slideUp(300);
			}, this), 100));
		});
	}
	
	function circleShow(){
		$('#main-bottom .main-items').each(function(){
			$(this).hover(function(){
				$(this).find('.circle-description').fadeIn(150);
			}, function(){
				$(this).find('.circle-description').fadeOut(150);
			})
		});
	}
	
	function mainMenuActive(attrLink){
		var path = window.location.pathname;
		var linkMenu = $(attrLink);
		$(linkMenu).each(function(){
			if(path === $(this).attr('href')){
				$(this).addClass('active');
			}
		});
	}
	
	function formShow(linkActive, formActive){
		$(linkActive).click( function(event){
			event.preventDefault();
			$('.overlay').fadeIn(400,
				function(){
					$(formActive).css('display', 'block').animate({opacity: 1, top: '50%'}, 200);
				});
		});
		$('.close, .overlay').click( function(event){
			event.preventDefault();
			$(formActive).animate({opacity: 0, top: '45%'}, 200,
				function(){
					$(this).css('display', 'none');
					$('.overlay').fadeOut(400);
				}
			);
		});	
	}
	
	function imgCatalogPosition(){
		var mainBlock = $('.description .desc-item');
		
		mainBlock.each(function(){
			var imgheight = $(this).find('img');
			var differenseHeight = Math.ceil(($(this).height() - imgheight.height()) / 2);
			var differenseWidth = Math.ceil((510 - imgheight.width()) / 2);
			imgheight.css({'padding-top': differenseHeight,
						   'padding-bottom': differenseHeight,
						   'padding-left': differenseWidth,
						   'padding-right': differenseWidth
						  });
		});
	}
	
	function positionContentFromContacts(){
		$(".contacts .map").each(function(){
			var mainFrame = $(this);
			var infoContacts = $(this).find('.text');
			var result = Math.ceil((mainFrame.height() - infoContacts.height()) / 2);
			infoContacts.css({'margin-top': result})
		});
	}
	
	function accardionVacancies(){
		$('.vacancies-view > li > a').click(function(event){
			event.preventDefault();
			$('.vacancies-view > li > .text').slideUp();	
			$(this).parent().find('.text').slideDown();
		});
	}
	
	function fixHeader(){
		$(window).scroll(function() {
			var top = $(document).scrollTop();
			if 
				(top < 1) $(".header").css({top: '0', 
										   position: 'relative'});
			else 
				$(".header").css({top: '0px', 
								  position: 'fixed',
								  width: '100%',
								  'z-index': 2
								 });
		});
	};
	
	//init Function
	window.onload=function(){imgCatalogPosition(); circleShow();imgSize();positionContentFromContacts();};
	//fixHeader();
	accardionVacancies();
	formShow('.distributor a', '.distributor-form');
	formShow('a#call-me', '.form-call');
	//mainMenuActive('#top-menu li a');
	//mainMenuActive('#main-menu li a');
	topMenu();
	$(window).resize(function() { imgSize(); });
	
	//init Plugins
	$('input, textarea').placeholder();
	$(".fancybox").fancybox({
		padding : 0,
			helpers: {
				overlay: {
					locked: false
				}
			}
	});

});