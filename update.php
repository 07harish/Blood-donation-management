<?php
session_start();
$server='localhost';
$username='root';
$password="";
$result="";
$bloodgroup=$_POST["bloodgroup"];
$units=$_POST["units"];
$connection=mysql_connect($server,$username,$password);
$regno=$_SESSION['logged'];
echo $regno;
if(!$connection)
{
    echo "connection failed";
}
else
{
    mysql_select_db("bloodbank",$connection) or die(mysql_error());
 
  	if($bloodgroup=="aplus")
  	{
  		 $query="update aplus set units=units+$units where register_id=$regno";

  		  $result=mysql_query($query,$connection) or die("Invalid query: " . mysql_error());


  		  echo "<html><center>";
    if(!$result)
    {
        echo "update failed!!!!";
     
    }
    else
    {
        echo "update successfully";
    }
  	}


  	else if($bloodgroup=="aminus")
  	{
  		 $query="update aminus set units=units+$units where register_id=$regno";

  		  $result=mysql_query($query,$connection) or die("Invalid query: " . mysql_error());


  		  echo "<html><center>";
    if(!$result)
    {
        echo "update failed!!!!";
     
    }
    else
    {
        echo "update successfully";
    }
  	}

 
  else if($bloodgroup=="bplus")
  	{

  		 $query="update bplus set units=units+$units where register_id=$regno";

  		  $result=mysql_query($query,$connection) or die("Invalid query: " . mysql_error($connection ));


  		  echo "<html><center>";
    if(!$result)
    {
        echo "update failed!!!!";
     
    }
    else
    {
        echo "update successfully";
    }
}

  	else if($bloodgroup=="bminus")
  	 {
  		 $query="update bminus set units=units+$units where register_id=$regno";

  		  $result=mysql_query($query,$connection) or die("Invalid query: " . mysql_error());


  		  echo "<html><center>";
    if(!$result)
    {
        echo "update failed!!!!";
     
    }
    else
    {
        echo "update successfully";
    }
  	}

    else if($bloodgroup=="oplus")
  	{
  		 $query="update oplus set units=units+$units where register_id=$regno";

  		  $result=mysql_query($query,$connection) or die("Invalid query: " . mysql_error());


  		  echo "<html><center>";
    if(!$result)
    {
        echo "update failed!!!!";
     
    }
    else
    {
        echo "update successfully";
    }
  	}

  	else if($bloodgroup=="ominus")
  	{
  		 $query="update ominus set units=units+$units where register_id=$regno";

  		  $result=mysql_query($query,$connection) or die("Invalid query: " . mysql_error());


  		  echo "<html><center>";
    if(!$result)
    {
        echo "update failed!!!!";
     
    }
    else
    {
        echo "update successfully";
    }
  	}
  	 

 else  if($bloodgroup=="abplus")
  	{
  		 $query="update abplus set units=units+$units where register_id=$regno";

  		  $result=mysql_query($query,$connection) or die("Invalid query: " . mysql_error());


  		  echo "<html><center>";
    if(!$result)
    {
        echo "update failed!!!!";
     
    }
    else
    {
        echo "update successfully";
    }
  	}

  	else if($bloodgroup=="abminus")
  	{
  		 $query="update abminus set units=units+$units where register_id=$regno";

  		  $result=mysql_query($query,$connection) or die("Invalid query: " . mysql_error());


  		  echo "<html><center>";
    if(!$result)
    {
        echo "update failed!!!!";
     
    }
    else
    {
        echo "update successfully";
    }
  	}

  	else 
  		{	echo "<html><center><br>";
  			echo "enter  valid the blood group";}
    mysql_close($connection);
}
 
 
?>
<html>
    <style>a.ghost {
    color:#467cf5;
    border: 1px solid #1e4bc7;
    border-radius: 5px;
    display: inline-block;
    width: 100px;
    padding: 8px;
    margin: 10px;
    font-size: 1em;
    text-align: center;
    text-decoration: none;
    
}</style>
<body><br>
<a class="ghost" href="userinfo.php" style="float:center">Go Back</a><br>
</body>
</html>