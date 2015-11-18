$(document).ready(function(){
	$('.buttom').prop("disabled",true);
	$('.print').click(function(){
		$('.buttom').prop("disabled",false);
		$('.print').css("pointer-events", "none");
	});
});