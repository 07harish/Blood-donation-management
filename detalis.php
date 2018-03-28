<html>
    <head>
    <style>a.ghost {
   
      color: #0a0a0a;
    border: 1px solid #4435fc;
    border-radius: 5px;
    display: inline-block;
    width: 300px;
    padding:5px;
    margin: 5px;
    font-size: 1em;
    text-align: right;
    text-decoration: none;
    -webkit-transition: color 0.3s ease-out, background-color 0.3s ease-out;
    transition: color 0.3s ease-out, background-color 0.3s ease-out;
}

        
              table {
                  
    font-family: cursive;
    font-size: 15px;
            color: #000000;
            letter-spacing: 0px;
        }
        table, td, th {    
    border: 1px solid #3b3b3b;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 30%;
}

th, td {
    padding: 5px;
}
        
a.ghost:hover, a.ghost:focus {
    
    border: 1px solid #4435fc;
    border-width: thick;
    color: #5252d9;
    opacity: .9;
    -webkit-transition: color 0.3s ease-in, background-color 0.3s ease-in;
    transition: color 0.3s ease-in, background-color 0.3s ease-in;
}</style>
    </head>
<body>
<a class="ghost" href="edit.html" style="text-decoration:none; font-weight: 500; font-size: 90%;  font-family:cursive; position:absolute; right:100px; top:40px;" >Edit your blood_bank info</a><br>
<a class="ghost" href="userinfo.php"  style="text-decoration:none; font-weight: 500; font-size: 90%;  font-family:cursive; position:absolute; right:100px; top:80px;" >Go Back</a>


</body>
</html>
<?php
session_start();
$server='localhost';
$username='root';
$password="";
$result="";

$connection=mysql_connect($server,$username,$password);
$regno=$_SESSION['logged'];
echo "register_id: ".$regno;
echo "<br><br>YOUR BLOOD BANK DETAILS WHICH WILL BE DISPLAYED TO ALL OUR CLIENTS:";
if(!$connection)
{
    echo "connection failed";
}

else
{
    mysql_select_db("bloodbank",$connection) or die(mysql_error());

     $query="select name,address,city,phoneno,email from blood_bank where register_id=$regno";
      $result=mysql_query($query,$connection) or die("Invalid query: " . mysql_error());
    $row = mysql_fetch_array($result);
     echo "<br><br>Bloodbank name: ".$row["name"];
    echo "<br><br>Address: ".$row["address"];
    echo "<br><br>City: ".$row["city"];
    echo "<br><br>Phone Number: ".$row["phoneno"];
    echo "<br><br>Email: ".$row["email"];



    $query="select units from aplus where register_id=$regno";
    $result=mysql_query($query,$connection) or die("Invalid query: " . mysql_error());
    $row = mysql_fetch_array($result);
    echo "<html><br>";
   echo "<table border='1' <tr><td>bloodgroup</td><td>units</td></tr>";
   echo "<tr><td> aplus</td><td>".$row["units"]."</td></tr>";


   $query="select units from aminus where register_id=$regno";
    $result=mysql_query($query,$connection) or die("Invalid query: " . mysql_error());
    $row = mysql_fetch_array($result);
    echo "<html><center>";
   
   echo "<tr><td> aminus</td><td>".$row["units"]."</td></tr>";

   //for get details of units in oplus 
   $query="select units from oplus where register_id=$regno";
    $result=mysql_query($query,$connection) or die("Invalid query: " . mysql_error());
    $row = mysql_fetch_array($result);
    echo "<html><center>";
   
   echo "<tr><td> oplus</td><td>".$row["units"]."</td></tr>";
  
  // to get details of ominus
    $query="select units from ominus where register_id=$regno";
    $result=mysql_query($query,$connection) or die("Invalid query: " . mysql_error());
    $row = mysql_fetch_array($result);
    echo "<html><center>";
   
   echo "<tr><td> ominus</td><td>".$row["units"]."</td></tr>";

   // to get the deatalis of abplus
   $query="select units from abplus where register_id=$regno";
    $result=mysql_query($query,$connection) or die("Invalid query: " . mysql_error());
    $row = mysql_fetch_array($result);
    echo "<html><center>";
   
   echo "<tr><td> abplus</td><td>".$row["units"]."</td></tr>";

   // to get details of abminus
   $query="select units from abminus where register_id=$regno";
    $result=mysql_query($query,$connection) or die("Invalid query: " . mysql_error());
    $row = mysql_fetch_array($result);
    echo "<html>";
   
   echo "<tr><td> abminus</td><td>".$row["units"]."</td></tr>";

   // to  get the details of bplus
   $query="select units from bplus where register_id=$regno";
    $result=mysql_query($query,$connection) or die("Invalid query: " . mysql_error());
    $row = mysql_fetch_array($result);
    echo "<html><center>";
   
   echo "<tr><td> bplus</td><td>".$row["units"]."</td></tr>"; 

   $query="select units from bminus where register_id=$regno";
    $result=mysql_query($query,$connection) or die("Invalid query: " . mysql_error());
    $row = mysql_fetch_array($result);
    echo "<html><center>";
   
   echo "<tr><td> bminus</td><td>".$row["units"]."</td></tr>";

    mysql_close($connection);
}
 
 
?>

