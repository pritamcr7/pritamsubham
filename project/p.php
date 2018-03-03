<?php
$a="subham@gmail.com";
$b="su.com";
$c="9002c86r";

if(filter_var($b,FILTER_VALIDATE_EMAIL))

{
	echo "This($b)is a valid email";
}
else
{
	echo "this($b)is not valid";
}