$(document).ready(function(){
	$("#rp").hide();
	var i = 0;
	$("#d").change(function(){
		if(i == 0){
			$("#rp").fadeIn();
			i = 1;
		}else{
			$("#rp").hide();
			i = 0;
		}
	});
});