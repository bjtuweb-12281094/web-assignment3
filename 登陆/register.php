<?php
$con = mysql_connect("localhost","root","181229");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

if (mysql_query("CREATE DATABASE myd",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }
mysql_select_db("myd", $con);

$sql = "CREATE TABLE Persons 
(
	Name varchar(15),
	Password varchar(15),

)";
mysql_query($sql,$con);
mysql_close($con);
?>

<html>
<head>
	<meta charset="utf-8"/>
<title>注册</title>
</head>

<body>
<form action="insert.php" method="post">
	<p align="center">
    用户名 : <input type="text" name="name"id="username"/>
    密码 : <input type="password" name="password"id="password"/>
  	</p> 
	<p align="center">
		<input type="submit"name="Submit"value="提交"></td>
		<a  class="a"href="index.php">返回</a>&nbsp;
	</p>
	
</form>

</body>
</html>