$(function(){
	function OpenCondition(){
		var link = $('.condition-link');
		var text = $('.text');
		
		link.click(function(e){
			
			e.preventDefault();
			
			text.slideToggle();
			
		});
	}
	
	OpenCondition();
});