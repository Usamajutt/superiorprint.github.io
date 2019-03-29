$(document).ready(function()
{
 $("#signup2").on('click',function(event)
 {
event.preventDefault();
// alert("working");
var username = $('#reg-username').val();
// alert(username);
var email = $('#reg-email').val();
var password = $('#reg-pass').val();
var password2 = $('#reg-pass2').val();

// ajax request
$.ajax({
url: 'registera.php',
method: 'post',
data : {name:username,email:email,pass1:password,pass2:password2},
success:function(response)
{
	if(response == "success")
	{
		$(".rege_message").addClass('alert');
		$(".rege_message").addClass('alert-success');
		$(".rege_message").html('Congratulation! you are Registerd');


	}
	else
	{
       $(".rege_message").addClass('alert');
		$(".rege_message").addClass('alert-danger');
		$(".rege_message").html('Failed! please try again');
	}
} 
});

 });
});