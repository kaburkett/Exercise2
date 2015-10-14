$(document).ready(function(){
$("#record_button").click(function(){
	var values = new Array();
	var index;
	// Get the parameters as an array
	values = $(":input").serializeArray();
	// Find and replace `content` if there
	for (index = 0; index < values.length; ++index) 
	{
	    if (values[index].name == "change_record") 
	    {
	        if (values[index].value == null || values[index].value == "")
	        {var crflag = 0;}
	        else {var crflag = 1;}
	    }
	    if (values[index].name == "change_description") 
	    {
	    	if (values[index].value == null || values[index].value == "")
	        {var cdflag = 0;}
	        else {var cdflag = 1;}
	    }
	}	
	// Convert to URL-encoded string
	values = jQuery.param(values);
	
	if (crflag ==1 && cdflag ==1)
	{
		$.post("process.php", values, function(response) {processdata(response); return response;});
	}
	else
	{
		alert("Sorry, looks like we are missing some input");
	}
	//$.post("db_insert.php", $(":input").serializeArray(), function(tabledata){$("#result").html(tabledata);});
	
	});

function processdata(returnedval){
	$('#modal_content').html(returnedval);
	$('#myModal').modal();
}
});