<?php
session_start();
$server='localhost';
$username='root';
$password="";
$result="";

$name=$_POST["name"];
$address=$_POST["address"];
$city=$_POST["city"];
$phoneno=$_POST["phoneno"];
$email=$_POST["email"];
$connection=mysql_connect($server,$username,$password);
$regno=$_SESSION['logged'];
echo "register_id:".$regno."<br>";
if($name==""&&$address==""&&$phoneno==""&&$email==""&&$city=="")
    {
    	echo " update not possiable<br>";
    	header("Location:detalis.php");

    }

if(!$connection)
{
    echo "connection failed";
}

else
{
    mysql_select_db("bloodbank",$connection) or die(mysql_error());
    
   if(!($name==""))
   {
   	$query="update blood_bank set name='$name' where register_id=$regno";
   	 $result=mysql_query($query,$connection) or die("Invalid query: " . mysql_error());
   	
   if(!$result)
    {
        echo "update failed!!!!";
     
    }
    else
    {
        echo $name;
        echo "<b>Name updated successfully<br> ";
    }
}
    if(!($address==""))
   {
   	$query="update blood_bank set address='$address' where register_id=$regno";
   	 $result=mysql_query($query,$connection) or die("Invalid query: " . mysql_error());
   	
   if(!$result)
    {
        echo "update failed!!!! ";
     
    }
    else
    {  
        echo $address;
        echo "<b>Address updated successfully <br> ";
    }
}
    if(!($city==""))
   {
   	$query="update blood_bank set city='$city' where register_id=$regno";
   	 $result=mysql_query($query,$connection) or die("Invalid query: " . mysql_error());
   	
   if(!$result)
    {
        echo "update failed!!!!";
     
    }
    else
    {
         echo $city;
        echo "<b> city updated successfully  <br>";
    }
}
    if(!($phoneno=="phoneno"))
   {
   	$query="update blood_bank set phoneno='$phoneno' where register_id=$regno";
   	 $result=mysql_query($query,$connection) or die("Invalid query: " . mysql_error());
   	
   if(!$result)
    {
        echo "update failed!!!!";
     
    }
    else
    {
         echo $phoneno;
        echo "<b> phone number updated successfully <br>";
    }
}
    if(!($email==""))
   {
   	$query="update blood_bank set email='$email' where register_id=$regno";
   	 $result=mysql_query($query,$connection) or die("Invalid query: " . mysql_error());
   	
   if(!$result)
    {
        echo "update failed!!!!";
     
    }
    else
    {
        echo $email;
        echo "<b> email updated successfully <br> ";
    }
}

    mysql_close($connection);

}

?>
<html>
<body><style>a.ghost {
   
      color: #0a0a0a;
    border: 1px solid #4435fc;
    border-radius: 5px;
    display: inline-block;
    width: 300px;
    padding:5px;
    margin: 5px;
    font-size: 1em;
    text-align: center;
    text-decoration: none;
    -webkit-transition: color 0.3s ease-out, background-color 0.3s ease-out;
    transition: color 0.3s ease-out, background-color 0.3s ease-out;
}

a.ghost:hover, a.ghost:focus {
    border: 1px solid #4435fc;
    border-width: thick;
    color: #5252d9;
    opacity: .5;
    -webkit-transition: color 0.3s ease-in, background-color 0.3s ease-in;
    transition: color 0.3s ease-in, background-color 0.3s ease-in;
}</style><center>
<a class="ghost" href="detalis.php" style="text-decoration:none; position:absolute; left:30px; top:200px; float:center;">look for updated Detalis</a><br>
    </center>
</body>
</html>