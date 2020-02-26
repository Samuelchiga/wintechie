<?php include 'header2.php'; 
session_start();
$_SESSION['id'];

?>

  <!--end of header-->
	<div class="container mt-5" id="container">
	<div class="row">
 <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                      <aside style="background-color: #052146">
                       <center><a href="userdashnew.php" class="text-center" style="font-size: 25px;color: white;">Dashboard</a></center>
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
                          <h3 class="widget_title lead"><a href="#"><i class="fa fa-credit-card-alt"></i> Buy Credit</a></h3><hr>
                          <h3 class="widget_title lead"> <a href="smslogs.php"><i class="  fa fa-envelope-o"></i> Send Sms Log</a></h3><hr>
                          <h3 class="widget_title lead"><a href="account.php"><i class="fas fa-users"></i> Account Settings</a></h3><hr>
                          <h3 class="widget_title lead"><a href="Homepage.php"><i class=" fa fa-power-off"></i> LOG OUT</a></h3>
                      </aside>
                      <hr>
              </div>
          </div>


          <div class="col-md-8 col-lg-8 col-sm-8">
            
              <div class="card-group">

     <div class="card" style="width: 10rem;height:10rem;  ">
  <div class="card-body " id="card-effect">
 <center>  <p class="text-center lead">View Contact</p>

     <a href="viewcontact.php" class="btn" style="color: white;background-color:#052146 " name="submit"> View</a> </center>
  </div><!--End of card body-->
</div><!--End of card-->

<div class="card" style="width: 10rem; height: 10rem;">
  <div class="card-body" id="card-effect">
   <p class="text-center lead">Add Contact</p>

   <center>  <a  class="btn btn-info" style="color: white;background-color:#052146" data-toggle="modal" data-target="#myModal" name="submit"> Add</a></center>

<!--Beginning of modal-->
   
   </div>
   <div class="modal fade" id="myModal" style="border-radius: 10px">
     <div class="modal-dialog">
       <div class="modal-content">
         
         <div style="background-color: #052146"><button type="button" class="close pr-3 text-white" data-dismiss="modal" style="color: white">&times;</button><h4 class="modal-title text-white mt-2 pl-3" >ADD CONTACT</h4>
         </div>
          <div class="modal-body">
        <form class="form-group" method="POST" action="contact.inc.php">

          <span id="mod">First Name</span>
          <input class="form-control "type="text" name="fname" required="">
             <span id="mod">Last Name</span>
          <input class="form-control "type="text" name="lname" required="">
             <span id="mod">Gender</span>
          <select class="form-control" name="gender" required="">
            <option value="" >Gender</option>
             <option value="Male">Male</option>
              <option value="Female">Female</option>
            
          </select>
          <span id="mod">Phone Number</span>
            <input class="form-control "type="number" name="pnum" required="">

            <input type="hidden" name="userid" value="<?php echo $_SESSION['id']; ?>">

            <button id="m" name="enter" class="btn ml-5 mt-2" type="submit" style="color: white;background-color:#052146 "  >ADD</button>
             
        </form>   


       </div>
       </div>
       <!--modal body-->
      
     </div>
    </div><!--End of card-body-->

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
        background-color: lightblue;
        color: black;
  }
  a{
    text-decoration: none;
    color:black;
  }
  #mod{
    margin-top: 10px;
    padding-left: 48px;
    font-weight: bold;

  }
  #container{
    background-color: #F3F6F7;
     padding: 20px 10px;
  }
      </style>
       <?php include 'footer.php' ?>
</body>
</html>