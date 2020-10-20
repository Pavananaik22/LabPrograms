<html>
<head>
    <title> Prog 6 </title>
</head>
<body>
<h1> Welcome to my webpage </h1>
<?php
//file manipulation from count.txt
$handle=fopen("count.txt","r");
$str=fread($handle, 10);
echo "<h2>Hello $str</h2>"
?>
</body>
</html>
