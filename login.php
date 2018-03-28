 <?php
 session_start();
$connection = mysql_connect('localhost', 'root','');

 $db=mysql_select_db("bloodbank",$connection) or die(mysql_error());
 if(isset($_POST) & !empty($_POST)) 
 {
  $username =mysql_real_escape_string( $_POST['username'],$connection);
  
$password = mysql_real_escape_string( $_POST['password'],$connection);

  $sql = "SELECT * FROM  `admin` WHERE username='$username' AND password='$password'";
  $result=mysql_query($sql,$connection);
  echo mysql_error($connection);
 $count=mysql_fetch_array($result);
 if($count['username']==$username && $count['password']==$password)
 {
  echo "correct";
  $_SESSION['logged']=$username;
  header("Location:userinfo.php");
  exit(0);
 } 
 else
 {
  echo "   incorrect username/password";
 }
 }
       if(isset($_SESSION['username'])){
        $smsg= "User already logged in";
       } 
 ?>

 <html>
 <head> 
 </head>
      <style>
     body{
            background: url('donar.jpg') no-repeat;
            background-size:cover;
        }
        
        table{
            
             font-family: monospace;
    font-size: 18px;
            color: #000000;
            letter-spacing: 1px;
        }
    </style>
     <script>
     function checkForm(form)
         {
             if(form.inputfield.value == "") {
                 alert("error: input is empty!");
                 form.inputfield.focus();
                 return false;
             }
             var re = /^[\w ]+$/;
             
             if(!re.test(form.inputfield.value)) {
                 alert("error: input contains invalid characters!");
                 form.inputfield.focus();
                 return false;
             }
           return false;  
         }
     </script>
 
<body><div class="container">
<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div> <?php } ?>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div> <?php } ?>
 <form class="form-signin" method="POST" onsubmit="return checkForm(this);">
     
        <h4 class="form-signin-heading">LOGIN HERE</h4>
        <div class="input-group">
    <span class="input-group-addon" id="basic-addon1">reg id</span>
    <input type="text" name="username" class="form-control" placeholder="Username" required>
  
        
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button></div>
      </form>
      </div>
     </body>
      </html>
