$(function(){
var fx = {
	"initModal" : function() {
		if($(".modal-window").length == 0){
			 $("<div>").attr("id","jqury-overlay")	 		   
			  		   .appendTo("body")
			    return $("<div>")
			    	//.attr("id","overly-close")
			   	   .addClass("modal-window")
				   .appendTo("body");
			
		}
		else { return $(".modal-window"); }
	}
}
// $("a.prod_more").on('click', function(event) {
// 	event.preventDefault(); // отменяем ссылку
// 	var data = $(this).attr("data-id");
// 	modal = fx.initModal();
    
// });
//  $("li>a").on("click",function(evet){
// 	event.preventDefault();
// 	var data=$(this).atrr;
// 	modal=fx.initModal();
// 	$.ajax({
// 		type:"Post",
// 		url:"ajaxfile.php",
// 		data:"url=" +data,
// 		success:function(data){
// 			modal.append(data);
// 		},
// 		error:function(msg){
// 			modal.append(msg);
// 		}
// 	})
// })
 $("a.prod_more").on("click",function(event){
	event.preventDefault();
	
	var data=$(this).attr("data-id");
	console.log(data);
	modal=fx.initModal();
	$("<a>").attr("href","#")
			.addClass("modal-close-btn")
			.html("&times;")
			.click( function(event){
				$(".modal-window").remove();
				$("#jqury-overlay").remove();
			}).appendTo(modal);

	//$("<a>").attr("id","overly-close").click(function(){ 
	//	modal.remove();
	//}).append(modal);
	$.ajax({
		type:"Post",
		url:"/ajax",
		data:"id=" +data,
		success:function(data){
			modal.append(data);
		},
		error:function(msg){
			modal.append(msg);
		}
	})
})


})
