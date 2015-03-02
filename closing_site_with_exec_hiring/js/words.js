$(document).ready(function(){
	$(".150max").on("change", function(){
		alert("Run1");

		var q1 = document.getElementById("q1").value;
		var q2 = document.getElementById("q2").value;
		
		alert("Run2");

		var spaceWord1 = q1.split(" ");
		var spaceWord2 = q2.split(" ");

		alert("Run3");
		
		

		if(spaceWord1.length > 150){
			alert("You have more than 150 words in your first question.");
			var str = "";
			for( var i = 0 ; i < 150 ; i++ ){
				str += spaceWord1[i];
			}
			document.getElementById("#q1").value = str;
		} 
		if(spaceWord2.length > 150){
			alert("You have more than 150 words in your third question.");
			var str = "";
			for( var i = 0 ; i < 150 ; i++ ){
				str += spaceWord2[i];
			}
			document.getElementById("#q2").value = str;
		}
	});
});