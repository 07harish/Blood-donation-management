<?php




//connect to mysql
$server='localhost';
$username='root';
$password="";

$name=$_POST["name"];
$phoneno=$_POST["Phoneno"];
$city=$_POST["city"];
$bloodgroup=$_POST["bloodgroup"];
$email=$_POST["email"];
$address=$_POST["address"];
$age=$_POST["age"];
$connection=mysql_connect($server,$username,$password);



if(!$connection)
{
    echo "connection failed";
}
else
{
    mysql_select_db("bloodbank",$connection) or die(mysql_error());
    
     $query="INSERT into donor values('$name',$age,'$address','$city','$bloodgroup','$email',$phoneno);";
    
    $result=mysql_query($query,$connection);

   echo "<html><center>";
    if(!$result)
    {
        echo "ERROR. insertion failed";
        echo "<br>try another user name and his phone number<br><br>";
    }
    else
    {
        echo "<b>You are succesfully registered as donar!<b>";
        echo "<b><br>Thanks for registering and helping us to create a better world.<b>";
    }
    mysql_close($connection);
}


?>
<html>
<body>
    <style>        * {font-family: 'fantasy';-webkit-box-flex: center;-webkit-flex: center;-ms-flex: center;flex: center;}


a.ghost {
   
      color: #0a0a0a;
    border: 1px solid #4435fc;
    border-radius: 5px;
    display: inline-block;
    width: 100px;
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
}
</style>
<a class="ghost" href="welcome.html"><br><br>Back to Homepage</a><br>
    < input type="text" name="otptext" onsubmit="otp.php" >
</body>
</html>
