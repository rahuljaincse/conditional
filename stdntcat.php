<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My Practice Session</title>
</head>

<body>
<?php
$p=50;
if($p>80)
{
echo" grade is A+";
}

 else if ($p<=80&&$p>70)
{
echo" grade is A";
}
 else if ($p<=70&&$p>60)
{
echo" grade is B+";
}
else if($p<=60&&$p>50)
{
echo" grade is B";
}
else if($p<=50&&$p>40)
{
echo" grade is C";
}
 else if  ($p<=40)
{
echo" grade is Fail";
}

?>

</body>
</html>
