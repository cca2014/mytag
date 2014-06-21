<?php
  //session_start();
  //print( "<!-- " . $_SESSION['authenticated']  . " -->" ) ;
  //print_r($_COOKIE);

  if ( !isset($_COOKIE["auth"])  )
    {
        header("Location: https://mytag-c9-cca2014.c9.io/index.php");
    }
  else {
      
?>


<head>
<style>
    input[type=text] {padding:5px; border:2px solid #ccc;-webkit-border-radius: 5px; border-radius: 5px;}
    input[type=text]:focus { border-color:#333; }
    input[type=submit] { padding:5px 15px; background:#ccc; border:0 none;cursor:pointer; -webkit-border-radius: 5px; border-radius: 5px; }
</style>
</head>
<html>
  <body>

  <img src="images/mytag.png"/>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
  <table>
    <tr>
        <td align=left>
              <form action="page.php" method="post" target="iframe">
                <input type="submit" name="cmd" value="TAGS" />         &nbsp;&nbsp;
                <input type="submit" name="cmd" value="CONNECTIONS" />  &nbsp;&nbsp;
                <input type="submit" name="cmd" value="MESSAGES" />     &nbsp;&nbsp;
                <input type="submit" name="cmd" value="REVIEWS" />      &nbsp;&nbsp;
                <input type="submit" name="cmd" value="WATCHLIST" />    &nbsp;&nbsp;
              </form>
        </td>
        <td aligh=right>
            <form action="page.php" method="post" target="_top">
            <input type="submit" name="cmd" value="LOGOUT" />    &nbsp;&nbsp;
            </form>
        </td>
    </tr>
  </table>
  
  
    <hr/>
  <iframe id="iframe" name="iframe" src="blank.html" width="1200" height="1000" frameborder="0">
  </iframe>    
</body>
</html>



<?php            

    }
?>

