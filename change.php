<?php
session_start();
$server='localhost';
$username='root';
$password="";
$result="";
$oldpassword=$_POST["oldpassword"];
$newpassword=$_POST["newpassword"];
$regno=$_SESSION['logged'];
$connection=mysql_connect($server,$username,$password);


if(isset($_POST['logout']))
{
  session_unset();
  session_destroy();
  header("Location:login.php");
}


if(!$connection)
{
    echo "connection failed";
}
else
{
    mysql_select_db("bloodbank",$connection) or die(mysql_error());
  	
  		 $query="update admin set password='$newpassword' where username=$regno and password='$oldpassword' ";

  		  $result=mysql_query($query,$connection) or die("Invalid query: " . mysql_error());


  		  echo "<html><center>";
    
    if($result==$oldpassword)
    {
        echo "password sucessfully changed!";
     
    }
    else
    {
        echo "old password is incorrect";
    }
}

  	
 
?>
<html>
<body>
<a class="btn btn-lg btn-primary btn-block" href="userinfo.php" style="float:right">Back</a><br>
</body>
</html>