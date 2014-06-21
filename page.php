<?php

// foreach ($_POST as $key => $value) {
//        echo $key . ": " . $value . "<br/>" ;
//    }    
    
  if( $_POST['cmd'] == "TAGS" )
  {
      //load the tags page
      include "views/tags.inc" ;
  }

  if( $_POST['cmd'] == "CONNECTIONS" )
  {
      //load the connections page
      include "views/connections.inc" ;
  }
  
  if( $_POST['cmd'] == "MESSAGES" )
  {
      //load the messages page
      include "views/messages.inc" ;
  }
  
  if( $_POST['cmd'] == "REVIEWS" )
  {
      //load the messages page
      include "views/reviews.inc" ;
  }
  
  if( $_POST['cmd'] == "WATCHLIST" )
  {
      //load the messages page
      include "views/watchlist.inc" ;
  }

 
  if( $_POST['cmd'] == "LOGOUT" )
  {
    header("Location: https://mytag-c9-cca2014.c9.io/logout.php");
  }  
 
    
?>


