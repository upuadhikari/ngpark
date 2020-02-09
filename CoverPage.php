  <?php
//  include('logincheck.php');
  class CoverPage 
  {
    public function cover(){
  ?>

  <html lang="en">
      <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
          <title>NG Park</title>
          <style type="text/css">
          @import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');
            .navbar
            {
              width: 100%;
              padding-bottom: 10px;
              background-color: #fa8c00;
            }
            .navbar-nav
            {
              position: absolute;
              top: 25%;
              right: 1%;
            }
            #search
            {
              height: 250px;
              width: 100%;
              background-color: #faf9fc;
            }
             #searching
            {
              width: 100%;
            }
            .searchhere
            { 
              border-radius: 25px 0px 0px 25px;
              float: left;
              width: 62%;
              border: 5px solid #e4def0;      
              padding: 11px;
              position: absolute;
              top:38%;
              left: 18%;
            }
            .searchbtn
            {
              color: white;
              position: absolute;
              top: 36%;
              left: 77%;
              width: 80px;
              height: 80px;
              border: 5px solid #e4def0; 
              background-color: #fa8c00; 
              cursor: pointer;
              border-radius: 50%;
            }
            .searchbtn:hover
            {
              width: 82px;
              height: 82px;
            }
            .wrap #searching .searchbtn .fas
            {
              color: white;
            }
            .heading
            {
              font-family: 'Poppins', sans-serif;
              position: relative;
              left: 7%;
              font-size: 27px;
              color: #fa8c00;
              padding-top: 80px;
              letter-spacing: 0.5px;
              word-spacing: 1px;
            }
            #signin, #signup
            {
              font-family: 'Poppins', sans-serif;
              color: #fa8c00 !important;
              font-size: 13px;
            }
            #Ad
            {
              width: 50%;
              height: 45px;
              position: absolute;
              top: 25%;
              left: 50%;
              transform: translate(-50%,-50%);
              border : 2px solid #e4e3e6;
            }
            #downshift
            {
              margin-top: 25px;
            }
            .ad
            {
              color: #fa8c00;
              font-size: 18px;
              text-align: center;
              padding-top: 10px;
            }
            .form-btn{
              left: 50%;
            }
            #places .container
            {
                max-width: 1200px;
                margin: auto;
                overflow: auto;
            }
            #places
            {
              margin-top: 100px;
            }
            .gallary
            {
              width: 500px;
              float: left;
            }
            #gallery{
              background-color: #fff;
            }     
            #gallery .grid li{
              padding:20px;
              height: 350px;
              border-radius: 3px;
              background-clip: content-box;
              background-size: cover;
              background-position: center;
              background-color: #333;
              list-style: none;
            }
            #gallery ul.grid{
              width: 100%;
              display: flex;
              flex-wrap: wrap;
              justify-content: center;
            }
            #gallery .grid li.small{
              flex-basis: 40%;
              text-decoration: none;
            }
            #gallery .grid li.large{
              flex-basis: 50%;
            }
            #gallery .grid li.elarge{
              flex-basis: 60%;
            }
            #gallery p{
              max-width: 800px;
              text-align: center;
              margin: 0 auto 35px;
              padding:0 20px;
              line-height: 2;
            }
            @media(max-width: 1000px){
              #gallery .grid li.small,
              #gallery .grid li.large{
                flex-basis: 100%
              }
            }
            #rec
            {
              font-family: 'Poppins', sans-serif;
              font-size: 25px;
              color: #fa8c00;
            }
            #subscribe
            {
              width: 100%;
              height: 300px;
              background-color: #faf9fc;
            }
            #subscribe .container
            {
              position: relative;
              top: 40%;
              left: 22%;           
            }
            #subscribe .container .text1
            {
               text-align: center;
               font-size: 35px;
               color: #fa8c00;
               position: absolute;
               bottom: 100%;
               left: 3%;
            }
            #subscribe .container .text2
            {
              color: #fa8c00;
              font-size: 20px;
            }
            #subscribe .container .sub 
            {
              padding-top: 15px;
              position: relative;
              right: 4%;
              font-family: 'Poppins', sans-serif;
            }
            #subscribe .container .sub .subs
            {
              width: 35%;
              height: 50px;
              border-radius: 5px 5px 5px 5px;
              border: 5px solid #e4def0; 
            }
             #subscribe .container .sub #subbut
             {
              height: 50px;
              border: 5px solid #e4def0; 
              position: absolute;
              left: 34%;       
             }
             #footer
             {
              width: 100%;
              height: 400px;
              background-color: #a685c9;
             }
             #footer .container #logos ul
             {
              list-style: none;
              position: absolute;
              left: 40%;
             }
             #footer .container #logos ul li 
             {
              float: left;
              padding: 8px;
             }
            #footer .container #logos ul li a
            {
              font-size: 50px;
              color: #41235d;
            }
            #footer .container1 #list ul
            {
             list-style: none;
            }
            #footer .container1 #list ul li a
            {
              color: #41235d;
              font-size: 17px;
            }
            #footer .container1
            {
              position: relative;
              top: 40%;
              left: 35%;
            }
            #footer .container2 #list ul
            {
             list-style: none;
            }
            #footer .container2 #list ul li a
            {
              color: #41235d;
              font-size: 17px;
            }
            #footer .container2
            {
              position: relative;
              top: 8%;
              left: 50%;
            }
            #end 
            {
              width: 100%;
              height: 150px;
              background-color: #fa8c00;
            }
            #end .container
            {
              position: relative;
              left: 30%;
            }
          </style>
      </head>
      <body>
          <header>
          <nav class="navbar navbar-dark navbar-expand-lg">
            <a href="#" class="navbar-brand"><img src="img/logo3.png" width="85" height="80" style="position: relative; left: 200%"></a> 
            <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapse">
             <ul class="navbar-nav ml-auto">
              <li class="navbar-item">
                  <button class="btn btn-light px-1 py-1"><a href="logincheck.php" id="signin" class="nav-link"><i class="fas fa-sign-in-alt"></i> Log In</a></button>
              </li><br>            
             </ul>
         </div>
         </nav>
         </header>
         <div id="search">
           <div class="container">
               <p class="heading"><i class="fas fa-building"></i> Find the best deals here:</p>
               <!-- <div id="searching"> -->
                <!-- <div class="col-md-4 col-md-pull-7"> -->
              <!--   <form > -->
              <div class="booking-form">

                  <div class="row">
                    <div class="col-sm-2">
                      <div class="form-group">
                        <span class="form-label">Check In Day</span>
                        <input class="form-control" type="date" required id="date">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <span class="form-label">Time From:To</span>
                    <select class="form-control" required name="hi" id='hi'>
                      <option value="4" >Half Shift(12:00am to 4:00pm)</option>
                      <option value="8">Full Shift(12:00am to 8:00pm)</option>
                    </select> 
                      </div>
                    </div>
                    
                    <div class="col-sm-2">
                      <div class="form-group">
                        <span class="form-label">Adults</span>
                        <select class="form-control">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <span class="form-label">Children</span>
                        <select class="form-control">
                          <option>0</option>
                          <option>1</option>
                          <option>2</option>
                        </select>
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                      <div class="col-sm-2" id="downshift">
                        <div class="form-btn">

                      <button class="submit-btn" name="submit" id="checkava">Check availability</button>

                        </div>
                    </div>
                  </div>
                  
                <!-- </form> -->
              </div>
            </div>
                <!-- </a>    -->
                </form>
              </div>
           </div>
         </div>
         <div id="Ad">
           <div class="container">
             <p class="ad"><i class="fas fa-credit-card"></i> Save Upto 50%, <i class="fas fa-gift"></i> Christmas Offer, <a href="#"><u>click here</u></a></p>
           </div>
         </div>
         <div id="places">
          <div class="container">
            <p id="rec" style="text-align: center;">Recommended Hotels</p>
            <div id="gallery" class="photo-gallery">
                <p> </p>
                <ul class="grid" style="text-decoration: none;">
                  <li class="large"><a href="h.fd"><span  style="background-image: url('img/ktm.jpg');background-size: cover;float: left ; height: 100%; width:100%;"></span></a></li>
                  <li class="large" style="background-image: url('img/la.jpg');"></li>
                  <li class="elarge" style="background-image: url('img/ktm2.jpg');"></li>
                  <li class="small" style="background-image: url('img/10.jpg');"></li>
                  <!-- <li><a href="ab.pj">hi</a></li> -->
                </ul>
           </div>
          </div>


          <div class="container">
            <p id="rec" style="text-align: center;">Visit Nearby:</p>
            <div id="gallery" class="photo-gallery">
                <p> </p>
                <ul class="grid" style="text-decoration: none;">
                  <li class="large" style="background-image: url('img/bkt.jpg');"></li>
                  <li class="large" style="background-image: url('img/la.jpg');"></li>
                  <li class="elarge" style="background-image: url('img/7.jpg');"></li>
                  <li class="small" style="background-image: url('img/10.jpg');"></li>
                  
                </ul>
           </div>
          </div>



          <div class="container">
            <p id="rec" style="text-align: center;">Activities</p>
            <div id="gallery" class="photo-gallery">
                <p> </p>
                <ul class="grid" style="text-decoration: none;">
                  <li class="large" style="background-image: url('img/7.jpg');"></li>
                  <li class="large" style="background-image: url('img/la.jpg');"></li>
                  <li class="elarge" style="background-image: url('img/ktm2.jpg');"></li>
                  <li class="small" style="background-image: url('img/10.jpg');"></li>
                  
                </ul>
           </div>
          </div>



         </div>
         <div id="subscribe">
          <div class="container">
             <h1 class="text1">Save time, save money!</h1>
             <span class="text2">Sign up and we'll send the best deals to you</span><br>
             <form class="sub">
               <input type="email" class="subs" placeholder=" Enter email">
               <button id="subbut" class="btn btn-primary">Subscribe</button>
             </form>
          </div>
           
         </div>
         <div id="footer">
           <div class="container">
             <div id="logos">
              <ul>
                 <li><a href="http://www.facebook.com"><i class="fab fa-facebook-square"></i></a></li>
                 <li><a href="http://www.twitter.com"><i class="fab fa-twitter-square"></i></a></li>
                 <li><a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                 <li><a href="http://www.youtube.com"><i class="fab fa-youtube-square"></i></a></li>
               </ul>
             </div>
           </div>
           <div class="container1">
             <div id="list">
                <ul>
                  <li><a href="#">Company</a></li>
                  <li><a href="#">Jobs</a></li>
                  <li><a href="#">Press</a></li>
                  <li><a href="#">Investor relations</a></li>
                </ul>
             </div>
           </div> 
           <div class="container2">
             <div id="list">
                <ul>
                  <li><a href="#">Help</a></li>
                  <li><a href="#">Explore More</a></li>
                  <li><a href="#">Terms and conditions</a></li>
                  <li><a href="#">Legal information</a></li>
                   <li><a href="#">Privace notice</a></li>
                </ul>
             </div>
           </div> 
         </div>
       </div>
       <div id="end">

          <div class="container">
             <img id="logo" src="img/logo3.png" width="110" height="110">
             <p style="color: white"><i class="far fa-copyright"></i> Copyright 2019 NG Park | All rights reserved. </p>
          </div>
       </div>
          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
         <!--  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 -->    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js">
  
</script>
   <script type="text/javascript">
        var arr=['12','5','8','3'];
        var string="Heloo";//use get element by id here
          // var vals=$('#date').val();

          // $('#hi').change(function()
          // {
          //   var vals2=$('#hi').val();
          //   alert(vals2);
          // }
          // );


        $('#checkava').click(function(){

        $.ajax({
          url:'test.php',
          type:'GET',
          data:{arr:string},
          success: function(){
           window.location.replace("logincheck.php");
            console.log(string);
          }
        });
        });

//         $.ajax({
//     type: "POST",
//     timeout: 50000,
//     url: url
//     data: dataString,
//     success: function (data) {
//         alert('success');
//         return false;
//     }
// });


      </script>
      </body>
  </html>

  <?php
  }
  }
  ?>