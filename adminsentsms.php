<?php

 include 'header2.php' ;
 require_once('connect.php');

     $query = "SELECT count( * ) AS sms FROM msglog";
    $result = mysqli_query($con,$query);
    if ($row = mysqli_fetch_assoc($result)) {
      $_SESSION['totalmsgsent']= implode($row);
     // echo $_SESSION['totalmsgsent'];
      //die();
      
    
    }
    $query = "SELECT count( * ) AS sms FROM contactdata";
    $result = mysqli_query($con,$query);
    if ($rows = mysqli_fetch_assoc($result)) {
      $_SESSION['totalcontact']= implode($rows);
      //echo $_SESSION['totalcontact'];
      //die();

    }

    $records = mysqli_query($con,"SELECT * FROM msglog"); 






?>
  <!--end of header-->
  <div class="container mt-5" id="container">
  <div class="row">
 <div class="col-lg-4">
                  <div class="blog_right_sidebar  sticky-top">
                      <aside  style="background-color: #052146">
                    <center><a href="userdashnew.php" class="text-center" style="font-size: 25px;color: white;">Dashboard</a></center>
                          <!-- /input-group -->
                          <hr>
                      </aside>
                      <aside class=" author_widget">
                          <h4>Welcome <small>Klye Walker</small></h4>
                          <hr>
                      </aside>
                      <aside class="">
                          <h3 class="widget_title lead"> <a href="adminsentsms.php" ><i class="fa fa-comment-o"></i>View Sent SMS</a></h3><hr>
                          <h3 class="widget_title lead"><a href="admindash.php"><i class="fa fa-vcard-o"></i>View Contact</a></h3><hr>
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

     <h1 class="text-center"><?php echo $_SESSION['totalmsgsent']; ?></h1>  
      
  </div><!--End of card body-->
</div><!--End of card-->

<div class="card" style="width: 15rem; height: 10rem;">
  <div class="card-body" id="card-effect">
   <p class="text-center">Number of contact</p>

     <h1 class="text-center"><?php  echo $_SESSION['totalcontact']; ?></h1>  
    </div><!--End of card-body-->
</div> <!--End of card--> 

<div class="card" style="width: 15rem; height: 10rem;">
  <div class="card-body" id="card-effect">
  <p class="text-left">Number of Credit Logs</p>

     <h1 class="text-left">20</h1>  

  </div><!--End of card body-->
</div><!--End of card-->
</div><!--End of card-group-->


<p class="lead text-center mt-5" style="background-color:#052146;color: white;font-weight: bold">Users Sent Message</p  >
            
              <div class="card-group">
                <div class="card-body">
                  <div class="table-responsive">
                    <form class="form-group">      
                      <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <td><h6>S/N</h6></td>
                          <td><h6>SenderID</h6></td>
                          <td><h6>Recipient</h6></td>
                          <td><h6>Messager</h6></td>
                          <td><h6>Action</h6></td>
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        while ($row = mysqli_fetch_array($records)) {?>
                          
                            <tr>
                              <td><?php echo $row['id']; ?></td>
                              <td><?php echo $row['senderid']; ?></td>
                              <td><?php echo $row['recipient']; ?></td>
                              <td><?php echo $row['message']; ?></td>
                              <td><button class="btn btn-outline-danger">delete</button></td>
                              
                              
                            </tr>
                         <?php } ?>
                       <!-- 
                        <tr>
                          <td>1</td>
                          <td>Ademuyiwa</td>
                          <td>AdeJare</td>
                          <td>Male</td>
                          <td>08182888927</td>
                          <td><input type="checkbox" name="#" class="form-check-input ml-5"></td>
                        </tr>-->

                      </tbody>

                    </form>

                    </table>
                  </div>

                </div>


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
  #container{
    background-color: #F3F6F7;
    padding: 20px 0px;
  }
  h3 a{
    text-decoration: none;
    list-style: none;
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