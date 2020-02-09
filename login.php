<?php
// var_dump($_GET['a']);
/**
 * 
 */


class Login
{
    
    function loginform()
    {
      
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<title>Log In</title>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Cinzel&display=swap');
        body
        {   
            padding: 0px;
            /*background-image: url(img/7.jpg);*/
            background-size: cover;
            
        }     
    	.card
		{
			position: absolute;
			top: 50%;
			left: 75%;
			transform: translate(-50%,-50%);
			width: 670px;
			height: 90%;	
		}
		.log
		{
           font-family: 'Roboto',sans-serif;     
           font-size: 15px;
           text-shadow: 3px;
           color: black;
		}
    	.ns
    	{
    		font-size: 14px;
    		margin-left: 10px;
    		color: black;
            text-align: center;
    	}
    	form
    	{
    		margin-top: 40px;
    	}
    	.row button
    	{
    		width: 24rem;
    	}
        .word
        {
            font-style: bold;
            font-family: 'Roboto',sans-serif; 

        }
        .head
        {
            font-size: 150px;
            font-weight: 600;
            color: #cda5e9;
            font-family: 'Cinzel', serif;
        }
        p
        {
           color: white;
           font-size: 26px;
           font-weight: 600;
           font-family: 'Poppins', sans-serif;
        }
        #heading
        { 
            background-color: black;
            width: 800px;
            height: 568px;
            position: absolute;
            top: 12%;
            left: 13%;
            text-align: center;
            opacity: .6;
        }
        #logh
        {
            color: #fa8c00;
            font-family: 'Cinzel', serif;
            text-align: center;
        }
        .row .nav-link
        {
            background-color: #fa8c00;
            color: white;
        }
        @media screen and (max-width: 500px)
        {
            .card .card-body
            {
                width: 90%;
                padding: 0;
            }
        }
        #container
        {
            width: 1100px;
            height: 580px;
            position: absolute;
            top: 15%;
            left: 9.7%;
            background-color: #fa8c00;
            border-radius: 400px 0px 0px 400px;
        }
        .head
        {
            color: white;
            position: absolute;
            top: 30%;
            left: 12%;
            font-size: 100px;
        }
        .hk
        {
           font-size: 100px;
        }
        .hp
        {
           color: white;
           font-size: 28px;
           position: relative;
           top: 53%;
           left: 20%;
        }
    </style>
</head>
<body background="img/10.jpg">
     <div id="container">
        <p class="head"><span class="hk">NG</span> Park</p>
        <span class="hp">Your Dream Destination!</span>
	 <div class="card" style="width: 27rem;">		
	  <div class="card-body" style="background-color: white;">
        <hr>
        <form method="POST" action="logindatabasecheck.php">

            <div class="form-group row">
            <div class="col-sm-12" id="Email">
            <span class="log" style="color: #fa8c00">Email</span>
            <input type="email" class="form-control" required="" placeholder="Enter Email Address" name="email">
            </div>
            </div>
            <div class="form-group row">        
            <div class="col-sm-12" id="Password">
            <span class="log" style="color: #fa8c00;">Password</span>
            <input type="password" class="form-control" placeholder="Enter Password" name="passwd" required="">
            </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                     <input type="checkbox" class="radioBtn"> Remember Password
                </div>
            </div>
            <br>
            <div class="row">
            <div class="col-sm-8">
                     <button class="nav-link" name="login">Log In</button>
            </div>
            </div>
            <br>           
            <div class="row">
            	<label class="ns"> Not signed In yet ? Click here to signup, <a href="index.php/signup" style="color: #fa8c00">Sign Up</a></label>
            </div>
            </form>
            <a href="test.php">Go to test</a>
    </div>

    </div>
</div>
</body>
</html>
<?php
}
}

