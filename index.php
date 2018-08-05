<!DOCTYPE html>
<html >
<head>
 <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Admin Login</title>
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
  <li><a href="login.php">Login</a></li>
   <!-- <li><a class="active" href="adlogin.php">Admin-Login</a></li> -->

</ul>



   
    <div class="title-wrapper">
        <h2>Admin Login Form</h2>
    </div>
    <div class="contact_form">
        <form method="post" action="adlogin.php" name="contact-form" id="contact-form">	
        <div id="main">
            <div class="one_third">
                <label>Username:</label>
                <p><input type="text" name="user" id="name" size="30" /></p>
            </div>
            <div class="one_third">
                <label>Password:</label>
                <p><input type="password" name="password" id="email" size="30" /></p>
            </div>
            <div class="one_third_last">
			<label>&nbsp;</label>
                <input  class="contact_button button" type="submit" name="submit" id="submit" value="Login" />
            </div>
        </div>
        </form>
    </div> 
</li>
<!--adminlogin End-->
                   
</ul>
</article>
</div>
<!--Content End-->

</div>
<!--Page wrapper End-->
</body>
</html>