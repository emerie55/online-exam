<!DOCTYPE html>
<html lang="en">
<head>
	<title>Onine examiner</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/logo-01.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts1/font-awesome-4.7.0/css/font-awesome.min.css">
    <link  rel="stylesheet" href="fonts1/icofont/icofont.min.css"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts1/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts1/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css1/util.css">
	<link rel="stylesheet" type="text/css" href="css1/main.css">
    <!-- <link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
 <script src="js/jquery.js" type="text/javascript"></script> -->

<!--===============================================================================================-->

<?php if(@$_GET['w'])
    {echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
    function validateForm() {var y = document.forms["form"]["name"].value;  var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
    var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>

<style>
    .modal {
    text-align: center;
  }
  
  @media screen and (min-width: 768px) { 
    .modal:before {
      display: inline-block;
      vertical-align: middle;
      content: " ";
      height: 100%;
    }
  }
  
  .modal-dialog {
    display: inline-block;
    text-align: left;
    vertical-align: middle;
  }
  
</style>

</head>
<body class="animsition">
	
	<!-- Header -->
		<?php include "header.php"; ?>
	<!-- End Header -->

	
		

	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(images/exam5.webp);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2" style="color:#f63;">
                                    Online Examination
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1 text-white">
                                    e-EXAMINATION
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="#" data-toggle="modal" data-target="#myModal1" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Register here
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(images/exam1.webp);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2" style="color:#f63;">
                                Online Examination
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1 text-white">
									e-examination
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="#" data-toggle="modal" data-target="#myModal1" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Register here
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(images/exam2.webp);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-101 cl2 respon2" style="color:#f63;">
                                Online Examination
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1 text-white">
									e-examination
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="#" data-toggle="modal" data-target="#myModal1" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Register here
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Modals -->
	<!-- Container (Admin Section) -->
    <div class="modal fade" id="login">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"><span style="color:#f4511e;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 6px; "><b>LOGIN -ADMIN</b></span></h4>
                </div>
                <div class="modal-body title1">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-12">
                            <form role="form" method="post" action="head.php?q=index.php">
                                <div class="form-group">
                                <input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control" required/> 
                                </div>
                                <div class="form-group">
                                <input type="password" name="password" maxlength="15" placeholder="Password" class="form-control" required/>
                                </div>
                                <div class="form-group" align="center">
                                <input type="submit" name="login" value="Login" class="btn btn-primary" />
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
                <!--<div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>-->
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!----Teacher signin--->
    <div class="modal fade" id="login2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"><span style="color:#f4511e;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 6px; "><b>LOGIN -Staff</b></span></h4>
                </div>
                <div class="modal-body title1">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-12">
                            <form role="form" method="post" action="admin.php?q=index.php">
                                <div class="form-group">
                                <input type="text" name="uname" maxlength="20"  placeholder="Staff user id" class="form-control" required/> 
                                </div>
                                <div class="form-group">
                                <input type="password" name="password" maxlength="15" placeholder="Password" class="form-control" required/>
                                </div>
                                <div class="form-group" align="center">
                                <input type="submit" name="login2" value="Login" class="btn btn-primary" />
                                </div>
                            </form>
                        </div><div class="col-md-3"></div>
                    </div>
                </div>
                <!--<div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>-->
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Container (USERS section) -->
    <!--sign in modal start-->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content title1">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title title1"><span style="color:#f4511e;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 6px; "><b>LOGIN - APPLICANT</b></span></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="login.php?q=index.php" method="POST">
        <fieldset>


        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-3 control-label" for="email"></label>  
        <div class="">
        <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email" required>
            
        </div>
        </div>


        <!-- Password input-->
        <div class="form-group">
        <label class="col-md-3 control-label" for="password"></label>
        <div class="">
            <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password" required>
            
        </div>
        </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Log in</button>
            </fieldset>
        </form>
            </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--sign in modal closed-->

    <!--sign up modal start-->
    <div class="modal fade" id="myModal1">
    <div class="modal-dialog">
        <div class="modal-content title1">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title title1"><span  style="color:#f4511e;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px; "><b>SIGN UP - APPLICANT</b></span></h4>
        </div>
        <div class="modal-body">
        <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
    <fieldset>

    <div class="row">
        <div class="col-md-6">
            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-3 control-label" for="name"></label>  
            <div class="">
            <input id="name" name="name" placeholder="Enter your Fullname" class="form-control input-md" type="text" required>
                
            </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-3 control-label" for="gender"></label>
            <div class="">
                <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" required>
            <option value="Male">Select Gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option> </select>
            </div>
            </div>

            <!-- Text input-->
            <div class="form-group" style="display:none;">
            <label class="col-md-3 control-label" for="name"></label>  
            <div class="">
            <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md" type="hidden" value="Exam" readonly>
                
            </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-3 control-label title1" for="email"></label>
            <div class="">
                <input id="email" name="email" placeholder="Enter your email account" class="form-control input-md" type="email" required>
                
            </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-3 control-label" for="mob"></label>  
            <div class="">
            <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="text" required>
                
            </div>
            </div>

        </div>
        <div class="col-md-6">
            
            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-3 control-label" for="password"></label>
            <div class="">
                <input id="password" name="password" placeholder="Enter a password" class="form-control input-md" type="password" required>
                
            </div>
            </div>

            <div class="form-group">
            <label class="col-md-3 control-label" for="cpassword"></label>
            <div class="">
                <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md" type="password" required>
                
            </div>
            </div>

            <div class="form-group">
            <label class="col-md-3 control-label" for="pin"></label>
            <div class="">
                <input id="pin" name="pin" placeholder="Enter Pin Code" class="form-control input-md" type="text" required>
                
            </div>
            </div>

            <!-- Button -->
            <div class="form-group">
            <label class="col-md-3 control-label" for=""></label>
            <div class=""> 
                <input  type="submit" class="btn btn-primary" value="sign up"  />
            </div>
            </div>
            
        </div>
    </div>
    

    
    <?php if(@$_GET['q7'])
    { echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
    <?php if(@$_GET['q8'])
    { echo'<p style="color:red;font-size:15px;">'.@$_GET['q8'];}?>

    
    </fieldset>
    </form>
        </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--sign up modal closed-->


	<!-- Modals end -->
	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js1/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
    
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
<!--===============================================================================================-->
	<script src="js1/main.js"></script>

</body>
</html>