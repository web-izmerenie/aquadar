$(function(){
	function OpenCondition(){
		var link = $('.condition-link');
		var text = $('.text');
		
		link.click(function(e){
			
			e.preventDefault();
			
			text.slideToggle();
			
		});
	}
	
	function AjaxItems(){
		var link = $('#ofer-winners .steps ul li a');
		var defaultItems = $('.default-section').attr('href');
		
		link.each(function(){
			if($(this).attr('href') == defaultItems){
				$(this).addClass('active');
			}
		});
		
		$('#ofer-winners .steps ul li a:contains("Итоги")').addClass('itogi');
		
		if(defaultItems != ''){
			$.ajax({
				'type': 'GET',
				'url': defaultItems,
				'success': function(data){
					$('#winers-week').append(data);	
				},
				'error':function(xhr,str){
					console.log('Ошибка: ' + xhr.responseCode);
				}
			});
		}
		
		link.click(function(e){
			e.preventDefault();
			$('#winers-week').empty();
			link.removeClass('active');
			$(this).addClass('active');
			
			$.ajax({
				'type': 'GET',
				'url': $(this).attr('href'),
				'success': function(data){
					$('#winers-week').append(data);	
				},
				'error':function(xhr,str){
					console.log('Ошибка: ' + xhr.responseCode);
				}
			});
		});
	}
	
	AjaxItems();
	OpenCondition();
});