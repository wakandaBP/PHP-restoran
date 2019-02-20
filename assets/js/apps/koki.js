$(document).ready(function(){
	
	$("tbody").on("click","#stats",(function(){
		$(this).attr("disabled",true);

		var id = $(this).data("id");
		gantistats(id);
	}))
})

function gantistats(e){
	$.ajax({
		url: "koki/updatestats/"+e,
		type: "POST",
		data: $("form").serialize(),
		dataType: "JSON",
		success: function(data){}
	})
}