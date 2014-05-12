<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body><?php

$ch='circle';
$a=10;
$b=5;
switch ($ch)
 case 'triangle':
 {
 $c=1/2*$a*$b;
 echo"area of triangle is".$c;
 }
  case 'circle':
 {
 $c=3.14*$a*$a;
 echo"area of circle is".$c;
 } case 'rectangle':
 {
 $c=$a*$b;
 echo"area of rectangle  is".$c;
 }
 
 
 
 
 
 
 
?>
</body>
</html>
