$(document).ready( function(){
	
	$("login-button").click( function(){
		$("#login-id").val('it worked');
		
	});
	
	$(document).on("click", "#login-button", function () {
        $("#login-id").val('it worked');
    });
	
	function clearButtonClick(){
		$("#DIV-ID").val('');
	}
	
	
});