<?php

  $user=$_REQUEST['username'];

  if($user=='google')
  {
     header('location:https://www.google.com');
  }
  else if($user=='facebook')
  {
    header('location:https://www.facebook.com');
  }
  else if($user=='youtube')
  {
    header('location:https://www.youtube.com');
  }
  else if($user=='twitter')
  {
    header('location:https://www.twitter.com');
  }
  else if($user=='codeforce')
  {
    header('location:https://www.codeforce.com');
  }
  else if($user=='linkedln')
  {
    header('location:https://www.linkedln.com');
  }
  else if($user=='instagram')
  {
    header('location:https://www.instagram.com');
  }
  else{
    echo"<font color='red'><h1>SORRY!! NOT FOUND</h1></font>";
  }

?>