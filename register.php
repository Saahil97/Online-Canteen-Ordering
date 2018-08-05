<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterUser())
   {
        $fgmembersite->RedirectToURL("thank-you.html");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Register</title>
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css" />
    <script src="scripts/pwdwidget.js" type="text/javascript"></script>      
	<link rel="icon" href="title.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	</head>
<style type="text/css">

ul {
    list-style-type: none;
    margin: 0;
	border-radius: 9px;
    padding: 0;
    overflow: hidden;
    background-color: tomato;
}
li {
    float: left;
	//color : white;
	font-size : 17px; 
	font-variant : small-caps;
	font-family : Arial, Helvetica, sans-serif;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #ff5233;
}
.mySlides {display:none;}
body {
    background-image: url("img/bgcover.png") ;
}
.shad{
padding:0px 0px 0px 0px;
border-radius: 10px;
}
.shad:hover{
	box-shadow:10px 10px 5px grey;
 }

.img{
	height: 300px;
    width: 550px;
	display: block;
}
.animate-fading{animation:fading 10s infinite}@keyframes fading{0%{opacity:0}50%{opacity:1}100%{opacity:0}}
.content{max-width:980px;margin:auto}.w3-rest{overflow:hidden}
.section{margin-top:16px!important;margin-bottom:16px!important}

.box{
    width: 300px;
	max-height:10px;
    border: 3px solid gray;
    margin: 55px;
	padding: 25px;
}
.name{
color:#FFFFFF;
 font-size: 50px;
 font-family:"Monospace";
}
.container {
    position: relative;
    width: 50%;
}


</style>
<body>
<header>
            <div class="container">      
</div>
                      <ul>
                           <center><li><a>Presidency University</a></li></center>
                        </ul>                     
                    </div>
                </div>
            </div>
        </div>

<ul>
  <li><a href="home.html">Home</a></li>
  <li><a class="active" href="register.php">Register</a></li>
  <li><a href="confirmreg.php">Confirm Registration</a></li>
  <li><a href="login.php">Login</a></li>
  <!--  <li><a href="adlogin.php">Admin-Login</a></li> -->
</ul>


<!-- Form Code Start -->
<div id='fg_membersite'>
<form id='register' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Register</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div>
<input type='text'  class='spmhidip' name='<?php echo $fgmembersite->GetSpamTrapInputName(); ?>' />

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='name' >Your Full Name*: </label><br/>
    <input type='text' name='name' pattern="[A-Za-z]*" id='name' value='<?php echo $fgmembersite->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Email Address*:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='register_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='username' >UserName*:</label><br/>
    <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
    <span id='register_username_errorloc' class='error'></span>
</div>
<div class='container' style='height:80px;'>
    <label for='password' >Password*:</label><br/>
    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
    <noscript>
    <input type='password' name='password' id='password' maxlength="50" />
    </noscript>    
    <div id='register_password_errorloc' class='error' style='clear:both'></div>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>

    var pwdwidget = new PasswordWidget('thepwddiv','password');
    pwdwidget.MakePWDWidget();
    
    var frmvalidator  = new Validator("register");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("username","req","Please provide a username");
    
    frmvalidator.addValidation("password","req","Please provide a password");


</script>

<!--
Form Code End (see html-form-guide.com for more info.)
-->
</body>
</html>