function v()
{
var i=true;
var x=document.getElementsByName("email");
var e=x[0].value;
var at=e.indexOf("@");
var ot=e.indexOf(".");
if(at<1||ot>=e.length-2||ot-at<3)
{
	i=false;
	alert("Enter a valid Email");
}

	
	

return(i);
}

