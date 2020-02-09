<?php
session_start();
$_SESSION["uid"]=False;
Class logincheck{
	public function SessionCheck(){
        if(is_null($_SESSION["uid"])==False){
			// include('login.php');
			// $logobj=new Login;
   //          $logobj->loginform();
        	echo $_SESSION["arr"];

        }
        else
        	echo $_SESSION["arr"];
        	
	}
}
  $sessobj=new logincheck;
  $sessobj->SessionCheck();