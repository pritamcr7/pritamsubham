<html>
<head>
<title>Data Tutorials</title>
<link rel="stylesheet" type="text/css" href="home.css"/>
<script  type="text/javascript" src="home.js">
	</script>
	
</head>
<body>
<div id="div1">
<h2>Welcome to Data Tuts</h2>
<img src="logo1.jpg" height="80" width="80"/>
<h1>Data Tuts</h1><br/><br/>
<marquee><p>It is the ideal website to learn coding of Data Structures</p></marquee>
</div>
<div id="div2" >
<ul>
<li><a href="home.html">HOME</a></li>
<li><a href="about.html">ABOUT</a></li>
<li><a href="#">TOPICS</a>
<ul>
<li><a href="array.html">ARRAY</a></li>
<li><a href="ll.html">LINK LIST</a></li>
<li><a href="stack.html">STACK</a></li>
<li><a href="queue.html">QUEUE</a></li>
</ul>



</li>

<li><a href="#">TUTORIALS</a>
<ul>
<li><a href="arraytuts.html">ARRAY</a></li>
<li><a href="lltuts.html">LINK LIST</a></li>
<li><a href="sttuts.html">STACK</a></li>
<li><a href="qtuts.html">QUEUE</a></li>
</ul>
</li>
<li><a href="contact.html">CONTACT</a></li>

</ul>
</div>
<div id="div3">
	<h6>SIGN IN</h6><br/>
	<form action="home.php" method="post" onsubmit="return v()">
		
			
	<b>Email-id:</b>&nbsp; &nbsp;<input type="text" name="email" required="required" placeholder="something@gmail.com" size="60px"  /><br/><br/>
	<b>Password:</b>&nbsp; &nbsp;<input type="password" name="password" required="required" placeholder="password" size="30px" /><br/>
	<br/><input id="sub" type="submit" name="submit" value="LOG IN"   />
	<input type="reset" id="sub2" value="Reset" /><br/><br/><br/><br/>
	<strong>New User?</strong>&nbsp;&nbsp;<a href="register.php" target="blank"><b>Register Here</b></a>
	</form>
	</div>
</body>
</html>
<?php

$x=mysqli_connect('localhost','root');
mysqli_select_db($x,'datatuts');
if(isset($_POST['submit']))
{
$a=$_POST['email'];
$b=$_POST['password'];
$r="select * from registration where emailid='$a' AND password='$b'";
$p=mysqli_query($x,$r);
$row=mysqli_num_rows($p);
if($row<1)
{
?>
<script>
alert("Invalid Emailid/password or Not Registered");

</script>
<?php
header('location:home.php');
}

else
{
	$data=mysqli_fetch_assoc($p);



session_start();

$_SESSION['uname']=$_POST['email'];
header('location:i.php');
}

}
mysqli_close($x);
?>