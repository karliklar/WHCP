<?php
    session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]--> 
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- TemplateBeginEditable name="doctitle" -->
    <title>Register | WHCP</title>
    <meta name="description" content="">
    <!-- TemplateEndEditable -->
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css"> 

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
   

</head>

<body> 
   <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="index.html">Woodland Hills Compounding Pharmacy</a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li><a href="index.html">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="compounds/categories/biotoxin.html">Biotoxin Illness</a></li>
                                <li><a href="compounds/categories/dentistry.html">Dentistry</a></li>
                                <li><a href="compounds/categories/earnosethroat.html">Ear Nose and Throat</a></li>
                                <li><a href="compounds/categories/gastroenterology.html">Gastroenterology</a></li>
                                <li><a href="compounds/categories/rheumatic.html">Rheumatic Disease</a></li>
                                <li><a href="compounds/categories/othercompounds.html">Other Compounds</a></li>
                                <!--                            <li class="divider"></li>
                                                                <li><a href="privacy.html">Privacy Policy</a></li>
                                                                <li><a href="terms.html">Terms of Use</a></li>-->
                            </ul>
                        </li>
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Education <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="education/bio-identic-hormones.html">Bio Identical Hormones</a></li>
                                <li><a href="education/lyme-disease.html">Lyme Disease</a></li>
                                <li><a href="education/melasma.html">Melasma Treatment</a></li>
                                <li><a href="education/multiple-sclerosis.html">Multiple Sclerosis</a></li>
                                <li><a href="education/pain-management.html">Pain Management</a></li>
                                <li><a href="education/shoemaker.html">Shoemaker Protocol</a></li>
                                <li><a href="education/topical-sinus-therapy.html">Topical Sinus Therapy</a></li>
                                <li><a href="education/wiley-protocol.html">Wiley Protocol</a></li>
                            </ul>
                        </li>
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="forms/autoship.html">Auto Ship</a></li>
                                <li><a href="forms/md-referral.html">Find a Doctor</a></li>
                                <li><a href="forms/prescription.html">Online Refill</a></li>
                                <li><a href="forms/textnotify.html">Text Refill Notify</a></li>
                            </ul>
                        </li>
                        <li><a href="about-us.html">About</a></li> 
                        <li><a href="forms/contact.html">Contact</a></li>
                        <li class="login">
                            <a data-toggle="modal" href="#loginForm"><i class="icon-lock"></i></a>
                        </li>
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->
<!-- TemplateBeginEditable name="head" -->
<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Register</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                        <li class="active">Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
   <!-- / .title -->     
   <!-- TemplateEndEditable -->
   <!-- TemplateBeginEditable name="main-content" --> 
   
<!-- Register form -->
  
    <section id="contact-page" class="container">
        <div class="row-fluid">

            <div class="span8">
                <div class="status alert alert-success" style="display: none"></div>

                <form id="reg-form" name="register-form" method="post" action="user-pt.php" role="form">
                  <div class="row-fluid">
                    <div class="span5">
                        <label>Name<span style="color:#DD0003"> *</span></label>
                        <input type="text" class="input-block-level" name="name" id="name" required="required" placeholder="Full Name/Company Name">
                        <label>Email Address</label>
                        <input type="email" class="input-block-level" name="username" id="username" placeholder="Your Email Address" required="required">
                        <label>Contact Number<span style="color:#DD0003"> *</span></label>
                        <input type="tel" class="input-block-level" name="phone" id="phone" required="required" placeholder="Your Contact Number">
                    </div>
                    <div class="span7">
                        <label>Password<span style="color:#FF0004"> *</span></label>
                         <input type="password" class="input-block-level" name="password" id="password" placeholder="Password" minlength="6" required>
                         <input type="password" class="input-block-level" name="repeatpassword" id="repeatpassword" placeholder="Confirm Password" required minlength="6">
                         <input type="checkbox"  name="terms" id="terms" value="agreed" required> I agree to the 
                            <a href="pt-rights.html">terms and conditions <span style="color:#FF0004"> *</span></a> 
                    </div>

                </div>

                <input type="submit" value="submit" class="btn btn-primary btn-large pull-right" onclick="return val();"/>Submit
                <p>  Already registered?<br>
         <a data-toggle="modal" data-dismiss="modal" href="#loginForm">Patient Login</a><br>
        <a data-toggle="modal" data-dismiss="modal" href="#loginForm2">Doctor Login</a><br>

            </form>
