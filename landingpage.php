<?php
include('server.php');
include('CoverPage.php');


/**
 * 
 */
class ServerInit
{
	private $server;
	function __construct($db){
		$this->server=$db;
		
        
	}
	public function coverview($value='')
	{
		$view=new CoverPage;
        $view->cover();

	}
	
}

$con=new DataBase;
$connect=$con->connect();
$Searchq= new ServerInit($connect);
$Searchq->coverview();