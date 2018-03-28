<?php
//connect to mysql
$server='localhost';
$username='root';
$password="";

//$city=$_GET['city'];
$bloodgroup=$_GET["bloodgroup"];

$connection=mysql_connect($server,$username,$password);

if(!$connection)
{
    echo "connection failed";
}
else
{
    mysql_select_db("bloodbank",$connection) or die(mysql_error());
    if($bloodgroup=="oplus")
	{
	
    $query = "SELECT name,phno,address,email from donor where city='".$_GET['city']."' and blood_group='".$_GET['bloodgroup']."'";
	  
    $result=mysql_query("$query")  or die("Invalid query: " . mysql_error());
	
	 echo "<html><center>";
	 echo "<table border='1' <tr><td>name</td><td>phno</td><td>address</td><td>email</td></tr>";
	 while($row = mysql_fetch_array($result))
	 {
		
	
		echo "<tr><td> ".$row["name"]."</td><td>".$row["phno"]."</td><td>".$row["address"]."<td>".$row["email"]."</td></tr>";
	
	 }
	echo "</table>";
	
	
	}
	
   else if($bloodgroup=="aplus")
	{
	
    $query = "SELECT name,phno,address,email from donor where city='".$_GET['city']."' and blood_group='".$_GET['bloodgroup']."'";
	  
    $result=mysql_query("$query")  or die("Invalid query: " . mysql_error());
	
	 echo "<html><center>";
	 echo "<table border='1' <tr><td><b>Name</td><td><b>Phone  no</td><td><b>Address</td><td><b>Email</td></tr>";
	 while($row = mysql_fetch_array($result))
	 {
		
	
		echo "<tr><td> ".$row["name"]."</td><td>".$row["phno"]."</td><td>".$row["address"]."<td>".$row["email"]."</td></tr>";
	
	 }
	 
	echo "</table>";
	
	
	}
	
	
	
	 else if($bloodgroup=="bplus")
	{
	
   
    $query = "SELECT name,phno,address,email from donor where city='".$_GET['city']."' and blood_group='".$_GET['bloodgroup']."'";
	  
    $result=mysql_query("$query")  or die("Invalid query: " . mysql_error());
	
	 echo "<html><center>";
	 echo "<table border='1' <tr><td><b>Name</td><td><b>Phone no</td><td><b>Address</td><td><b>Email</td></tr>";
	 while($row = mysql_fetch_array($result))
	 {
		
	
		echo "<tr><td> ".$row["name"]."</td><td>".$row["phno"]."</td><td>".$row["address"]."<td>".$row["email"]."</td></tr>";
	
	 }
	echo "</table>";
	
	
	}
	
	 else if($bloodgroup=="abplus")
	{
	
    
    $query = "SELECT name,phno,address,email from donor where city='".$_GET['city']."' and blood_group='".$_GET['bloodgroup']."'";
	  
    $result=mysql_query("$query")  or die("Invalid query: " . mysql_error());
	
	 echo "<html><center>";
	 echo "<table border='1' <tr><td>Name</td><td>Phone nod><td>Address</td><td>email</td></tr>";
	 while($row = mysql_fetch_array($result))
	 {
		
	
		echo "<tr><td> ".$row["name"]."</td><td>".$row["phno"]."</td><td>".$row["address"]."<td>".$row["email"]."</td></tr>";
	
	 }
	echo "</table>";
	
	}
	
	
	
	 else if($bloodgroup=="aminus")
	{
	
        
    $query = "SELECT name,phno,address,email from donor where city='".$_GET['city']."' and blood_group='".$_GET['bloodgroup']."'";
	  
    $result=mysql_query("$query")  or die("Invalid query: " . mysql_error());
	
	 echo "<html><center>";
	 echo "<table border='1' <tr><td>name</td><td>phno</td><td>address</td><td>email</td></tr>";
	 while($row = mysql_fetch_array($result))
	 {
		
	
		echo "<tr><td> ".$row["name"]."</td><td>".$row["phno"]."</td><td>".$row["address"]."<td>".$row["email"]."</td></tr>";
	
	 }
	echo "</table>";
	 
	
	}
	
	
	 else if($bloodgroup=="abminus")
	{
	
   
       
    $query = "SELECT name,phno,address,email from donor where city='".$_GET['city']."' and blood_group='".$_GET['Bloodgroup']."'";
	  
    $result=mysql_query("$query")  or die("Invalid query: " . mysql_error());
	
	 echo "<html><center>";
	 echo "<table border='1' <tr><td>name</td><td>phno</td><td>address</td><td>email</td></tr>";
	 while($row = mysql_fetch_array($result))
	 {
		
	
		echo "<tr><td> ".$row["name"]."</td><td>".$row["phno"]."</td><td>".$row["address"]."<td>".$row["email"]."</td></tr>";
	
	 }
	echo "</table>";
	 
	
	}
	
	
	
	 else if($bloodgroup=="ominus")
	{
	
  
       
    $query = "SELECT name,phno,address,email from donor where city='".$_GET['city']."' and blood_group='".$_GET['bloodgroup']."'";
	  
    $result=mysql_query("$query")  or die("Invalid query: " . mysql_error());
	
	 echo "<html><center>";
	 echo "<table border='1' <tr><td>NAME</td><td>PHONE NUMBER</td><td>ADDRESS</td><td>EMAIL</td></tr>";
	 while($row = mysql_fetch_array($result))
	 {
		
	
		echo "<tr><td> ".$row["name"]."</td><td>".$row["phno"]."</td><td>".$row["address"]."<td>".$row["email"]."</td></tr>";
	
	 }
	echo "</table>";
	
   }

	
	
	 else if($bloodgroup=="bminus")
	{
	
    
       
    $query = "SELECT name,phno,address,email from donor where city='".$_GET['city']."' and blood_group='".$_GET['Bloodgroup']."'";
	  
    $result=mysql_query("$query")  or die("Invalid query: " . mysql_error());
	
	 echo "<html><center>";
	 echo "<table border='1' <tr><td>Name</td><td>Phone-No</td><td>Address</td><td>Email</td></tr>";
	 while($row = mysql_fetch_array($result))
	 {
		
	
		echo "<tr><td> ".$row["name"]."</td><td>".$row["phno"]."</td><td>".$row["address"]."<td>".$row["email"]."</td></tr>";
	
	 }
	 mysql_close($connection);
	}
}
	
?>
<html>
<body>
    <style>
       table { 
    font-family: monospace;
    font-size: 18px;
            color: #000000;
            letter-spacing: 1px;
        }
        table, td, th {    
    border: 1px solid #3b3b3b;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 20px;
}
          a:link, a:visited {
      background-color: #639fff;
      color: #cfffd3;
      padding: 2px 40px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
     }
      a:hover, a:active {
      background-color: #224aef;
     }
          body {-webkit-animation: pulse 10s infinite;animation: pulse 10s infinite;}

@-webkit-keyframes pulse {
    0% {background:#c3c3c3}
    25% {background:#fac0d4}
    50% {background:#ff86f6}
    75% {background:#959eff}
    100% {background:#9bff93}
}

@keyframes pulse {
    0% {background:#c3c3c3}
    25% {background:#fac0d4}
    50% {background:#ff86f6}
    75% {background:#959eff}
    100% {background:#9bff93}
}
    </style>
    
<a class="btn btn-lg btn-primary btn-block" href="request.html" style="float:right">Go Back</a><br>
</body>
</html>
