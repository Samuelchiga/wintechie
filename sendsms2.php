










<?php 
session_start();
$_SESSION['id'];
include('connect.php');




 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
</head>

<script type="text/javascript"></script>

   <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap-3.3.7/dist/css/bootstrap.css">
<script type="text/javascript"></script>


<body>
  <div class="container" style="background:#f9fbfc; ">
    <header>
      <nav id="ken" class="navbar navbar-expand-md sticky-top">
        
        <div class="container-fluid">
          <a href="#" class="navbar-brand"><span style="font-weight: bold;
            font-family: Brush Script MT,Segoe Print;
              font-size: 35px;border-radius: 50px; background-color: pink">SMS<span/></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarresponsive" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarresponsive">
            <ul id="bar" class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="HowItWork.php" class="btn ">How it works</a>
              </li>
              <li class="nav-item">
                <a href="ContactUs.php" class="btn ">contact Us</a>
              </li>
              
              <li class="nav-item"> 
                <a href="Pricing.php" class="btn ">Pricing</a>
              </li>
                  <li class="nav-item">
                <a href="AboutUs.php" class="btn ">About Us</a>
              </li> 
                <li class="nav-item">
                <a href="PrivacyPolicy.php" class="btn ">Privacy Policy</a>
              </li>
            </ul>
          </div>
        
        </div>
      </nav></header>


    <style type="text/css">
      .btn:hover{
      background-color:white;
      
    }
    #ken{
      background-color:#052146;

    }
      #bar li{
      
      margin-right: 30px;
    }
    #bar li a{
      color: white;
    }
    #bar li a:hover{
      color: black;
      background-color: white;
    }
    </style>

    

 <div class="container mt-2" id="container">
	<div class="row">
 <div class=" col-lg-4 col-md-12 col-sm-12 col-xm-12">
                  <div class="blog_right_sidebar mt-5">
                      <aside style="background-color: #052146">
                <center><a href="userdashnew.php" class="text-center" style="font-size: 25px;color: white;text-align: center">Dashboard</a></center>
                          <!-- /input-group -->
                          <hr>
                      </aside>
                      <aside class=" author_widget">
                          <h4>Welcome <small style="text-transform: capitalize;"><?php echo $_SESSION['fname'].'&nbsp'. $_SESSION['lname']; ?></small></h4>
                          <hr>
                      </aside>
                      <aside class="">
                          <h3 class="widget_title lead"> <a href="sendsms2.php" ><i class="fa fa-comment-o"></i> Send SMS</a></h3><hr>
                          <h3 class="widget_title lead"><a href="contactbook.php"><i class="fa fa-vcard-o"></i> Contact Book</a></h3><hr>
                          <h3 class="widget_title lead"><a href=""><i class="fa fa-credit-card-alt"></i> Buy Credit</a></h3><hr>
                          <h3 class="widget_title lead"> <a href="smslogs.php"><i class="  fa fa-envelope-o"></i> Send Sms Log</a></h3><hr>
                          <h3 class="widget_title lead"><a href="account.php"><i class="fas fa-users"></i> Account Settings</a></h3><hr>
                          <h3 class="widget_title lead"><a href="Homepage.php"><i class=" fa fa-power-off"></i> LOG OUT</a></h3>
                      </aside>
                      <hr>
              </div>
          </div>


          <div class="col-lg-7 col-md-12 col-sm-12 col-xm-12">
            
            

              
  <form method="POST" action="sendsms2.inc.php" class="form group card-group mt-5 m-2" id="form" style="padding: 25px; background-color:white;width:auto ; border-radius: 10px;" > 
    <div class="container-fluid m-0">
      <p class="lead pl-5 mt-" style="margin-bottom: 0px; font-size: 17px;font-weight: bold";>Sender id</p>
  <input type="text" name="enterid" class="form-control ml-5" style="width: 201px" placeholder="Enter id" required="">


        <p class="lead pl-5 mt-3" style="font-size: 17px;font-weight: bold;margin-bottom: 0px">Recipients</p>
  <textarea required="true" class="form-control ml-5 mb-1" name="recipient" id="textarea" cols="34" rows="5" style="padding: 10px" placeholder="Enter Number(s)" readonly="true"><?php 
      if(isset($_SESSION['selected']) ) {
        foreach ($_SESSION['selected'] as $user) {
          echo $user["fnum"].",\n";
        }
      } else{ echo "";}
    ?>
  </textarea>


    <p class="lead pl-5 mt-3" style="font-size: 17px;font-weight: bold;margin-bottom: 0px">Message</p>
  <textarea class="form-control ml-5 mb-1 msg" name="message" onkeyup="countChar(this)" id="textarea" cols="34" rows="5" style=" padding: 10px;" placeholder="Enter Message" required=""><?php echo "Hi __NAME__,\n\n"; ?></textarea>
  
  <div class="pl-5" style="display: ;"><span class="mr-1" id="feed"> </span><span class="font-weight-bold">Characters entered</span>
  <p>paragraph <span id="para"></span></p></div>
    
  </textarea>

  <input type="hidden" name="userid" value="<?php echo $_SESSION['id']; ?>">

  <button type="submit" class="btn-btn-primary ml-5 mb-2 p-2" id="btn" name="send" style="background-color:#052146;color: white;width: 80px ">Send</button>
</div>
                </form>

     


</div><!--End of col-md-9-->
      </div>

</div>
      <style>
      	 @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700');
@import url('https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700');
body{
  background-color: #fafaff;
}
      	.card-group{
  box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2);
}#card-effect:hover {
    z-index: 3;
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05); 
}
    #card-effect:hover:after {
      opacity: 1;
      visibility: visible; 
  }
    #card-effect:hover .work-text {
      -webkit-transition-delay: .2s;
      -o-transition-delay: .2s;
      transition-delay: .2s;
      opacity: 1;
      visibility: visible;
      margin-top: 0px; 
  }
  .blog_right_sidebar{
    border:1px solid #eeeeee;
    background:#fafaff;
    padding:30px
  }

  .blog_right_sidebar .widget_title{
    font-size:15px;
    text-align:left;
    padding:2px 0px;
    margin-bottom:10px;
  }
  .blog_right_sidebar .author_widget{
    text-align:center
  }
  .blog_right_sidebar .author_widget h4{
    font-size:18px;
    line-height:20px;
    color:#222;
    margin-bottom:5px;
    margin-top:30px
  }
  .form-group{
  
  }

  a:hover{
        text-decoration: none;
  }
 
  a{
    text-decoration: none;
    color:black;
  }
  #container{
     background-color:  #F3F6F7		;
}




@media(max-width: 800px){
   #textarea{
   position: relative;
   height: 100px;
   width: 300px;


   }

  }



      </style>
      <script type="text/javascript">
        $('#btn').ready(function(){
        //$('.msg').prepend('Hi');
       // $('.msg').caret(100);

        });

     $('.msg').keyup(function(){
        var count = $('.msg').val().length;

          $('#feed').html(count);
          if (count<160) {

          $('#para').html(1);
           }

        if (count>=160) {

          $('#para').html(2);
           }
          if(count>=220){
            $('#para').html(3);
          }

            if(count>=380){
            $('#para').html(4);
          }

            if(count>=500){
            $('#para').html(5);
          }
     
        



     });
      </script>

  	<?php 

  			include 'footer.php';
  	 ?>
</body>
</html>