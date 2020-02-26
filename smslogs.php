<?php include 'header2.php';
session_start();
$main = $_SESSION['id'];
      require_once('connect.php');
        $recor = mysqli_query($con,"SELECT * FROM msglog WHERE userid = $main"); 

    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        mysqli_query($con,"DELETE FROM msglog WHERE id = $id");
        

         ?>
 
               <script >
                  alert('hello...You have successfully delected a record');
              
                  window.location.href = "smslogs.php?welcome";
               
               </script>";
                <?php
        

      
      //$query = "DELETE FROM contactdata WHERE id = $id";
    }


 ?>


  <!--end of header-->
	<div class="container mt-5" style=" background-color:  #F3F6F7 ">
	<div class="row p-4">
 <div class="col-lg-4">
                  <div class="blog_right_sidebar sticky-top">
                      <aside  style="background-color: #052146">
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
                          <h3 class="widget_title lead"><a href=""><i class="fa fa-credit-card-alt"></i> Buy Credit</a></h3><hr>
                          <h3 class="widget_title lead"> <a href="smslogs.php"><i class="  fa fa-envelope-o"></i> Send Sms Log</a></h3><hr>
                          <h3 class="widget_title lead"><a href="account.php"><i class="fas fa-users"></i> Account Settings</a></h3><hr>
                          <h3 class="widget_title lead"><a href="Homepage.php"><i class=" fa fa-power-off"></i> LOG OUT</a></h3>
                      </aside>
                      <hr>
              </div>
          </div>


          <div class="col-md-8 col-lg-8 col-sm-8">

            <p class="lead text-center" style="background-color:#052146;color: white;font-weight: bold">View Contact </p  >
            
              <div class="card-group ">
                <div class="card-body">
                  <div class="table-responsive">     
                      <table class="table table-bordered table-hover">
                      <thead class="thead-dark"  style="background-color:#052146;color: white;">
                        <tr>
                          <td>S/N</td>
                          <td>Sender ID</td>
                          <td style="width: px;">Message</td>
                          <td style="width: auto;">Recipients</td>
                          <td>Sent Date</td>
                          <td>Sent Time </td>
                          <td >Action</td>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $cnt= $cnt=1;
                             while ($rows = mysqli_fetch_array($recor)) {?>
                            <tr>
                              <td><?php echo $cnt;?>.</td>
                              <td><?php echo $rows['senderid']; ?></td>
                              <td><?php echo $rows['message']; ?></td>
                              <td><?php echo $rows['recipient']; ?></td>
                              <td><?php echo $rows['time']; ?></td>
                              <td><?php echo $rows['date']; ?></td>
                              <td><a href="smslogs.php?delete=<?php echo $rows['id']; ?>" class="btn btn-outline-danger btn-sm"><i class=" fa fa-remove"></i> </a></td>
                            </tr>
                         <?php    $cnt=$cnt+1;}
                            
                         ?>

                       
                      </tbody>
                    </table>
                  </div>

                </div>
    
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