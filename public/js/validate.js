$(function(){
	$("#registerForm").validate({
		rules:{
			email:{
				required:true,
				email:true
			}
		},
	});
});