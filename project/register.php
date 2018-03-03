<html>
<head>
<link rel="stylesheet" type="text/css" href="reg.css"/>
<script type="text/javascript" src="home.js">
</script>
</head>
<body>
<h2> Registration For Data Tuts</h2>
<div id="div1">
<img src="r.jpg" height="220" width="290"/></br>
<p>Start Learning Data Structure From Here.</p>
</div>
<div id="div2">
<form action="#" method="post" onsubmit="return v()">
<b>First Name:</b><input type="text" name="fm" required="required" placeholder="First Name" size="40px"  /><br/><br/>
<b>Last Name:</b><input type="text" name="lm" required="required" placeholder="Last Name" size="40px"  /><br/><br/>
<b>Email-id:</b><input type="text" name="email" required="required" placeholder="something@gmail.com" size="60px"  /><br/><br/>
<b>Mobile No:</b><input type="text" name="mobile" required="required" placeholder="Mobile" size="40px" maxlength="10" /><br/><br/>
<b>Password:</b><input type="password" name="psw" required="required" placeholder="password" size="40px"  /><br/><br/>
<b>College:</b><input type="text" name="cg" required="required" placeholder="Name of the college" size="50px"  /><br/><br/>
<b>Year of joining:</b><input type="text" name="yj" required="required" maxlength="4" size="15px"  />&nbsp;&nbsp;&nbsp;
<b>Year of ending:</b><input type="text" name="ye" required="required" size="15px" maxlength="4" /><br/><br/>
<input id="sub" type="submit" name="register" value="Register"/>&nbsp;&nbsp;&nbsp;&nbsp;<input id="sub1"type="reset" value="Reset"/>

</form>
</div>




</body>
</html>


<?php
$con=mysqli_connect('localhost','root');
$r=mysqli_select_db($con,'datatuts');
if(isset($_POST['register']))
{


$a=$_POST['fm'];
$b=$_POST['lm'];
$c=$_POST['email'];
$d=$_POST['psw'];



$p="insert into registration(fname,lname,emailid,password) values('$a','$b','$c','$d')";
mysqli_query($con,$p);
?>
<script>
alert("Successful Registration");
</script>
<?php

header('location:home.php');


}
mysqli_close($con);
?>