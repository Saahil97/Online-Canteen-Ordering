<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Home page</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
</head>
<style type="text/css">

body {
background-image: url("https://www.collegesearch.in/upload/institute/images/large/150609111332_banner_3.jpg");
}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
</style>

<body>
<div id='fg_membersite_content'>
<h2>Home Page</h2>
Welcome back <?= $fgmembersite->UserFullName(); ?>!
<p><a href='change-pwd.php'>Change password</a></p>

<div class="slideshow-container">

<div style="text-align:center" class="mySlides fade">
  <div class="numbertext">1 / 9</div>
  <img src="img/=set dosa.jpg" style="width:100%">
</div>

<div style="text-align:center" class="mySlides fade">
  <div class="numbertext">2 / 9</div>
  <img src="img/dosa.jpg" style="width:100%">
</div>

<div style="text-align:center" class="mySlides fade">
  <div class="numbertext">3 / 9</div>
  <img src="img/gobi.jpg" style="width:100%">
</div>

<div style="text-align:center" class="mySlides fade">
  <div class="numbertext">4 / 9</div>
  <img src="img/idli.jpg" style="width:100%">
</div>

<div style="text-align:center" class="mySlides fade">
  <div class="numbertext">5 / 9</div>
  <img src="img/Mysore_Bonda_Recipe.jpg" style="width:100%">
</div>

<div style="text-align:center" class="mySlides fade">
  <div class="numbertext">6 / 9</div>
  <img src="img/onion dosa.jpg" style="width:100%">
</div>

<div style="text-align:center" class="mySlides fade">
  <div class="numbertext">7 / 9</div>
  <img src="img/pakoda.jpg" style="width:100%">
</div>

<div style="text-align:center" class="mySlides fade">
  <div class="numbertext">8 / 9</div>
  <img src="img/paneer.jpg" style="width:100%">
</div>

<div style="text-align:center" class="mySlides fade">
  <div class="numbertext">9 / 9</div>
  <img src="img/poori.jpg" style="width:100%">
</div>

</div>

</br> </br>
<p><a href='logout.php'>Logout</a></p>
</div>
</body>
</html>
