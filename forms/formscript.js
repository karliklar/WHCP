$("submit").click(function(){
	$.post($("reg-form") .attr ("action"), $("#reg-form :input").serliazeArray(), function(info){ $("#result").html(info);});
});

$("#reg-form") .submit(function(){
	return false;
});