<?php

?>
        </div>

<!--  /Register form -->
          <div class="span3">
            <h4>Our Address</h4>
            <p>
                <i class="icon-map-marker pull-left"></i> 20631 Ventura Blvd Ste 305<br>
                Santa Calrita, CA 91364
            </p>
            <p>
                <i class="icon-envelope"></i> &nbsp;info@woodlandhillspharmacy.com
            </p>
            <p>
                <i class="icon-phone"></i> &nbsp;(855)876-3060
            </p>
            <p>
                <i class="icon-globe"></i> &nbsp;http://www.woodlandhillspharmacy.com
            </p>
             <p> 
                <i class="icon-time icon-large"></i> &nbsp;Mon-Fri | 8:00am-5:00pm
             </p>
        </div>
        </div>
        </section>
   <!-- TemplateEndEditable -->
<!--Bottom-->
<section id="bottom" class="main">
    <!--Container-->
    <div class="container">

        <!--row-fluids-->
        <div class="row-fluid">

            <!--Contact Form-->
            <div class="span3">
                <h4>CONTACT</h4>
                <ul class="unstyled address">
                    <li>
                        <i class="icon-home icon-large"></i>20631 Ventura Blvd Ste 305<br>Woodland Hills, CA 91364
                    </li>
                    <li>
                        <i class="icon-time icon-large"></i>
                        Mon-Fri | 8:00am-5:00pm
                    </li>
                    <li>
                        <i class="icon-envelope icon-large"></i>
                         info@woodlandhillspharmacy.com
                    </li>
                    <li>
                        <i class="icon-phone icon-large"></i>
                        <strong>Toll Free:</strong> 855-876-3060
                    </li>
                    <li>
                        <i class="fa fa-fax icon-large"></i>
                         Fax: 818-876-3010
                    </li>
                </ul>
            </div>
            <!--End Contact Form-->

            <!--Important Links-->
              <div id="tweets" class="span3">
                <h4>RESOURCES</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="../forms/contact.html">Contact Us</a></li>
                        <li><a href="../about-us.html">About Us</a></li>
                        <li><a href="../compounds/categories/categories.html">Product Categories</a></li>
                        <li><a href="../rights.html">Rights &amp; Responsibilities</a></li>
                        <li><a href="../privacy-policy.html">Privacy</a></li>
                        <li><a  data-toggle="modal" href="#loginForm">Patient Login</a></li>
                        <!--<li><a  data-toggle="modal" href="#loginForm2">Doctor Login</a></li>-->
                        <li><a  data-toggle="modal" href="#loginForm3">Employee Portal</a></li>
                    </ul>
                </div>  
            </div>  
            </div>
            <!--Important Links-->

            <!--EDUCATION-->
            <div id="education" class="span3">
                <h4>EDUCATION</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="#">Bio Identical Hormones</a></li>
                        <li><a href="#">Lyme Disease</a></li>
                        <li><a href="#">Melasma Treatment</a></li>
                        <li><a href="#">Multiple Sclerosis</a></li>
                        <li><a href="#">Topical Sinus Therapy</a></li>
                        <li><a href="#">Pain Management</a></li>
                        <li><a href="#">Shoemaker Protocol</a></li>
                        <li><a href="#">Wiley Protocol</a></li>
                    </ul>
                </div>
            </div>
            <!--End EDUCATION-->
           

            <div class="span3 pull-right">
                <h4 style="margin-left:50px;">AFFILLIATIONS</h4>
                <div class="row-fluid first">
                    <table>
                        <tr class="span9" style="margin-bottom:10px">
                            <td> <a href="http://www.iacprx.org/" target="_blank"><img src="images/affilliations/iacp%20(1).png" alt="#"></a></td> 
                            <td> <a href="http://www.pharmacist.com/" target="_blank"><img src="images/affilliations/APhA-w.png"  style="margin-left:10px" alt="#"></a></td>  
                            <td><a href="http://www.bbb.org/losangelessiliconvalley/business-reviews/pharmacy-compounding/woodland-hills-compounding-pharmacy-in-woodland-hills-ca-638582" target="_blank"><img src="images/affilliations/bbb.png" width="65"  style="margin-left:25px" alt="BBB"></a></td>
                        </tr>
                        <tr class="span9">
                            <td> <a href="http://www.focusscript.com/" target="_blank"><img src="images/affilliations/ucm.png" width="550" alt="#"></a></td>
                            <td>  <a href="http://www.cpha.com/" target="_blank"><img src="images/affilliations/cpaw.png" width="450" style="margin-left:15px" alt="#"></a></td>
                            <td> <a href="http://www.cpha.com/" target="_blank"><img src="images/affilliations/boc.png"  style="margin-left:35px" alt="#"></a></td>
                        </tr>    
                    </table>   
                   
            </div>

        </div>

    </div>
    <!--/row-fluid-->
