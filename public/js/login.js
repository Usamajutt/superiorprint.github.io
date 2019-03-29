$(document).ready(function()
{
// 
$("#login2").on('click',function(event)
{
event.preventDefault();
// alert("its working");
var email =$("#email-login").val();
var password = $('#password-login').val();
// ajax method here
$.ajax({
	url:"logina.php",
	method: 'post',
	data:{email:email,pass:password},
	success:function(response)
	{
		// alert(response);
		if (response == "success") {
			$("#login_message").addClass('alert');
			$("#login_message").addClass('alert-success');
			$("#login_message").html("Congratulation! you are Login successfully");
		}
		else
		{
		$("#login_message").addClass('alert');
			$("#login_message").addClass('alert-danger');
			$("#login_message").html("Failed! your email address and password is invalid.please recover your password");	
		}
	}
});
});
});