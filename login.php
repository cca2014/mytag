

<head>
<style>

.left {
	position: relative;
	float: left;
	margin-top: 50px;
	width: 500px;
	height: 400px;
	margin-bottom: 10px;
    display:  inline-block;
}

.right {
	position: relative;
	float: left;
	margin-top: 50px;
	width: 400px;
	height: 650px;
	margin-bottom: 10px;
	display: inline-block;
    border: 2px solid gray;
    border-radius: 25px;
}

label { 
  display:inline-block; 
  height: 35px;
}

input { 
  display:block;
  height: 35px;
  font-size: 16pt; 
  color: gray; 
  font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic",  
}

input[type='checkbox'] {
    -webkit-appearance:none;
    width:30px;
    height:30px;
    background:white;
    border-radius:5px;
    border:2px solid #555; 
}
input[type='checkbox']:checked {
    background: gray;
}

input[type='submit'] { 
    padding:5px 15px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer; 
    -webkit-border-radius: 5px; 
    border-radius: 5px; 
}


table {
  border-spacing: 30px;
  border-collapse: separate;
  font-size: 16pt; 
  color: gray; 
  font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif
}


</style>
</head>

<html>
<body>

<div class="top">
    <img src="images/topnav.png"/>
</div>

<div class="left">
    <img src="images/login-left.png"/>
</div>



<form method="POST" action="login.php">

<div class="right" >
  <br/><br/>  
  <table align="center">
    <tr>
      <td>
        <label for="username">Username or Email</label>
        <input type="text" maxlength="60" name="username" size="30" autocomplete="off" id="username">
      </td>
    </tr>
    <tr>
      <td>
        <label for="password">Password</label>
        <input type="password" maxlength="60" name="password" size="30" id="password" autocomplete="off">
      </td>
    </tr>
    <tr>
      <td>
        <label for="rememberme">Keep me logged in</label>
        <input name="rememberme" id="rememberme" type="checkbox" value="1" />
      </td>
    </tr>
    <tr>
      <td>
        <br/>
        <a href="forgotpassword">Forgot password?</a>
        <p>Don't have an account? <br/> <a href="register" class="forgotpasswd">Create one now</a></p>
        <br/>
      </td>
    </tr>
    <tr>
      <td>
        <input type="submit" value="Login">
      </td>
    </tr>
  </table>
  
</div>
</form>





</body>
</html>

<?php

 foreach ($_POST as $key => $value) {
        echo "<!-- " . $key . ": " . $value . "--/>" ;
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if( $_POST['username'] == "john" &&  $_POST['password'] == 'smith' ) {
            //$_SESSION['auth']="true";
            setcookie("auth", 1, time()+3600);
            header("Location: https://mytag-c9-cca2014.c9.io/profile.php");

        }
    }

?>

