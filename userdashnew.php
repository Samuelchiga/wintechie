<?php include 'header2.php' ?>
<?php 
session_start();

      $con = mysqli_connect('localhost', 'root', '', 'sms') or die($mysqli->error);
    $main = $_SESSION['id'];


    $query = "select * from smsdata where id = '".$main."'";

    $result = mysqli_query($con, $query);
    if ($row = mysqli_fetch_assoc($result)) {
      $_SESSION['fname'] = $row['fname'];
      $_SESSION['lname'] = $row['lname'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['gender'] = $row['gender'];
      $_SESSION['pnum'] = $row['pnum'];
    }

    $query = "SELECT count( * ) AS sms FROM contactdata WHERE userid = '".$main."'";
    $result = mysqli_query($con,$query);
    if ($rows = mysqli_fetch_assoc($result)) {
      $_SESSION['totalcontact']= implode($rows);
      //echo ;
      //die();


   
    }    $queryy = "SELECT count( * ) AS sms FROM msglog WHERE userid = '".$main."'";
    $results = mysqli_query($con,$queryy);
    if ($rowss = mysqli_fetch_assoc($results)) {
      $_SESSION['totalmsgsent']= implode($rowss);
      
    
    }

   


    //$row = mysqli_num_row($result);


    //$query = mysqli_query("SELECT * FROM contactdata");
    //$result = mysqli_query($con,$query);
    //$num = mysqli_num_rows($result);
  

    //print_r($result);
    



 ?>

  <!--end of header-->
	<div class="container mt-4 p-7" style=" background-color:  #F3F6F7 ">
	<div class="row pt-4 pb-4">
 <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                      <aside  style="background-color: #052146">
                    <center><a href="userdashnew.php" class="text-center"  style="font-size: 25px;color: white;">Dashboard</a> </center>
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


          <div class="col-md-8 col-lg-8 col-sm-8">
           
              <div class="card-group">

     <div class="card" style="width: 15rem;height:10rem;  ">
  <div class="card-body " id="card-effect">
   <p class="text-center">Number of sms Sent</p>

     <h1 class="text-center"><?php echo $_SESSION['totalmsgsent'] ; ?></h1>  
      
  </div><!--End of card body-->
</div><!--End of card-->

<div class="card" style="width: 15rem; height: 10rem;">
  <div class="card-body" id="card-effect">
   <p class="text-center">Number of contact</p>

     <h1 class="text-center"><?php echo $_SESSION['totalcontact'] ; ?></h1>  
    </div><!--End of card-body-->
</div> <!--End of card--> 

<div class="card" style="width: 15rem; height: 10rem;">
  <div class="card-body" id="card-effect">
  <p class="text-left">Number of Credit Logs</p>

     <h1 class="text-left">0</h1>  

  </div><!--End of card body-->
</div><!--End of card-->
</div><!--End of card-group-->


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
      	.card{
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

  a:hover{
        text-decoration: none;
  }
  a{
    text-decoration: none;
    color:black;
  }
      </style>
            <?php include 'footer.php' ?>
</body>
</html>