</div>
<!--/container-->

</section>
<!--/bottom-->


<!--Footer-->
            <!--Copyright-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2013 <a target="_blank" href="http://woodlandhillspharmacy.com/contact.html" title="Woodland Hills Compounding Pharmacy">Woodland Hills Compounding</a>. All Rights Reserved.
            </div>
            <!--social media-->

             <div class="span6">
                <ul class="social pull-right">
                    <li><a href="https://www.facebook.com/WoodlandHillsRx/"><i class="icon-facebook"></i></a></li>
                    <li><a href="https://twitter.com/whcpharmacy"><i class="icon-twitter"></i></a></li>
                    <li><a href="https://www.yelp.com/biz/woodland-hills-compounding-pharmacy-los-angeles"><i class="icon-yelp"></i></a></li>             
                </ul>
            </div>

            <!--Goto Top-->
            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
        </div>
    </div>
</footer>
<!--/Footer-->

<!-- Patient Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Patient Login</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="login.php" method="post" id="patient-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password"> 
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
           
        </form>
        Not a patient? <a data-toggle="modal"  data-dismiss="modal" href="#loginForm2">Doctor Login</a><br>
        <a href="forms/contact.html">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<!-- Doctor Login form -->
<div class="modal hide fade in" id="loginForm2" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Doctor Login</h4>
    </div>
    <!--Modal2 Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="doctor-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <button type="submit" class="btn btn-primary">Sign in</button>
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
        </form>
        Not a doctor? <a data-toggle="modal" data-dismiss="modal" href="#loginForm">Patient Login</a><br>
        <a href="forms/contact.html">Forgot your password?</a>
    </div>
    <!--/Modal2 Body-->
</div>
<!--  /Login form -->

<!-- Employee Login form -->
<div class="modal hide fade in" id="loginForm3" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Employee Login</h4>
    </div>
    <!--Modal3 Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="employee-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <button type="submit" class="btn btn-primary">Sign in</button>
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
        </form>
        Not an employee?<br>
         <a data-toggle="modal" data-dismiss="modal" href="#loginForm">Patient Login</a><br>
        <a data-toggle="modal" data-dismiss="modal" href="#loginForm2">Doctor Login</a><br>
        <a href="forms/contact.html">Forgot your password?</a>
    </div>
    <!--/Modal3 Body-->
</div>
<!--  /Login form -->

<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="https://use.fontawesome.com/9e67467047.js"></script>
<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- TemplateBeginEditable name="footer" -->
<!--Check if password is equal to repeatpassword-->
<script type="text/javascript">
    function val (){
        if(frm.repeatpassword.value != frm.password.value){
            alert("passwords do not match!");
            return false;
        }
        return true;
    }

</script> <!-- TemplateEndEditable -->

</body>
</html>
