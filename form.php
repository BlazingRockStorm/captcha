<?php
session_start();
if(isset($_POST['ok']))
{
 if($_POST['txtCaptcha'] == NULL)
 {
  echo "Please enter your code";
 }
 else
 {//check the security code is right or not
  if($_POST['txtCaptcha'] == $_SESSION['security_code'])
  {
   echo "ma lenh hop le";
  }
  else
  {
   echo "Ma lenh khong hop le";
  }
 }
}