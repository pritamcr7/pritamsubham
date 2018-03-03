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
<h6><?php  
session_start();
echo  "Welcome ".$_SESSION["uname"];
?></h6>
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

</body>
</html>