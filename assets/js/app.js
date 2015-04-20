

$(document).ready(function(){

	//console.log("test");



	$("#test").keyup(function(event)
	{
		
		event.preventDefault();

		console.log("unclick");

		console.log( $("#test").val() );

		//var test = $(this).before.href;
	
		//console.log(test);


		/*$.ajax({
				type: "GET",
				url: $("#test").next().attr('href'),
				dataType:"json"
			}).done (function(resultat)
			{
				console.log(resultat);
				//$('body').empty().append(resultat)
				//document.write(resultat.responseText);
			});*/

   });

	
		
   
});