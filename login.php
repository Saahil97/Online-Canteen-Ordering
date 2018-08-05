<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("menu.html");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Login</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
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
  <li><a href="register.php">Register</a></li>
  <li><a href="confirmreg.php">Confirm Registration</a></li>
  <li><a class="active" href="login.php">Login</a></li>
   <!-- <li><a href="adlogin.php">Admin-Login</a></li> -->

</ul>



<!-- Form Code Start -->
<div id='fg_membersite'>
<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='username' >UserName*:</label><br/>
    <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
    <span id='login_username_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='password' >Password*:</label><br/>
    <input type='password' name='password' id='password' maxlength="50" /><br/>
    <span id='login_password_errorloc' class='error'></span>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>
<div class='short_explanation'><a href='reset-pwd-req.php'>Forgot Password?</a></div>
</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("login");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("username","req","Please provide your username");
    
    frmvalidator.addValidation("password","req","Please provide the password");

// ]]>
</script>
</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->

</body>
</html>