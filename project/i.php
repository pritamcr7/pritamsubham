<html>
<head>
<title>Data Tutorials</title>
<link rel="stylesheet" type="text/css" href="home.css"/>
<script  type="text/javascript" src="home.js">
	</script>
	<style>
	#p1
	{
		font-size:22px;
		float:left;
		
		color:yellow;
		
	}
	.d
	{
		float:left;
		margin-top:-150px;
		margin-left:1150px;
	}
	.p1{
		
		font-size:15px;
		float:left;
		margin-right:50px;
		margin-top:100px;
		
		
	}
	a
	{
		color:white;
		text-decoration:none;
	}
	</style>
	
</head>
<body>
<div id="div1">
<h2>Welcome to Data Tuts</h2>
<img src="logo1.jpg" height="80" width="80"/>
<h1>Data Tuts</h1><br/><br/>
<div class="d">
<p id="p1">
<?php
session_start();
echo "welcome:"."<br>".$_SESSION['uname'];

?>

<a href="logout.php"><p class="p1">Log out </a></p>
</div>

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

	
</body>
</html>