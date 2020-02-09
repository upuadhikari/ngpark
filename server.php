<?php
class DataBase
{
	public $server;
	public $a;
	private $server_name='localhost',$username='root',$password='',$database_name='ngpark';
	public function connect(){
		$this->server=mysqli_connect($this->server_name,$this->username,$this->password,$this->database_name);
		  if ($this->server) {
		  	return $this->server;
		  }
		  else {
		  	echo "Not connected";
		  }
	}

}

// $obj=new DataBase;
// $obj->connect();
