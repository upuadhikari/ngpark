<?php
/**
 * 
 */
include('server.php');

$email1=$_POST['email'];
class logindatabasecheck{

	private $server;
	private $email;
	function __construct($db){
		$this->server=$db;
		
        
	}
	
    public function Dbquery($email1){

		$sql = "SELECT password FROM user_detail WHERE email='$email1'";
		$result=mysqli_fetch_row(mysqli_query($this->server,$sql));
		// var_dump($value);
			if ($result){
			    echo $result[0];
			}
			else {
			    echo "Error occured try again: " . mysqli_error($this->$server);
			}

	}


}

$con=new DataBase;
$connect=$con->connect();
$loginobj=new logindatabasecheck($connect);
$loginobj->Dbquery($email1);