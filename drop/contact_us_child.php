<style>
    .error_message{
        color: red;
    }
</style>

    <!-- Page sub-header + Bottom mask style 3 -->
    <div id="page_header" class="page-subheader site-subheader-cst uh_flat_dark_blue maskcontainer--mask3">
        <div class="bgback">
        </div>
        <!-- Animated Sparkles -->
        <div class="th-sparkles"></div>
        <!--/ Animated Sparkles -->
        <!-- Background -->
        <div class="kl-bg-source">
            <!-- Background image -->
            <div class="kl-bg-source__bgimage" style="background-image:url(public/images/contact_us_banner.jpg); background-repeat:no-repeat; background-attachment:scroll; background-position-x:center; background-position-y:center; background-size:cover"></div>
            <!--/ Background image -->

            <!-- Color overlay -->
            <div class="kl-bg-source__overlay" ></div>
            <!--/ Color overlay -->
        </div>
        <!--/ Background -->

        <!-- Sub-Header content wrapper -->
        <div class="ph-content-wrap">
            <div class="ph-content-v-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Breadcrumbs -->
                            <ul class="breadcrumbs fixclear">
                                <li><a href="/">Home</a></li>
                                <li>CONTACT US</li>
                            </ul>
                            <!--/ Breadcrumbs -->
                            <div class="clearfix"></div>
                        </div>
                        <!--/ col-sm-6 -->
                        <div class="col-sm-6">
                            <!-- Sub-header titles -->
                            <div class="subheader-titles">
                                <h2 class="subheader-maintitle">CONTACT US</h2>
                                <h4 class="subheader-subtitle">Give us a shout</h4>
                            </div>
                            <!--/ Sub-header titles -->
                        </div>
                        <!--/ col-sm-6 -->
                    </div>
                    <!--/ row -->
                </div>
                <!--/ container -->
            </div>
            <!--/ .ph-content-v-center -->
        </div>
        <!--/ Sub-Header content wrapper -->
        <!-- Sub-Header bottom mask style 6 -->
        <div class="kl-bottommask kl-bottommask--mask6">

            <svg width="2700px" height="57px" class="svgmask" viewBox="0 0 2700 57" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                    <filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox" id="filter-mask6">
                        <feOffset dx="0" dy="-2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                        <feGaussianBlur stdDeviation="2" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
                        <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.5 0" in="shadowBlurOuter1" type="matrix" result="shadowMatrixOuter1"></feColorMatrix>
                        <feMerge>
                            <feMergeNode in="shadowMatrixOuter1"></feMergeNode>
                            <feMergeNode in="SourceGraphic"></feMergeNode>
                        </feMerge>
                    </filter>
                </defs>
                <g transform="translate(-1.000000, 10.000000)">
                    <path d="M0.455078125,18.5 L1,47 L392,47 L1577,35 L392,17 L0.455078125,18.5 Z" fill="#000000"></path>
                    <path d="M2701,0.313493752 L2701,47.2349598 L2312,47 L391,47 L2312,0 L2701,0.313493752 Z" fill="#f5f5f5" class="bmask-bgfill" filter="url(#filter-mask6)"></path>
                    <path d="M2702,3 L2702,19 L2312,19 L1127,33 L2312,3 L2702,3 Z" fill="#cd2122" class="bmask-customfill"></path>
                </g>
            </svg>
        </div>
        <!--/ Sub-Header bottom mask style 6 -->
    </div>
    <!--/ Page Sub-Header + mask style 6 -->

    <section class="hg_section ptop-65">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Title -->
                    <div class="kl-title-block clearfix text-left tbk-symbol--line tbk-icon-pos--after-title">
                        <h3 class="tbk__title ">CONTACT FORM ELEMENT</h3>
                        <span class="tbk__symbol">
                                <span></span>
                            </span>
                    </div>
                    <!-- / Title  -->

                    <!-- Contact form element -->
        <form method="post" class="form_contact" id="contact_form_main">
        <div class="row">
        <div class="col-sm-2"></div>
        <!-- form here -->
        <div class="col-sm-8">
            <div class="response_message"></div>
            <form action="#" method="post" ng-app="">
                <label for="">First Name</label>
                <input type="text" class="form-control" ng-model="name" name="fname" placeholder="">
                <!-- 2nd row -->
                <br>
                    <label for="">Last Name</label>
                <input type="text" class="form-control" name="lname" ng-model="lastname" placeholder="">
                <!-- 3rd row -->
                <br>
                    <label for="">Email</label>
                <input type="text" class="form-control" ng-model="emails" name="email" placeholder="">
                <!-- 4th row -->
                <br>
                <!-- phone number -->
                <label for="">phone number</label><br>
                <!-- this text is enter in the bottom of this input    type="tel" id="tell"  -->
                <input class="form-control" name="phone_number" style="width: 757px;">
                <br>
                    <label for="">Propert Location & Message</label>
                <textarea  id="" class="form-control" name="message" cols="30" rows="4"></textarea>
                <br>
                <input type="submit" class="btn btn-danger btn-lg" value="Contact us">
            </form>
        </div>
        <!-- form ending here -->
        <div class="col-sm-2"></div>
        </div>
    </form>

                    <!--/ Contact form element -->
                </div>
                <!--/ col-sm-12 -->
            </div>
            <!--/ row -->
        </div>
        <!--/ container -->
    </section>

    <!--/ Contact form element section -->
    <!-- contact mail jqyery -->
    <script>
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

        },
        phone_number:{
        required : true,
        number : true
        },

   },

   messages:{
    phone_number:{
        required :"<span class='error_message'>*please enter your phone number</span>",
        number :"<span class='error_message'>*Enter a valid or existing number your number is wrong</span>",
    },
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
      required : "<span class='error_message'>*Please enter property Details Here..</span>",
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


     });
  }

  );




    </script>
 <!-- contact mail jquery -->

 <!-- telephone libraryies -->
<script src="public/js/intlTelInput.min.js"></script>
<!-- ending libraraies -->
<script>
      $("#tell").intlTelInput();

</script>

