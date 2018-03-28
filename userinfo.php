<?php

session_start();

if(isset($_SESSION['logged']))
{
	echo "<b>welcome<b> ".$_SESSION['logged'];
}
else
{
	echo "you are not loggedin";
	session_destroy();
	exit(0);
}


if(isset($_POST['logout']))
{
	session_unset();
	session_destroy();
	header("Location:login.php");
}


?>
<html>
    <style>
    body{
            background: url('donar.jpg') no-repeat;
            background-size:contain;
        }
        
           table {
    font-family: cursive;
    font-size: 18px;
            color: #000000;
            letter-spacing: 1px;
    
        }
   
        
a.ghost {
    color:#666767;
    border: 2px solid #696363;
    border-radius: 2px;
    display: inline-block;
    width: 300px;
    padding: 8px;
    margin: 5px;
    font-size: 2em;
    text-align: center;
    text-decoration: none;
    -webkit-transition: color 0.3s ease-out, background-color 0.3s ease-out;
    transition: color 0.3s ease-out, background-color 0.3s ease-out;
}
         input[type=text],select,input[type=submit],input[type=number]
        {
            border: 2px solid #000000;
    border-radius: 4px;
            width: 100px;
            text-align: center;
        }

        
        a.ghost:hover, a.ghost:focus {
    background-color: #d3dae6;
    border: 2px solid #151515;
    border-width: thick;
    color: #7373e5;
    opacity: .9;
    -webkit-transition: color 0.3s ease-in, background-color 0.3s ease-in;
    transition: color 0.3s ease-in, background-color 0.3s ease-in;
}
    </head>
<body>

        
    </style>
<body><p1><center><b>UPDATE UNITS,NEGATIVE OR POSITIVE</b></center></p1>
<a class="ghost" href="detalis.php" style="text-decoration:none; font-weight: 500; font-size: 90%;  font-family:cursive; position:absolute; right:100px; top:40px;">Our BloodBank Details/update</a><br>
<a class="ghost" href="password.html" style="text-decoration:none; font-weight: 500; font-size: 90%;  font-family:cursive; position:absolute; right:100px; top:100px;">Change Password</a><br>

<form  action="update.php"  method="post">

			<table align="center" cellpadding="4" cellspacing="4">
				<tr><td>Blood Group</td>
					<td>    <select style="width:100px"  name="bloodgroup">  
<option value="aplus">A-positive</option>  
<option value="aminus">A-negative</option>  
<option value="bplus">B-positive</option>  
<option value="bminus">B-negative</option>  
<option value="oplus">O-positive</option>  
<option value="ominus">O-negative</option>  
<option value="abplus">AB-positive</option> 
<option value="abminus">AB-negative</option>  

</select></td>
				</tr>
				<tr><td>units</td>
					<td><input type="number" style="width:70px" name="units"></td>
				</tr>
				<tr>
					
					<td><input type="submit" name="update" value="update"/></td>
				</tr>
    </table>

</form>
<form method="post" action="userinfo.php" align="right" style="position:absolute; right:100px; top:150px;"><br>
	<input type="submit"  value="logout" name="logout"/>
</form>
</body>
</html>