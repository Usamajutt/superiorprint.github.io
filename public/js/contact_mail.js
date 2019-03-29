// validation startig
  $(function()
  {
   $("#contact_form_main").validate({
   rules: {
      fname: {
            required: true,
            minlength: 2,
            maxlength:12
        },
        lname: {
            required: true,
            minlength: 2,
            maxlength :12,
        },
        email: {
            required: true,
            email: true
        },
        message:{
          required : true,
          minlength: 15,
          maxlength:150,

        }

   },
   messages:{
    fname: {
      required : "<span class='error_message'>*Please enter first name</span>",
      minlength : "<span class='error_message'>*minimum 2 characters is required</span>",
    },
      lname: {
      required : "<span class='error_message'>*Please enter last name</span>",
      minlength : "<span class='error_message'>*minimum 2 characters is required</span>",
    },
     email: {
      required : "<span class='error_message'>*Please enter email address</span>",
      email : "<span class='error_message'>*Enter a valid email address</span>",
    },
    message:{
      required : "<span class='error_message'>*Please enter your query</span>",
      minlength : "<span class='error_message'>*please enter minimum 15 characters query</span>",
      maxlength : "<span class='error_message'>*maximum query length is 150 characters write below the 150 alphabet-charachters</span>",

    },


   },
   });
  });

  // validation ending
  $(function()
  {
     $('.form_contact').on('submit',function(event)
     {
      // alert("working");
      event.preventDefault();
      
      var formData=$(this).serialize();
      
      console.log(formData);
if($("#contact_form_main").valid())
      {
      $.ajax({
        url: 'contact_mail.php',
        type: 'post',
        data: formData,
        success:function(response)
        {
          // alert(response);
          if (response=="success") {
            $('.response_message').addClass('alert');
            $('.response_message').addClass('alert-success');
          $('.response_message').html('Congratulation!! Your message has been successfully submited. Our representative will get in touch with you in 24 working hours.');
          }
            else if (response=="failed") {
            $('.response_message').addClass('alert');
            $('.response_message').addClass('alert-danger');
            $('.response_message').html('Failed: Please Fill-Up Fields According to given conditions!!');
          }
          else
          {
            $('.response_message').addClass('alert');
            $('.response_message').addClass('alert-danger');
            $('.response_message').html('Failed: Somthing Going Wrong Please Cotact with Our Team!!!!');
           
          }

        }
      });
}
     // end valid

     });
  }

  );

  