
$(document).ready(function(){

		
		$("#divChat").find(".btn").click(function(event)
		{
			
			event.preventDefault();
			console.log("click jp");
			var form = $(this).closest("form");
			console.log(form.attr("action"));

			$.ajax({
				type: "POST",
				url:form.attr("action"),
				data:form.serialize() + "&csrf_test_name=" + token_csrf,
				dataType:"json"
			
			}).done(function(resultat)
			{   
				console.log(resultat);	
				token_csrf = resultat.csrf;
			});

		});

		setInterval(function(){

		$.ajax({
				type: "GET",
				dataType:"json"
			
			}).done(function(resultat)
			{   
				console.log(resultat.message);
				$("#ChatMessages").empty().append(resultat.message);	
				
			})} , 2000);



   
});