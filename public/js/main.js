
$(function() {
	$('.menu_link').on({
		mouseover: function(){
		var name = $(this).attr('data-name');
		var body = $(this).attr('data-body');
		var picture = $(this).attr('data-picture');
		//console.log(name, body, picture);
		$('#name').text(name);
		$('#body').text(body);
		$('#picture').attr('src', '../img/'+picture+'.png'); // если картинка через img
		//$('#picture').css('background', '../img/minsk.png'); если через div
		//$('#picture').css('background', 'red');
		},
		
		mouseout: function(){
		 var name = $(this).attr('data-name');
		 var body = $(this).attr('data-body');
		 var picture = $(this).attr('data-picture');
		 $('#name').text('');
		 $('#body').text('');
		 $('#picture').attr('src', '/img/bird.gif');
		}
		
	});
	
	
});